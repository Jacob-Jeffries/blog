@extends ('layout')

@section ('content')
    <h1>Hello World!</h1>
    <a href="/">Home</a>

    @foreach ($posts as $post)
        <div>
            <h3><a href="/post/{{ $post->id }}">{{ $post->title }}</a></h3>
            <br/>
            By <a href="/user/{{ $post->user->username }}">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
            <br/>
            <br/>
            <article>
                {!! $post->excerpt !!}
            </article>
        </div>
    @endforeach
    <br/>
    <br />
    <a href="/">Home</a>
@endsection
