<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->

    @php
        $sitelogo = DB::table('web_setups')
            ->pluck('logo_black')
            ->first();
    @endphp
    @if ($sitelogo)
        <a href="{{ route('dashboard') }}" class="brand-link text-center">
            <img class="" style="width: 50%; " src="{{ asset('/site_logo/' . $sitelogo) }}">
        </a>
        <br>
    @else
        <div class="ml-2 mt-2 text-center">
            <h5 style="color: white">Web logo (Black)</h5>
            <hr style="color: white">
        </div>
    @endif


    <!-- Sidebar -->
    <div class="sidebar">
        @php
            $current_route = Route::current()->getName();
        @endphp
        <nav class="mt-2">




            @if (Auth::user()->type == 'Admin')
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

                    <li class="nav-item @if ($current_route == 'user-list' || $current_route == 'my-client-list') {{ 'menu-open ' }} @endif ">
                        <a href="#"
                            class="nav-link @if ($current_route == 'user-list' || $current_route == 'my-client-list') {{ 'active' }} @endif ">
                            <i class="nav-icon fas fa-chart-pie"></i>
                            <p>
                                Users
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item ">
                                <a href="{{ route('user-list') }}" class="nav-link  " style="color: rgb(255, 255, 255)">
                                    <i class="nav-icon fas fa-user"></i>
                                    <p>Users </p>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="{{ route('my-client-list') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Client</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('category') }}"
                            class="nav-link @if ($current_route == 'category' || $current_route == 'addnewcat' || $current_route == 'editcat') {{ 'active' }} @endif"
                            style="color: rgb(255, 255, 255)">
                            <i class="nav-icon fas fa-list"></i>
                            <p>Category </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('gallery') }}"
                            class="nav-link @if ($current_route == 'gallery' || $current_route == 'list-gallery') {{ 'active' }} @endif"
                            style="color: rgb(255, 255, 255)">
                            <i class="nav-icon fa fa-camera-retro"></i>
                            <p>Image Gallery </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('vgallery') }}"
                            class="nav-link @if ($current_route == 'vgallery' || $current_route == 'v-gallery' || $current_route == 'edit-video') {{ 'active' }} @endif"
                            style="color: rgb(255, 255, 255)">
                            <i class="nav-icon fa fa-camera-retro"></i>
                            <p>Video Gallery </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('story') }}"
                            class="nav-link @if ($current_route == 'story' || $current_route == 'addstory' || $current_route == 'edit-story') {{ 'active' }} @endif"
                            style="color: rgb(255, 255, 255)">
                            <i class="nav-icon fas fa-book"></i>
                            <p>Story </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('createclient') }}"
                            class="nav-link @if ($current_route == 'createclient' || $current_route == 'showclient') {{ 'active' }} @endif"
                            style="color: rgb(255, 255, 255)">
                            <i class="nav-icon fas fa-book"></i>
                            <p>Client logo </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('tearsheets.create') }}"
                            class="nav-link @if (
                                $current_route == 'tearsheets.create' ||
                                    $current_route == 'tearsheets.index' ||
                                    $current_route == 'tearsheets.edit') {{ 'active' }} @endif"
                            style="color: rgb(255, 255, 255)">
                            <i class="nav-icon fas fa-book"></i>
                            <p>Tear Sheet </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('public.create') }}"
                            class="nav-link @if ($current_route == 'public.create' || $current_route == 'public.index' || $current_route == 'public.edit') {{ 'active' }} @endif"
                            style="color: rgb(255, 255, 255)">
                            <i class="nav-icon fas fa-book"></i>
                            <p>Publication</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('commerc.create') }}"
                            class="nav-link @if ($current_route == 'commerc.create' || $current_route == 'commerc.index' || $current_route == 'commerc.edit') {{ 'active' }} @endif"
                            style="color: rgb(255, 255, 255)">
                            <i class="nav-icon fas fa-book"></i>
                            <p>Commercial</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('achievement') }}"
                            class="nav-link @if ($current_route == 'achievement' || $current_route == 'addachievement' || $current_route == 'editachievement') {{ 'active' }} @endif"
                            style="color: rgb(255, 255, 255)">
                            <i class="nav-icon fas fa-trophy"></i>
                            <p>Achievement</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('addaboutme') }}"
                            class="nav-link @if ($current_route == 'addaboutme' || $current_route == 'editabout') {{ 'active' }} @endif"
                            style="color: rgb(255, 255, 255)">
                            <i class="nav-icon fas fa-user"></i>
                            <p>About Me </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('sliders') }}"
                            class="nav-link @if ($current_route == 'sliders' || $current_route == 'addslider') {{ 'active' }} @endif"
                            style="color: rgb(255, 255, 255)">
                            <i class="nav-icon fas fa-image"></i>
                            <p>Sliders </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('social_media') }}"
                            class="nav-link @if ($current_route == 'social_media') {{ 'active' }} @endif"
                            style="color: rgb(255, 255, 255)">
                            <i class="nav-icon fa fa-search"></i>
                            <p>Social media</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('medialinks') }}"
                            class="nav-link @if ($current_route == 'medialinks' || $current_route == 'editmedia') {{ 'active' }} @endif"
                            style="color: rgb(255, 255, 255)">
                            <i class="nav-icon fa fa-search"></i>
                            <p>Media</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('web.index') }}"
                            class="nav-link @if ($current_route == 'web.index') {{ 'active' }} @endif"
                            style="color: rgb(255, 255, 255)">
                            <i class="nav-icon fa fa-cog"></i>
                            <p>Website Setup</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('contactsmail') }}"
                            class="nav-link @if ($current_route == 'contactsmail') {{ 'active' }} @endif"
                            style="color: rgb(255, 255, 255)">
                            <i class="nav-icon fa fa-cog"></i>
                            <p>User Query</p>
                        </a>
                    </li>
                </ul>
            @elseif(Auth::user()->type == 'User')
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                    <li class="nav-item ">
                        <a href="{{ route('dashboard') }}"
                            class="nav-link @if ($current_route == 'dashboard') {{ 'bg-warning' }} @endif "
                            style="color: rgb(255, 255, 255)">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>Dashboard </p>
                        </a>
                    </li>



                    <li class="nav-item">
                        <a href="{{ route('userProfile') }}"
                            class="nav-link @if ($current_route == 'userProfile') {{ 'bg-warning' }} @endif"
                            style="color: rgb(255, 255, 255)">
                            <i class="nav-icon fas fa-list"></i>
                            <p>My Profile </p>
                        </a>
                    </li>


                </ul>
            @endif

            <br>
            <br>
            <br>
            <br>
        </nav>


        <!-- Sidebar Menu -->

        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
