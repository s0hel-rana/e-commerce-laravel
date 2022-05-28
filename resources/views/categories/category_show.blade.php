<x-layouts.master>
    <section style="padding-top: 60px;">
        <div class="container">
             <div class="row">
                 <div class="col-md-12">
                     <div class="panel panel-default">
                         <div class="card-header">
                             <div class="row">
                                 <div class="col-md-6">
                                     <h3 class="btn btn-info">Show Category</h3>
                                 </div>
                                 <div class="col-md-6">
                                     <a href="{{ route('category_index') }}" class="btn btn-success pull-right">All Categories</a>
                                 </div>
                             </div>
                         </div>
                         <div class="card-body">

                            <p><b> Name : </b>{{ $category->title ?? 'No title'}}</p>
                            <p><b> Description : </b>{{ $category->description ?? 'No description' }}</p>
                            <p><b> Status : </b>{{ $category->stock_status ?? 'No stock_status' }}</p>

                            @if(file_exists(storage_path().'/app/public/categories/'.$category->image) && (!is_null
                            ($category->image)))

                            <img src="{{ asset('storage/categories/'.$category->image) }}" height="100"/>
                            @else
                            <img src="{{ asset('img/default.png') }}"/>
                            @endif
                            
                         </div>
                     </div>
                 </div>
             </div>
         </div>
    </section>
    
    </x-layouts.master>