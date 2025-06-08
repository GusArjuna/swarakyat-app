@extends('nav.back.layout')
@section('body')
<div class="main-content-inner">
    <div class="row">
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">{{ $subsubmenu.' '.$menu }}</h4>
                    @if ($subsubmenu=='add')
                        <form action="/admdashboard/clients/add" method="post" enctype="multipart/form-data">
                    @else
                        <form action="/admdashboard/clients/{{ $client->id }}" method="post" enctype="multipart/form-data">
                        @method('patch')    
                    @endif
                        @csrf
                        @php
                            $defaultUrl = $client->url ?? ''; 
                            $defaultLabel = $defaultUrl ? basename($defaultUrl) : 'Upload Photo';
                        @endphp
                        @if(isset($client))
                            <input type="hidden" name="oldURL" value="{{ $client->url }}">
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
                        @if ($subsubmenu=='edit')
                            <div class="form-group">
                                <label for="name" class="col-form-label">User ID</label>
                                <input class="form-control" type="text" id="name" name="name" value="{{ $client->userID }}" readonly required>
                            </div>
                        @endif
                        <div class="form-group">
                            <label for="companyName" class="col-form-label">Company Name</label>
                            <input class="form-control" type="text" placeholder="PT. Swarakyat Nusantara" id="companyName" name="companyName" value="{{ old('companyName',$client->companyName ?? '') }}" autofocus required>
                            @error('companyName')
                                <div class="alert alert-danger" role="alert">
                                    <strong>Oh snap!</strong> {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="companyCategory" class="col-form-label">Company Category</label>
                            <select class="form-control"id="companyCategory" name="companyCategory"  required>
                                <option>Select</option>
                                <option value="Standalone" @selected(isset($client) && $client->companyCategory=='Standalone')>Standalone</option>
                                <option value="Company"  @selected(isset($client) && $client->companyCategory=='Company')>Company</option>
                                <option value="Organization"  @selected(isset($client) && $client->companyCategory=='Organization')>Organization</option>
                                <option value="School"  @selected(isset($client) && $client->companyCategory=='School')>School</option>
                                <option value="UMKM"  @selected(isset($client) && $client->companyCategory=='UMKM')>UMKM</option>
                            </select>
                            @error('companyCategory')
                                <div class="alert alert-danger" role="alert">
                                    <strong>Oh snap!</strong> {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="weburl" class="col-form-label">Web Link</label>
                            <input class="form-control" type="text" placeholder="swarakyat.com" id="weburl" name="weburl"  value="{{ old('weburl',$client->weburl ?? '') }}" required>
                            @error('weburl')
                                <div class="alert alert-danger" role="alert">
                                    <strong>Oh snap!</strong> {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="address" class="col-form-label">Address</label>
                            <input class="form-control" type="text" placeholder="Jl. bala bala" id="address" name="address"  value="{{ old('address',$client->address ?? '') }}" required>
                            @error('address')
                                <div class="alert alert-danger" role="alert">
                                    <strong>Oh snap!</strong> {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="district" class="col-form-label">District</label>
                            <input class="form-control" type="text" placeholder="Waru" id="district" name="district"  value="{{ old('district',$client->district ?? '') }}" required>
                            @error('district')
                                <div class="alert alert-danger" role="alert">
                                    <strong>Oh snap!</strong> {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="city" class="col-form-label">City</label>
                            <input class="form-control" type="text" placeholder="Sidoarjo" id="city" name="city"  value="{{ old('city',$client->city ?? '') }}" required>
                            @error('city')
                                <div class="alert alert-danger" role="alert">
                                    <strong>Oh snap!</strong> {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="province" class="col-form-label">Province</label>
                            <input class="form-control" type="text" placeholder="Jawa Timur" id="province" name="province"  value="{{ old('province',$client->province ?? '') }}" required>
                            @error('province')
                                <div class="alert alert-danger" role="alert">
                                    <strong>Oh snap!</strong> {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="state" class="col-form-label">State</label>
                            <input class="form-control" type="text" placeholder="Indonesia" id="state" name="state"  value="{{ old('state',$client->state ?? '') }}" required>
                            @error('state')
                                <div class="alert alert-danger" role="alert">
                                    <strong>Oh snap!</strong> {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="join" class="col-form-label">Join Date</label>
                            <input class="form-control" type="date" id="join" name="join"  value="{{ old('join',$client->join ?? '') }}" required>
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
        $(document).ready(function() {
            @if(session('danger'))
                Swal.fire({
                    icon: 'error',
                    title: 'Wrong',
                    text: {!! json_encode(session('danger')) !!},
                    confirmButtonColor: '#d33'
                });
            @endif
        })
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