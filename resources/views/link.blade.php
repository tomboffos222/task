<!doctype html>
<html lang="en">
<head>
    <?php $links = session()->get('links');
    $link = $links[$id];
    ?>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$link['title']}}</title>
    <meta property="og:type" content="website" >

    <meta property="og:title" content="{{$link['title']}}" >
    <meta property="og:image" content="{{$image}}" >


    <meta property="og:description" content="{{$link['title']}}" >
    <meta property="og:url" content="{{ Request::url() }}">

</head>
<body>


<script>
    window.location.replace("{{$link['link']}}");

</script>
</body>
</html>
