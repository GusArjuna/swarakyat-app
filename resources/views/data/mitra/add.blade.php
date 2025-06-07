@extends('nav.back.layout')
@section('body')
<div class="main-content-inner">
    <div class="row">
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">{{ $subsubmenu.' '.$menu}}</h4>
                    @if ($subsubmenu=='add')
                        <form action="/admdashboard/mitra/add" method="post" enctype="multipart/form-data">
                    @else
                        <form action="/admdashboard/mitra/{{ $mitra->id }}" method="post" enctype="multipart/form-data">
                        @method('patch')    
                    @endif
                        @csrf
                        @php
                            $defaultUrl = $mitra->url ?? ''; 
                            $defaultLabel = $defaultUrl ? basename($defaultUrl) : 'Upload Photo';
                        @endphp
                        @if(isset($mitra))
                            <input type="hidden" name="oldURL" value="{{ $mitra->url }}">
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
                            <label for="name" class="col-form-label">Name of Mitra</label>
                            <input class="form-control" type="text" placeholder="Telkom" id="name" name="name" value="{{ old('name',$mitra->name ?? '') }}" autofocus required>
                            @error('name')
                                <div class="alert alert-danger" role="alert">
                                    <strong>Oh snap!</strong> {{ $message }}
                                </div>
                            @enderror
                        </div> 
                        <div class="form-group">
                            <label for="category" class="col-form-label">Category</label>
                            <input class="form-control" type="text" placeholder="Internet Service Provider" id="category" name="category"  value="{{ old('category',$mitra->category ?? '') }}" required>
                            @error('category')
                                <div class="alert alert-danger" role="alert">
                                    <strong>Oh snap!</strong> {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="join" class="col-form-label">Join Date</label>
                            <input class="form-control" type="date" placeholder="wifi" id="join" name="join"  value="{{ old('join',$mitra->join ?? '') }}" required>
                            @error('join')
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

            // Ambil default dari data attribute
            const defaultLabel = fileInput.dataset.defaultLabel || 'Upload Photo';
            const defaultSrc = fileInput.dataset.defaultSrc || '';

            // Saat file berubah → update label dan preview
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
                    // Kalau dibatalkan, reset ke default
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

            // Saat form di-reset
            document.querySelector('form').addEventListener('reset', function () {
                fileInput.value = ''; // Reset file input
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