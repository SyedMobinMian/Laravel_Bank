<div class="menu-items">
    <br>
    <a href="{{ route('home') }}">
        <i class="icon fas fa-home"></i>
        <span class="sidebar-label">Home</span>
    </a>
    <a href="{{ route('profile') }}">
        <i class="icon fas fa-user"></i>
        <span class="sidebar-label">Profile</span>
    </a>
    <a href="#">
        {{-- {{ route('settings') }} --}}
        <i class="icon fas fa-cogs"></i>
        <span class="sidebar-label">Settings</span>
    </a>

    @if(auth()->user()->role === 'super_admin')
        <a href="{{ route('settings.addUserForm') }}">
            <i class="icon fas fa-user-plus"></i>
            <span class="sidebar-label">Add New User</span>
        </a>
    @endif




</div>
<div class="lock-toggle" id="lockToggle">
    <i class="fas fa-lock"></i>
</div>
