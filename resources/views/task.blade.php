<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--Styles====================================================================================================-->
    <link rel="stylesheet" href="{{ asset('css/new.css') }}" />

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

    <title>ToDo</title>
</head>

<body>
    <!--Nav Bar=======================================================-->
    <div class="nav">
        <nav>
            <label class="logo">ToDo</label>
            <ul>
                <li><a href="" class="active">Home</a></li>
            </ul>
            <label id="icon">
                <i class="fas fa-bars"></i>
            </label>
        </nav>
    </div>
    <div class="web-content">
        <!--Left Content==========================================================-->
        <div class="left">
            <div class="left-content">
                <h1>Task</h1>
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">{{ $error }}</div>
                @endforeach
                <form method="POST" action="/savetask">
                    {{ csrf_field() }}
                    <label>Subject Name</label><br />
                    <input type="text" name="subject" />
                    <br />
                    <label>Tasks</label><br />
                    <input type="text" name="task" />
                    <br />
                    <input id="submit" type="submit" value="Add New Task" />
                    <input id="reset" type="reset" value="Clear" />
                </form>
            </div>
        </div>

        <!--Right Content==========================================================-->
        <div class="right">
            <div class="right-content">
                <form method="GET" action="/searchdetails">
                    {{ csrf_field() }}
                    <div class="search">
                        <input id="sinput" type="search" name="search" placeholder="Search by Subject Name" />
                        <input id="sbtn" type="submit" value="Search" />
                    </div>
                </form>
                <table border="1px solid black">
                    <thead>
                        <tr>
                            <th>Subject</th>
                            <th>Task</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($tasks as $task)
                            <tr>
                                <td>{{ $task->subject }}</td>
                                <td>{{ $task->task }}</td>
                                <td>
                                    @if (!$task->iscompleted)
                                        <a href="/markascompleted/{{ $task->id }}">
                                            <button style="background-color: red">Not Complete</button></a>
                                    @else
                                        <a href="/markasnotcompleted/{{ $task->id }}">
                                            <button style="background-color: blue">Complete</button></a>
                                    @endif
                                </td>
                                <td>
                                    <a href="/deletetask/{{ $task->id }}">
                                        <button>Delete</button></a>

                                    <a href="/updatetask/{{ $task->id }}">
                                        <button>Update</button></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
