<div x-data='{show: true}'>
    <div >
        @livewire('components.navigation', [
        'cats' => $cats
        ])
    </div>

    @if(session('message'))

        <div x-show="show" class="m-5 bg-blue-700 border border-green-400 text-white px-4 py-3 rounded relative" role="alert">
            <p>{{session('message')}}</p>
            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                <svg x-on:click="show = false" class="fill-current h-6 w-6 text-red-300" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
            </span>
        </div>

    @endif

    <div class="flex justify-center">
        <div class="rounded flex flex-col items-center w-1/5 bg-blue-500">
            <h2 class="text-gray-100">CATEGORIES</h2>
            @if(auth()->user()->isWorker())
            <a href="/categories/create" class="bg-white hover:bg-sky-100 rounded p-2">Create new category</a>
            @endif
            @livewire('book-categories.book-category-list', [
                'cats' => $cats
            ])
        </div>
        <article class="w-4/6">

            @livewire('books.books-component', [
                'user'=>$user
            ])
        </article>
    </div>
</div>
