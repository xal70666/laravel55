@if (Auth::guard('web')->check())
  <p class="text-success">
    Login sebagai user
  </p>

@else
  <p class="text-danger">
    Logout sebagai user
  </p>
@endif

@if (Auth::guard('admin')->check())
  <p class="text-success">
    Login sebagai admin
  </p>

@else
  <p class="text-danger">
    Logout sebagai admin
  </p>
@endif
