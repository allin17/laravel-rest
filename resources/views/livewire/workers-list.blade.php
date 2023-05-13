<div class="m-20">
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <a href="/workers/create" class="bg-sky-500 hover:bg-sky-700 rounded p-2">Create new worker</a>


    @foreach($workers as $worker)
        <section class="flex flex-row m-20">
            <h2>{{$worker->name}}</h2>
            <p>email: {{$worker->email}}</p>
            <a href="/workers/{{$worker->id}}/edit" class="ml-5 bg-sky-500 hover:bg-sky-700 rounded p-2">Edit worker</a>
            <button wire:click="delete({{$worker->id}})" class="ml-5 bg-red-500 hover:bg-red-700 rounded p-2">Delete worker</button>
        </section>

    @endforeach
</div>
