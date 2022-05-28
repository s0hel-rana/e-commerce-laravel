
<x-layouts.master>

<div class="card mb-4">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6">
                <h3 class="btn btn-info">All Products</h3>
            </div>
            <div class="col-md-6">
                <a href="{{ route('product_create') }}" class="btn btn-dark pull-right">Add</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        @if (Session::has('message'))
            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
        @endif
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th class="text-center">Id</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Price</th>
                    <th class="text-center">Unit</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            @php
                $i=1;
            @endphp
            <tbody>
                @foreach ($products as $product )
                <tr>
                    <td class="text-center">{{ $i++ }}</td>
                    <td class="text-center">{{ $product->name}}</td>
                    <td class="text-center">{{ $product->price }}</td>
                    <td class="text-center">{{ $product->unit }}</td>
                    <td class="text-center">
                        <a href="{{ route('product_show',$product->id) }}" class="btn btn-sm btn-primary">Show</a>
                        <a href="{{ route('product_edit',$product->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <a href="{{ route('product_delete',$product->id) }}" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
               
            </tbody>
        </table>
    </div>
</div>

</x-layouts.master>