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
    <title>Add Student</title>
</head>
<body>
    <div class="container text-center border border-2 rounded">
        <br><h1 >Student Add </h1><br><br>
        <table class="table">
            <form action="{{url('studentstore')}}" method="POST">
            @csrf 
            <thead>
                <tr>
                    <th scope="col">First Name:</th>
                    <th scope="col"><input type="text"name="first_name"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Last Name</th>
                    <td><input type="text"name="last_name"><br></td>
                    
                </tr>
                <tr>
                    <th scope="row">Email:</th>
                    <td><input type="text" name="email"><br></td>
                    
                </tr>
                
                <input type="hidden" value="{{$id}}"  name="id">
            </tbody>
        
        </table>
        <button type="submit" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Add Student</button>
        <button class="btn btn-danger"><i class="fa-solid fa-ban"></i><a href="{{url('promotion')}}/{{$id}}/{{'edit'}}" style="text-decoration: none; color: white; "> Cancel</a></button>
        </form>
    </div>
</body>
</html>