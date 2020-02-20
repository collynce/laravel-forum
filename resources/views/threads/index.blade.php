@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>
                    <flash message="{{ session('flash') }}"></flash>

                    <div class="card-body p-4 mb-4">
                        @forelse ($threads as $thread)
                            <article class="mb-4">
                                <h4>
                                    <a href="{{$thread->path()}}">
                                        {{$thread->title}}
                                    </a>
                                    <a href="{{$thread->path()}}">
                                        {{ $thread->replies_count }} {{ Str::plural('reply', $thread->replies_count) }}
                                        @if (auth()->check() && $thread->hasUpdatesFor(auth()->user()))
                                            <strong>
                                                {{ $thread->title }}
                                            </strong>
                                        @else
                                            {{ $thread->title }}
                                        @endif
                                    </a>
                                </h4>
                                <div class="body">
                                    {{$thread->body}}
                                </div>
                            </article>
                        @empty
                            <p>There are no relevant results at this time.</p>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
