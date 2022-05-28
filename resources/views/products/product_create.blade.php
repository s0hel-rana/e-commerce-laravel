<x-layouts.master>

<section style="padding-top: 60px;">
    <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <div class="panel panel-default">
                     <div class="card-header">
                         <div class="row">
                             <div class="col-md-6">
                                 <h3 class="btn btn-info">Add New Product</h3>
                             </div>
                             <div class="col-md-6">
                                 <a href="{{ route('product_index') }}" class="btn btn-success pull-right">All Products</a>
                             </div>
                         </div>
                     </div>
                     <div class="card-body">
                         <form class="form-horizontal" action="{{ route('product_store') }}" method="POST">
                             @csrf
                             <div class="form-group">
                                 <label class="col-md-4 control-label">Product Name</label>
                                 <div class="col-md-4">
                                     <input type="text" name="name" value="{{ old('name') }}" placeholder="Product Name" class="form-control input-md" />
                                     @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                 </div>
                             </div>
                             <div class="form-group">
                                <label class="col-md-4 control-label">Price</label>
                                <div class="col-md-4">
                                    <input type="text" name="price" value="{{ old('price') }}" placeholder="Price" class="form-control input-md" />
                                    @error('price') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                             
                             <div class="form-group">
                                 <label class="col-md-4 control-label">Unit</label>
                                 <div class="col-md-4">
                                     <input type="text" name="unit" value="{{ old('unit') }}" placeholder="Unit" class="form-control input-md" />
                                     @error('unit') <span class="text-danger">{{ $message }}</span> @enderror
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