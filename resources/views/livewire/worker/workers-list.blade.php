<div x-data='{show: true}'>

    <div>
        @livewire('components.navigation')
    </div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="m-20">
        <a href="/workers/create" class="bg-blue-700 hover:bg-sky-900 text-gray-100 rounded p-2">Create new worker</a>

        @if(session('status'))

            <div x-show="show" class="m-5 bg-blue-700 border text-white px-4 py-3 rounded relative" role="alert">
                <p>{{session('status')}}</p>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                    <svg x-on:click="show = false" class="fill-current h-6 w-6 text-white" role="button"
                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path
                        d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                </span>
            </div>

        @endif
        @foreach($workers as $worker)
            <section class="flex flex-row m-20">
                <div class="w-1/3">
                <h2>{{$worker->name}}</h2>
                <p>email: {{$worker->email}}</p>
                </div>
                <a href="/workers/{{$worker->id}}/edit" class="ml-5 bg-sky-500 hover:bg-sky-700 rounded p-2">Edit
                    worker</a>
                <button wire:click="deleteWorker({{$worker->id}})" class="ml-5 bg-red-500 hover:bg-red-700 rounded p-2">
                    Delete worker
                </button>
            </section>

        @endforeach
    </div>

</div>
