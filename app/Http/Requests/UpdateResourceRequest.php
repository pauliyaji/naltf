<?php

namespace App\Http\Requests;

use App\Models\Resource;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateResourceRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('resource_edit');
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                'min:3',
                'max:250',
                'required',
            ],
            'slug' => [
                'string',
                'min:3',
                'max:250',
                'required',
            ],
            'category_id' => [
                'required',
                'integer',
            ],
            'user_id' => [
                'required',
                'integer',
            ],
            'authors' => [
                'string',
                'min:3',
                'max:250',
                'required',
            ],
            'authors_affiliation' => [
                'string',
                'min:3',
                'max:250',
                'nullable',
            ],
            'publisher' => [
                'string',
                'min:3',
                'max:250',
                'nullable',
            ],
            'date_of_publication' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'year_of_publication' => [
                'string',
                'min:4',
                'max:4',
                'nullable',
            ],
            'issn_isbn_doi' => [
                'string',
                'min:1',
                'max:191',
                'nullable',
            ],
            'edition' => [
                'string',
                'min:1',
                'max:250',
                'nullable',
            ],
            'volume' => [
                'string',
                'nullable',
            ],
            'issue' => [
                'string',
                'nullable',
            ],
            'tags' => [
                'string',
                'required',
            ],
            'pages' => [
                'string',
                'min:1',
                'max:10000',
                'required',
            ],
            'file' => [
                'required',
            ],
        ];
    }
}
