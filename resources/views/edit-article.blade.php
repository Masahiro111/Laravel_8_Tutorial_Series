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
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                            Edit Article
                        </div>
                        <div class="card-body">
                            @if (Session::has('article_updated'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('article_updated')}}
                            </div>
                            @endif

                            <form action="{{route('article.update')}}" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{$article->id}}">
                                <div class="form-group">
                                    <label for="title">Post Title</label>
                                    <input type="text" name="title" id="" class="form-control" placeholder=""
                                        value="{{$article->title}}">
                                </div>

                                <div class="form-group">
                                    <label for="body">Post Description</label>
                                    <textarea class="form-control" name="body" id="" cols="30"
                                        rows="3">{{$article->body}}</textarea>
                                </div>
                                <button type="submit" class="btn btn-success">Update Article</button>
                            </form>
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