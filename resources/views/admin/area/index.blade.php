@extends('layouts.app')

@push('custome-css')

@endpush

@section('content')

    <div class="app-content-header"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Area</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Area
                        </li>
                    </ol>
                </div>
            </div> <!--end::Row-->
        </div> <!--end::Container-->
    </div> <!--end::App Content Header-->

     <!--begin::App Content-->

     <div class="app-content"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-md-12">

                    <div class="card-header">
                        <h3 class="card-title">Area Table</h3>
                        <div class="text-end">
                            <a href="{{ route('admin-area.create') }}" class="btn btn-primary text-end">Create Area</a>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <form action="" method="get" enctype="multipart/form-data" class="form-inline">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Area Name" aria-label="Area Name" aria-describedby="button-addon2" name="name">
                                        <button class="btn btn-outline-primary" type="submit" id="button-addon2"><i class="bi bi-search"></i></button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div> <!-- /.card-header -->
                    <div class="card-body p-0">

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Name</th>
                                    <th >Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($datas as $key => $value )
                                    <tr class="align-middle">
                                        <td>{{ $datas->firstItem() + $key }}</td>
                                        <td>{{$value->name}}</td>


                                        <td>
                                            <a href="{{ route('admin-area.edit', $value->id) }}" class="btn btn-sm btn-primary"><i class="bi bi-pencil-square"></i> Edit</a>
                                            {{-- <button class="btn btn-sm btn-danger" onclick="confirmDelete({{ $value->id }})" data-bs-toggle="modal" data-bs-target="#exampleModal">Delete</button> --}}
                                                @include('admin.del-modal')
                                            <button class="btn btn-sm btn-danger"  data-bs-toggle="modal" data-bs-target="#delModal-{{$value->id}}"> <i class="bi bi-trash"></i> Delete</button>
                                            <form id="delete-form-{{ $value->id }}" action="{{ route('admin-area.destroy', $value->id) }}" method="POST" style="display: none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3">No Data Found</td>
                                    </tr>
                                @endforelse


                            </tbody>

                        </table>
                        <div class="text-center">
                            {{ $datas->links() }}
                        </div>

                    </div> <!-- /.card-body -->

                </div>
                </div>

            </div>

        </div> <!--end::Container-->
    </div>
     <!--end::App Content-->
@endsection

@push('custome-js')

<script>
    function confirmDelete(id) {
        document.getElementById('delete-form-' + id).submit();
    }
</script>
@endpush
