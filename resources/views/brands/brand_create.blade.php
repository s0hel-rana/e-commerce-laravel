<x-layouts.master>
<section style="padding-top: 60px;">
    <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <div class="panel panel-default">
                     <div class="card-header">
                         <div class="row">
                             <div class="col-md-6">
                                 <h3 class="btn btn-info">Add New Brand</h3>
                             </div>
                             <div class="col-md-6">
                                 <a href="{{ route('brand_index') }}" class="btn btn-success pull-right">All Brands</a>
                             </div>
                         </div>
                     </div>
                     <div class="card-body">
                         <form class="form-horizontal" action="{{ route('brand_store') }}" method="POST">
                            @csrf
                             <div class="form-group">
                                 <label class="col-md-4 control-label">Brand Name</label>
                                 <div class="col-md-4">
                                     <input type="text" name="brand_name" value="{{ old('brand_name') }}" placeholder="Brand Name" class="form-control input-md" />
                                     @error('brand_name') <span class="text-danger">{{ $message }}</span> @enderror
                                 </div>
                             </div>
                             <div class="form-group">
                                <label class="col-md-4 control-label">Status</label>
                                <div class="col-md-4">
                                    <select class="form-control" name="status" >
                                        <option value="active">Active</option>
                                        <option value="inactive">Inactive</option>
                                    </select> 
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