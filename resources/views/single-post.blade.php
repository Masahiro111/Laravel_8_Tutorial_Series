<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DB CRUD APP</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
</head>

<body>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-header">
                            Post Details
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-group">
                                    <label for="title">Post Title</label>
                                    <input type="text" name="title" class="form-control" value="{{$post->title}}"
                                        placeholder="Enter Post Title">
                                </div>
                                <div class="form-group">
                                    <label for="body">Content</label>
                                    <textarea name="body" class="form-control" cols="30"
                                        rows="3">{{ $post->body}}</textarea>
                                </div>

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