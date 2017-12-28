@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">User</div>

                <div class="panel-body">
                  <div class="title">
                    <label name="nama">
                      Nama : {{ $user->name }}
                    </label>
                  </div>
                  <div class="title">
                    <label name="email">
                      Email : {{ $user->email }}
                    </label>
                  </div>
                  <div class="title">
                    <label name="telepon">
                      Telepon : {{ !empty($user->telepon->no_telepon) ? $user->telepon->no_telepon : '-' }}
                    </label>
                  </div>
                  @if (Auth::user()->id == $user->id)
                    <div class="btn-group">
                      <a href="{{ route('user.edit', Auth::user()->id) }}" class="btn btn-primary btn-sm">Edit</a>
                    </div>
                  @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
