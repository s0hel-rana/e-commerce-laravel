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
                            <p> <b>Name :</b> {{ $product->name ?? '' }}</p>
                            <p> <b>Price :</b> {{ $product->price ?? '' }}</p>
                            <p> <b>Unit :</b> {{ $product->unit ?? '' }}</p>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
    </section>
    </x-layouts.master>