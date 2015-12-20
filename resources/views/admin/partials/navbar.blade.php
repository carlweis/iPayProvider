<nav id="admin-navbar" class="navbar navbar-light bg-faded">
  <a class="navbar-brand" href="#">iPay</a>
  <ul id="main-menu" class="nav navbar-nav">
    <li @if (Request::is('admin')) class="nav-item active" @else class="nav-item" @endif>
      <a class="nav-link" href="/admin">Dashboard <span class="sr-only">(current)</span></a>
    </li>
    <li @if (Request::is('admin/subscribers*')) class="nav-item active" @else class="nav-item" @endif>
      <a class="nav-link" href="/admin/subscribers">Subscribers</a>
    </li>
    <li @if (Request::is('admin/campaigns*')) class="nav-item active" @else class="nav-item" @endif>
      <a class="nav-link" href="/admin/campaigns">Campaigns</a>
    </li>
    <li @if (Request::is('admin/messages*')) class="nav-item active" @else class="nav-item" @endif>
      <a class="nav-link" href="/admin/messages">Messages</a>
    </li>
    <li @if (Request::is('admin/editor*')) class="nav-item active" @else class="nav-item" @endif>
      <a class="nav-link" href="/admin/editor">Editor</a>
    </li>
  </ul>
  <ul id="auth-menu" class="nav navbar-nav pull-right">
    @if (Auth::guest())
    <li class="nav-item active"><a class="nav-link" href="/auth/login">Login</a></li>
    <li class="nav-item"><a class="nav-link" href="/">Back to Site</a></li>
    @else
    <li class="nav-item dropdown">
      <a class="nav-link active dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><strong>{{ Auth::user()->name }}</strong></a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="/admin/settings">Settings</a>
        <a class="dropdown-item" href="/auth/logout">Logout</a>
      </div>
    </li>
    <li class="nav-item"><a class="nav-link" href="/">Back to Site</a></li>
    @endif
  </ul>
</nav>