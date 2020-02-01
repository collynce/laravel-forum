@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body p-4 mb-4">
                        <article class="mb-4">
                            <a href="">{{$thread->creator->name}}</a> posted:
                            <h4>{{$thread->title}}</h4>
                            <div class="body">
                                {{$thread->body}}
                            </div>
                        </article>
                    </div>

                    @foreach($thread->replies as $reply)
                            <div class="card mb-4">
                                <div class="card-header"><span><a href="">{{$reply->owner->name}}</a> said </span>
                                    {{$reply->created_at->diffForHumans()}}...</div>
                                @include('threads.reply')
                            </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
