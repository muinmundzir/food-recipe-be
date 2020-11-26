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
                <li class="{{ Route::is('recipe.index') ? 'active' : '' }}">
                    <a href="{{ route('recipe.index') }}">
                        <i class="fas fa-list"></i>
                        <span>List Recipes</span>
                    </a>
                </li>
                @if(Route::is('recipe.create'))
                <li class="{{ Route::is('recipe.create') ? 'active' : '' }}">
                    <a href="{{ route('recipe.create') }}">
                        <i class="fas fa-plus"></i>
                        <span>Add Recipes</span>
                    </a>
                </li>
                @endif
                <!-- menu header -->
                <li class="menu-header">Categories</li>
                <!-- menu item -->
                <li class="{{ Route::is('category.index') ? 'active' : '' }}">
                    <a href="{{ route('category.index') }}">
                        <i class="fas fa-list"></i>
                        <span>List Categories</span>
                    </a>
                </li>
                @if(Route::is('category.create'))
                <li class="{{ Route::is('category.create') ? 'active' : '' }}">
                    <a href="{{ route('category.create') }}">
                        <i class="fas fa-plus"></i>
                        <span>Add Categories</span>
                    </a>
                </li>
                @endif
                <!-- menu header -->
                <li class="menu-header">Tags</li>
                <!-- menu item -->
                <li class="{{ Route::is('tag.index') ? 'active' : '' }}">
                    <a href="{{ route('tag.index') }}">
                        <i class="fas fa-list"></i>
                        <span>List Tags</span>
                    </a>
                </li>
                @if(Route::is('tag.create'))
                <li class="{{ Route::is('tag.create') ? 'active' : '' }}">
                    <a href="{{ route('tag.create') }}">
                        <i class="fas fa-plus"></i>
                        <span>Add Tags</span>
                    </a>
                </li>
                @endif
            </ul>
        </aside>
    </div>
</div>