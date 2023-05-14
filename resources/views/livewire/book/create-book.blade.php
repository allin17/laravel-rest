<div>
    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
        <div class="px-4 py-8 bg-white shadow sm:rounded-lg sm:px-10">
            <form wire:submit.prevent="createBook">
                <div>
                    <label for="title" class="block text-sm font-medium text-gray-700 leading-5">
                        Title
                    </label>

                    <div class="mt-1 rounded-md shadow-sm">
                        <input wire:model.lazy="title" id="title" type="text" required autofocus class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('name') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
                    </div>

                    @error('title')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-6">
                    <label for="email" class="block text-sm font-medium text-gray-700 leading-5">
                        Slug
                    </label>

                    <div class="mt-1 rounded-md shadow-sm">
                        <input wire:model.lazy="slug" id="slug" type="text" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('email') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
                    </div>

                    @error('slug')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-6">
                    <label for="description" class="block text-sm font-medium text-gray-700 leading-5">
                        Description
                    </label>

                    <div class="mt-1 rounded-md shadow-sm">
                        <input wire:model.lazy="description" id="description" type="text" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('password') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
                    </div>

                    @error('description')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-6">
                    <label for="author" class="block text-sm font-medium text-gray-700 leading-5">
                        Author
                    </label>

                    <div class="mt-1 rounded-md shadow-sm">
                        <input wire:model.lazy="author" id="author" type="text" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:ring-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('password') border-red-300 text-red-900 placeholder-red-300 focus:border-red-300 focus:ring-red @enderror" />
                    </div>

                    @error('author')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mt-1 rounded-md shadow-sm">
                    <h2>Cover: </h2>
                    <input type="file" wire:model="cover">

                    @error('cover') <span class="bg-accent-red-500">{{$message}}</span>@enderror
                </div>

                <div class="mt-6">
                    <label for="rating" class="block text-sm font-medium text-gray-700 leading-5">
                        Rating
                    </label>

                    <select x-model="rating">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>

                    @error('rating')
                    <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                    @enderror
                </div>



                <div class="mt-6">
                    <span class="block w-full rounded-md shadow-sm">
                        <button type="submit" class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:ring-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                            Create book
                        </button>
                    </span>
                </div>
            </form>
        </div>
    </div>
</div>


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
