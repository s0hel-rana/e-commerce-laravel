

@extends('layouts.master')

@section('content')

<div class="card mb-4">
    <div class="card-header">
        <div class="row">
            <div class="col-md-6">
                <h3 class="btn btn-info">Category Trashlist</h3>
            </div>
            <div class="col-md-6">
                <a href="{{ route('category_index') }}" class="btn btn-primary">Trashlist</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        @if (Session::has('message'))
            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
        @endif
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th class="text-center">Id</th>
                    <th class="text-center">Title</th>
                    <th class="text-center">Description</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Image</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            @php
                $i=1;
            @endphp
            <tbody>
                @foreach ($categories as $category )
                <tr>
                    <td class="text-center">{{ $i++ }}</td>
                    <td class="text-center">{{ $category->title}}</td>
                    <td class="text-center">{{ $category->description }}</td>
                    <td class="text-center">{{ $category->stock_status }}</td>
                    <td class="text-center">
                        @if (file_exists(storage_path().'/app/public/categories/'.$category->image) && (!is_null
                        ($category->image)))
                        <img src="{{ asset('storage/categories/'.$category->image) }}" height="40">
                        @else
                            <img src="{{ asset('img/default.png') }}" />
                           
                        @endif
                    </td>
                    <td class="text-center">
                        <a href="{{ route('category_restore',$category->id) }}" class="btn btn-primary"><i class="fa fa-undo"></i></a>
                        <a href="{{ route('category_restore_delete',$category->id) }}" class="btn btn-warning"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
                @endforeach
               
            </tbody>
        </table>
    </div>
</div>

@endsection
