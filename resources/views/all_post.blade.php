<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/34ab9dca21.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container mt-5">
        <h1 class="text-center pt-5">All Post</h1>
        <table class="table table-striped">
            <thead>
                <tr class="text-center">
                    <th scope="col">No.</th>
                    <th scope="col">Title</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Body</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($paginated_data as $item)
                    <tr>
                        <th scope="row">
                            {{ $paginated_data->perPage() * ($paginated_data->currentPage() - 1) + $loop->iteration }}
                        </th>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->slug }}</td>
                        <td>{{ $item->body }}</td>
                        <td>
                            <div class="d-flex">
                                <a href="{{ url('/post' . '/' . $item->slug) }}" class="btn btn-sm btn-success me-2"><i
                                        class="fa-solid fa-eye"></i>
                                    View</a>
                                <a href="{{ route('post.update_view', ['slug' => $item->slug]) }}"
                                    class="btn btn-sm btn-warning me-2">
                                    <i class="fa-solid fa-pen-to-square"></i> Update
                                </a>
                                <form action="{{ url('/post/delete_post/' . $item->slug) }}" method="post">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="id" value="{{ $item->_id }}">
                                    <button type="submit" class="btn btn-sm btn-danger"><i
                                            class="fa-solid fa-trash"></i> Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $paginated_data->links('vendor.pagination.bootstrap-5') }}
        <a href="{{ url('/') }}" class="btn btn-success">New Post!</a>
    </div>'

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
