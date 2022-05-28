
<x-layouts.master>

<div class="card mb-4">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6">
                <h3 class="btn btn-info">All Customers</h3>
            </div>
            <div class="col-md-6">
                <a href="{{ route('customer.create') }}" class="btn btn-dark pull-right">Add Customer</a>
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
                    <th class="text-center">email</th>
                    <th class="text-center">Phone</th>
                    <th class="text-center">Nid_No</th>
                    <th class="text-center">Address</th>
                    <th class="text-center">Remarks</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
        
            <tbody>
                @foreach ($customers as $customer )
                <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td class="text-center">{{ $customer->name}}</td>
                    <td class="text-center">{{ $customer->email }}</td>
                    <td class="text-center">{{ $customer->phone }}</td>
                    <td class="text-center">{{ $customer->nid_no }}</td>
                    <td class="text-center">{{ $customer->address }}</td>
                    <td class="text-center">{{ $customer->remarks }}</td>
                    <td class="text-center">
                        <a href="{{ route('customer.show',$customer->id) }}" class="btn btn-sm btn-primary">Show</a>
                        <a href="{{ route('customer.edit',$customer->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <a href="{{ route('customer.delete',$customer->id) }}" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
               
            </tbody>
        </table>
    </div>
</div>

</x-layouts.master>