<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="OPRAS System"

    <title>{{ config('app.name', 'OPRAS') }}</title>
</head>
<body>
    
    <h1>{{ $title }}</h1>   
    <p>Hi {{ $name }}</p> 
    <p>{{ $content }}</p>

    <p>OPRAS Support team.</p>

</body>
</html>
