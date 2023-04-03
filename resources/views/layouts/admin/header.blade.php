<div class="wrapper">
    <div class="main-header">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="blue">

            <a href="#" class="logo">
                {{-- <img src="{{asset('assets/img/logo.svg')}}" alt="navbar brand" class="navbar-brand"> --}}
                <h2 class="navbar-brand" style="color: white">Dashboard</h2>
            </a>
            <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                    <i class="icon-menu"></i>
                </span>
            </button>
            <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="icon-menu"></i>
                </button>
            </div>
        </div>
        <!-- End Logo Header -->

        <!-- Navbar Header -->
        <nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">

            <div class="container-fluid">
                {{-- <div class="collapse" id="search-nav">
                    <form class="navbar-left navbar-form nav-search mr-md-3">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <button type="submit" class="btn btn-search pr-1">
                                    <i class="fa fa-search search-icon"></i>
                                </button>
                            </div>
                            <input type="text" placeholder="Search ..." class="form-control">
                        </div>
                    </form>
                </div> --}}
                <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                    {{-- <li class="nav-item toggle-nav-search hidden-caret">
                        <a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
                            <i class="fa fa-search"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown hidden-caret">
                        <a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-envelope"></i>
                        </a>
                    </li> --}}
                    <li class="nav-item dropdown hidden-caret">
                        <a class="nav-link dropdown-toggle" href="{{ url('') }}" target="_blank">
                            <i class="fas fa-location-arrow"></i>
                        </a>

                    </li>
                </ul>
            </div>
        </nav>
        <!-- End Navbar -->
    </div>



    <!-- Sidebar -->
    <div class="sidebar sidebar-style-2">
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
            <div class="sidebar-content">
                <div class="user">
                    <div class="avatar-sm float-left mr-2">
                        <img src="{{ asset('assets/img/profile.jpg') }}" alt="..." class="avatar-img rounded-circle">
                    </div>
                    <div class="info">
                        <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                            <span>

                                {{ Auth::user()->name }}



                                <span class="user-level">Administrator</span>
                                <span class="caret"></span>
                            </span>
                        </a>
                        <div class="clearfix"></div>

                        <div class="collapse in" id="collapseExample">
                            <ul class="nav">
                                <!-- <li>
                                    <a href="#profile">
                                        <span class="link-collapse">My Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#edit">
                                        <span class="link-collapse">Edit Profile</span>
                                    </a>
                                </li> -->
                                <li>
                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                            <span class="link-collapse">{{ __('Log Out') }}</span>
                                        </x-dropdown-link>
                                    </form>

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <ul class="nav nav-primary">
                    <li class="nav-item">
                        <a href="/admin" class="collapsed" aria-expanded="false">
                            <i class="fas fa-home"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>

                    <li class="nav-section">
                        <span class="sidebar-mini-icon">
                            <i class="fa fa-ellipsis-h"></i>
                        </span>
                        <h4 class="text-section">Home Sections</h4>
                    </li>

                    {{-- <li class="nav-item">
                        <a href="/admin/hero">
                            <i class="fi fi-rr-settings-sliders"></i>
                            <p>Hero Sections</p>
                        </a>
                    </li> --}}

                    <li class="nav-item">
                        <a data-toggle="collapse" href="#hero">
                            <i class="fi fi-rr-settings-sliders"></i>
                            <p>Hero Sections</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse {{ in_array(request()->path(), ['admin/hero', 'admin/sliders/all' , 'admin/sliders/create']) ? 'show' : '' }}" id="hero">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a class="{{ request()->is('admin/hero') ? 'bg-header-actve text-white ' : '' }}" href="{{ route('admin.hero') }}">
                                        <span class="sub-item">Qualities</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="{{ request()->is('admin/sliders/all') ? 'bg-header-actve text-white ' : '' }}" href="{{ route('admin.sliders.all') }}">
                                        <span class="sub-item">All Sliders</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="{{ request()->is('admin/sliders/create') ? 'bg-header-actve text-white ' : '' }}" href="{{ route('admin.sliders.create') }}">
                                        <span class="sub-item">Add New Slider</span>
                                    </a>
                                </li>
                                {{-- </li> --}}
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a href="/admin/about">
                            <i class="fi fi-rr-info"></i>
                            <p>About Sections</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/admin/quotes">
                            <i class="fi fi-rr-quote-right"></i>
                            <p>Quotes Sections</p>
                        </a>
                    </li>


                    <li class="nav-item">
                        <a data-toggle="collapse" href="#expertise">
                            <i class="fi fi-rr-apps-sort"></i>
                            <p>Expertise Sections</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse {{ in_array(request()->path(), ['admin/expertise-title', 'admin/expertise-info/all' , 'admin/expertise-info/create']) ? 'show' : '' }}" id="expertise">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a class="{{ request()->is('admin/expertise-title') ? 'bg-header-actve text-white ' : '' }}" href="{{ route('admin.expertise-title') }}">
                                        <span class="sub-item">Expertise Section Title</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="{{ request()->is('admin/expertise-info/all') ? 'bg-header-actve text-white ' : '' }}" href="{{ route('admin.expertise-info.all') }}">
                                        <span class="sub-item">All Expertise</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="{{ request()->is('admin/expertise-info/create') ? 'bg-header-actve text-white ' : '' }}" href="{{ route('admin.expertise-info.create') }}">
                                        <span class="sub-item">Add New Expertise</span>
                                    </a>
                                </li>
                                {{-- </li> --}}
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a data-toggle="collapse" href="#testimonial">
                            <i class="fi fi-rr-comment-alt"></i>
                            <p>Testimonials Sections</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse {{ in_array(request()->path(), ['admin/testimonial-title', 'admin/testimonial-info/all' , 'admin/testimonial-info/create']) ? 'show' : '' }}" id="testimonial">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a class="{{ request()->is('admin/testimonial-title') ? 'bg-header-actve text-white ' : '' }}" href="{{ route('admin.testimonial-title') }}">
                                        <span class="sub-item">Testimonials Section Title</span>
                                    </a>
                                    <a class="{{ request()->is('admin/testimonial-info/all') ? 'bg-header-actve text-white ' : '' }}" href="{{ route('admin.testimonial-info.all') }}">
                                        <span class="sub-item">All Testimonial</span>
                                    </a>
                                    <a class="{{ request()->is('admin/testimonial-info/create') ? 'bg-header-actve text-white ' : '' }}" href="{{ route('admin.testimonial-info.create') }}">
                                        <span class="sub-item">Add New Testimonial</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a data-toggle="collapse" href="#business">
                            <i class="fi fi-rr-briefcase"></i>
                            <p>Business Sections</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse {{ in_array(request()->path(), ['admin/business-title', 'admin/business-info/all' , 'admin/business-info/create']) ? 'show' : '' }}" id="business">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a class="{{ request()->is('admin/business-title') ? 'bg-header-actve text-white ' : '' }}" href="{{ route('admin.business-title') }}">
                                        <span class="sub-item">Business Section Title</span>
                                    </a>
                                    <a class="{{ request()->is('admin/business-info/all') ? 'bg-header-actve text-white ' : '' }}" href="{{ route('admin.business-info.all') }}">
                                        <span class="sub-item">All Business</span>
                                    </a>
                                    <a class="{{ request()->is('admin/business-info/create') ? 'bg-header-actve text-white ' : '' }}" href="{{ route('admin.business-info.create') }}">
                                        <span class="sub-item">Add New Business</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a data-toggle="collapse" href="#achievement">
                            <i class="fi fi-rr-trophy star"></i>
                            <p>Achievement Sections</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse {{ in_array(request()->path(), ['admin/achievement-title', 'admin/achievement-info/all' , 'admin/achievement-info/create']) ? 'show' : '' }}" id="achievement">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a class="{{ request()->is('admin/achievement-title') ? 'bg-header-actve text-white ' : '' }}" href="{{ route('admin.achievement-title') }}">
                                        <span class="sub-item">Achievement Section Title</span>
                                    </a>
                                    <a class="{{ request()->is('admin/achievement-info/all') ? 'bg-header-actve text-white ' : '' }}" href="{{ route('admin.achievement-info.all') }}">
                                        <span class="sub-item">All Achievement</span>
                                    </a>
                                    <a class="{{ request()->is('admin/achievement-info/create') ? 'bg-header-actve text-white ' : '' }}" href="{{ route('admin.achievement-info.create') }}">
                                        <span class="sub-item">Add New Achievement</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('admin.image') }}">
                            <i class="fi fi-rr-picture"></i>
                            <p>Gallery Section</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a data-toggle="collapse" href="#blog">
                            <i class="fi fi-rr-edit"></i>
                            <p>Blog Section</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse {{ in_array(request()->path(), ['admin/blog-section-title', 'admin/blog/blog-cat/all' , 'admin/blog/blog-cat/create', 'admin/blog/blog-post/all' , 'admin/blog/blog-post/create' ]) ? 'show' : '' }}" id="blog">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a class="{{ request()->is('admin/blog-section-title') ? 'bg-header-actve text-white ' : '' }}" href="{{ route('admin.blog-title') }}">
                                        <span class="sub-item">Blog Section Title</span>
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="collapse" href="#blog-cat">
                                        <i class="fi fi-rr-list"></i>
                                        <p>Category</p>
                                        <span class="caret"></span>
                                    </a>
                                    <div class="collapse {{ in_array(request()->path(), ['admin/blog/blog-cat/all' , 'admin/blog/blog-cat/create']) ? 'show' : '' }}" id="blog-cat">
                                        <ul class="nav nav-collapse">
                                            <li>
                                                <a class="{{ request()->is('admin/blog/blog-cat/all') ? 'bg-header-actve text-white ' : '' }}" href="{{ route('admin.blog-cat.all') }}">
                                                    <span class="sub-item">All Categories</span>
                                                </a>
                                                <a class="{{ request()->is('admin/blog/blog-cat/create') ? 'bg-header-actve text-white ' : '' }}" href="{{ route('admin.blog-cat.create') }}">
                                                    <span class="sub-item">Add Category</span>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>

                                    <a data-toggle="collapse" href="#blog-list">
                                        <i class="fi fi-rr-list"></i>
                                        <p>Blog List</p>
                                        <span class="caret"></span>
                                    </a>

                                    <div class="collapse {{ in_array(request()->path(), ['admin/blog/blog-post/all' , 'admin/blog/blog-post/create']) ? 'show' : '' }}" id="blog-list">
                                        <ul class="nav nav-collapse">
                                            <li>
                                                <a class="{{ request()->is('admin/blog/blog-post/all') ? 'bg-header-actve text-white ' : '' }}" href="{{ route('admin.blog-post.all') }}">
                                                    <span class="sub-item">All Blogs</span>
                                                </a>
                                                <a class="{{ request()->is('admin/blog/blog-post/create') ? 'bg-header-actve text-white ' : '' }}" href="{{ route('admin.blog-post.create') }}">
                                                    <span class="sub-item">Add New Blog</span>
                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a data-toggle="collapse" href="#contact">
                            <i class="fi fi-rr-address-book"></i>
                            <p>Contact Sections</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse {{ in_array(request()->path(), ['admin/social-media' , 'admin/message/message-type/all' , 'admin/message/message-type/create', 'admin/message/all' ]) ? 'show' : '' }}" id="contact">
                            <ul class="nav nav-collapse">
                                <li>
                                    <a class="{{ request()->is('admin/social-media') ? 'bg-header-actve text-white ' : '' }}" href="{{ route('admin.contact') }}">
                                        <span class="sub-item">Contacts info</span>
                                    </a>
                                    <a class="{{ request()->is('admin/message/message-type/all') ? 'bg-header-actve text-white ' : '' }}" href="{{ route('admin.message-type.all') }}">
                                        <span class="sub-item">All Type</span>
                                    </a>
                                    <a class="{{ request()->is('admin/message/message-type/create') ? 'bg-header-actve text-white ' : '' }}" href="{{ route('admin.message-type.create') }}">
                                        <span class="sub-item">Add Type</span>
                                    </a>
                                    <a class="{{ request()->is('admin/message/all') ? 'bg-header-actve text-white ' : '' }}" href="{{ route('admin.message.all') }}">
                                        <span class="sub-item">All Message</span>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('admin.file') }}">
                            <i class="fi fi-rr-document"></i>
                            <p>File Manager</p>
                        </a>
                    </li>

                    <li class="nav-section">
                        <span class="sidebar-mini-icon">
                            <i class="fa fa-ellipsis-h"></i>
                        </span>
                        <h4 class="text-section">Site Settings</h4>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('admin.header') }}">
                            <i class="fi fi-rr-menu-burger"></i>
                            <p>Header Settings</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('admin.footer') }}">
                            <i class="fi fi-rr-settings-sliders"></i>
                            <p>Footer Settings</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('admin.site') }}">
                            <i class="fi fi-rr-settings"></i>
                            <p>Site Settings</p>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </div>

    <script>
        const currentLocation = window.location.pathname;
        const menuItems = document.querySelectorAll('.nav-item');

        menuItems.forEach(item => {
            const anchor = item.querySelector("a")
            const href = (anchor.getAttribute("href"))
            console.log(href)
            console.log(currentLocation)
            if (href === currentLocation) {
                item.classList.add('active');
            } else {
                item.classList.remove('active');
            }
        });

    </script>

    <!-- End Sidebar -->
    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
