<x-layouts.master>
    <section style="padding-top: 60px;">
        <div class="container">
             <div class="row">
                 <div class="col-md-12">
                     <div class="panel panel-default">
                         <div class="card-header">
                             <div class="row">
                                 <div class="col-md-6">
                                     <h3 class="btn btn-info">Update Category</h3>
                                 </div>
                                 <div class="col-md-6">
                                     <a href="{{ route('category_index') }}" class="btn btn-success pull-right">All Categories</a>
                                 </div>
                             </div>
                         </div>
                         <div class="card-body">
                            @if (Session::has('message'))
                            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                            @endif
                             <form class="form-horizontal" action="{{ route('category_update',$category->id) }}" method="POST"> 
                                 @csrf
                                 <div class="form-group">
                                     <label class="col-md-4 control-label">Title</label>
                                     <div class="col-md-4">
                                         <input type="text" name="title" placeholder="Title" value="{{ $category->title }}" class="form-control input-md" />
                                     </div>
                                 </div>
                                 <div class="form-group">
                                    <label class="col-md-4 control-label">Description</label>
                                    <div class="col-md-4" >
                                        <textarea class="form-control" name="description" placeholder="Description">{{ $category->description}}</textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Status</label>
                                    <div class="col-md-4">
                                        <select class="form-control" name="stock_status" value="{{ $category->stock_status}}" >
                                            <option value="instock">InStock</option>
                                            <option value="outstock">Out Of Stock</option>
                                        </select> 
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label">Image</label>
                                    <div class="col-md-4">
                                        <input type="text" name="image" placeholder="Image" value="{{ $category->image }}" class="form-control input-md" />
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