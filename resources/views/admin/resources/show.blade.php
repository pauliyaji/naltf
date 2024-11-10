@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.resource.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.resources.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.resource.fields.id') }}
                        </th>
                        <td>
                            {{ $resource->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.resource.fields.title') }}
                        </th>
                        <td>
                            {{ $resource->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.resource.fields.slug') }}
                        </th>
                        <td>
                            {{ $resource->slug }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.resource.fields.category') }}
                        </th>
                        <td>
                            {{ $resource->category->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.resource.fields.user') }}
                        </th>
                        <td>
                            {{ $resource->user->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.resource.fields.authors') }}
                        </th>
                        <td>
                            {{ $resource->authors }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.resource.fields.authors_affiliation') }}
                        </th>
                        <td>
                            {{ $resource->authors_affiliation }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.resource.fields.publisher') }}
                        </th>
                        <td>
                            {{ $resource->publisher }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.resource.fields.date_of_publication') }}
                        </th>
                        <td>
                            {{ $resource->date_of_publication }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.resource.fields.year_of_publication') }}
                        </th>
                        <td>
                            {{ $resource->year_of_publication }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.resource.fields.issn_isbn_doi') }}
                        </th>
                        <td>
                            {{ $resource->issn_isbn_doi }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.resource.fields.edition') }}
                        </th>
                        <td>
                            {{ $resource->edition }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.resource.fields.volume') }}
                        </th>
                        <td>
                            {{ $resource->volume }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.resource.fields.issue') }}
                        </th>
                        <td>
                            {{ $resource->issue }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.resource.fields.abstract') }}
                        </th>
                        <td>
                            {!! $resource->abstract !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.resource.fields.references') }}
                        </th>
                        <td>
                            {!! $resource->references !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.resource.fields.tags') }}
                        </th>
                        <td>
                            {{ $resource->tags }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.resource.fields.pages') }}
                        </th>
                        <td>
                            {{ $resource->pages }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.resource.fields.cover_image') }}
                        </th>
                        <td>
                            @if($resource->cover_image)
                                <a href="{{ $resource->cover_image->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $resource->cover_image->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.resource.fields.file') }}
                        </th>
                        <td>
                            @if($resource->file)
                                <a href="{{ $resource->file->getUrl() }}" target="_blank">
                                    {{ trans('global.view_file') }}
                                </a>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.resources.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection