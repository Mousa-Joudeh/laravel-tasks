<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create User</title>
</head>
<body>
    <h1>Create User</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('users.store') }}" method="POST">
        @csrf

        <div>
            <label for="name">Name</label>
            <input id="name" type="text" name="name" required value="{{ old('name') }}">
        </div>

        <div>
            <label for="email">Email</label>
            <input id="email" type="email" name="email" required value="{{ old('email') }}">
        </div>

        <div>
            <label for="password">Password</label>
            <input id="password" type="password" name="password" required>
        </div>

        <div>
            <label for="password_confirmation">Confirm Password</label>
            <input id="password_confirmation" type="password"
                   name="password_confirmation" required>
        </div>

        <button type="submit">Save</button>
    </form>

    <a href="{{ route('users.index') }}">Back to Users</a>
</body>
</html>