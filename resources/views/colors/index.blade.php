
<x-layouts.master>

<div class="card mb-4">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6">
                <h3 class="btn btn-info">All Colors</h3>
            </div>
            <div class="col-md-6">
                <a href="{{ route('color_create') }}" class="btn btn-dark pull-right">Add Color</a>
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
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            @php
                $i=1;
            @endphp
            <tbody>
                @foreach ($colors as $color )
                <tr>
                    <td class="text-center">{{ $i++ }}</td>
                    <td class="text-center">{{ $color->name}}</td>
                    <td class="text-center">
                        <a href="{{ route('color_show',$color->id) }}" class="btn btn-sm btn-primary">Show</a>
                        <a href="{{ route('color_edit',$color->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <a href="{{ route('color_delete',$color->id) }}" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
               
            </tbody>
        </table>
    </div>
</div>

</x-layouts.master>