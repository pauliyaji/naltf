<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreResourceRequest;
use App\Http\Requests\UpdateResourceRequest;
use App\Http\Resources\Admin\ResourceResource;
use App\Models\Resource;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ResourceApiController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('resource_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ResourceResource(Resource::with(['category', 'user'])->get());
    }

    public function store(StoreResourceRequest $request)
    {
        $resource = Resource::create($request->all());

        if ($request->input('cover_image', false)) {
            $resource->addMedia(storage_path('tmp/uploads/' . basename($request->input('cover_image'))))->toMediaCollection('cover_image');
        }

        if ($request->input('file', false)) {
            $resource->addMedia(storage_path('tmp/uploads/' . basename($request->input('file'))))->toMediaCollection('file');
        }

        return (new ResourceResource($resource))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Resource $resource)
    {
        abort_if(Gate::denies('resource_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ResourceResource($resource->load(['category', 'user']));
    }

    public function update(UpdateResourceRequest $request, Resource $resource)
    {
        $resource->update($request->all());

        if ($request->input('cover_image', false)) {
            if (! $resource->cover_image || $request->input('cover_image') !== $resource->cover_image->file_name) {
                if ($resource->cover_image) {
                    $resource->cover_image->delete();
                }
                $resource->addMedia(storage_path('tmp/uploads/' . basename($request->input('cover_image'))))->toMediaCollection('cover_image');
            }
        } elseif ($resource->cover_image) {
            $resource->cover_image->delete();
        }

        if ($request->input('file', false)) {
            if (! $resource->file || $request->input('file') !== $resource->file->file_name) {
                if ($resource->file) {
                    $resource->file->delete();
                }
                $resource->addMedia(storage_path('tmp/uploads/' . basename($request->input('file'))))->toMediaCollection('file');
            }
        } elseif ($resource->file) {
            $resource->file->delete();
        }

        return (new ResourceResource($resource))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Resource $resource)
    {
        abort_if(Gate::denies('resource_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $resource->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
