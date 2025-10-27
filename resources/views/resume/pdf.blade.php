<!DOCTYPE html>
<html>
<head>
    <title>Resume</title>
    <style>
        body { font-family: sans-serif; }
        h1 { color: #4B0082; }
    </style>
</head>
<body>
    <h1>{{ $name }}</h1>
    <p>{{ $title }}</p>
    <p>Email: {{ $email }}</p>
    <h3>Skills:</h3>
    <ul>
        @foreach ($skills as $skill)
            <li>{{ $skill }}</li>
        @endforeach
    </ul>
</body>
</html>
