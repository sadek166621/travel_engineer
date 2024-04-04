@extends('admin.master')
@section('content')

<div class="animated fadeIn">
    <div class="row">
        <div class="col-md-6">
          </div>
        <div class="col-md-6">
            <a href="{{ route('admin.origin.add') }}" class="btn btn-info float-right">Add New</a>
          </div>
    </div>
    <br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Origin Points</strong>
                            </div>
                            <div class="card-body">
                                <table id="myTable" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($origins as $origin )
                                        <tr>
                                            <td>{{$origin->name}}</td>
                                            <td>
                                                @if ($origin->status == 1)
                                                <span class="badge bg-success">Active</span>
                                                @else
                                                <span class="badge bg-danger">Inactive</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.origin.edit', $origin->id) }}" class="btn btn-info"><i class="fa fa-edit"></i> Edit</a>
                                                <a href="{{ route('admin.origin.delete', $origin->id) }}" class="btn btn-danger" onclick="if(!confirm('Are You Sure?')){ return false }">
                                                    <i class="fa fa-trash">
                                                        </i> Delete</a>
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
