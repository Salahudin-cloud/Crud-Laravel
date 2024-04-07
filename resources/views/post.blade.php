<!DOCTYPE html>
<html>

<head>
    <title>MyBlog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center pt-5">Detail Post</h1>
        <h2 class="pt-2">Title : {{ $post->title }}</h2>
        <h3>Slug : {{ $post->slug }}</h3>
        <h3>Post : </h3>
        <p>
            {{ $post->body }}
        </p>
        <a href="{{ url('/post/all_posts') }}" class="btn btn-success">Back</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
