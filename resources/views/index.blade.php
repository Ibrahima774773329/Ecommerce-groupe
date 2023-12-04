<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
        @include('partial.navbar')
        @include('partial.header')
        @include('partial.sale')
        @include('partial.category')
        <!-- @include('partial.selling') -->
        @include('partial.cart')
        @include('partial.feature')
        @include('partial.footer')

</body>
</html>
