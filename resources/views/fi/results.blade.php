<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>The result is 
        @foreach ($finumbers as $num)
            {{ $num }}
        @endforeach
    </p>
</body>
</html>