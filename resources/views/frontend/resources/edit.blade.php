@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.edit') }} {{ trans('cruds.resource.title_singular') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route("frontend.resources.update", [$resource->id]) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label class="required" for="title">{{ trans('cruds.resource.fields.title') }}</label>
                            <input class="form-control" type="text" name="title" id="title" value="{{ old('title', $resource->title) }}" required>
                            @if($errors->has('title'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('title') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.resource.fields.title_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="slug">{{ trans('cruds.resource.fields.slug') }}</label>
                            <input class="form-control" type="text" name="slug" id="slug" value="{{ old('slug', $resource->slug) }}" required>
                            @if($errors->has('slug'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('slug') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.resource.fields.slug_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="category_id">{{ trans('cruds.resource.fields.category') }}</label>
                            <select class="form-control select2" name="category_id" id="category_id" required>
                                @foreach($categories as $id => $entry)
                                    <option value="{{ $id }}" {{ (old('category_id') ? old('category_id') : $resource->category->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('category'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('category') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.resource.fields.category_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="user_id">{{ trans('cruds.resource.fields.user') }}</label>
                            <select class="form-control select2" name="user_id" id="user_id" required>
                                @foreach($users as $id => $entry)
                                    <option value="{{ $id }}" {{ (old('user_id') ? old('user_id') : $resource->user->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('user'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('user') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.resource.fields.user_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="authors">{{ trans('cruds.resource.fields.authors') }}</label>
                            <input class="form-control" type="text" name="authors" id="authors" value="{{ old('authors', $resource->authors) }}" required>
                            @if($errors->has('authors'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('authors') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.resource.fields.authors_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="authors_affiliation">{{ trans('cruds.resource.fields.authors_affiliation') }}</label>
                            <input class="form-control" type="text" name="authors_affiliation" id="authors_affiliation" value="{{ old('authors_affiliation', $resource->authors_affiliation) }}">
                            @if($errors->has('authors_affiliation'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('authors_affiliation') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.resource.fields.authors_affiliation_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="publisher">{{ trans('cruds.resource.fields.publisher') }}</label>
                            <input class="form-control" type="text" name="publisher" id="publisher" value="{{ old('publisher', $resource->publisher) }}">
                            @if($errors->has('publisher'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('publisher') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.resource.fields.publisher_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="date_of_publication">{{ trans('cruds.resource.fields.date_of_publication') }}</label>
                            <input class="form-control date" type="text" name="date_of_publication" id="date_of_publication" value="{{ old('date_of_publication', $resource->date_of_publication) }}">
                            @if($errors->has('date_of_publication'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('date_of_publication') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.resource.fields.date_of_publication_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="year_of_publication">{{ trans('cruds.resource.fields.year_of_publication') }}</label>
                            <input class="form-control" type="text" name="year_of_publication" id="year_of_publication" value="{{ old('year_of_publication', $resource->year_of_publication) }}">
                            @if($errors->has('year_of_publication'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('year_of_publication') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.resource.fields.year_of_publication_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="issn_isbn_doi">{{ trans('cruds.resource.fields.issn_isbn_doi') }}</label>
                            <input class="form-control" type="text" name="issn_isbn_doi" id="issn_isbn_doi" value="{{ old('issn_isbn_doi', $resource->issn_isbn_doi) }}">
                            @if($errors->has('issn_isbn_doi'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('issn_isbn_doi') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.resource.fields.issn_isbn_doi_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="edition">{{ trans('cruds.resource.fields.edition') }}</label>
                            <input class="form-control" type="text" name="edition" id="edition" value="{{ old('edition', $resource->edition) }}">
                            @if($errors->has('edition'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('edition') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.resource.fields.edition_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="volume">{{ trans('cruds.resource.fields.volume') }}</label>
                            <input class="form-control" type="text" name="volume" id="volume" value="{{ old('volume', $resource->volume) }}">
                            @if($errors->has('volume'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('volume') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.resource.fields.volume_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="issue">{{ trans('cruds.resource.fields.issue') }}</label>
                            <input class="form-control" type="text" name="issue" id="issue" value="{{ old('issue', $resource->issue) }}">
                            @if($errors->has('issue'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('issue') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.resource.fields.issue_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="abstract">{{ trans('cruds.resource.fields.abstract') }}</label>
                            <textarea class="form-control ckeditor" name="abstract" id="abstract">{!! old('abstract', $resource->abstract) !!}</textarea>
                            @if($errors->has('abstract'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('abstract') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.resource.fields.abstract_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="references">{{ trans('cruds.resource.fields.references') }}</label>
                            <textarea class="form-control ckeditor" name="references" id="references">{!! old('references', $resource->references) !!}</textarea>
                            @if($errors->has('references'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('references') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.resource.fields.references_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="tags">{{ trans('cruds.resource.fields.tags') }}</label>
                            <input class="form-control" type="text" name="tags" id="tags" value="{{ old('tags', $resource->tags) }}" required>
                            @if($errors->has('tags'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('tags') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.resource.fields.tags_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="pages">{{ trans('cruds.resource.fields.pages') }}</label>
                            <input class="form-control" type="text" name="pages" id="pages" value="{{ old('pages', $resource->pages) }}" required>
                            @if($errors->has('pages'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('pages') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.resource.fields.pages_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="cover_image">{{ trans('cruds.resource.fields.cover_image') }}</label>
                            <div class="needsclick dropzone" id="cover_image-dropzone">
                            </div>
                            @if($errors->has('cover_image'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('cover_image') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.resource.fields.cover_image_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="file">{{ trans('cruds.resource.fields.file') }}</label>
                            <div class="needsclick dropzone" id="file-dropzone">
                            </div>
                            @if($errors->has('file'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('file') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.resource.fields.file_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-danger" type="submit">
                                {{ trans('global.save') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $(document).ready(function () {
  function SimpleUploadAdapter(editor) {
    editor.plugins.get('FileRepository').createUploadAdapter = function(loader) {
      return {
        upload: function() {
          return loader.file
            .then(function (file) {
              return new Promise(function(resolve, reject) {
                // Init request
                var xhr = new XMLHttpRequest();
                xhr.open('POST', '{{ route('frontend.resources.storeCKEditorImages') }}', true);
                xhr.setRequestHeader('x-csrf-token', window._token);
                xhr.setRequestHeader('Accept', 'application/json');
                xhr.responseType = 'json';

                // Init listeners
                var genericErrorText = `Couldn't upload file: ${ file.name }.`;
                xhr.addEventListener('error', function() { reject(genericErrorText) });
                xhr.addEventListener('abort', function() { reject() });
                xhr.addEventListener('load', function() {
                  var response = xhr.response;

                  if (!response || xhr.status !== 201) {
                    return reject(response && response.message ? `${genericErrorText}\n${xhr.status} ${response.message}` : `${genericErrorText}\n ${xhr.status} ${xhr.statusText}`);
                  }

                  $('form').append('<input type="hidden" name="ck-media[]" value="' + response.id + '">');

                  resolve({ default: response.url });
                });

                if (xhr.upload) {
                  xhr.upload.addEventListener('progress', function(e) {
                    if (e.lengthComputable) {
                      loader.uploadTotal = e.total;
                      loader.uploaded = e.loaded;
                    }
                  });
                }

                // Send request
                var data = new FormData();
                data.append('upload', file);
                data.append('crud_id', '{{ $resource->id ?? 0 }}');
                xhr.send(data);
              });
            })
        }
      };
    }
  }

  var allEditors = document.querySelectorAll('.ckeditor');
  for (var i = 0; i < allEditors.length; ++i) {
    ClassicEditor.create(
      allEditors[i], {
        extraPlugins: [SimpleUploadAdapter]
      }
    );
  }
});
</script>

<script>
    Dropzone.options.coverImageDropzone = {
    url: '{{ route('frontend.resources.storeMedia') }}',
    maxFilesize: 2, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').find('input[name="cover_image"]').remove()
      $('form').append('<input type="hidden" name="cover_image" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="cover_image"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($resource) && $resource->cover_image)
      var file = {!! json_encode($resource->cover_image) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="cover_image" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
    error: function (file, response) {
        if ($.type(response) === 'string') {
            var message = response //dropzone sends it's own error messages in string
        } else {
            var message = response.errors.file
        }
        file.previewElement.classList.add('dz-error')
        _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
        _results = []
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i]
            _results.push(node.textContent = message)
        }

        return _results
    }
}

</script>
<script>
    Dropzone.options.fileDropzone = {
    url: '{{ route('frontend.resources.storeMedia') }}',
    maxFilesize: 2, // MB
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2
    },
    success: function (file, response) {
      $('form').find('input[name="file"]').remove()
      $('form').append('<input type="hidden" name="file" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="file"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($resource) && $resource->file)
      var file = {!! json_encode($resource->file) !!}
          this.options.addedfile.call(this, file)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="file" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
     error: function (file, response) {
         if ($.type(response) === 'string') {
             var message = response //dropzone sends it's own error messages in string
         } else {
             var message = response.errors.file
         }
         file.previewElement.classList.add('dz-error')
         _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
         _results = []
         for (_i = 0, _len = _ref.length; _i < _len; _i++) {
             node = _ref[_i]
             _results.push(node.textContent = message)
         }

         return _results
     }
}
</script>
@endsection