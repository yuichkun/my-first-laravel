@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">All Posts</div>

                <div class="card-body">
                  <ul>
                  @foreach ($posts as $post)
                    <li>
                        <div>
                            <h3>{{$post->title}}</h3>
                            <a href="posts/{{$post->id}}">details</a>
                            <div>posted on {{$post->created_at}}</div>
                            <div>by {{$post->user->name}}</div>
                        </div>
                    </li>
                  @endforeach
                  </ul>
                </div>

                <script>
                    var app = @json($posts);
                    console.log(app)
                </script>
            </div>
        </div>
    </div>
</div>

@endsection
