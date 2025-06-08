@extends('nav.back.layout')
@section('body')
<div class="main-content-inner">
    <div class="row">
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">{{ $subsubmenu.' '.$submenu}}</h4>
                    @if ($subsubmenu=='add')
                        <form action="/admdashboard/services-details/add" method="post" enctype="multipart/form-data">
                    @else
                        <form action="/admdashboard/services-details/{{ $serviceDetail->id }}" method="post" enctype="multipart/form-data">
                        @method('patch')    
                    @endif
                        @csrf
                        @php
                            $defaultUrl = $serviceDetail->url ?? ''; 
                            $defaultLabel = $defaultUrl ? basename($defaultUrl) : 'Upload Photo';
                        @endphp
                        @if(isset($serviceDetail))
                            <input type="hidden" name="oldURL" value="{{ $serviceDetail->url }}">
                        @endif
                        <div class="custom-file">
                            <input class="custom-file-input"
                            type="file"
                            id="inputGroupFile01"
                            name="url"
                            data-default-src="{{ $defaultUrl ? asset('storage/' . $defaultUrl) : '' }}"
                            data-default-label="{{ $defaultLabel }}">
                            <label for="url" class="custom-file-label">{{ old('url') ? basename(old('url')) : $defaultLabel }}</label>
                            @error('url')
                                <div class="alert alert-danger" role="alert">
                                    <strong>Oh snap!</strong> {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div id="image-preview" class="mb-3">
                            @if($defaultUrl)
                                <img src="{{ asset('storage/' . $defaultUrl) }}" alt="Current Photo" class="img-thumbnail" style="max-height: 150px;">
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-form-label">Name of Service</label>
                            <input class="form-control" type="text" placeholder="MiniQ" id="name" name="name" value="{{ old('name',$serviceDetail->name ?? '') }}" autofocus required>
                            @error('name')
                                <div class="alert alert-danger" role="alert">
                                    <strong>Oh snap!</strong> {{ $message }}
                                </div>
                            @enderror
                        </div> 
                        <div class="form-group">
                            <label for="service_id" class="col-form-label">Category</label>
                            <select class="form-control"id="service_id" name="service_id"  required>
                                <option>Select</option>
                                @foreach ($services as $service)
                                    <option value="{{ $service->id }}" @selected(isset($serviceDetail) && $serviceDetail->service_id==$service->id)>{{ $service->name }}</option>
                                @endforeach
                            </select>
                            @error('service_id')
                                <div class="alert alert-danger" role="alert">
                                    <strong>Oh snap!</strong> {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="price" class="col-form-label">Price</label>
                            <input class="form-control" type="number" id="price" name="price"  value="{{ old('price',$serviceDetail->price ?? '') }}" required>
                            @error('price')
                                <div class="alert alert-danger" role="alert">
                                    <strong>Oh snap!</strong> {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Description</span>
                            </div>
                            <textarea class="form-control" aria-label="Description" placeholder="Layanan Bagus" id="description" name="description" required>{{ old('description',$serviceDetail->description ?? '') }}</textarea>
                            @error('description')
                                <div class="alert alert-danger" role="alert">
                                    <strong>Oh snap!</strong> {{ $message }}
                                </div>
                            @enderror
                        </div>
                        @if ($subsubmenu=='add')
                            <button type="submit" class="btn btn-outline-primary mb-3">Submit</button>
                        @else
                            <button type="submit" class="btn btn-outline-warning mb-3">Edit</button>
                        @endif
                        <button type="reset" class="btn btn-outline-danger mb-3" id="btn-reset">reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const fileInput = document.querySelector('.custom-file-input');
            const fileLabel = document.querySelector('.custom-file-label');
            const imagePreviewContainer = document.getElementById('image-preview');

            const defaultLabel = fileInput.dataset.defaultLabel || 'Upload Photo';
            const defaultSrc = fileInput.dataset.defaultSrc || '';

            fileInput.addEventListener('change', function (e) {
                const file = e.target.files[0];

                fileLabel.innerText = file?.name || defaultLabel;

                if (file) {
                    const reader = new FileReader();
                    reader.onload = function (event) {
                        imagePreviewContainer.innerHTML = `
                            <img src="${event.target.result}" alt="Preview" class="img-thumbnail" style="max-height: 150px;">
                        `;
                    };
                    reader.readAsDataURL(file);
                } else {
                    fileLabel.innerText = defaultLabel;
                    if (defaultSrc) {
                        imagePreviewContainer.innerHTML = `
                            <img src="${defaultSrc}" alt="Current Photo" class="img-thumbnail" style="max-height: 150px;">
                        `;
                    } else {
                        imagePreviewContainer.innerHTML = '';
                    }
                }
            });

            document.querySelector('form').addEventListener('reset', function () {
                fileInput.value = ''; 
                fileLabel.innerText = defaultLabel;

                if (defaultSrc) {
                    imagePreviewContainer.innerHTML = `
                        <img src="${defaultSrc}" alt="Current Photo" class="img-thumbnail" style="max-height: 150px;">
                    `;
                } else {
                    imagePreviewContainer.innerHTML = '';
                }
            });
        });
    </script>
@endsection