<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark"> <!--begin::Sidebar Brand-->
    <div class="sidebar-brand"> <!--begin::Brand Link--> <a href="{{route('admin.dashboard')}}" class="brand-link">
           <span class="brand-text fw-light">{{ config('app.name', 'DEWAN ENTERPRISE') }}</span></a> <!--end::Brand Link--> </div>
    <!--end::Sidebar Brand--> <!--begin::Sidebar Wrapper-->
    <div class="sidebar-wrapper">
        <nav class="mt-2"> <!--begin::Sidebar Menu-->
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">

                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link">
                        <i class="nav-icon bi bi-border"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('admin-package.index')}}" class="nav-link">
                        <i class="bi bi-boxes"></i>
                        <p>Packages</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin-area.index')}}" class="nav-link">
                        <i class="bi bi-globe-central-south-asia"></i>
                        <p>Area</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin-inquire.index')}}" class="nav-link">
                        <i class="bi bi-chat-square-quote-fill"></i>
                        <p>Inquiry</p>
                    </a>
                </li>



                {{-- <li class="nav-header">DOCUMENTATIONS</li>
                <li class="nav-item"> <a href="../docs/introduction.html" class="nav-link"> <i
                            class="nav-icon bi bi-download"></i>
                        <p>Installation</p>
                    </a> </li> --}}

                {{-- <li class="nav-header">MULTI LEVEL EXAMPLE</li>

                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle-fill"></i>
                        <p>
                            Level 1
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                <p>Level 2</p>
                            </a> </li>
                        <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                <p>
                                    Level 2
                                    <i class="nav-arrow bi bi-chevron-right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-record-circle-fill"></i>
                                        <p>Level 3</p>
                                    </a> </li>
                                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-record-circle-fill"></i>
                                        <p>Level 3</p>
                                    </a> </li>
                                <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-record-circle-fill"></i>
                                        <p>Level 3</p>
                                    </a> </li>
                            </ul>
                        </li>
                        <li class="nav-item"> <a href="#" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                <p>Level 2</p>
                            </a> </li>
                    </ul>
                </li> --}}



            </ul> <!--end::Sidebar Menu-->
        </nav>
    </div> <!--end::Sidebar Wrapper-->
</aside>
