@extends('admin.master')
@section('content')

<div class="animated fadeIn">
    <div class="row">
        <div class="col-md-6">
          </div>
        <div class="col-md-6">
            <a href="{{ route('admin.category.add') }}" class="btn btn-info float-right">Add New</a>
          </div>
    </div>
    <br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Category</strong>
                            </div>
                            @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <div class="card-body">
                                <table id="myTable" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Image</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($categoryies as $category )
                                        <tr>
                                            <td>{{$category->name}}</td>
                                            <td>
                                                @if($category->image)
                                                    <img src="{{asset($category->image)}}" height="100px" width="100px" class="rounded-circle" alt="">
                                                @endif
                                            </td>
                                            <td>
                                                @if ($category->status == 1)
                                                <span class="badge bg-success">Active</span>
                                                @else
                                                <span class="badge bg-danger">Inactive</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.category.edit', $category->id) }}" class="btn btn-info"><i class="fa fa-edit"></i> Edit</a>
                                                @if ($category->id !=2 && $category->id !=3 && $category->id !=4 && $category->id !=5)
                                                <a href="{{ route('admin.category.delete', $category->id) }}" class="btn btn-danger" onclick="if(!confirm('Are You Sure?')){ return false }">
                                                    <i class="fa fa-trash">
                                                        </i> Delete</a>
                                                @endif

                                            </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .animated -->
            @endsection
            @push('js')
            <script>
                 $(document).ready(function(){
        $('#myTable').DataTable();
    });
            </script>
            @endpush
