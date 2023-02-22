<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Task App</title>
    <style>
        .second {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="second">
        <br> <br>
        <h1><b>Task App Update</b></h1>
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{ $error }}
            </div>
        @endforeach

        <form method="POST" action="/updatetasks">
            {{ csrf_field() }}
            <br><br>
            <input type="text" name="task" style="width: 500px;" value="{{ $taskdata->task }}">
            <input type="hidden" name="id" value="{{ $taskdata->id }}">
            <br> <br>
            <input type="submit" value="Submit" class="btn btn-primary"> &nbsp;&nbsp;&nbsp;
            <input type="reset" value="Clear" class="btn btn-success">
        </form>
</body>

</html>
