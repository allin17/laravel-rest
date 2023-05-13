<div>
    <div class="h-screen flex items-center flex-col justify-center">

        <form method="put" action="/books/{{$book->id}}">
            <button class="p-2 bg-blue-400 rounded hover:bg-blue-700" type="submit">Confirm</button>
            <div class=" justify-around m-5 items-center">
                <h2>Title: {{$book->title}}</h2>
                <input type="text" x-bind:placeholder={{$book->title}}>
            </div>
            <div class=" justify-around m-5 items-center">
                <h2>Slug: {{$book->slug}}</h2>
                <input type="text" placeholder={{$book->slug}}>
            </div>
            <div class=" justify-around m-5 items-center">
                <h2>Description: {{$book->description}}</h2>
                <textarea type="text"></textarea>
            </div>

            <div class=" justify-around m-5 items-center">
                <h2>Author: {{$book->author}}</h2>
                <input type="text" id="author">
            </div>
            <div class=" justify-around m-5 items-center">
                <h2>Avatar: </h2>
                <input type="file">
            </div>
            <div class=" justify-around m-5 items-center">
                <h2>Rating:</h2>
                {{--<input type="radio" name="rating" id="">--}}
                <select>
                    <option @if($book->rating == 1) selected @endif value="1">1</option>
                    <option @if($book->rating == 2) selected @endif value="2">2</option>
                    <option @if($book->rating == 3) selected @endif value="3">3</option>
                    <option @if($book->rating == 4) selected @endif value="4">4</option>
                    <option @if($book->rating == 5) selected @endif value="5">5</option>
                </select>
            </div>
        </form>
    </div>

</div>
