<div class="m-10">
    <form action="/workers/{{}}/edit" method="PUT">
        @csrf
        <div class="m-4">
            Name:
            <input type="text">
        </div>
        <div class="m-4">
            Email:
            <input type="email">
        </div>
        <div class="m-4">
            Password:
            <input type="text">
        </div>
        <div class="m-4">
            Role_id:
            <input type="text">
        </div>
        <button type="submit">Confirm</button>
    </form>

</div>
