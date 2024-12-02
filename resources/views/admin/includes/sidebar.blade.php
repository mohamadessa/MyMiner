<div class="main-menu menu-static menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item"><a href=""><i class="la la-home"></i><span class="menu-title" data-i18n="nav.dash.main">Home</span></a>
                <ul class="menu-content">
                    <li class=""><a class="menu-item" href="dashboard-ecommerce.html" data-i18n="nav.dash.ecommerce">eCommerce</a>
                    </li>
                    <li><a class="menu-item" href="dashboard-crypto.html" data-i18n="nav.dash.crypto">Crypto</a>
                    </li>
                    <li><a class="menu-item" href="dashboard-sales.html" data-i18n="nav.dash.sales">Sales</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item "><a href="#"><i class="la la-television"></i><span class="menu-title" data-i18n="nav.templates.main">Categories</span></a>
                <ul class="menu-content">
                    <ul class="menu-content">
                        <li class="{{ Route::current()->getName() == 'categories.index' ? 'active' : '' }}{{ Route::current()->getName() == 'categories.edit' ? 'active' : '' }}"><a class="menu-item" href="{{ route('categories.index') }}" data-i18n="nav.templates.vert.classic_menu">All Categories</a>
                        </li>
                        <li class="{{ Route::current()->getName() == 'categories.create' ? 'active' : '' }}"><a class="menu-item" href="{{ route('categories.create') }}">Add Categories</a>
                        </li>
                    </ul>
                </ul>
            </li>
            <li class=" nav-item "><a href="#"><i class="la la-television"></i><span class="menu-title" data-i18n="nav.templates.main">Posts</span></a>
                <ul class="menu-content">
                    <ul class="menu-content">
                        <li class="{{ Route::current()->getName() == 'posts.index' ? 'active' : '' }}{{ Route::current()->getName() == 'posts.edit' ? 'active' : '' }}"><a class="menu-item" href="{{ route('posts.index') }}" data-i18n="nav.templates.vert.classic_menu">All Posts</a>
                        </li>
                        <li class="{{ Route::current()->getName() == 'posts.create' ? 'active' : '' }}"><a class="menu-item" href="{{ route('posts.create') }}">Add Post</a>
                        </li>
                        <li class="{{ Route::current()->getName() == 'trash.index' ? 'active' : '' }}"><a class="menu-item" href="{{ route('trash.index') }}">All trashed</a>
                        </li>
                    </ul>
                </ul>
            </li>
            <li class=" nav-item {{ Route::current()->getName() == 'settings.all' ? 'active' : '' }}"><a href="{{ route('settings.all') }}"><i class="la la-television"></i><span class="menu-title" data-i18n="nav.templates.main">Settings</span></a></li>
        </ul>
    </div>
</div>
