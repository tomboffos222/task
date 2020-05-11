<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta property="og:locale" content="en_US" />
    <title>Laravel</title>
    <meta property="og:url" content="{{ Request::url() }}">
    <meta property="og:type" content="website" >

    <meta property="og:title" content="@yield('title')" >
    <meta property="og:image" content="@yield('image')" >

    <meta property="og:image:width" content="400" >
    <meta property="og:image:height" content="400" >
    <meta property="og:description" content="@yield('description')" >

</head>
<body>

</body>
<script>
    window.location.replace("@yield('link')");

</script>
</html>
