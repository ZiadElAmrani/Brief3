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
    <title>Promotions and students management</title>
</head>
<body>
    <div class="container text-center border border-2 rounded" style="height: 100%;">
        <header>

            <div class="row mt-2 p-1 bg-primary text-white">
                <div class="col">
                    <h4>Promotions and Students Management</h4>
                </div>
                <div class="col d-flex justify-content-end">
                    <button type="button" class="btn btn-light" >About</button>
                    <button type="button" class="btn btn-light" id="submit">Settings</button>
                </div>
            </div>

            <div class="row mt-2 p-3">
                <div class="col-4">
                    <h3>Promotions:</h3>
                </div>  
                <div class="col-8">
                    <div class="">
                        <a href="{{URL('briefs_index')}}"><button class="btn btn-primary btn-sm">Add Brief</button></a>
                        <button class="btn btn-secondary btn-sm" id="add_promo">Add Promotion</button>
                        Search : <input id="search_brief" name="search" type="text" placeholder="Search..">
                    </div>
                    
                </div>
            </div>
        </header>

        <div class="container mt-4 pt-4 pb-4 bg-light text-dark d-flex justify-content-evenly">
            <div class="container_2">
                <form id="promo_form" action="{{ route ('insert-promotion') }}" method="POST" style="display: none;">
                    @csrf
                    <div class="col p-2 " >
                        <div class="card shadow p-3 mb-5 bg-body rounded" id="input_card">
                            <div class="card-body" >
                                <label><span>Promotion name:  </span><br><input type="text" name="name"></label>
                                <br><button type="submit" name="add_promotion" class="button_sbmt"><span class="text">Submit</span><i class="ri-check-line icon"></i></button>
                                <i id="close_btn" class="fa-solid fa-circle-xmark"></i>
                            </div>
                        </div>
                    </div>
                </form>



                <div class="row" id="search_table">
                    @foreach ($data as $row)               
                    <div class="col-4 p-2 ">
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
        </div>
    </div>


<script>
    let show_add = document.querySelector("#add_promo");
    let close_add = document.querySelector("#close_btn");
    let add_modal = document.querySelector("#promo_form");

    show_add.addEventListener("click", () => {
            add_modal.style.display = "flex";
            add_modal.style.zIndex = 0;
            add_modal.style.opacity = 1;
        })

    close_add.addEventListener("click", () => {
            add_modal.style.display = "none";
            add_modal.style.zIndex = -10;
            add_modal.style.opacity = 0;
        })
</script>
<script src="/index.js"></script>
</body>
</html>