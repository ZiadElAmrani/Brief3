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
    <title>Assign Brief</title>
</head>
<body>
    <div class="container text-center border border-2 rounded" style="height: 100%">


        <header>

            <div class="row mt-2 p-1 bg-primary text-white">
                <div class="col">
                    <h4>Assign Brief for Students</h4>
                </div>
                <div class="col d-flex justify-content-end">
                    <a href="{{url('promotions')}}"><button class="btn btn-light">Promotions Page</button></a>
                </div>
            </div>
        </header>
    
        <a href="{{url("BriefAssign")}}/{{$brief_id}}/AttachClass/{{$data[0]->id}}">
            <button id="btn-">
                <span><i></i>Attach to all class</span>
            </button></a>
        
                <table class="table table-primary table-striped table-hover" id="student">
                    <thead>
                        <tr>
                            <th>Student first name</th>
                            <th>Student last name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $row)
                                
                            <tr>
                                <td>{{$row->first_name}}</td>
                                <td>{{$row->last_name}}</td>

                                <td>
                                    <a href="{{$brief_id}}/Attach/{{$row->id}}">
                                        <button id="btn-edit">
                                            <span><i ></i>Attach</span>
                                        </button></a>
                                    <a href="{{$brief_id}}/Detach/{{$row->id}}">
                                        <button id="btn-delete">
                                            <span><i  id="mdi-delete-empty"></i>Detach</span>
                                        </button></a>
                                </td>
                            </tr>
                            @endforeach
                    </tbody>
                    
                </table>
                
    </div>
</body>
</html>