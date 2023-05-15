<div>
    <div>
        @livewire('components.navigation')
    </div>

    <div class="flex">
        <div class="bg-blue-700">
            <h2 class="ml-5 text-gray-100">CATEGORIES</h2>
            @if(auth()->user()->isWorker())
            <a href="/categories/create" class="bg-white hover:bg-sky-100 rounded p-2">Create new category</a>
            @endif
            @livewire('book-categories.book-category-list', [
                'cats' => $cats
            ])
        </div>
        <article>

            @livewire('books.books-component', [
                'user'=>$user
            ])
        </article>
    </div>
</div>
