<x-layouts.master>

    <section style="padding-top: 60px;">
        <div class="container">
             <div class="row">
                 <div class="col-md-12">
                     <div class="panel panel-default">
                         <div class="card-header">
                             <div class="row">
                                 <div class="col-md-6">
                                     <h3 class="btn btn-info">Edit Color</h3>
                                 </div>
                                 <div class="col-md-6">
                                     <a href="{{ route('color_index') }}" class="btn btn-success pull-right">All Colors</a>
                                 </div>
                             </div>
                         </div>
                         <div class="card-body">
                             <form class="form-horizontal" action="{{ route('color_update',$color->id) }}" method="POST">
                                 @csrf
                                 <div class="form-group">
                                     <label class="col-md-4 control-label">Color Name</label>
                                     <div class="col-md-4">
                                         <input type="text" name="name" value="{{ $color->name }}" placeholder="Color Name" class="form-control input-md" />
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