@extends('admin.master')
@section('content')

<div class="animated fadeIn">
    <div class="row">
        <div class="col-md-6">
          </div>
        <div class="col-md-6">
            <a href="{{ route('admin.slider.add') }}" class="btn btn-info float-right">Add New</a>
          </div>
    </div>
    <br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Sliders</strong>
                            </div>
                            <div class="card-body">
                                <table id="myTable" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>title</th>
                                            <th>Main Title</th>
                                            <th>Image</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @if(count($sliders) >0)
                                            @foreach ($sliders as $key=> $slider )
                                                <tr>
                                                    <td>{{$key+1}}</td>
                                                    <td>{{$slider->title}}</td>
                                                    <td>{{$slider->main_title}}</td>
                                                    <td>
                                                        <img src="{{asset('uploads/sliders')}}/{{ $slider->image }}" height="150px" width="150px" alt=""></td>
                                                    <td>
                                                        @if ($slider->status == 1)
                                                            <span class="badge bg-success">Active</span>
                                                        @else
                                                            <span class="badge bg-danger">Inactive</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('admin.slider.edit', $slider->id) }}" class="btn btn-info"><i class="fa fa-edit"></i> Edit</a>
                                                        <a href="{{ route('admin.slider.delete', $slider->id) }}" class="btn btn-danger" onclick="if(!confirm('Are You Sure?')){ return false }">
                                                            <i class="fa fa-trash">
                                                            </i> Delete</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="5" class="text-center">No Country Added</td>
                                            </tr>
                                        @endif

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
