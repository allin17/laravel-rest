<div>
    <h1>
        All Books
    </h1>{{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    @if($user->isWorker())
        <a href="/books/create" class="border-2 border-cyan-400">
            Create new book
        </a>
    @endif
    <span></span>
    <ul class="border-4">
        @foreach ($books as $book)
            <li class="border-2 p-5">
                <h6>category {{$book->category_id}}</h6>
                <a href="/books/{{$book->id}}">
                <h2>{{$book->title}}</h2>
                <p>{{$book->author}}</p>
                <i>{{$book->description}}</i>
                <p>{{$book->rating}}</p>
                <img src="{{$book->cover}}" alt="cover" height="100px" width="100px">

                </a>
                @if($user->isWorker())
                    <a href="/books/{{$book->id}}/edit" class="bg-sky-500 hover:bg-sky-700 rounded p-2">Edit book</a>
                    <button wire:click="deleteBook({{$book->id}})" class="bg-red-500 hover:bg-red-700 rounded p-2">Delete book</button>
                @endif

            </li>
            <br>
        @endforeach
    </ul>
    {{$books->links()}}
</div>
