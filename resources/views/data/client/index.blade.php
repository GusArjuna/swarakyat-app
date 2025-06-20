@extends('nav.back.layout')
@section('body')
<div class="main-content-inner">
    <div class="row">
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="header-title mb-0">{{ $menu }} List</h4>
                        <a class="btn btn-rounded btn-primary" href="/admdashboard/clients/add" role="button"><span class="ti-plus"></span></a>
                    </div>
                    <div class="data-tables datatable-primary">
                        <table id="dataTable2" class="text-center">
                            <thead class="text-capitalize">
                                <tr>
                                    <th>Photo</th>
                                    <th>User ID</th>
                                    <th>Company Name</th>
                                    <th>Company Category</th>
                                    <th>Web Link</th>
                                    <th>Address</th>
                                    <th>Join Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($clients as $client)
                                    <tr>
                                        <td><img src="{{ asset('storage/' . $client->url) }}" class="img-fluid" alt="{{ $client->companyName }}" style="max-height: 70px;"></td>
                                        <td>{{ $client->userID }}</td>
                                        <td>{{ $client->companyName }}</td>
                                        <td>{{ $client->companyCategory }}</td>
                                        <td>{{ $client->weburl?? 'None' }}</td>
                                        <td>{{ $client->address.', '.$client->district.', '.$client->city.', '.$client->province.', '.$client->state }}</td>
                                        <td>{{ $client->join }}</td>
                                        <td>
                                            <a href="/admdashboard/clients/{{ $client->id }}/edit"><span class="btn btn-outline-warning mb-3"><span class="ti-pencil"></span></span></a>
                                            <form action="/admdashboard/clients/{{ $client->id }}" method="post" class="d-inline form-delete">
                                                @method('delete')
                                                @csrf
                                                <button type="button" class="btn btn-outline-danger mb-3 btn-delete" data-id="{{ $client->id }}">
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