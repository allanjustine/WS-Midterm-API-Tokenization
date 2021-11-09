<li class="nav-item">
    <a href="{{ route('inventories.index') }}"
       class="nav-link {{ Request::is('inventories*') ? 'active' : '' }}">
        <p>Inventories</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('logs.index') }}"
       class="nav-link {{ Request::is('logs*') ? 'active' : '' }}">
        <p>Logs</p>
    </a>
</li>


