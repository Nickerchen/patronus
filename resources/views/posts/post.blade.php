<div class="blog-post">
    <h2 class="blog-post-title">
        <a href="/posts/{{$post->id}}">
            {{ $post->title}}
        </a>
    </h2>

    <p class="blog-post-meta">
        {{ $post->user->name}} am
        {{ $post->created_at->toFormattedDateString() }}
        <a href="{{ route('post.delete', ['post_id'=> $post->id]) }}">Notiz löschen</a>
    </p>

    {{$post->body}}
    @if($post->emotion == -1)
      <img height="22" width="22" src="{{ asset('img/sad.png') }}" alt="sad" />
    @elseif($post->emotion == 0)
      <img height="22" width="22" src="{{ asset('img/neutral.png') }}" alt="neutral" />
    @elseif($post->emotion == 1)
      <img height="22" width="22" src="{{ asset('img/happy.png') }}" alt="happy" />
    @endif


</div><!-- /.blog-post -->
