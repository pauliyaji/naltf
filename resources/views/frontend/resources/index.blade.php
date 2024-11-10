@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @can('resource_create')
                <div style="margin-bottom: 10px;" class="row">
                    <div class="col-lg-12">
                        <a class="btn btn-success" href="{{ route('frontend.resources.create') }}">
                            {{ trans('global.add') }} {{ trans('cruds.resource.title_singular') }}
                        </a>
                        <button class="btn btn-warning" data-toggle="modal" data-target="#csvImportModal">
                            {{ trans('global.app_csvImport') }}
                        </button>
                        @include('csvImport.modal', ['model' => 'Resource', 'route' => 'admin.resources.parseCsvImport'])
                    </div>
                </div>
            @endcan
            <div class="card">
                <div class="card-header">
                    {{ trans('cruds.resource.title_singular') }} {{ trans('global.list') }}
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class=" table table-bordered table-striped table-hover datatable datatable-Resource">
                            <thead>
                                <tr>
                                    <th>
                                        {{ trans('cruds.resource.fields.id') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.resource.fields.title') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.resource.fields.slug') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.resource.fields.category') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.resource.fields.user') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.resource.fields.authors') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.resource.fields.authors_affiliation') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.resource.fields.publisher') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.resource.fields.date_of_publication') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.resource.fields.year_of_publication') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.resource.fields.issn_isbn_doi') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.resource.fields.edition') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.resource.fields.volume') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.resource.fields.issue') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.resource.fields.tags') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.resource.fields.pages') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.resource.fields.cover_image') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.resource.fields.file') }}
                                    </th>
                                    <th>
                                        &nbsp;
                                    </th>
                                </tr>
                                <tr>
                                    <td>
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                        <select class="search">
                                            <option value>{{ trans('global.all') }}</option>
                                            @foreach($categories as $key => $item)
                                                <option value="{{ $item->name }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select class="search">
                                            <option value>{{ trans('global.all') }}</option>
                                            @foreach($users as $key => $item)
                                                <option value="{{ $item->name }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                        <input class="search" type="text" placeholder="{{ trans('global.search') }}">
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($resources as $key => $resource)
                                    <tr data-entry-id="{{ $resource->id }}">
                                        <td>
                                            {{ $resource->id ?? '' }}
                                        </td>
                                        <td>
                                            {{ $resource->title ?? '' }}
                                        </td>
                                        <td>
                                            {{ $resource->slug ?? '' }}
                                        </td>
                                        <td>
                                            {{ $resource->category->name ?? '' }}
                                        </td>
                                        <td>
                                            {{ $resource->user->name ?? '' }}
                                        </td>
                                        <td>
                                            {{ $resource->authors ?? '' }}
                                        </td>
                                        <td>
                                            {{ $resource->authors_affiliation ?? '' }}
                                        </td>
                                        <td>
                                            {{ $resource->publisher ?? '' }}
                                        </td>
                                        <td>
                                            {{ $resource->date_of_publication ?? '' }}
                                        </td>
                                        <td>
                                            {{ $resource->year_of_publication ?? '' }}
                                        </td>
                                        <td>
                                            {{ $resource->issn_isbn_doi ?? '' }}
                                        </td>
                                        <td>
                                            {{ $resource->edition ?? '' }}
                                        </td>
                                        <td>
                                            {{ $resource->volume ?? '' }}
                                        </td>
                                        <td>
                                            {{ $resource->issue ?? '' }}
                                        </td>
                                        <td>
                                            {{ $resource->tags ?? '' }}
                                        </td>
                                        <td>
                                            {{ $resource->pages ?? '' }}
                                        </td>
                                        <td>
                                            @if($resource->cover_image)
                                                <a href="{{ $resource->cover_image->getUrl() }}" target="_blank" style="display: inline-block">
                                                    <img src="{{ $resource->cover_image->getUrl('thumb') }}">
                                                </a>
                                            @endif
                                        </td>
                                        <td>
                                            @if($resource->file)
                                                <a href="{{ $resource->file->getUrl() }}" target="_blank">
                                                    {{ trans('global.view_file') }}
                                                </a>
                                            @endif
                                        </td>
                                        <td>
                                            @can('resource_show')
                                                <a class="btn btn-xs btn-primary" href="{{ route('frontend.resources.show', $resource->id) }}">
                                                    {{ trans('global.view') }}
                                                </a>
                                            @endcan

                                            @can('resource_edit')
                                                <a class="btn btn-xs btn-info" href="{{ route('frontend.resources.edit', $resource->id) }}">
                                                    {{ trans('global.edit') }}
                                                </a>
                                            @endcan

                                            @can('resource_delete')
                                                <form action="{{ route('frontend.resources.destroy', $resource->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                                </form>
                                            @endcan

                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('resource_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('frontend.resources.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-Resource:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
let visibleColumnsIndexes = null;
$('.datatable thead').on('input', '.search', function () {
      let strict = $(this).attr('strict') || false
      let value = strict && this.value ? "^" + this.value + "$" : this.value

      let index = $(this).parent().index()
      if (visibleColumnsIndexes !== null) {
        index = visibleColumnsIndexes[index]
      }

      table
        .column(index)
        .search(value, strict)
        .draw()
  });
table.on('column-visibility.dt', function(e, settings, column, state) {
      visibleColumnsIndexes = []
      table.columns(":visible").every(function(colIdx) {
          visibleColumnsIndexes.push(colIdx);
      });
  })
})

</script>
@endsection