@extends ('layout')

@section('content')
  <article>
    <h2><?= $post['title']; ?></h2>
      <?= $post['body']; ?>
  </article>
  <a href="/">Go Back</a>
@endsection
