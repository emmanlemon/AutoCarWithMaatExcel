<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{ route('excel.export') }}">Click Me Export!</a>
    <form action="{{ route('excel.import') }}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file" accept=".xls,.xlsx">
        <button type="submit">Submit</button>
    </form>
</body>
</html>