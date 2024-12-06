<!-- header start -->
<header id="xb-header-area" class="header-area">
    <div class="xb-header stricky">
        <div class="container">
            <div class="header__wrap ul_li_between">
                <div class="header-logo">
                    <a href="{{ route('web.index') }}"><img src="{{ asset('assets/web/assets/img/logo/Logo.svg') }}"
                            alt=""></a>
                </div>
                <div class="main-menu__wrap ul_li navbar navbar-expand-lg">
                    <nav class="main-menu collapse navbar-collapse">
                        <ul>
                            <li class="menu-item-has-children">
                                <a href="{{ route('web.index') }}"><span>Home</span></a>
                                <ul class="submenu">
                                    <li><a href="{{ route('web.index') }}"><span>Operational Metrics</span></a></li>

                                </ul>
                            </li>
                            <li>
                                <a class="scrollspy-btn" href="#Educational"><span>Educational</span></a>
                            </li>
                            <li>
                                <a class="scrollspy-btn" href="#Machinery"><span>Machinery</span></a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="{{ route('web.blog.index') }}"><span>Blog</span></a>
                                <ul class="submenu">
                                    <li><a href="{{ route('web.blog.index') }}"><span>Blog</span></a></li>
                                    <li><a href="#blog-single"><span>Blog Details</span></a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ route('web.contact.index') }}"><span>Contact</span></a>
                            </li>
                        </ul>
                    </nav>
                    <div class="xb-header-wrap">
                        <div class="xb-header-menu">
                            <div class="xb-header-menu-scroll">
                                <div class="xb-menu-close xb-hide-xl xb-close"></div>
                                <div class="xb-logo-mobile xb-hide-xl">
                                    <a href="index.html" rel="home"><img
                                            src="{{ asset('assets/web/assets/img/logo/logo.svg') }}" alt=""></a>
                                </div>
                                <div class="xb-header-mobile-search xb-hide-xl">
                                    <form role="search" action="#">
                                        <input type="text" placeholder="Search..." name="s"
                                            class="search-field">
                                    </form>
                                </div>
                                <nav class="xb-header-nav">
                                    <ul class="xb-menu-primary clearfix">
                                        <li class="menu-item menu-item-has-children">
                                            <a href="index.html"><span>Home</span></a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="#Operational"><span>Operational
                                                            Metrics</span></a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item">
                                            <a class="scrollspy-btn" href="#Educational"><span>Educational</span></a>
                                        </li>
                                        <li class="menu-item">
                                            <a class="scrollspy-btn" href="#roadmap"><span>Roadmap</span></a>
                                        </li>
                                        <li class="menu-item menu-item-has-children">
                                            <a href="#!"><span>Blog</span></a>
                                            <ul class="sub-menu">
                                                <li><a href="{{ route('web.blog.index') }}"><span>Blog</span></a></li>
                                                <li><a href="blog-single.html"><span>Blog Details</span></a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item">
                                            <a href="{{ route('web.contact.index') }}"><span>Contact</span></a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="xb-header-menu-backdrop"></div>
                    </div>
                </div>
                <div class="header-btn ul_li">
                    <a class="login-btn" href="#!"><i class="fas fa-user"></i> Login</a>
                    <div class="header-bar-mobile side-menu d-lg-none ml-20">
                        <a class="xb-nav-mobile" href="javascript:void(0);"><i class="far fa-bars"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header end -->
