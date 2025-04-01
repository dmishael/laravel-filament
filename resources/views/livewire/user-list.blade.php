<div>
    <h1>User List</h1>
    <ul>
        @foreach($users as $user)
        <li>{{ $user->email }} {{ $user->name }}</li>
        @endforeach
    </ul>
</div>