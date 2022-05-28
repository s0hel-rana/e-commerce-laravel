<x-layouts.master>
<section style="padding-top: 60px;">
    <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <div class="panel panel-default">
                     <div class="card-header">
                         <div class="row">
                             <div class="col-md-6">
                                 <h3 class="btn btn-info">Add New Category</h3>
                             </div>
                             <div class="col-md-6">
                                 <a href="{{ route('category_index') }}" class="btn btn-success pull-right">All Categories</a>
                             </div>
                         </div>
                     </div>
                     <div class="card-body">
                         <form class="form-horizontal" action="{{ route('category_store') }}" method="POST" enctype="multipart/form-data">
                             @csrf
                             <div class="form-group">
                                 <label class="col-md-4 control-label">Title</label>
                                 <div class="col-md-4">
                                     <input type="text" name="title" value="{{ old('title') }}" placeholder="Title" class="form-control" />
                                     @error('title')<span class="text-danger">{{ $message }}</span> @enderror
                                 </div>
                             </div>

                             <div class="form-group">
                                <label class="col-md-4 control-label">Description</label>
                                <div class="col-md-4" >
                                    <textarea class="form-control" id="ckeditor" name="description" placeholder="Description">{{ old('description') }}</textarea>
                                    @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Status</label>
                                <div class="col-md-4">
                                    <select class="form-control" name="stock_status" >
                                        <option value="instock">InStock</option>
                                        <option value="outstock">Out Of Stock</option>
                                    </select> 
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Image</label>
                                <div class="col-md-4">
                                    <input type="file" name="image" value="{{ old('image') }}"class="form-control" accept="image/*" />
                                    @error('image') <span class="text-danger">{{ $message }}</span> @enderror
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

     {{-- <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script> --}}
<script>
    CKEDITOR.replace( 'ckeditor');
</script>
</section>

</x-layouts.master>