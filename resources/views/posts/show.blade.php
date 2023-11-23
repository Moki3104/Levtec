<x-app-layout>
    <h1 class='title'>
            {{ $post->title }}
        </h1>
        <div class='content'>
            <div class='content_post'>
                <h3>本文</h3>
                <p class='body'>{{ $post->body }}</p>
            </div>
            <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
        </div>
        <div class="edit">
            <a href="/posts/{{ $post->id }}/edit">edit</a>
        </div>
        <div class='footer'>
            <a href='/'>戻る</a>
        </div>
</x-app-layout>