<div class="container">

    {{--<div class="navbar-header">--}}

        {{--<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">--}}
            {{--<i class="fa fa-cogs"></i>--}}
        {{--</button>--}}

        {{--<a class="navbar-brand navbar-brand-image" href="./index.html">--}}
            {{--<img src="{{ asset('Theme/img/logo.png') }}" alt="Site Logo">--}}
        {{--</a>--}}

    {{--</div> <!-- /.navbar-header -->--}}

    {{--<div class="navbar-collapse collapse">--}}



        {{--<ul class="nav navbar-nav noticebar navbar-left">--}}

            {{--<li class="dropdown">--}}
                {{--<a href="{{ asset('page-notifications.html') }}" class="dropdown-toggle" data-toggle="dropdown">--}}
                    {{--<i class="fa fa-bell"></i>--}}
                    {{--<span class="navbar-visible-collapsed">&nbsp;Notifications&nbsp;</span>--}}
                    {{--<span class="badge">3</span>--}}
                {{--</a>--}}

                {{--<ul class="dropdown-menu noticebar-menu" role="menu">--}}
                    {{--<li class="nav-header">--}}
                        {{--<div class="pull-left">--}}
                            {{--Notifications--}}
                        {{--</div>--}}

                        {{--<div class="pull-right">--}}
                            {{--<a href="javascript:;">Mark as Read</a>--}}
                        {{--</div>--}}
                    {{--</li>--}}

                    {{--<li>--}}
                        {{--<a href="{{ asset('css/bootstrap.min.css') }}./page-notifications.html" class="noticebar-item">--}}
                {{--<span class="noticebar-item-image">--}}
                  {{--<i class="fa fa-cloud-upload text-success"></i>--}}
                {{--</span>--}}
                            {{--<span class="noticebar-item-body">--}}
                  {{--<strong class="noticebar-item-title">Templates Synced</strong>--}}
                  {{--<span class="noticebar-item-text">20 Templates have been synced to the Mashon Demo instance.</span>--}}
                  {{--<span class="noticebar-item-time"><i class="fa fa-clock-o"></i> 12 minutes ago</span>--}}
                {{--</span>--}}
                        {{--</a>--}}
                    {{--</li>--}}

                    {{--<li>--}}
                        {{--<a href="{{ asset('page-notifications.html') }}" class="noticebar-item">--}}
                {{--<span class="noticebar-item-image">--}}
                  {{--<i class="fa fa-ban text-danger"></i>--}}
                {{--</span>--}}
                            {{--<span class="noticebar-item-body">--}}
                  {{--<strong class="noticebar-item-title">Sync Error</strong>--}}
                  {{--<span class="noticebar-item-text">5 Designs have been failed to be synced to the Mashon Demo instance.</span>--}}
                  {{--<span class="noticebar-item-time"><i class="fa fa-clock-o"></i> 20 minutes ago</span>--}}
                {{--</span>--}}
                        {{--</a>--}}
                    {{--</li>--}}

                    {{--<li class="noticebar-menu-view-all">--}}
                        {{--<a href="{{ asset('page-notifications.html') }}">View All Notifications</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}


            {{--<li class="dropdown">--}}
                {{--<a href="{{ asset('page-notifications.html') }}" class="dropdown-toggle" data-toggle="dropdown">--}}
                    {{--<i class="fa fa-envelope"></i>--}}
                    {{--<span class="navbar-visible-collapsed">&nbsp;Messages&nbsp;</span>--}}
                {{--</a>--}}

                {{--<ul class="dropdown-menu noticebar-menu" role="menu">--}}
                    {{--<li class="nav-header">--}}
                        {{--<div class="pull-left">--}}
                            {{--Messages--}}
                        {{--</div>--}}

                        {{--<div class="pull-right">--}}
                            {{--<a href="javascript:;">New Message</a>--}}
                        {{--</div>--}}
                    {{--</li>--}}

                    {{--<li>--}}
                        {{--<a href="{{ asset('page-notifications.html') }}" class="noticebar-item">--}}
                {{--<span class="noticebar-item-image">--}}
                  {{--<img src="{{ asset('Theme/img/avatars/avatar-1-md.jpg') }}" style="width: 50px" alt="">--}}
                {{--</span>--}}

                            {{--<span class="noticebar-item-body">--}}
                  {{--<strong class="noticebar-item-title">New Message</strong>--}}
                  {{--<span class="noticebar-item-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit...</span>--}}
                  {{--<span class="noticebar-item-time"><i class="fa fa-clock-o"></i> 20 minutes ago</span>--}}
                {{--</span>--}}
                        {{--</a>--}}
                    {{--</li>--}}

                    {{--<li>--}}
                        {{--<a href="{{ asset('page-notifications.html') }}" class="noticebar-item">--}}
                {{--<span class="noticebar-item-image">--}}
                  {{--<img src="{{ asset('Theme/img/avatars/avatar-2-md.jpg') }}" style="width: 50px" alt="">--}}
                {{--</span>--}}

                            {{--<span class="noticebar-item-body">--}}
                  {{--<strong class="noticebar-item-title">New Message</strong>--}}
                  {{--<span class="noticebar-item-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit...</span>--}}
                  {{--<span class="noticebar-item-time"><i class="fa fa-clock-o"></i> 5 hours ago</span>--}}
                {{--</span>--}}
                        {{--</a>--}}
                    {{--</li>--}}

                    {{--<li class="noticebar-menu-view-all">--}}
                        {{--<a href="{{ asset('page-notifications.html') }}">View All Messages</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}


            {{--<li class="dropdown">--}}
                {{--<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">--}}
                    {{--<i class="fa fa-exclamation-triangle"></i>--}}
                    {{--<span class="navbar-visible-collapsed">&nbsp;Alerts&nbsp;</span>--}}
                {{--</a>--}}

                {{--<ul class="dropdown-menu noticebar-menu noticebar-hoverable" role="menu">--}}
                    {{--<li class="nav-header">--}}
                        {{--<div class="pull-left">--}}
                            {{--Alerts--}}
                        {{--</div>--}}
                    {{--</li>--}}

                    {{--<li class="noticebar-empty">--}}
                        {{--<h4 class="noticebar-empty-title">No alerts here.</h4>--}}
                        {{--<p class="noticebar-empty-text">Check out what other makers are doing on Explore!</p>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</li>--}}

        {{--</ul>--}}

        <ul class="nav navbar-nav navbar-right">
            @if (Auth::guest())
                <li>
                    <a href="{{ url('/login') }}">Login</a>
                </li>

                <li>
                    <a href="{{ url('/register') }}">Register</a>
                </li>
            @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{ asset('') }}">
                                <i class="fa fa-cogs"></i>
                                &nbsp;&nbsp;Settings
                            </a>
                        </li>

                        <li class="divider"></li>
                        <li>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>

                    </ul>
                </li>
            @endif


            {{--<li class="dropdown navbar-profile">--}}
                {{--<a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;">--}}
                    {{--<img src="{{ asset('Theme/img/avatars/avatar-1-xs.jpg') }}" class="navbar-profile-avatar" alt="">--}}
                    {{--<span class="navbar-profile-label">rod@rod.me &nbsp;</span>--}}
                    {{--<i class="fa fa-caret-down"></i>--}}
                {{--</a>--}}
                {{--<ul class="dropdown-menu" role="menu">--}}

                    {{--<li>--}}
                        {{--<a href="{{ asset('page-profile.html') }}">--}}
                            {{--<i class="fa fa-user"></i>--}}
                            {{--&nbsp;&nbsp;My Profile--}}
                        {{--</a>--}}
                    {{--</li>--}}

                    {{--<li>--}}
                        {{--<a href="{{ asset('page-pricing.html') }}">--}}
                            {{--<i class="fa fa-dollar"></i>--}}
                            {{--&nbsp;&nbsp;Plans &amp; Billing--}}
                        {{--</a>--}}
                    {{--</li>--}}

                    {{--<li>--}}
                        {{--<a href="{{ asset('') }}">--}}
                            {{--<i class="fa fa-cogs"></i>--}}
                            {{--&nbsp;&nbsp;Settings--}}
                        {{--</a>--}}
                    {{--</li>--}}

                    {{--<li class="divider"></li>--}}

                    {{--<li>--}}
                        {{--<a href="{{ asset('account-login.html') }}">--}}
                            {{--<i class="fa fa-sign-out"></i>--}}
                            {{--&nbsp;&nbsp;Logout--}}
                        {{--</a>--}}
                    {{--</li>--}}

                {{--</ul>--}}

            {{--</li>--}}

        </ul>







    </div> <!--/.navbar-collapse -->

</div> <!-- /.container -->
