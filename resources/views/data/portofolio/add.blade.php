@extends('nav.back.layout')
@section('body')
<div class="main-content-inner">
    <div class="row">
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">{{ $subsubmenu.' '.$submenu}}</h4>
                    @if ($subsubmenu=='add')
                        <form action="/admdashboard/portofolio/add" method="post" enctype="multipart/form-data">
                    @else
                        <form action="/admdashboard/portofolio/{{ $portofolio->id }}" method="post" enctype="multipart/form-data">
                        @method('patch')    
                    @endif
                        @csrf
                        @php
                            $defaultUrl = $portofolio->url ?? ''; 
                            $defaultLabel = $defaultUrl ? basename($defaultUrl) : 'Upload Photo';
                        @endphp
                        @if(isset($portofolio))
                            <input type="hidden" name="oldURL" value="{{ $portofolio->url }}">
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
                            <label for="name" class="col-form-label">Name of Portofolio</label>
                            <input class="form-control" type="text" placeholder="MiniQ+" id="name" name="name" value="{{ old('name',$portofolio->name ?? '') }}" autofocus required>
                            @error('name')
                                <div class="alert alert-danger" role="alert">
                                    <strong>Oh snap!</strong> {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="service_detail_id" class="col-form-label">Category</label>
                            <select class="form-control"id="service_detail_id" name="service_detail_id"  required>
                                <option>Select</option>
                                @foreach ($servicesDetails as $servicesDetail)
                                    <option value="{{ $servicesDetail->id }}" @selected(isset($portofolio) && $portofolio->service_detail_id==$servicesDetail->id)>{{ $servicesDetail->name }}</option>
                                @endforeach
                            </select>
                            @error('service_detail_id')
                                <div class="alert alert-danger" role="alert">
                                    <strong>Oh snap!</strong> {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="client_id" class="col-form-label">Client</label>
                            <select class="form-control"id="client_id" name="client_id"  required>
                                <option>Select</option>
                                @foreach ($clients as $client)
                                    <option value="{{ $client->id }}" @selected(isset($portofolio) && $portofolio->client_id==$client->id)>{{ $client->companyName }}</option>
                                @endforeach
                            </select>
                            @error('client_id')
                                <div class="alert alert-danger" role="alert">
                                    <strong>Oh snap!</strong> {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="mitra_id" class="col-form-label">Mitra</label>
                            <select class="form-control"id="mitra_id" name="mitra_id"  required>
                                <option>Select</option>
                                @foreach ($mitras as $mitra)
                                    <option value="{{ $mitra->id }}" @selected(isset($portofolio) && $portofolio->mitra_id==$mitra->id)>{{ $mitra->name }}</option>
                                @endforeach
                            </select>
                            @error('mitra_id')
                                <div class="alert alert-danger" role="alert">
                                    <strong>Oh snap!</strong> {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Description</span>
                            </div>
                            <textarea class="form-control" aria-label="Description" placeholder="Layanan Bagus" id="description" name="description" required>{{ old('description',$portofolio->description ?? '') }}</textarea>
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
                        <button type="reset" class="btn btn-outline-danger mb-3">reset</button>
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