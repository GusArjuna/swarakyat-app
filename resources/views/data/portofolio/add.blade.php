@extends('nav.back.layout')
@section('body')
<div class="main-content-inner">
    <div class="row">
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">{{ $subsubmenu }} Services</h4>
                    @if ($subsubmenu=='add')
                        <form action="/admdashboard/services/add" method="post">
                    @else
                        <form action="/admdashboard/services/{{ $service->id }}" method="post">
                        @method('patch')    
                    @endif
                        @csrf
                        <div class="form-group">
                            <label for="name" class="col-form-label">Name of Services</label>
                            <input class="form-control" type="text" placeholder="Pemasangan Wifi" id="name" name="name" value="{{ old('name',$service->name ?? '') }}" autofocus required>
                            @error('name')
                                <div class="alert alert-danger" role="alert">
                                    <strong>Oh snap!</strong> {{ $message }}
                                </div>
                            @enderror
                        </div>
                        @if ($subsubmenu=='edit')    
                            <div class="form-group">
                                <label for="url" class="col-form-label">URL</label>
                                <input class="form-control" type="text" placeholder="services/1" id="url" name="url"  value="{{ old('url',$service->url ?? '') }}" required>
                                @error('url')
                                    <div class="alert alert-danger" role="alert">
                                        <strong>Oh snap!</strong> {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        @endif
                        <div class="form-group">
                            <label for="icon" class="col-form-label">Icon for Services</label>
                            <input class="form-control" type="text" placeholder="wifi" id="icon" name="icon"  value="{{ old('icon',$service->icon ?? '') }}" required>
                            @error('icon')
                                <div class="alert alert-danger" role="alert">
                                    <strong>Oh snap!</strong> {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="tagline" class="col-form-label">Tagline of Services</label>
                            <input class="form-control" type="text" placeholder="Koneksi cepat dan stabil untuk semua kebutuhan Anda." id="tagline" name="tagline"  value="{{ old('tagline',$service->tagline ?? '') }}" required>
                            @error('tagline')
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