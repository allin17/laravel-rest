<div>
    @if($cats)
        @foreach($cats as $cat)
            <div class="m-2 p-4 border-2 border-amber-50 flex flex-col justify-between gap-4">
            <h3 class=" bg-white rounded">
                {{$cat->title}}
            </h3>
            @if(auth()->user()->isWorker())
                <a class="bg-blue-200 p-2 hover:bg-white rounded p-2" href="/categories/{{$cat->id}}/edit">Edit</a>
                <button wire:click="deleteCategory({{$cat->id}})" class="bg-red-500 hover:bg-red-700 rounded p-2">Delete</button>
            @endif
            </div>
        @endforeach
    @else <h2>No categories yet!</h2>
    @endif
</div>
