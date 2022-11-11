<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="/student.css">
    <link rel="icon" href="/icon.webp">
    <script src="https://kit.fontawesome.com/8b497b2419.js" crossorigin="anonymous"></script>
    <title>Edit Task</title>
</head>
<body>


    <div class="container text-center border border-2 rounded">
        <br><h1 >Task Edit </h1><br><br>
        @foreach($task_edit as $task)
        <table class="table">
            <form action="{{url("task")}}/{{$task->id}}/{{"update"}}" method="POST">
            @csrf
            <thead>
                <tr>
                    <th scope="col">Task Name:</th>
                    <th scope="col"><input type="text" value="{{$task->task_name}}" name="task_name"></th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <th scope="row">starting date:</th>
                    <td scope="col"><input type="date" value="{{$task->start_date}}" name="start_date"></td>
                </tr>
                <tr>
                    <th scope="row">finishing date:</th>
                    <td scope="col"><input type="date" value="{{$task->finish_date}}" name="finish_date"></td>
                </tr>
                <tr>
                    <th scope="row">Description: </th>
                    <td scope="col"><input type="text" value="{{$task->description}}" name="description"></td>
                </tr>

            </tbody>
        
        </table>   
        @endforeach
        <button type="submit" class="btn btn-primary"><i class="fa-solid fa-plus"></i>Edit</button>

    </form>


</body>
</html>

