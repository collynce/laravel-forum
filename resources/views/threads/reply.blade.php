<div class="card-body p-4 mb-4">
    <article class="mb-4">
        <div class="body">
            <div>
                <a href="#">{{ $reply->owner->name }}</a>
                {{$reply->body}}
                <div>

                    <form action="/replies/{{$reply->id}}/favorites" method="post">
                        @csrf
                        <button class="flex justify-content-end" {{$reply->isFavorited()?'disabled':''}}>
                            {{$reply->favorites()->count()}}{{Str::plural('Favorites'.$reply->favorites()->count())}}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </article>
</div>
