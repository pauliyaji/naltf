<?php

namespace App\Models;

use App\Traits\Auditable;
use Carbon\Carbon;
use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Resource extends Model implements HasMedia
{
    use SoftDeletes, InteractsWithMedia, Auditable, HasFactory;

    public $table = 'resources';

    protected $appends = [
        'cover_image',
        'file',
    ];

    protected $dates = [
        'date_of_publication',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public static $searchable = [
        'title',
        'slug',
        'authors',
        'authors_affiliation',
        'publisher',
        'date_of_publication',
        'year_of_publication',
        'issn_isbn_doi',
        'edition',
        'volume',
        'issue',
        'abstract',
        'references',
        'tags',
        'file',
    ];

    protected $fillable = [
        'title',
        'slug',
        'category_id',
        'user_id',
        'authors',
        'authors_affiliation',
        'publisher',
        'date_of_publication',
        'year_of_publication',
        'issn_isbn_doi',
        'edition',
        'volume',
        'issue',
        'abstract',
        'references',
        'tags',
        'pages',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public static function boot()
    {
        parent::boot();
        self::observe(new \App\Observers\ResourceActionObserver);
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')->fit('crop', 50, 50);
        $this->addMediaConversion('preview')->fit('crop', 120, 120);
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getDateOfPublicationAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setDateOfPublicationAttribute($value)
    {
        $this->attributes['date_of_publication'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getCoverImageAttribute()
    {
        $file = $this->getMedia('cover_image')->last();
        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
            $file->preview   = $file->getUrl('preview');
        }

        return $file;
    }

    public function getFileAttribute()
    {
        return $this->getMedia('file')->last();
    }
}
