<x-layouts.master>

    <section style="padding-top: 60px;">
        <div class="container">
             <div class="row">
                 <div class="col-md-12">
                     <div class="panel panel-default">
                         <div class="card-header">
                             <div class="row">
                                 <div class="col-md-6">
                                     <h3 class="btn btn-info">Update Customer</h3>
                                 </div>
                                 <div class="col-md-6">
                                     <a href="{{ route('customer.index') }}" class="btn btn-success pull-right">All Customers</a>
                                 </div>
                             </div>
                         </div>
                         <div class="card-body">
                            @if (Session::has('message'))
                            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                            @endif
                             <form class="form-horizontal" action="{{ route('customer.update',$customer->id) }}" method="POST">
                                 @csrf
                                 <div class="form-group">
                                     <label class="col-md-4 control-label">Customer Name</label>
                                     <div class="col-md-4">
                                         <input type="text" name="name"  value="{{ $customer->name}}" class="form-control input-md" />
                                     </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="col-md-4 control-label">Email</label>
                                    <div class="col-md-4">
                                        <input type="text" name="email"  value="{{ $customer->email}}" class="form-control input-md" />
                                    </div>
                                </div>
                                 
                                 <div class="form-group">
                                     <label class="col-md-4 control-label">Phone</label>
                                     <div class="col-md-4">
                                         <input type="text" name="phone"  value="{{ $customer->phone}}" class="form-control input-md" />
                                     </div>
                                 </div>

                                 <div class="form-group">
                                    <label class="col-md-4 control-label">Nid_No</label>
                                    <div class="col-md-4">
                                        <input type="text" name="nid_no" value="{{ $customer->nid_no}}" class="form-control input-md" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label">Address</label>
                                    <div class="col-md-4">
                                        <input type="text" name="address"  value="{{ $customer->address}}" class="form-control input-md" />
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label">Remarks</label>
                                    <div class="col-md-4">
                                        <input type="text" name="remarks"  value="{{ $customer->remarks}}" class="form-control input-md" />
                                    </div>
                                </div>
                                 
                                 <div class="form-group">
                                     <label class="col-md-4 control-label"></label>
                                     <div class="col-md-4">
                                         <button type="submit" class="btn btn-primary">Update</button>
                                     </div>
                                 </div>
                             </form>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
    </section>
</x-layouts.master>