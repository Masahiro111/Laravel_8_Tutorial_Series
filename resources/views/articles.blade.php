<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Article</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">

</head>

<body>

    <section style="padding-top:60px;">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="card">
                        <div class="card-header">
                            All Article <a href="/add-article" class="btn btn-success">Add New Article</a>
                        </div>
                        <div class="card-body">
                            @if (Session::has('article_deleted'))
                            <div class="alert alert-success" rol="alert">
                                {{Session::get('article_deleted')}}
                            </div>
                            @endif
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>article title</th>
                                        <th>article description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($articles as $article)
                                    <tr>
                                        <td>{{$article->id}}</td>
                                        <td>{{$article->title}}</td>
                                        <td>{{$article->body}}</td>
                                        <td>
                                            <a href="/articles/{{$article->id}}" class="btn btn-info">Details</a>
                                            <a href="/edit-article/{{$article->id}}" class="btn btn-success">Edit</a>
                                            <a href="/delete-article/{{$article->id}}" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>

                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="/js/jquery.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>

</body>

</html>