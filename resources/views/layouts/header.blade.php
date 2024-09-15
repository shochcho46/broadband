<nav class="app-header navbar navbar-expand bg-body"> <!--begin::Container-->
    <div class="container-fluid"> <!--begin::Start Navbar Links-->
        <ul class="navbar-nav">
            <li class="nav-item"> <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button"> <i class="bi bi-list"></i> </a> </li>
            {{-- <li class="nav-item d-none d-md-block"> <a href="#" class="nav-link">Home</a> </li>
            <li class="nav-item d-none d-md-block"> <a href="#" class="nav-link">Contact</a> </li> --}}
        </ul> <!--end::Start Navbar Links--> <!--begin::End Navbar Links-->
        <ul class="navbar-nav ms-auto"> <!--begin::Navbar Search-->

           <!--begin::Notifications Dropdown Menu-->
            <li class="nav-item dropdown"> <a class="nav-link" data-bs-toggle="dropdown" href="#"> <i class="bi bi-bell-fill"></i> <span class="navbar-badge badge text-bg-danger">{{Auth::guard('admin')->user()->unreadNotifications->count() }}</span> </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end"> <span class="dropdown-item dropdown-header">{{Auth::guard('admin')->user()->unreadNotifications->count() }} Notifications</span>
                    <div class="dropdown-divider"></div>
                            @forelse (Auth::guard('admin')->user()->unreadNotifications as $notification)

                                <a href="{{route('admin-inquire.seeSingleNotification',$notification->id)}}" class="dropdown-item">
                                    {{$notification->data['message']}}
                                    <span class="float-end text-secondary fs-7">
                                        {{ \Carbon\Carbon::parse($notification?->created_at)->diffForHumans() }}
                                    </span>
                                </a>

                                <div class="dropdown-divider"></div>
                            @empty

                            @endforelse




                    <div class="dropdown-divider"></div> <a href="{{route('admin-inquire.seeAllNotification')}}" class="dropdown-item dropdown-footer">
                        See All Notifications
                    </a>
                </div>
            </li> <!--end::Notifications Dropdown Menu--> <!--begin::Fullscreen Toggle-->
            <li class="nav-item"> <a class="nav-link" href="#" data-lte-toggle="fullscreen"> <i data-lte-icon="maximize" class="bi bi-arrows-fullscreen"></i> <i data-lte-icon="minimize" class="bi bi-fullscreen-exit" style="display: none;"></i> </a> </li> <!--end::Fullscreen Toggle--> <!--begin::User Menu Dropdown-->
            <li class="nav-item dropdown user-menu">
                 <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    @if (Auth::guard('admin')->user()->hasMedia('profile'))
                            <img src="{{ Auth::guard('admin')->user()->getFirstMediaUrl('profile') }}" class="rounded-circle shadow" alt="User Image" width="20">
                    @else
                         <img src="{{asset('assets/img/user2-160x160.jpg')}}" class="rounded-circle shadow" alt="User Image">
                    @endif

                     <span class="d-none d-md-inline">

                        @auth('web')
                            {{Auth::guard('web')->user()->name}}
                        @endauth
                        @auth('admin')
                            {{Auth::guard('admin')->user()->name}}
                        @endauth
                    </span>
                </a>
                <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end"> <!--begin::User Image-->
                    <li class="user-header text-bg-primary">
                        @if (Auth::guard('admin')->user()->hasMedia('profile'))
                            <img src="{{ Auth::guard('admin')->user()->getFirstMediaUrl('profile') }}" class="rounded-circle shadow" alt="User Image">
                        @else
                         <img src="{{asset('assets/img/user2-160x160.jpg')}}" class="rounded-circle shadow" alt="User Image">
                        @endif
                        <p>
                            @auth('web')
                                {{Auth::guard('web')->user()->name}}
                            @endauth
                            @auth('admin')
                                {{Auth::guard('admin')->user()->name}}
                            @endauth
                        </p>
                    </li> <!--end::User Image--> <!--begin::Menu Body-->
                    <li class="user-body"> <!--begin::Row-->
                        {{-- <div class="row">
                            <div class="col-4 text-center"> <a href="#">Followers</a> </div>
                            <div class="col-4 text-center"> <a href="#">Sales</a> </div>
                            <div class="col-4 text-center"> <a href="#">Friends</a> </div>
                        </div> <!--end::Row--> --}}
                    </li>
                     <!--end::Menu Body--> <!--begin::Menu Footer-->
                    @auth('web')
                        <li class="user-footer"> <a href="#" class="btn btn-default btn-flat">Profile</a> <a href="{{route('user.logout')}}" class="btn btn-default btn-flat float-end">Sign out</a> </li> <!--end::Menu Footer-->

                    @endauth

                    @auth('admin')
                        <li class="user-footer"> <a href="{{ route('admin.getProfile') }}" class="btn btn-default btn-flat">Profile</a> <a href="{{route('admin.logout')}}" class="btn btn-default btn-flat float-end"> Sign Out</a> </li> <!--end::Menu Footer-->

                    @endauth


                </ul>
            </li> <!--end::User Menu Dropdown-->
        </ul> <!--end::End Navbar Links-->
    </div> <!--end::Container-->
</nav> <!--end::Header-->
