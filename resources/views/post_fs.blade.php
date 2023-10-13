<x-layout>

@include ('_posts_fs-header')

  <div>
    <h2>{{ $post->title }}</h2>
    <h4>By <a href="/user/{{ $post->user->username }}">{{ $post->user->name }}</a> within the <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a> Category</h4>
    <article>
      {!! $post->body !!}
    </article>
    <a href="/">Go Back</a>
  </div>
</x-layout>
