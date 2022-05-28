<x-layouts.master>

    <section style="padding-top: 60px;">
        <div class="container">
             <div class="row">
                 <div class="col-md-12">
                     <div class="panel panel-default">
                         <div class="card-header">
                             <div class="row">
                                 <div class="col-md-6">
                                     <h3 class="btn btn-info">Add New Color</h3>
                                 </div>
                                 <div class="col-md-6">
                                     <a href="{{ route('color_index') }}" class="btn btn-success pull-right">All Colors</a>
                                 </div>
                             </div>
                         </div>
                         <div class="card-body">
                            <p> <b>Name :</b> {{ $color->name ?? '' }}</p>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
    </section>
    </x-layouts.master>