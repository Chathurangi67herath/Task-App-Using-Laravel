<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Styles====================================================================================================-->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />

    <title>Task App</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;1,400&family=Roboto:wght@100;400;700&display=swap"
        rel="stylesheet" />
</head>

<body>
    <div class='first'>
        <h1>ToDo</h1>
        <a href="{{ asset('/task') }}" target="blank">
            <input id="submit"type="Submit" value="Task Create">
        </a>

    </div>
</body>

</html>
