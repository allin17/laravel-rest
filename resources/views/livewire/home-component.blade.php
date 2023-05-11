<style>
    * {
        max-width: 1200px;
        text-align: center;
    }
</style>
<div>
    <div class="mb-20">
        <h1>Home component</h1>
        <a class="" href="/workers">All Workers</a>
    </div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <div class="flex">
        <nav class="bg-blue-700">
            <h2 class="text-gray-100">CATEGORIES</h2>
            @foreach($cats as $cat)
                <a href="">
                    <h3 class="mb-15 m-10 bg-white rounded">
                        {{$cat->title}}
                    </h3>
                </a>
            @endforeach
        </nav>
        <article>
            <livewire:books-component></livewire:books-component>
        </article>
    </div>
</div>
