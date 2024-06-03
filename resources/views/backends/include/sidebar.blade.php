
<div id="left-sidebar" class="sidebar">
    <div class="sidebar-scroll">
        <div class="user-account">
            <img src="{{ asset('uploads/images/user.png') }}" class="rounded-circle user-photo" alt="User Profile Picture">
            <div class="dropdown">
                <span>Welcome,</span>
                <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown">
                    <strong>{{ Auth::user()->name }}</strong>
                </a>
                <ul class="dropdown-menu dropdown-menu-right account">
                    <li><a href="{{ route('profile.edit') }}"><i class="icon-user"></i>{{ __('My Profile') }}</a></li>
                    <li><a href="javascript:void(0);"><i class="icon-settings"></i>{{ __('Settings') }}</a></li>
                    <li class="divider"></li>
                    <!-- Authentication -->
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                            this.closest('form').submit();">
                            <i class="icon-power"></i>{{ __('Log Out') }}</a>
                        </form>
                    </li>
                </ul>
            </div>

            <hr>
            <ul class="row list-unstyled">
                <li class="col-4">
                    <small>News</small>
                    <h6>{{ App\Models\News::count()}}</h6>
                </li>
                <li class="col-4">
                    <small>Users</small>
                    <h6>{{ App\Models\User::count()}}</h6>
                </li>
                {{-- <li class="col-4">
                    <small>Auth News</small>
                    <h6>{{ App\Models\News::count()->where('user_id',Auth::user()->id) s}}</h6>
                </li> --}}
            </ul>
        </div>
        <!-- Nav tabs -->
        <ul class="nav nav-tabs">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#menu">Menu</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Chat"><i class="icon-book-open"></i></a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#setting"><i class="icon-settings"></i></a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#question"><i class="icon-question"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content p-l-0 p-r-0">
            <div class="tab-pane active" id="menu">
                <nav id="left-sidebar-nav" class="sidebar-nav">
                    <ul id="main-menu" class="metismenu">
                        <li class="{{ request()->is(auth()->user()->type) ? 'active' : '' }}">
                            <a href="{{ route(auth()->user()->type) }}"><i class="icon-home"></i> <span>{{ __('Dashboard') }}</span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="has-arrow"><i class="fa fa-newspaper-o"></i> <span>News</span></a>
                            <ul>
                                <li><a href="{{ route('news') }}">News List</a></li>
                                <li><a href="{{ route('create.news') }}">New Post</a></li>
                                {{-- <li><a href="{{ route('user.news') }}">User News</a></li> --}}
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="has-arrow"><i class="fa fa-video-camera"></i> <span>Video</span></a>
                            <ul>
                                <li><a href="{{ route('create.video') }}">Add New</a></li>
                                <li><a href="{{ route('videos') }}">Videos</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="has-arrow"><i class="icon-list"></i> <span>{{ __('Category') }}</span></a>
                            <ul>
                                <li><a href="{{ route('category') }}">{{ __('Category') }}</a></li>
                                <li><a href="{{ route('create.category') }}">{{ __('Add New') }}</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="has-arrow"><i class="icon-list"></i> <span>{{ __('Sub Category') }}</span></a>
                            <ul>
                                <li><a href="{{ route('subcategory') }}">{{ __('Sub Category') }}</a></li>
                                <li><a href="{{ route('create.subcategory') }}">{{ __('Add New') }}</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="has-arrow"><i class="icon-grid"></i> <span>{{ __('User') }}</span></a>
                            <ul>
                                <li><a href="{{ route('register') }}">New Auth</a></li>
                                <li><a href="{{ route('usersList') }}">All User</a></li>
                                <li><a href="{{ route('authors') }}">Authors</a></li>
                                <li><a href="{{ route('teams') }}">Teams</a></li>
                                <li><a href="{{ route('teachers') }}">Teachers</a></li>
                                <li><a href="{{ route('users') }}">Users</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="tab-pane p-l-15 p-r-15" id="Chat">
                <ul class="list-unstyled question">
                    <li class="menu-heading">HOW-TO</li>
                    
                    <li>
                        <a href="{{ route('news') }}" class="has-arrow"><i class="fa fa-newspaper-o"></i> <span>News List</span></a>
                    </li>
                    <li>
                        <a href="{{ route('news') }}" class="has-arrow"><i class="fa fa-newspaper-o"></i> <span>Probile News List</span></a>
                    </li>
                    <li>
                        <a href="{{ route('news') }}" class="has-arrow"><i class="fa fa-newspaper-o"></i> <span>Reporter</span></a>
                    </li>
                </ul>
            </div>
            <div class="tab-pane p-l-15 p-r-15" id="setting">
                <h6>Choose Skin</h6>
                <ul class="choose-skin list-unstyled">
                    <li data-theme="purple">
                        <div class="purple"></div>
                        <span>Purple</span>
                    </li>
                    <li data-theme="blue">
                        <div class="blue"></div>
                        <span>Blue</span>
                    </li>
                    <li data-theme="cyan" class="active">
                        <div class="cyan"></div>
                        <span>Cyan</span>
                    </li>
                    <li data-theme="green">
                        <div class="green"></div>
                        <span>Green</span>
                    </li>
                    <li data-theme="orange">
                        <div class="orange"></div>
                        <span>Orange</span>
                    </li>
                    <li data-theme="blush">
                        <div class="blush"></div>
                        <span>Blush</span>
                    </li>
                </ul>
                <hr>
                <h6>General Settings</h6>
                <ul class="setting-list list-unstyled">
                    <li>
                        <label class="fancy-checkbox">
                        <input type="checkbox" name="checkbox">
                        <span>Report Panel Usag</span>
                        </label>
                    </li>
                    <li>
                        <label class="fancy-checkbox">
                        <input type="checkbox" name="checkbox" checked>
                        <span>Email Redirect</span>
                        </label>
                    </li>
                    <li>
                        <label class="fancy-checkbox">
                        <input type="checkbox" name="checkbox" checked>
                        <span>Notifications</span>
                        </label>                      
                    </li>
                    <li>
                        <label class="fancy-checkbox">
                        <input type="checkbox" name="checkbox">
                        <span>Auto Updates</span>
                        </label>
                    </li>
                    <li>
                        <label class="fancy-checkbox">
                        <input type="checkbox" name="checkbox">
                        <span>Offline</span>
                        </label>
                    </li>
                    <li>
                        <label class="fancy-checkbox">
                        <input type="checkbox" name="checkbox">
                        <span>Location Permission</span>
                        </label>
                    </li>
                </ul>
            </div>
            <div class="tab-pane p-l-15 p-r-15" id="question">
                <form>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="icon-magnifier"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Search...">
                    </div>
                </form>
                <ul class="list-unstyled question">
                    <li class="menu-heading">HOW-TO</li>
                    <li><a href="javascript:void(0);">How to Create Campaign</a></li>
                    <li><a href="javascript:void(0);">Boost Your Sales</a></li>
                    <li><a href="javascript:void(0);">Website Analytics</a></li>
                    <li class="menu-heading">ACCOUNT</li>
                    <li><a href="javascript:void(0);">Cearet New Account</a></li>
                    <li><a href="javascript:void(0);">Change Password?</a></li>
                    <li><a href="javascript:void(0);">Privacy &amp; Policy</a></li>
                    <li class="menu-heading">BILLING</li>
                    <li><a href="javascript:void(0);">Payment info</a></li>
                    <li><a href="javascript:void(0);">Auto-Renewal</a></li>
                    <li class="menu-button m-t-30">
                        <a href="javascript:void(0);" class="btn btn-primary"><i class="icon-question"></i> Need Help?</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>