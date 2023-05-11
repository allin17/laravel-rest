<div>
    <h1>
        All Books
    </h1>{{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <ul class="border-4">
        @foreach ($books as $book)
            <li class="border-2">
                <h6>category {{$book->category_id}}</h6>
                <a href="/books/{{$book->id}}">
                <h2>{{$book->title}}</h2>
                <p>{{$book->author}}</p>
                <i>{{$book->description}}</i>
                <p>{{$book->rating}}</p>
                <img src="{{$book->cover}}" alt="cover" height="100px" width="100px">
                <br>
                </a>
            </li>
        @endforeach
    </ul>
    {{$books->links()}}
</div>
