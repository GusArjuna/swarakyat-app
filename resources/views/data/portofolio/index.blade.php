@extends('nav.back.layout')
@section('body')
<div class="main-content-inner">
    <div class="row">
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="header-title mb-0">Portofolio List</h4>
                        <a class="btn btn-rounded btn-primary" href="/admdashboard/portofolio/add" role="button"><span class="ti-plus"></span></a>
                    </div>
                    <div class="data-tables datatable-primary">
                        <table id="dataTable2" class="text-center">
                            <thead class="text-capitalize">
                                <tr>
                                    <th>Photo</th>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Client</th>
                                    <th>Mitra</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($portofolios as $portofolio)
                                    <tr>
                                        <td><img src="{{ asset('storage/' . $portofolio->url) }}" class="img-fluid" alt="{{ $portofolio->name }}" style="max-height: 100px;"></td>
                                        <td>{{ $portofolio->name }}</td>
                                        <td>{{ $portofolio->serviceDetail->name }}</td>
                                        <td>{{ $portofolio->client->companyName }}</td>
                                        <td>{{ $portofolio->mitra->name }}</td>
                                        <td>{{ $portofolio->description }}</td>
                                        <td>
                                            <a href="/admdashboard/portofolio/{{ $portofolio->id }}/edit"><span class="btn btn-outline-warning mb-3"><span class="ti-pencil"></span></span></a>
                                            <form action="/admdashboard/portofolio/{{ $portofolio->id }}" method="post" class="d-inline form-delete">
                                                @method('delete')
                                                @csrf
                                                <button type="button" class="btn btn-outline-danger mb-3 btn-delete" data-id="{{ $portofolio->id }}">
                                                    <span class="ti-trash"></span>
                                                </button>
                                            </form>
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
@section('script')
    <script>
        $(document).ready(function() {
            $('.btn-delete').click(function(e) {
                e.preventDefault(); 

                const button = $(this);
                const form = button.closest('.form-delete');

                Swal.fire({
                    title: 'Are you sure you want to delete this?',
                    text: "This action cannot be undone.",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#6c757d',
                    confirmButtonText: 'Yes',
                    cancelButtonText: 'Cancel'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit(); // Submit form jika dikonfirmasi
                    }
                });
            });
            @if(session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: '{{ session('success') }}',
                confirmButtonColor: '#3085d6'
            });
            @endif
            @if(session('danger'))
                Swal.fire({
                    icon: 'error',
                    title: 'Deleted',
                    text: {!! json_encode(session('danger')) !!},
                    confirmButtonColor: '#d33'
                });
            @endif
        });
    </script>
@endsection