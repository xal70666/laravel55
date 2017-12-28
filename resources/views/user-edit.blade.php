@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">User</div>

                <div class="panel-body">
                  <form class="form-horizontal" action="{{ route('user.update', Auth::user()->id) }}" method="post">
                    {{ csrf_field() }}
                    <div class="title">
                      <label class="control-label" name="nama">
                        Nama :
                      </label>
                        <input class="form-control" type="text" name="name" value="{{ $user->name }}"/>
                    </div>
                    <div class="title">
                      <label class="control-label" name="email">
                        Email :
                      </label>
                        <input class="form-control" type="text" name="email" value="{{ $user->email }}"/>

                    </div>
                    <div class="title">
                      <label class="control-label" name="telepon">
                        Telepon :
                      </label>
                        <input class="form-control" type="text" name="no_telepon" value="
                        {{ !empty($user->telepon->no_telepon) ? $user->telepon->no_telepon : '-' }}
                        "/>
                    </div>
                    <div class="btn-group">
                      <input type="submit" name="submit" value="Update" class="btn btn-primary btn-sm">
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
