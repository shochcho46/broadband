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

                    <div class="card card-primary card-outline mb-4"> <!--begin::Header-->
                        <div class="card-header">
                            <div class="card-title">Add Package</div>
                        </div> <!--end::Header--> <!--begin::Form-->
                        <form action="{{ route('admin-package.store') }}" method="post" enctype="multipart/form-data"
                            class="repeater-poll">
                            @csrf
                            <div class="card-body" >
                                <div class="mb-3">
                                    <label for="title" class="form-label">Package Title</label>
                                    <input type="text"  name="title" class="form-control" id="title" required>
                                    @error('title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="amount" class="form-label">Package Amount</label>
                                    <input type="text"  name="amount" class="form-control" id="amount" required>
                                    @error('amount')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>




                                <div class="mb-3" data-repeater-list="group_option">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <label for="option" class="form-label mb-0">Package Details</label>
                                        <button data-repeater-create type="button" class="btn btn-warning">
                                            <i class="bi bi-plus"></i>
                                        </button>

                                    </div>
                                    <div data-repeater-item class="d-flex align-items-center mb-2">
                                        <input type="text" class="form-control me-2" id="option" name="option" required>
                                        <button data-repeater-delete type="button" class="btn btn-danger">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </div>
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
