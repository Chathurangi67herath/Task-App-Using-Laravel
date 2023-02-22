<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Task App</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <style>
        .first {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            margin-top: 10%;
        }

        body {
            background-color: rgb(21, 21, 65);
        }

        h1 {
            color: white;
            font-weight: bold;
            font-size: 700%;
        }

        .btn {
            font-size: 200%;
            margin-top: 5%;
            padding: 1%;
        }
    </style>


</head>
<div class='first'>
    <h1>Task App</h1>
    <a href="{{ asset('/task') }}" target="blank" class="btn btn-primary"> Task Create</a>
</div>

<body>
</body>

</html>
