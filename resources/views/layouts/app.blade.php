<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Product</title>
        <link rel="stylesheet" href="{{asset("css/app.css")}}">
    </head>
    <body>
        @include("partials.header")
        <main>
            @yield("content")
        </main>
    </body>
</html>
