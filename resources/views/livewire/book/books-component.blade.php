<div>
    @if(substr($cUrl, -5) == 'books')
        <div>
            @livewire('components.navigation')
        </div>
    @endif

    <div class="flex flex-col items-center justify-center">
    @if(auth()->user()->isWorker())
        <a href="/books/create" class="rounded p-3 m-5 bg-blue-400 text-gray-100 border-2 border-cyan-400">
            Create new book
        </a>

    @endif
    <ul class="bg-green-300 w-3/4 border-4">
        @if(count($books))
            <h1>All books</h1>
        @else <h1>No books yet</h1>
        @endif
        {{$books->links()}}
        @foreach ($books as $book)
            <li class="flex flex-col gap-4 border-2 p-5 items-center">
                <h6>category {{$book->category_id}}</h6>
                <a href="/books/{{$book->id}}">
                <h2>Title: {{$book->title}}</h2>
                <p>Author: {{$book->author}}</p>
                <p>Description: {{$book->description}}</p>
                <p>Rating: {{$book->rating}}</p>
                    @if(substr($book->cover, 0, 4)!='http')
                        <img src="{{asset('storage/'.substr($book->cover, 7))}}" alt="cover" height="150px" width="150px">
                    @else
                        <img src="https://img.freepik.com/free-vector/abstract-elegant-winter-book-cover_23-2148798745.jpg?w=2000" alt="cover" height="100px" width="100px">
                    @endif

                </a>
                @if(auth()->user()->isWorker())
                    <a href="/books/{{$book->id}}/edit" class="bg-sky-500 hover:bg-sky-700 rounded p-2">Edit book</a>
                    <button wire:click="deleteBook({{$book->id}})" class="bg-red-500 hover:bg-red-700 rounded p-2">Delete book</button>
                @endif

            </li>
            <br>
        @endforeach
    </ul>
    {{$books->links()}}
        </div>
</div>
