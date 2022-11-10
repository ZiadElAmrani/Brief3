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
    <title>Student Update</title>
</head>
<body>
    @foreach ($data as $row)

    <div class="container text-center border border-2 rounded">
        <br><h1 >Student Update </h1><br><br>
        <table class="table">
            <form action="{{url("student")}}/{{$row->id}}/{{"update"}}" method="POST">
                @csrf 
            <thead>
                <tr>
                    <th scope="col">First Name:</th>
                    <th scope="col"><input type="text" value="{{$row->first_name}}" name="first_name"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Last Name</th>
                    <td scope="col"><input type="text" value="{{$row->last_name}}" name="last_name"></td>
                    
                </tr>
                <tr>
                    <th scope="row">Email:</th>
                    <td scope="col"><input type="text" value="{{$row->email}}" name="email"></td>
                    
                </tr>
                
            </tbody>
        
        </table>
        <button type="submit" class="btn btn-primary"><i class="fa-sharp fa-solid fa-pen"></i></i> Edit</button>

    </form>

    @endforeach
</body>
</html>

