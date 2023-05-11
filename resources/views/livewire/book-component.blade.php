<div class="h-screen flex items-center flex-col justify-center">
    {{-- if worker role show buttons --}}
    <section>
        <button class="mb-20 p-2 border-4 bg-blue-400 border-blue-100 hover:text-amber-50">Edit book</button>
        <button class="mb-20 p-2 border-4 bg-red-400 border-blue-100 hover:text-amber-50">Delete book</button>
    </section>
    <img src="{{$book -> cover}}" alt="cover" height="200px" width="200px">

    <h2>title: {{$book->title}}</h2>
    <div>author: {{$book->author}}</div>
    <div>rating: {{$book->rating}}</div>
</div>
