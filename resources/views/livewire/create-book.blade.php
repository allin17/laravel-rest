<div>
    <div class="h-screen flex items-center flex-col justify-center">

        <form method="post" action="/books">
            <button class="p-2 bg-blue-400 rounded hover:bg-blue-700" type="submit">Create new book</button>
            <div class="flex justify-around m-5 items-center">
                <h2>Title:</h2>
                <input type="text">
            </div>
            <div class="flex justify-around m-5 items-center">
                <h2>Slug:</h2>
                <input type="text">
            </div>
            <div class="flex justify-around m-5 items-center">
                <h2>Description:</h2>
                <textarea type="text"></textarea>
            </div>

            <div class="flex justify-around m-5 items-center">
                <h2>Author:</h2>
                <input type="text" id="author">
            </div>
            <div class="flex justify-around m-5 items-center">
                <h2>Avatar:</h2>
                <input type="file">
            </div>
            <div class="flex justify-around m-5 items-center">
                <h2>Rating:</h2>
                {{--<input type="radio" name="rating" id="">--}}
                <select>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
        </form>
    </div>

</div>
