<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}

    <form method="PUT" action="/categories/{{$cat->id}}">
        @csrf
        @method('PUT')
        <div>
            <h2>Title: {{$cat->title}}</h2>
            <input type="text">
        </div>

        <div>
            <h2>Slug: {{$cat->slug}}</h2>
            <input type="text">
        </div>
        <button type="submit" class="m-5 rounded pb-2 pt-2 pl-5 pr-5 bg-blue-500 hover:bg-blue-700">Confirm</button>

    </form>
</div>
