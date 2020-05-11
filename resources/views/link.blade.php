<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta property="og:title" content="{{$link['title']}}" />
    <meta property="og:description" content="{{$link['description']}}" />
    <meta property="og:image" content="{{route('Links')}}{!! $link['image'] !!}" />
</head>
<body>


<script>
    window.location.replace("{{$link['link']}}");

</script>
</body>
</html>
