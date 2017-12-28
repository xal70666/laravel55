@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                  <label class="control-label">User</label>
                </div>
                <div class="panel-body">
                  <form class="form-horizontal" action="{{ route('user.update', Auth::user()->id) }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                      <label class="col-md-1 control-label" for="name">Nama</label>
                      <div class="col-md-6">
                        <input class="form-control" type="text" name="name" value="{{ $user->name }}"/>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-1 control-label" for="email">Email</label>
                      <div class="col-md-6">
                        <input class="form-control" type="text" name="email" value="{{ $user->email }}"/>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-1 control-label" for="no_telepon">Telepon</label>
                      <div class="col-md-6">
                        <input class="form-control" type="text" name="no_telepon" value="{{ !empty($user->telepon->no_telepon) ? $user->telepon->no_telepon : '-' }}"/>
                      </div>
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
