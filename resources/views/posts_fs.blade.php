@extends ('layout')

@section ('content')
    <h1>Hello World!</h1>
    <a href="/">Home</a>

    @foreach ($posts as $post)
        <div>
            <h3><a href="/post/{{ $post->id }}">{{ $post->title }}</a></h3>
            <h4><a href="/categories/{{ $post->category->slug }}">Category: {{ $post->category->name }}</a></h4>
            <article>
                {!! $post->excerpt !!}
            </article>
        </div>
    @endforeach
    <br/>
    <br />
    <a href="/">Home</a>
@endsection
