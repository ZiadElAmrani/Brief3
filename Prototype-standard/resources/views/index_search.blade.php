
@foreach ($data as $row)
                
                <div class="col-4 p-2 ">
                    <div class="card shadow p-3 mb-5 bg-body rounded" style="width: 18rem; height: 8rem;" >
                        <div class="card-body" >
                            Promotion Name: <h5 class="card-title">{{ $row->name }}</h5>
                            <a href="{{ route('edit-promotion', ['id' => $row->id]) }}" class="card-link">Edit</a>
                            <a href="{{ route('delete-promotion') }}?id={{ $row->id }}" class="card-link">Delete</a>
                        </div>
                    </div>
                </div>
@endforeach