<div>
    @foreach($cats as $cat)
        <h3 class="mb-15 m-10 bg-white rounded">
            {{$cat->title}}
        </h3>
        @if(auth()->user()->isWorker())
            <a href="/categories/{{$cat->id}}/edit">Edit</a>
            <button wire:click="deleteCategory({{$cat->id}})" class="bg-red-500 hover:bg-red-700 rounded p-2">Delete</button>
        @endif
    @endforeach
</div>
