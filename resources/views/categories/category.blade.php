

<x-layouts.master>

<div class="card mb-4">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6">
                <h3 class="btn btn-info">All Categories</h3>
            </div>
            <div class="col-md-6">
                <a href="{{ route('category_create') }}" class="btn btn-dark">Add</a>
                <a href="{{ route('category_trashlist') }}" class="btn btn-warning" >Trashlist</a>
                <a href="{{ route('category_pdf') }}" class="btn btn-success" >PDF</a>
                <a href="{{ route('category_export') }}" class="btn btn-primary" >Excel</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        @if (Session::has('message'))
            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
        @endif

        <div class="container">
            <form action="" method="GET" class="d-flex mb-5">
                <input type="text" name="keyword" placeholder="search here" class="form-control">
                <button class="btn btn-success">Serach</button>
            </form>
        </div>

        <table class="table table-borderd">
            <thead>
                <tr>
                    <th class="text-center">Id</th>
                    <th class="text-center">Title</th>
                    <th class="text-center">Description</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Image</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            @php
                $i=1;
            @endphp
            <tbody>
                @foreach ($categories as $category )
                <tr>
                    <td class="text-center">{{ $i++ }}</td>
                    <td class="text-center">{{ $category->title}}</td>
                    <td class="text-center">{{ $category->description }}</td>
                    <td class="text-center">{{ $category->stock_status }}</td>
                    <td class="text-center">
                        @if (file_exists(storage_path().'/app/public/categories/'.$category->image) && (!is_null
                        ($category->image)))
                        <img src="{{ asset('storage/categories/'.$category->image) }}" height="40" />
                        @else
                            <img src="{{ asset('img/default.png') }}" />
                           
                        @endif
                    </td>
                    <td class="text-center">
                        <a href="{{ route('category_show',$category->id) }}" class="btn btn-primary"><i class="fa fa-eye"></i></a>
                        <a href="{{ route('category_edit',$category->id) }}" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                        <a href="{{ route('category_delete',$category->id) }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
               
            </tbody>
        </table>
    </div>
</div>

</x-layouts.master>
