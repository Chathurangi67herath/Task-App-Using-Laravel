<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--Styles====================================================================================================-->
    <link rel="stylesheet" href="{{ asset('css/new.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/update.css') }}" />

    <!--Fonts=====================================================================================================-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;1,400&family=Roboto:wght@100;400;700&display=swap"
        rel="stylesheet" />

    <!--Toggle Button==================================================================================================-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/3.0.0/flickity.css"
        integrity="sha512-TZTUnuHs1njGko8PJqZlHzqZTZd880A+BvhR1jy1v4mWB4VFKVLG/eK9LYdDjxqNLmttSC1ygmqg6rkYjnEgaQ=="
      crossorigin="anonymous"
        referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/3b10d45e53.js" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $("#icon").click(function() {
                $("ul").toggleClass("show");
            });
        });
    </script>

    <title>ToDo Update Task</title>
</head>

<body>
    <!--Nav Bar=======================================================-->
    <div class="nav">
        <nav>
            <label class="logo">ToDo Update</label>
            <ul>
                <li><a href="/task" class="">Home</a></li>
            </ul>
            <label id="icon">
                <i class="fas fa-bars"></i>
            </label>
        </nav>
    </div>
    <div class="web-content">
        <!--Left Content==========================================================-->
        <div class="left" id="updateleft">
            <div class="left-content">
                <h1>Task Update</h1>
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        {{ $error }}
                    </div>
                @endforeach
                <form method="POST" action="/updatetasks">
                    {{ csrf_field() }}
                    <label>Subject Name</label><br />
                    <input type="text" name="subject" value="{{ $taskdata->subject }}" />
                    <br />
                    <label>Tasks</label><br />
                    <input type="text" name="task" value="{{ $taskdata->task }}" />
                    <br />
                    <input type="hidden" name="id" value="{{ $taskdata->id }}">
                    <input id="submit" type="submit" value="Update" />
                    <input id="reset" type="reset" value="Clear" />
                </form>
            </div>
        </div>



    </div>
</body>

</html>
