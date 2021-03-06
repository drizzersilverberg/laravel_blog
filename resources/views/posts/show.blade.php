@extends('layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">

        <h1>{{ $post->title }}</h1>

        @if (count($post->tags))
            <ul>
                @foreach ($post->tags as $tag)
                    <li>
                        <a href="/posts/tags/{{ $tag->name }}">
                            {{ $tag->name }}
                        </a>
                    </li>
                @endforeach
            </ul>
        @endif

        {{ $post->body }}

        <hr>

        <div class="comments">
            <ul class="list-group">
                @foreach ($post->comments as $comment)
                    <li class="list-group-item">
                        <strong>
                            {{ $comment->created_at->diffForHumans() }}: &nbsp;
                        </strong>
                        {{ $comment->body }}
                    </li>
                @endforeach
            </ul>
        </div>

        {{-- add a comment --}}

        @if (Auth::check())
            <hr>
            <div class="card">
                <div class="card-block">
                    <div class="container" style="padding-top: 1em;">
                        <form method="POST" action="/posts/{{ $post->id }}/comments">

                            {{ csrf_field() }}

                            <div class="form-group">
                                <textarea class="form-control" name="body" placeholder="Your comment here" required></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Add Comment</button>
                            </div>
                        </form>

                        @include ('layouts.errors')

                    </div>
                </div>
            </div>
        @endif

    </div>
@endsection
