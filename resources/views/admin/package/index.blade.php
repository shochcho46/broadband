@extends('layouts.app')

@push('custome-css')

@endpush

@section('content')

    <div class="app-content-header"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Package</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Package
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
                        <h3 class="card-title">Package Table</h3>
                        <div class="text-end">
                            <a href="{{ route('admin-package.create') }}" class="btn btn-primary text-end">Create Package</a>
                        </div>
                    </div> <!-- /.card-header -->
                    <div class="card-body p-0">

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Title</th>
                                    <th>Amount</th>
                                    <th>Detail</th>
                                    <th >Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($datas as $key => $value )
                                    <tr class="align-middle">
                                        <td>{{ $datas->firstItem() + $key }}</td>
                                        <td>{{$value->title}}</td>
                                        <td>{{$value->amount}}</td>
                                        <td>
                                            @forelse ($value->packageDetail as $op => $option)
                                              {{$op+1}}. {{$option->title}}</br>
                                            @empty
                                                No option found
                                            @endforelse
                                        </td>


                                        <td>
                                            <a href="{{ route('admin-package.edit', $value->id) }}" class="btn btn-sm btn-primary"><i class="bi bi-pencil-square"></i> Edit</a>
                                            {{-- <button class="btn btn-sm btn-danger" onclick="confirmDelete({{ $value->id }})" data-bs-toggle="modal" data-bs-target="#exampleModal">Delete</button> --}}
                                                @include('admin.del-modal')
                                            <button class="btn btn-sm btn-danger"  data-bs-toggle="modal" data-bs-target="#delModal-{{$value->id}}"> <i class="bi bi-trash"></i> Delete</button>
                                            <form id="delete-form-{{ $value->id }}" action="{{ route('admin-package.destroy', $value->id) }}" method="POST" style="display: none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5">No Data Found</td>
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
