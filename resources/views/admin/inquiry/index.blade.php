@extends('layouts.app')

@push('custome-css')

@endpush

@section('content')

    <div class="app-content-header"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Inquiry</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Inquiry
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

                        <div class="row">
                            <div class="col-md-6 mt-2">
                                <form action="" method="get" enctype="multipart/form-data" class="form-inline">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Name/Email/Mobile/Type:new;upgrade" aria-label="Area Name" aria-describedby="button-addon2" name="search">
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
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Type</th>
                                    <th>Package</th>
                                    <th>Message</th>
                                    <th >Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($datas as $key => $value )
                                    <tr class="align-middle">
                                        <td>{{ $datas->firstItem() + $key }}</td>
                                        <td>{{$value->name}}</td>
                                        <td>{{$value->email}}</td>
                                        <td>{{$value->mobile}}</td>
                                        <td>
                                            @if ($value->type == "new")
                                                <span class="badge bg-success">{{$value->type}}</span>
                                            @else
                                                <span class="badge bg-primary">{{$value->type}}</span>
                                            @endif
                                        </td>
                                        <td>{{$value->package?->title}}</td>
                                        <td>{{$value->message}}</td>

                                        <td>
                                            @include('admin.del-modal')
                                            <button class="btn btn-sm btn-danger"  data-bs-toggle="modal" data-bs-target="#delModal-{{$value->id}}"> <i class="bi bi-trash"></i> Delete</button>
                                            <form id="delete-form-{{ $value->id }}" action="{{ route('admin-inquire.destroy', $value->id) }}" method="POST" style="display: none;">
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
