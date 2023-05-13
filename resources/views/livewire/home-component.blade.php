<style>
    * {
        max-width: 1200px;
        text-align: center;
    }
</style>
<div x-data="show: false">
    <div class="mb-20">
        <h1>Home component</h1>

        @if($user->isWorker())
            <a class="" href="/workers">All Workers</a>
        @endif
        @if($user)
            <a class="text-black bg-blue-400" href="/logout"> Logout</a>

        @else
            <a class="text-black bg-blue-400" href="/login"> Login</a>
        @endif

    </div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <div class="flex">
        <nav class="bg-blue-700">
            <h2 class="text-gray-100">CATEGORIES</h2>
            @if($user->isWorker())
            <a href="/categories/create" class="bg-white hover:bg-sky-100 rounded p-2">Create new category</a>
            @endif
            @foreach($cats as $cat)
                <a href="">
                    <h3 class="mb-15 m-10 bg-white rounded">
                        {{$cat->title}}
                    </h3>
                    <a href="/categories/{{$cat->id}}/edit">Edit</a>
                    <button wire:click="deleteCategory({{$cat->id}})" class="bg-red-500 hover:bg-red-700 rounded p-2">Delete</button>
                </a>
            @endforeach
        </nav>
        <article>

            @livewire('books-component', [
                'user'=>$user
            ])
        </article>
    </div>
</div>
