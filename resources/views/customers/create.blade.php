<x-layouts.master>

    <section style="padding-top: 60px;">
        <div class="container">
             <div class="row">
                 <div class="col-md-12">
                     <div class="panel panel-default">
                         <div class="card-header">
                             <div class="row">
                                 <div class="col-md-6">
                                     <h3 class="btn btn-info">Add New Cutomer</h3>
                                 </div>
                                 <div class="col-md-6">
                                     <a href="{{ route('customer.index') }}" class="btn btn-success pull-right">All Cutomers</a>
                                 </div>
                             </div>
                         </div>
                         <div class="card-body">
                             <form class="form-horizontal" action="{{ route('customer.store') }}" method="POST">
                                 @csrf
                                 <div class="form-group">
                                     <label class="col-md-4 control-label">Customer Name</label>
                                     <div class="col-md-4">
                                         <input type="text" name="name" value="{{ old('name') }}" placeholder="Customer Name" class="form-control input-md" />
                                         @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                     </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="col-md-4 control-label">Email</label>
                                    <div class="col-md-4">
                                        <input type="text" name="email" value="{{ old('email') }}" placeholder="Email" class="form-control input-md" />
                                        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                 
                                 <div class="form-group">
                                     <label class="col-md-4 control-label">Phone</label>
                                     <div class="col-md-4">
                                         <input type="text" name="phone" value="{{ old('phone') }}" placeholder="Phone" class="form-control input-md" />
                                         @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                                     </div>
                                 </div>

                                 <div class="form-group">
                                    <label class="col-md-4 control-label">Nid_No</label>
                                    <div class="col-md-4">
                                        <input type="text" name="nid_no" value="{{ old('nid_no') }}" placeholder="Nid_No" class="form-control input-md" />
                                        @error('nid_no') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label">Address</label>
                                    <div class="col-md-4">
                                        <input type="text" name="address" value="{{ old('address') }}" placeholder="Address" class="form-control input-md" />
                                        @error('address') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label">Remarks</label>
                                    <div class="col-md-4">
                                        <input type="text" name="remarks" value="{{ old('remarks') }}" placeholder="Remarks" class="form-control input-md" />
                                        @error('remarks') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                 
                                 <div class="form-group">
                                     <label class="col-md-4 control-label"></label>
                                     <div class="col-md-4">
                                         <button type="submit" class="btn btn-primary">Submit</button>
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