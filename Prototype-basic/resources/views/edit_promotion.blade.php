<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="/editpromo.css">
    <link rel="icon" href="/icon.webp">
    <script src="https://kit.fontawesome.com/8b497b2419.js" crossorigin="anonymous"></script>
    <title>Promotions</title>
</head>
<body>
    <div class="container text-center border border-2 rounded" style="height: 100%">


        <header>

            <div class="row mt-2 p-1 bg-primary text-white">
                <div class="col">
                    <h4>Edit Promotions and add Students</h4>
                </div>
                <div class="col d-flex justify-content-end">
                    <a href="{{url('promotions')}}"><button class="btn btn-light">Promotions Page</button></a>
                </div>
            </div>

            <div class="row mt-2 p-3">
                <div class="col-6">
                    <h3>Update Promotion name:</h3>
                </div>
                <div class="col-6">
                    <div class="">
                        @foreach ($data as $row)
                        <form action="{{url('update')}}/{{$row->id}}" method="post">
                            @csrf
                            <input type="text" value="{{$row->name}}" name="name">
                            <button class="btn btn-secondary btn-sm">Update</button>
                        </form>
                    </div>
                </div>
                    <div class="col" id="">
                        <a href="{{url("studentadd")}}/{{$row->id}}"/><button class="btn btn-secondary" style="margin-top: 50px">add student</button></a>
                    </div>
                        @endforeach
                    
                    
                
            </div>
        </header>
    

                
                <table class="table table-primary table-striped table-hover" id="student">
                    <thead>
                        <tr>
                            <th>Student first name</th>
                            <th>Student last name</th>
                            <th>email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($student as $row)
                                
                            <tr>
                                <td>{{$row->first_name}}</td>
                                <td>{{$row->last_name}}</td>
                                <td>{{$row->email}}</td>

                                <td>
                                    <a href="{{url("student")}}/{{$row->id}}/{{"edit"}}">
                                        <button id="btn-edit">
                                            <span><i class="fa-solid fa-pen-to-square"></i>Edit</span>
                                        </button></a>
                                    <a href="{{url("student")}}/{{$row->id}}/{{"delete"}}">
                                        <button id="btn-delete">
                                            <span><i class="fa-regular fa-trash-can" id="mdi-delete-empty"></i>Delete</span>
                                        </button></a>
                                </td>
                            </tr>
                            @endforeach
                    </tbody>
                </table>
    </div>
</body>
</html>