<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="/editpromo.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="icon" href="/icon.webp">
    <script src="https://kit.fontawesome.com/8b497b2419.js" crossorigin="anonymous"></script>
    <title>Promotions</title>
</head>
<body>
    <ul class="menu-bar">
        <li><a href="{{url('/')}}">Promotions</a></li>
        
        
        <li><a href="{{URL('briefs_index')}}    ">Briefs</a></li>
    </ul>
    <div class="container text-center border border-2 rounded" style="height: 100%">


        <header>

            <div class="row mt-2 p-1 bg-dark text-white">
                <div class="col">
                    <h4>Edit Promotions and add Students</h4>
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

        Briefs assign to this promotion: 
        @foreach ($uniqueD as $item)
        @for($i = 0; $i <count($item); $i++)
            <span>
                {{$item[$i]->brief_name}},
            </span>
        @endfor
        @endforeach


        <div class="row">
            @foreach ($student as $row) 
            <div class="col-md-6 col-xl-3">
                <div class="card m-b-30" id="studentcard">
                    <div class="card-body row">
                        <div class="col-6">
                            <img src="{{ asset('students_images/'.$row->student_image)}}" class="img-fluid rounded w-75" alt="" />
                        </div>
                        <div class="col-6 card-title align-self-center mb-0">
                            <h5>{{$row->first_name}}<br>{{$row->last_name}}</h5>
                            <p class="m-0"></p>
                        </div>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><i class="fa fa-envelope float-right"></i>Email :<br> {{$row->email}}</li>
                        <li class="list-group-item"><i class="fa fa-phone float-right"></i>Phone : {{$row->student_phone}}</li>
                    </ul>
                    <div class="card-body">
                        <div class="float-right btn-group btn-group-sm">
                            <a href="{{url("student")}}/{{$row->id}}/{{"edit"}}" class="btn btn-primary tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Edit"><i class="fa-solid fa-pen-to-square"></i>Edit</a>
                            <a href="{{url("student")}}/{{$row->id}}/{{"delete"}}" class="btn btn-secondary tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Delete"><i class="fa-regular fa-trash-can"></i>Delete</a>
                        </div>
                        
                    </div>
                </div>
            </div>
            
            @endforeach
        </div>
                {{-- <table class="table table-primary table-striped table-hover" id="student">
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
                </table> --}}
    </div>


    <div class="container">
        
    </div>
</body>
</html>