<center>
    <h2>{{ $article->title }}</h2>
    <img src="{{ storage_path('app/public/' . $article->image) }}" width="500px" alt="">

</center>
<p style="text-align: justify">{!! $article->body !!}</p>
