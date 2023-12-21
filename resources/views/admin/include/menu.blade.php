<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard') }}" class="brand-link">
        <img class="brand-image  elevation-3" style="opacity: .8" style="width: 50%" src="{{ asset('logos/2.png') }}">
        <span class="brand-text font-weight-light">{{ isset(Auth::user()->name) ? Auth::user()->name : '' }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        @php
            $current_route = Route::current()->getName();
        @endphp
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item ">
                    <a href="{{ route('dashboard') }}"
                        class="nav-link @if ($current_route == 'dashboard') {{ 'active' }} @endif "
                        style="color: rgb(255, 255, 255)">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            Users
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item ">
                            <a href="{{ route('user-list') }}"
                                class="nav-link @if ($current_route == 'user-list') {{ 'active' }} @endif "
                                style="color: rgb(255, 255, 255)">
                                <i class="nav-icon fas fa-user"></i>
                                <p>Users </p>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="{{ route('my-client-list') }}"
                                class="nav-link @if ($current_route == 'my-client-list') {{ 'active' }} @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Client</p>
                            </a>
                        </li>
                    </ul>
                </li>



                <li class="nav-item">
                    <a href="{{ route('category') }}" class="nav-link" style="color: rgb(255, 255, 255)">
                        <i class="nav-icon fas fa-list"></i>
                        <p>Category </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('gallery') }}" class="nav-link" style="color: rgb(255, 255, 255)">
                        <i class="nav-icon fa fa-camera-retro"></i>
                        <p>Image Gallery </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('vgallery') }}" class="nav-link" style="color: rgb(255, 255, 255)">
                        <i class="nav-icon fa fa-camera-retro"></i>
                        <p>Video Gallery </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('story') }}" class="nav-link" style="color: rgb(255, 255, 255)">
                        <i class="nav-icon fas fa-book"></i>
                        <p>Story </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('createclient') }}" class="nav-link" style="color: rgb(255, 255, 255)">
                        <i class="nav-icon fas fa-book"></i>
                        <p>Client logo </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('tearsheets.create') }}" class="nav-link" style="color: rgb(255, 255, 255)">
                        <i class="nav-icon fas fa-book"></i>
                        <p>Tear Sheet </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('public.create') }}" class="nav-link" style="color: rgb(255, 255, 255)">
                        <i class="nav-icon fas fa-book"></i>
                        <p>Publication</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('commerc.create') }}" class="nav-link" style="color: rgb(255, 255, 255)">
                        <i class="nav-icon fas fa-book"></i>
                        <p>Commercial</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('achievement') }}" class="nav-link" style="color: rgb(255, 255, 255)">
                        <i class="nav-icon fas fa-trophy"></i>
                        <p>Achievement</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('addaboutme') }}" class="nav-link" style="color: rgb(255, 255, 255)">
                        <i class="nav-icon fas fa-user"></i>
                        <p>About Me </p>
                    </a>
                </li>



                <li class="nav-item">
                    <a href="{{ route('sliders') }}" class="nav-link" style="color: rgb(255, 255, 255)">
                        <i class="nav-icon fas fa-image"></i>
                        <p>Sliders </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('social_media') }}" class="nav-link" style="color: rgb(255, 255, 255)">
                        <i class="nav-icon fa fa-search"></i>
                        <p>Social media</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('medialinks') }}" class="nav-link" style="color: rgb(255, 255, 255)">
                        <i class="nav-icon fa fa-search"></i>
                        <p>Media</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('web.index') }}" class="nav-link" style="color: rgb(255, 255, 255)">
                        <i class="nav-icon fa fa-cog"></i>
                        <p>Website Setup</p>
                    </a>
                </li>




            </ul>
        </nav>


        <!-- Sidebar Menu -->

        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
