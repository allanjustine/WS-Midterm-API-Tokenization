<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background: rgba(195,77,34,1);">
    <a href="{{ route('home') }}" class="brand-link">
        <img src="https://www.freeiconspng.com/uploads/warehouse-inventory-icon-33.png"
             alt="{{ config('app.name') }} Logo"
             class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight-light">{{ config('app.name') }}</span>
    </a>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @include('layouts.menu')
            </ul>
        </nav>
    </div>

</aside>

