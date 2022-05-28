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
                             <p><b> Brand Name : </b>{{ $brand->brand_name }}</p>
                             <p><b> Status : </b>{{ $brand->status }}</p>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
    </section>
    
    </x-layouts.master>