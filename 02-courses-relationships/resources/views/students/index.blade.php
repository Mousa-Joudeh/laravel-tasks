<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students</title>
</head>
<body>
    <h1>Students</h1>
    @foreach ($students as $student)
        <p>{{ $student->name }}</p>
        <p>Course: {{ $student->course->name }}</p>
        <p>Phone: {{ $student->profile->phone }}</p>
    @endforeach
</body>
</html>