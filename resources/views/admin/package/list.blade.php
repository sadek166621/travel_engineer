@extends('admin.master')
@section('content')

<div class="animated fadeIn">
    <div class="row">
        <div class="col-md-6">
          </div>
        <div class="col-md-6">
            <a href="{{ route('admin.package.add') }}" class="btn btn-info float-right">Add New</a>
          </div>
    </div>
    <br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Packages</strong>
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
                                            <th>SL</th>
                                            <th>Name</th>
                                            {{-- <th>Day/Night</th> --}}
                                            <th>Price</th>
                                            <th>Age</th>
                                            <th>Travel Period</th>
                                            <th>Exception</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @if(count($tours) >0)
                                            @foreach ($tours as $key=> $tour )
                                                <tr>
                                                    <td>{{$key+1}}</td>
                                                    {{-- <td>{{$tour->days }}</td> --}}
                                                    <td>{{$tour->name}}</td>
                                                    <td>{{$tour->price}}</td>
                                                    <td>
                                                        @if($tour->age == 1)
                                                            Adult
                                                        @elseif($tour->age == 2)
                                                            Kids
                                                        @else
                                                            Both
                                                        @endif
                                                    </td>
                                                    <td width="100px" class="text-center">{{$tour->daterange}}</td>
                                                    <td width="200px">{{$tour->exception ?? 'N/A'}}</td>
                                                    <td>
                                                        @if ($tour->status == 1)
                                                            <span class="badge bg-success">Active</span>
                                                        @else
                                                            <span class="badge bg-danger">Inactive</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('admin.package.edit', $tour->id) }}" class="btn btn-info"><i class="fa fa-edit"></i> Edit</a>
                                                        <a href="{{ route('admin.package.delete', $tour->id) }}" class="btn btn-danger" onclick="if(!confirm('Are You Sure?')){ return false }">
                                                            <i class="fa fa-trash">
                                                            </i> Delete</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td class="text-center" colspan="8">No Package Added</td>
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
