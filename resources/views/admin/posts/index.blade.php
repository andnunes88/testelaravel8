
<h1>Lista de posts</h1>

@foreach ($posts as $post)
    <p>{{$post->title}}</p>
    <span>{{$post->content}}</span>
    <hr>
@endforeach