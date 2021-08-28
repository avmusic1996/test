<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <title>POSTS</title>
    
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto">

                <div class="text-center  p-6">
                    <h1>Publicaciones</h1>
                </div>
                <div class="text-right">
                    <a class="btn btn-primary" href="{{ route('posts.create') }}"> Crear</a>
                </div>
                <table class="table table-striped ">
                    <thead>
                      <tr class="g-3">
                        <th scope="col">Titulos</th>
                        <th scope="col">Contenido</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($posts as $posts)
                      <tr>
                        <td>{{ $posts->title }}</td>
                        <td>{{ $posts->content }}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</body>
</html>