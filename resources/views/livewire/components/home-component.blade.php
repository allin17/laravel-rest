<div>
    <div class="mb-20">
        <h1>Home component</h1>

        @if(auth()->user()->isWorker())
            <a class="" href="/workers">All Workers</a>
        @endif
        @if($user)
            <a class="text-black bg-blue-400" href="/logout"> Logout</a>

        @else
            <a class="text-black bg-blue-400" href="/login"> Login</a>
        @endif

    </div>

    <div class="flex">
        <div class="bg-blue-700">
            <h2 class="text-gray-100">CATEGORIES</h2>
            @if(auth()->user()->isWorker())
            <a href="/categories/create" class="bg-white hover:bg-sky-100 rounded p-2">Create new category</a>
            @endif
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
        <article>

            @livewire('books.books-component', [
                'user'=>$user
            ])
        </article>
    </div>
</div>
