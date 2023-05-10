<div>
    <h1>
        All Books
    </h1>{{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <ul>
        @foreach ($books as $book)
            <li>
                <h2>{{$book->title}}</h2>
                <p>{{$book->author}}</p>
                <i>{{$book->description}}</i>
                <span>{{$book->rating}}</span>
                <img src="{{$book->cover}}" alt="cover" height="150px" width="150px">
                <br>
            </li>
        @endforeach
    </ul>
</div>
