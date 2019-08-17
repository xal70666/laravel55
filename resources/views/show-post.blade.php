@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Posts</div>

                <div class="panel-body">
                  <div class="title">
                    <h2>
                      {{ $post->title }}
                    </h2>
                  </div>
                  <div class="content">
                    <p>
                      {{ $post->body }}
                    </p>
                  </div>
                  @if (!Auth::guest())
                    @if (Auth::guard('web')->user()->id == $post->user_id)
                      <div class="form-group" style="float: right;">
                        <a class="btn btn-info btn-sm" href="{{route('edit.post', $post->id)}}"><strong>Edit</strong></a></span>
                        <a class="btn btn-danger btn-sm" href="{{route('delete.post', $post->id)}}" onclick="return confirm('yakin akan dihapus?');"><strong>Delete</strong></a></span>
                      </div>
                    @endif
                  @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
