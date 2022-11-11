<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="/app.css">
    <link rel="icon" href="/icon.webp">
    <script src="https://kit.fontawesome.com/8b497b2419.js" crossorigin="anonymous"></script>
    <title>Solicode Management</title>
</head>
<body>
    
    <ul class="menu-bar">
        <li><a href="{{url('/')}}">Promotions</a></li>
        
        
        <li><a href="{{URL('briefs_index')}}">Briefs</a></li>
    </ul>

    <div class="container text-center border border-2 rounded" style="height: 100%;">
    

        <div class="row">
            @foreach ($data as $row)               
            <div class="col-4 p-2" id="search_table">
                <div class="card shadow p-3 mb-5 bg-body rounded" style="width: 18rem; height: 8rem;" >
                    <div class="card-body" >
                        Promotion Name: <h5 class="card-title">{{ $row->name }}</h5>
                        <a href="{{ route('edit-promotion', ['id' => $row->id]) }}" class="card-link">
                            <button id="btn-edit">
                                <span><i class="fa-solid fa-pen-to-square"></i>Edit</span>
                            </button></a>
                        <a href="{{ route('delete-promotion') }}?id={{ $row->id }}" class="card-link">
                            <button id="btn-delete">
                                <span><i class="fa-regular fa-trash-can" id="mdi-delete-empty"></i>Delete</span>
                            </button></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</body>
</html>