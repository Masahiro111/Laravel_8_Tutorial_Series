<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Tables</title>
    <link rel="stylesheet" href="dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="dist/css/datatables.css">
</head>

<body>
    <section style="padding-top: 60px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    {!! $dataTable->table() !!}
                </div>
            </div>
        </div>
    </section>
    <script src="dist/js/jquery.min.js"></script>
    <script src="dist/js/popper.min.js"></script>
    <script src="dist/js/bootstrapjs.min.js"></script>
    <script src="dist/js/dataTables.js"></script>

    {!! $dataTable->scripts() !!}
</body>

</html>