<div>
    @foreach($posts as $post)
        <div class="card m-2">
            <div class="card-body">
                <h5 class="card-title">{{$post->title }}</h5>
                <p class="card-text">{{$post->content }}</p>
                <a href="{{ route('posts.edit', [$post->id]) }}" class="btn btn-primary">Edit</a>
            </div>
        </div>
    @endforeach
</div>