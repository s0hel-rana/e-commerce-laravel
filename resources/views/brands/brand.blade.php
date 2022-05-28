

<x-layouts.master>

<div class="card mb-4">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6">
                <h3 class="btn btn-info">All Brands</h3>
            </div>
            <div class="col-md-6">
                <a href="{{ route('brand_create') }}"><x-button/></a>
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
                    <th class="text-center">Brand_Name</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            @php
                $i=1;
            @endphp
            <tbody>
                @foreach ($brands as $brand )
                <tr>
                    <td class="text-center">{{ $i++ }}</td>
                    <td class="text-center">{{ $brand->brand_name}}</td>
                    <td class="text-center">{{ $brand->status }}</td>
                    <td class="text-center">
                        <a href="{{ route('brand_show',$brand->id) }}" class="btn btn-primary"><i class="fa fa-eye"></i></a>
                        <a href="{{ route('brand_edit',$brand->id) }}" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
                        <a href="{{ route('brand_delete',$brand->id) }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
               
            </tbody>
        </table>
    </div>
</div>

</x-layouts.master>
