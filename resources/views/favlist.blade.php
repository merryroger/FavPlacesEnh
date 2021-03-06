<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>My Favourite Places</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Cormorant+Infant|El+Messiri|Fira+Sans+Extra+Condensed"
          rel="stylesheet">
    @if($listset->all())
        <link rel="stylesheet" href="/css/default.css" type="text/css">
    @else
        <link rel="stylesheet" href="/css/emptylist.css" type="text/css">
    @endif
</head>
<body>
    @if($listset->all())
        @yield('listhdr')
    @else
        @yield('emptyhdr')
    @endif
</body>
</html>
