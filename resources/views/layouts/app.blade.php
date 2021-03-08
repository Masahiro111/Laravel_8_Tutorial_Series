<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Livewire Project</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    @livewireStyles
</head>

<body>

    {{$slot}}

    <script src="js/bootstrap.min.js"></script>
    @livewireScripts
    <script>
        window.on('studentAdded',()=>{
            $('#addStudentModal').modal('hide');
        });
    </script>
</body>

</html>