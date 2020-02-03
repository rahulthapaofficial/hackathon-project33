<header>
    <div class="top">
        <div class="container">
            <div class="row">
                <div class="span6">
                    <ul class="topmenu">
                        <li><a href="#"> Home</a> &#47;</li>
                        <li><a href="{{ route('dashboard.index') }}">Sign In</a> &#47;</li>
                        <li><a href="{{ url('register') }}">Sign Up</a></li>
                    </ul>
                </div>
                <div class="span6">
                    <ul class="social-network">
                        <li><a href="#" data-placement="bottom" title="Facebook"><i
                                    class="icon-circled icon-bglight icon-facebook"></i></a></li>
                        <li><a href="#" data-placement="bottom" title="Twitter"><i
                                    class="icon-circled icon-bglight icon-twitter"></i></a></li>
                        <li><a href="#" data-placement="bottom" title="Linkedin"><i
                                    class="icon-circled icon-linkedin icon-bglight"></i></a></li>
                        <li>
                            <abackgar href="#" data-placement="bottom" title="Pinterest"><i
                                    class="icon-circled icon-pinterest  icon-bglight"></i></abackgar>
                        </li>
                        <li><a href="#" data-placement="bottom" title="Google +"><i
                                    class="icon-circled icon-google-plus icon-bglight"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">

        <div class="row nomargin">
            <div class="span4">
                <div class="logo">
                    <h1><a href="{{ url('/') }}"><i class=""></i>SOBAR</a></h1>
                </div>
            </div>
            <div class="span8">
                <div class="navbar navbar-static-top">
                    <div class="navigation">
                        <nav>
                            <ul class="nav topnav">
                                <li class="active">
                                    <a href="{{ url('/') }}">Home</a>
                                </li>

                                <li class="dropdown">
                                    <a href="https://visitnepal2020.com/">Blog</a>

                                </li>
                                <li>
                                    <a href="{{ url('/contact') }}">Contact </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- end navigation -->
                </div>
            </div>
        </div>
    </div>
</header>