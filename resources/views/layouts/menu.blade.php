<li class="nav-item">
    <a style="color: white" href="{{ route('inventories.index') }}"
       class="nav-link {{ Request::is('inventories*') ? 'active' : '' }}">
       <i class="fa fa-box-open"></i>&nbsp;<p>Inventories</p>
    </a>
</li>
<li class="nav-item">
    <a style="color: white" href="{{ route('logs.index') }}"
       class="nav-link {{ Request::is('logs*') ? 'active' : '' }}">
       <i class="fa fa-book-open"></i>&nbsp;<p>Logs</p>
    </a>
</li>



