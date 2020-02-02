<div class="card-body p-4 mb-4">
    <article class="mb-4">
        <div class="body">
            <div  id="reply-{{ $reply->id }}">
                <a href="#">{{ $reply->owner->name }}</a>
                {{$reply->body}}
                <div>

                    <form action="/replies/{{$reply->id}}/favorites" method="post">
                        @csrf
                        <button class="flex justify-content-end" {{$reply->isFavorited()?'disabled':''}}>
                            {{$reply->favorites_count}}{{Str::plural('Favorites'.$reply->favorites_count)}}
                        </button>
                    </form>
                    @can ('update', $reply)
                        <div class="card-footer">
                            <form method="POST" action="/replies/{{ $reply->id }}">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}

                                <button type="submit" class="btn btn-danger btn-xs">Delete</button>
                            </form>
                        </div>
                    @endcan
                </div>
            </div>
        </div>
    </article>
</div>
