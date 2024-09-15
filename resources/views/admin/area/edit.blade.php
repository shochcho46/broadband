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
                            <div class="card-title">Update Area</div>
                        </div> <!--end::Header--> <!--begin::Form-->
                        <form action="{{ route('admin-area.update',$data->id) }}" method="post" enctype="multipart/form-data"
                            class="repeater-poll">
                            @csrf
                            @method('PUT')
                            <div class="card-body" >

                                <div class="mb-3">
                                    <label for="name" class="form-label">Area Name</label>
                                    <input type="text"  name="name" class="form-control" id="name" value="{{$data->name}}" required>
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div> <!--end::Body--> <!--begin::Footer-->

                            <div class="card-footer text-end">
                                <button type="submit" class="btn btn-primary">Update</button>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('js/jquery.repeater.min.js') }}"></script>
    <script>
    $(document).ready(function () {
        'use strict';

    $('.repeater-poll').repeater({


    show: function () {
    $(this).slideDown();
    },
    hide: function (deleteElement) {

    $(this).slideUp(deleteElement);
    },
    ready: function (setIndexes) {

    }
    });


    });
    </script>
@endpush
