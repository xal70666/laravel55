@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Posts</div>
                <form action="{{ route('update.post', $post->id) }}" method="post">
                  {{ csrf_field() }}
                  <div class="panel-body">
                    <div class="form-group">
                      <input type="text" name="title" class="form-control" value="{{ $post->title }}"/>
                    </div>
                    <div class="form-group">
                      <textarea name="body" class="form-control" rows="5">
                      {{ $post->body }}
                    </textarea>
                    </div>
                    <div div="form-group" style="">
                      <input type="submit" class="btn btn-info btn-sm" name="submit" value="Edit"/>
                    </div>
                  </div>
              </form>
            </div>
        </div>
    </div>
</div>
@endsection
