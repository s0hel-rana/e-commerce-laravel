<x-layouts.master>

    <section style="padding-top: 60px;">
        <div class="container">
             <div class="row">
                 <div class="col-md-12">
                     <div class="panel panel-default">
                         <div class="card-header">
                             <div class="row">
                                 <div class="col-md-6">
                                     <h3 class="btn btn-info">Add New Customer</h3>
                                 </div>
                                 <div class="col-md-6">
                                     <a href="{{ route('customer.index') }}" class="btn btn-success pull-right">All Products</a>
                                 </div>
                             </div>
                         </div>
                         <div class="card-body">
                            <p> <b>Name :</b> {{ $customer->name ?? '' }}</p>
                            <p> <b>Email :</b> {{ $customer->email ?? '' }}</p>
                            <p> <b>Phone :</b> {{ $customer->phone ?? '' }}</p>
                            <p> <b>Nid_No :</b> {{ $customer->nid_no ?? '' }}</p>
                            <p> <b>Address :</b> {{ $customer->address ?? '' }}</p>
                            <p> <b>Remarks :</b> {{ $customer->remarks ?? '' }}</p>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
    </section>
    </x-layouts.master>