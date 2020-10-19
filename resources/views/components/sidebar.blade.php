<div>
    <!-- Sidebar outter -->
    <div class="main-sidebar sidebar-style-2">
        <!-- sidebar wrapper -->
        <aside id="sidebar-wrapper">
            <!-- sidebar brand -->
            <div class="sidebar-brand">
                <a href="{{ route('welcome') }}">{{ config('app.name', 'Laravel') }}</a>
            </div>
            <!-- sidebar menu -->
            <ul class="sidebar-menu">
                <!-- menu header -->
                <li class="menu-header">General</li>
                <!-- menu item -->
                <li class="{{ Route::is('dashboard') ? 'active' : '' }}">
                    <a href="{{ route('dashboard') }}">
                        <i class="fas fa-fire"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="{{ Route::is('profile') ? 'active' : '' }}">
                    <a href="{{ route('profile') }}">
                        <i class="fas fa-user"></i>
                        <span>Profile</span>
                    </a>
                </li>
                
                <!-- menu header -->
                <li class="menu-header">Recipes</li>
                <!-- menu item -->
                <li class="{{ Route::is('recipes.index') ? 'active' : '' }}">
                    <a href="{{ route('recipes.index') }}">
                        <i class="fas fa-list"></i>
                        <span>List Recipes</span>
                    </a>
                </li>
               
                <!-- menu header -->
                <li class="menu-header">Tags</li>
                <!-- menu item -->
                <li class="{{ Route::is('tags.index') ? 'active' : '' }}">
                    <a href="{{ route('tags.index') }}">
                        <i class="fas fa-list"></i>
                        <span>List Tags</span>
                    </a>
                </li>
            </ul>
        </aside>
    </div>
</div>