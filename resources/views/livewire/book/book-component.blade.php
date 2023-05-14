<div class="h-screen flex items-center flex-col justify-center">
    {{-- if worker role show buttons --}}
    {{--<section>
        <button class="mb-10 p-2 border-4 bg-blue-400 border-blue-100 hover:text-amber-50">Edit book</button>
        <button class="mb-10 p-2 border-4 bg-red-400 border-blue-100 hover:text-amber-50">Delete book</button>
    </section>--}}
    <h2>Book: {{$book->title}}</h2>
    <img src="{{$book -> cover}}" alt="cover" height="200px" width="200px">

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
