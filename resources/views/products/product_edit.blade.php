<x-layouts.master>

    <section style="padding-top: 60px;">
        <div class="container">
             <div class="row">
                 <div class="col-md-12">
                     <div class="panel panel-default">
                         <div class="card-header">
                             <div class="row">
                                 <div class="col-md-6">
                                     <h3 class="btn btn-info">Update Product</h3>
                                 </div>
                                 <div class="col-md-6">
                                     <a href="{{ route('product_index') }}" class="btn btn-success pull-right">All Products</a>
                                 </div>
                             </div>
                         </div>
                         <div class="card-body">
                            @if (Session::has('message'))
                            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                            @endif
                             <form class="form-horizontal" action="{{ route('product_update',$product->id) }}" method="POST">
                                 @csrf
                                 <div class="form-group">
                                     <label class="col-md-4 control-label">Product Name</label>
                                     <div class="col-md-4">
                                         <input type="text" name="name" placeholder="Product Name" value="{{ $product->name}}" class="form-control input-md" />
                                     </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="col-md-4 control-label">Price</label>
                                    <div class="col-md-4">
                                        <input type="text" name="price" placeholder="Product Name" value="{{ $product->price}}" class="form-control input-md" />
                                    </div>
                                </div>
                                 
                                 <div class="form-group">
                                     <label class="col-md-4 control-label">Unit</label>
                                     <div class="col-md-4">
                                         <input type="text" name="unit" placeholder="Price" value="{{ $product->unit}}" class="form-control input-md" />
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