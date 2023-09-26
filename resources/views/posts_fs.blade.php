@extends ('layout')

@section ('content')
    <h1>Hello World!</h1>

    @foreach ($posts as $post)
        <article>
            <h2><a href="/post/{{$post->fileName}}">{{$post->title}}</a></h2>
            <h3>{{$post->date}}</h3>

            <div>
                {!! $post->body !!}
            </div>
        </article>
    @endforeach
@endsection
