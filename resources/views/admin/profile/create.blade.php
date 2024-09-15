@extends('layouts.app')

@push('custome-css')
@endpush

@section('content')
    <div class="app-content-header"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Profile</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Profile
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
                            <div class="card-title">Update Profile</div>
                        </div> <!--end::Header--> <!--begin::Form-->
                        <form action="{{ route('admin.updateProfile',$user->id) }}" method="post" enctype="multipart/form-data"
                            class="repeater-poll">
                            @csrf
                            @method('PUT')
                            <div class="card-body" >
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text"  name="name" class="form-control" id="name" value="{{ $user->name }}" required>
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email"  name="email" class="form-control" id="email"  value="{{ $user->email }}" required>
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="mobile" class="form-label">Phone</label>
                                    <input type="text"  name="phone" class="form-control" id="phone"  value="{{ $user->phone  }}" required>
                                    @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">Old Password</label>
                                    <input type="password"  name="current_password" class="form-control" id="password" >
                                    @error('current_password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password"  name="password" class="form-control" id="password" >
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="password_confirmation" class="form-label">Password</label>
                                    <input type="password"  name="password_confirmation" class="form-control" id="password" >

                                </div>

                                <div class="input-group mb-3">
                                    <input type="file" class="form-control" name="profile" id="profile" accept="image/png,image/jpeg,image/jpg,image/webp,image/*">
                                        <label class="input-group-text"for="profile">Upload</label>
                                </div>


                                @if ($user->hasMedia('profile'))
                                    <div class="input-group mb-3">
                                        <img src="{{ $user->getFirstMediaUrl('profile') }}" width="100" height="100" alt="Profile Picture">
                                    </div>
                                @endif

                            </div> <!--end::Body--> <!--begin::Footer-->

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


