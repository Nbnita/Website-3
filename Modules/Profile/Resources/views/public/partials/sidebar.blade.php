<ul class="side-menu">
    <li class="{{ on_route('user.account') ? 'active' : '' }}">
        <i class="fa fa-user"></i>
        <a href="{{ route('user.account') }}">Account</a>
    </li>
    <li class="{{ on_route('user.beta') ? 'active' : '' }}">
        <i class="fa fa-diamond"></i>
        <a href="{{ route('user.beta') }}">Beta access</a>
    </li>
</ul>