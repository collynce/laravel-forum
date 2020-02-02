<div class="card-body p-4 mb-4">
    <article class="mb-4">
        <div class="body">
            <div>
                <a href="{{ route('profile', $reply->owner) }}">
                <a href="#">{{ $reply->owner->name }}</a>
                {{$reply->body}}
                <div>

                    <form action="/replies/{{$reply->id}}/favorites" method="post">
                        @csrf
                        <button class="flex justify-content-end" {{$reply->isFavorited()?'disabled':''}}>
                            {{$reply->favorites_count}}{{Str::plural('Favorites'.$reply->favorites_count)}}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </article>
</div>
