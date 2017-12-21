@extends('layouts.app')

@section('content')
@if (Session::has('success'))
  <div class="alert alert-success alert-dismissible" role="alert" style="width: 30%; margin:0 auto;">
    <button type="button" class="close" data-dismiss="alert">
        <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
    </button>
        <strong>{{ Session::get('success') }}</strong>
  </div>
@endif
@if (Session::has('success-update'))
  <div class="alert alert-success alert-dismissible" role="alert" style="width: 30%; margin:0 auto;">
    <button type="button" class="close" data-dismiss="alert">
        <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
    </button>
        <strong>{{ Session::get('success-update') }}</strong>
  </div>
  <br>
@endif
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Posts</div>

                <div class="panel-body">
                  @foreach ($post as $posts)
                    <div class="title">
                      <h2>
                        <a href="{{route('show.post', $posts->id)}}">
                          {{ $posts->title }}
                        </a>
                      </h2>
                    </div>
                    <div class="content">
                      <p>
                        {{ $posts->body }}
                      </p>

                    </div>
                @endforeach
                    <div class="pagination-lg" align="center">
                      {{ $post->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
