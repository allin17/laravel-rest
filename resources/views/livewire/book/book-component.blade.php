<div class="h-screen flex items-center flex-col justify-center">
    <h2>Book: {{$book->title}}</h2>
    @if(substr($book->cover, 0, 4)!='http')
        <img src="{{asset('storage/'.substr($book->cover, 7))}}" alt="cover" height="200px" width="200px">
    @else
        <img src="https://img.freepik.com/free-vector/abstract-elegant-winter-book-cover_23-2148798745.jpg?w=2000" alt="cover" height="200px" width="200px">
    @endif

    <div>Author: {{$book->author}}</div>
    <div>Rating: {{$book->rating}} of 5</div>

    <div class="flex justify-around border-4 p-5 w-full">
        <input wire:model.lazy="commentText" class="w-1/2" type="text" name="comment" id="">
        <button wire:click="addComment({{$book->id}})" class="border-2 p-2">Add comment</button>
    </div>
    <div>
        <p>Comments:</p>
        @foreach($comments as $comment)
            <div class="border-cyan-400 border-4">
                <p>{{$comment->text}}</p>
                <p>author:  {{$comment->user->name}}</p>
                @if(auth()->user()->id == $comment->user_id)
                    <button wire:click="deleteComment({{$comment->id}})" class="text-red-400">Delete</button>
                @endif
            </div>
        @endforeach
    </div>
</div>
