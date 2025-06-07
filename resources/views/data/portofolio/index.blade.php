@extends('nav.back.layout')
@section('body')
<div class="main-content-inner">
    <div class="row">
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="header-title mb-0">Services List</h4>
                        <a class="btn btn-rounded btn-primary" href="/admdashboard/services/add" role="button"><span class="ti-plus"></span></a>
                    </div>
                    <div class="data-tables datatable-primary">
                        <table id="dataTable2" class="text-center">
                            <thead class="text-capitalize">
                                <tr>
                                    <th>Name</th>
                                    <th>URL</th>
                                    <th>Icon</th>
                                    <th>Tagline</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($services as $service)
                                    <tr>
                                        <td>{{ $service->name }}</td>
                                        <td>{{ $service->url }}</td>
                                        <td>{{ $service->icon }}</td>
                                        <td>{{ $service->tagline }}</td>
                                        <td>
                                            <a href="/admdashboard/services/{{ $service->id }}/edit"><span class="btn btn-outline-warning mb-3"><span class="ti-pencil"></span></span></a>
                                            <form action="/admdashboard/services/{{ $service->id }}" method="post" class="d-inline form-delete">
                                                @method('delete')
                                                @csrf
                                                <button type="button" class="btn btn-outline-danger mb-3 btn-delete" data-id="{{ $service->id }}">
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