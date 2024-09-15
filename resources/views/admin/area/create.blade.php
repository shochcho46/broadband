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

                    <div class="card card-primary card-outline mb-4"> <!--begin::Header-->
                        <div class="card-header">
                            <div class="card-title">Add Area</div>
                        </div> <!--end::Header--> <!--begin::Form-->
                        <form action="{{ route('admin-area.store') }}" method="post" enctype="multipart/form-data"
                            class="repeater-poll">
                            @csrf
                            <div class="card-body" >
                                <div class="mb-3">
                                    <label for="name" class="form-label">Area Name</label>
                                    <input type="text"  name="name" class="form-control" id="name" required>
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div> <!--end::Body--> <!--begin::Footer-->
                            {{-- <input data-repeater-create type="button" class="btn btn-warning" value="Add" /> --}}
                            <div class="card-footer text-end">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div> <!--end::Footer-->
                        </form> <!--end::Form-->
                    </div>
                </div>

            </div>

        </div>

    </div> <!--end::Container-->
    </div>
    <!--end::App Content-->
@endsection

@push('custome-js')

@endpush
