<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Task create</title>
    <style>
        .first {
            text-align: center;
        }

        body {
            background-color: rgb(140, 140, 149);
        }
    </style>
</head>

<body>
    <div class="first">
        <br> <br>
        <h1><b>Tasks</b></h1>
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{ $error }}
            </div>
        @endforeach

        <form method="POST" action="/savetask">
            {{ csrf_field() }}
            <br><br>
            <input type="text" name="task" style="width: 500px;">
            <br> <br>
            <input type="submit" value="Submit" class="btn btn-primary"> &nbsp;&nbsp;&nbsp;
            <input type="reset" value="Clear" class="btn btn-success">
        </form>
        <br> <br>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Task</th>
                    <th scope="col">IsCompleted</th>
                    <th scope="col">Action</th>
                    <th scope="col">Delete</th>
                    <th scope="col">Update</th>
                </tr>
            </thead>
            <tbody class="thead-light">
                @foreach ($tasks as $task)
                    <tr>
                        <th scope="row">{{ $task->id }}</th>
                        <td>{{ $task->task }}</td>
                        <td>{{ $task->iscompleted }}</td>
                        <td>
                            @if (!$task->iscompleted)
                                <a href="/markascompleted/{{ $task->id }}"> <button class="btn btn-primary">Mark as
                                        Completed</button></a>
                            @else
                                <a href="/markasnotcompleted/{{ $task->id }}"> <button class="btn btn-danger">Mark
                                        as Not
                                        Completed</button></a>
                            @endif

                        </td>
                        <td> <a href="/deletetask/{{ $task->id }}"> <button
                                    class="btn btn-warning">Delete</button></a>
                        </td>
                        <td> <a href="/updatetask/{{ $task->id }}"> <button
                                    class="btn btn-success">Update</button></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
