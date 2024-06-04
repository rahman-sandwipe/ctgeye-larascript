@php
    $category=App\Models\Category::where('status','active')->latest()->get();
@endphp
<header class="header header3 sticky-on">
    <div id="topbar-wrap">
        <div class="topbar-global color-dark-1-fixed">
            <div class="container">
                <div class="d-flex align-items-center justify-content-between gap-1">
                    <div class="social-layout-1">
                        <label class="d-none d-lg-block">Follow Us</label>
                        <ul class="inline-list">
                            <li class="single-item"><a aria-label="Learn more from Facebook" href="#" title="facebook"><i class="solid-facebook2"></i></a></li>
                            <li class="single-item"><a aria-label="Learn more from Linkedln" href="#" title="linkedln"><i class="solid-linkedln"></i></a></li>
                            <li class="single-item"><a aria-label="Learn more from Mail Fast" href="#" title="mail-fast"><i class="regular-mail-fast"></i></a></li>
                            <li class="single-item"><a aria-label="Learn more from Youtube" href="#" title="youtube"><i class="solid-youtube"></i></a></li>
                        </ul>
                    </div>
                    <div class="d-flex align-items-center gap-4">
                        <div class="current-date d-lg-block d-none">July 5, 2023</div>
                        <div class="d-flex align-items-center gap-2">
                            <div class="my_switcher">
                                <ul>
                                    <li title="Light Mode">
                                        <button type="button" aria-label="Light" class="setColor light" data-theme="light">
                                            <i class="solid-light-mode"></i>
                                        </button>
                                    </li>
                                    <li title="Dark Mode">
                                        <button type="button" aria-label="Dark" class="setColor dark" data-theme="dark">
                                            <i class="solid-half-moon"></i>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                            {{-- <div class="notification-wrap dropdown-item-wrap">
                                <div class="navbar navbar-expand-md">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle has-notification" href="#" id="navbarDropdown1" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" aria-label="Notification">
                                            <span class="icon-holder"><i class="regular-notification-011"></i></span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end animate slideIn" aria-labelledby="navbarDropdown1">
                                            <div class="dropdown-menu-inner">
                                                <label class="article-number">Recent Articles (10)</label>
                                                <div class="item-wrap">
                                                    <a href="post-format-default.html" class="notification-item">
                                                        <div class="post-box">
                                                            <div class="figure-holder radius-default img-height-100">
                                                                <img width="540" height="600" src="assets/media/blog/post93.webp" alt="Post">
                                                            </div>
                                                            <div class="content-holder">
                                                                <h3 class="entry-title color-dark-1 h3-extra-small">Could The Complement Our Digit.</h3>
                                                                <ul class="entry-meta color-dark-1">
                                                                    <li>
                                                                        <i class="regular-clock-circle"></i>3 min read
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="post-format-default.html" class="notification-item">
                                                        <div class="post-box">
                                                            <div class="figure-holder radius-default img-height-100">
                                                                <img width="540" height="600" src="assets/media/blog/post94.webp" alt="Post">
                                                            </div>
                                                            <div class="content-holder">
                                                                <h3 class="entry-title color-dark-1 h3-extra-small">On August 15th, an alarming email popped.</h3>
                                                                <ul class="entry-meta color-dark-1">
                                                                    <li>
                                                                        <i class="regular-clock-circle"></i>8 min read
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <a href="post-format-default.html" class="notification-item">
                                                        <div class="post-box">
                                                            <div class="figure-holder radius-default img-height-100">
                                                                <img width="540" height="600" src="assets/media/blog/post95.webp" alt="Post">
                                                            </div>
                                                            <div class="content-holder">
                                                                <h3 class="entry-title color-dark-1 h3-extra-small">Nam eget lorem mattis, consequat felis quis, luctus augue.</h3>
                                                                <ul class="entry-meta color-dark-1">
                                                                    <li>
                                                                        <i class="regular-clock-circle"></i>3 min read
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="notification-btn-wrap">
                                                    <a href="archive.html" class="w-100 axil-btn axil-btn-ghost btn-color-alter axil-btn-small">View All
                                                        <div class="icon-holder"><i class="regular-arrow-right"></i></div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="sticky-placeholder"></div>
    <div id="navbar-wrap" class="navbar-wrap">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <div class="d-md-block d-none">
                    <a href="index.html" class="link-wrap desktop-logo img-height-100" aria-label="Site Logo"><img width="131" height="47" src="assets/media/logo-dark.svg" alt="logo"></a>
                </div>
                <div class="d-md-none d-block">
                    <a href="index.html" class="link-wrap mobile-logo img-height-100" aria-label="Site Logo"><img width="86" height="31" src="assets/media/mobile-logo.svg" alt="logo"></a>
                </div>
                <!-- Start Mainmenu Nav -->
                <div id="mobilemenu-popup" class="offcanvas mobile-menu-wrap">
                    <div class="mobile-logo-wrap d-lg-none d-block">
                        <div class="logo-holder">
                            <a href="index.html" class="link-wrap single-logo light-mode img-height-100" aria-label="Site Logo"><img width="131" height="47" src="assets/media/logo-dark.svg" alt="logo"></a>
                            <a href="index.html" class="link-wrap single-logo dark-mode img-height-100" aria-label="Site Logo"><img width="131" height="47" src="assets/media/logo-light.svg" alt="logo" aria-label="Site Logo"></a>
                        </div>
                        <button aria-label="Offcanvas" type="button" class="mobile-close" data-bs-dismiss="offcanvas"><i class="regular-multiply-circle"></i></button>
                    </div>
                    <nav id="dropdown" class="template-main-menu">
                        <ul class="menu">
                            <li class="menu-item">
                                <a href="{{ route('home') }}">প্রচ্ছদ</a>
                            </li>
                            @foreach ($category as $item)
                                @php
                                    $subcategory=App\Models\Subcategory::with('category')->where(['status'=>'active','cat_id'=>$item->id])->latest()->get();
                                @endphp
                                <li class="menu-item @if(count($subcategory)>0) menu-item-has-children @endif">
                                    <a href="#">{{ $item->name }}</a>
                                    @if(count($subcategory)>0)
                                    <ul class="sub-menu">
                                        @foreach ($subcategory as $item)
                                            <li class="menu-item"><a href="index.html">{{ $item->name }}</a></li>
                                        @endforeach
                                    </ul>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    </nav>
                </div>
                <!-- End Mainmanu Nav -->
                <div class="d-flex align-items-center gap-3">
                    <div class="search-trigger-wrap">
                        <a href="#search-trigger" title="search">
                            <i class="regular-search-02"></i>
                        </a>
                    </div>
                    <div class="profile-wrap dropdown-item-wrap">
                        <div class="navbar navbar-expand-md">
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" aria-label="Profile">
                                    <span class="thumble-holder img-height-100"><img width="40" height="40" src="assets/media/blog/profile4.webp" alt="Profile"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end animate slideIn" aria-labelledby="navbarDropdown2">
                                    <div class="dropdown-menu-inner">
                                        <div class="profile-content with-icon">
                                            <ul>
                                                <li><a href="author.html">
                                                        <div class="icon-holder"><i class="regular-user"></i></div>Profile
                                                    </a></li>
                                                <li><a href="author.html">
                                                        <div class="icon-holder"><i class="regular-activity"></i></div>Activity Log
                                                    </a></li>
                                                <li><a href="author.html">
                                                        <div class="icon-holder"><i class="regular-plus-rectangle"></i></div>Library
                                                    </a></li>
                                            </ul>
                                        </div>
                                        <div class="profile-content">
                                            <ul>
                                                <li><a href="author.html">Become a Member</a></li>
                                                <li><a href="author.html">Apply for author verification</a></li>
                                                <li><a href="author.html">Settings</a></li>
                                            </ul>
                                        </div>
                                        <div class="mt-3">
                                            <a href="#" class="w-100 axil-btn axil-btn-ghost btn-color-alter axil-btn-small">Sign Out</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mobile-menu-btn d-lg-none d-block">
                        <button aria-label="Offcanvas" class="btn-wrap" data-bs-toggle="offcanvas" data-bs-target="#mobilemenu-popup">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>