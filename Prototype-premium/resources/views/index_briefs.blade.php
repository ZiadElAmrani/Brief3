<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="/editpromo.css">
    <link rel="icon" href="/icon.webp">
    <script src="https://kit.fontawesome.com/8b497b2419.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script> 
    <title>Briefs</title>
</head>
<body>
    <div class="container text-center border border-2 rounded" style="height: 100%">
    
    
        <header>

            <div class="row mt-2 p-1 bg-primary text-white">
                <div class="col">
                    <h4>Briefs add, edit and delete</h4>
                </div>
                <div class="col d-flex justify-content-end">
                    <a href="{{url('promotions')}}"><button class="btn btn-light">Promotions Page</button></a>
                </div>
            </div>

            <div class="row mt-2 p-3">
                <div class="col-4">
                    <h3>Briefs</h3>
                </div>
                <div class="col-8">
                    <div class="" >
                        <a href="{{url('briefs_add')}}"><button class="btn btn-secondary" style="margin-top: 50px">Add Brief</button></a>
                        Search Brief: <input type="search" id="search_brief" name="search_brief" type="text" placeholder="Search..">
                    </div>
                </div>
            </div>
        </header>


                
        <table id="search_result" class="table table-primary table-striped table-hover" id="student" >
            <thead>
                <tr>
                    <th>Brief name</th>
                    <th>Creation date</th>
                    <th>livration date</th>
                    <th>Action</th>
                    <th>Add Tasks</th>
                </tr>
            </thead>
            <tbody id="search_table">
                @foreach ($data as $row)
                        
                    <tr>
                        <td>{{$row->brief_name}}</td>
                        <td>{{$row->creation_date}}</td>
                        <td>{{$row->livration_date}}</td>

                        <td>
                            <a href="{{url("Brief")}}/{{$row->id}}/{{"edit"}}">
                                <button id="btn-edit">
                                    <span><i class="fa-solid fa-pen-to-square"></i>Edit</span>
                                </button></a>
                            <a href="{{url("Brief")}}/{{$row->id}}/{{"delete"}}">
                                <button id="btn-delete">
                                    <span><i class="fa-regular fa-trash-can" id="mdi-delete-empty"></i>Delete</span>
                                </button></a>
                            <a href="{{url("BriefAssign")}}/{{$row->id}}">
                                <button id="btn-tasks">
                                    <span><i class="fa-solid fa-plus"></i>Assign Brief</span>
                                </button></a>
                        </td>
                        <td>
                            <a href="{{url("Brief")}}/{{$row->id}}/{{"add_task"}}">
                                <button id="btn-tasks">
                                    <span><i class="fa-solid fa-plus"></i>Add Tasks</span>
                                </button></a>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
    </div>

{{-- <script type="text/javascript">
    $.ajaxSetup({
headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
    });



    $('#search_brief').on('keyup', function(){
        $search_brief = $(this).val();
        if($search_brief == ''){
            $('$search_result').html('');
            $('$search_result').hide();
        }else{
            $.ajax({
                method:"post",
                url:'search_brief',
                data:JSON.stringify({
                    search_brief:$search_brief
                }),
                headers:{
                    'Accept':'application/json',
                    'Content-Type':'application/json'
                },
                succes::function(data){
                    console.log(data);
                }
            })
        }

 --}}
</body>
</html>