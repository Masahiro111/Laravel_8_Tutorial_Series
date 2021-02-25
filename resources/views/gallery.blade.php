<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Article</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <style>
        img {
            background-color: gray;
            height: 250;
            width: 100%;
            border: 1px solid gray;
        }
    </style>

</head>

<body>

    <section>
        <div class="container">
            <div class="row">
                @for($i = 1; $i<=16;$i++) <img data-original="" @endfor </div> </div> </section> <script
                    src="/js/jquery.min.js">
                    </script>
                    <script src="/js/popper.min.js"></script>
                    <script src="/js/bootstrap.min.js"></script>
                    <script src="/js/jquery.lazyload.min.js"
                        integrity="sha512-jNDtFf7qgU0eH/+Z42FG4fw3w7DM/9zbgNPe3wfJlCylVDTT3IgKW5r92Vy9IHa6U50vyMz5gRByIu4YIXFtaQ=="
                        crossorigin="anonymous"></script>

                    <script>
                        $(document).ready(function(){
                            $('img').lazyload();
                        });
                    </script>
</body>

</html>