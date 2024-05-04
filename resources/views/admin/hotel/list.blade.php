@extends('admin.master')
@section('content')

<div class="animated fadeIn">
    <div class="row">
        <div class="col-md-6">
        </div>
        <div class="col-md-6">
            <a href="{{ route('admin.hotel.add') }}" class="btn btn-info float-right">Add New</a>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Hotels</strong>
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
                                <th>Country</th>
                                <th>Hotel Name</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @if(count($hotels) >0)
                            @foreach ($hotels as $item )
                            <tr>
                                <td>{{$item->country->name ?? ''}}</td>
                                <td>{{$item->name}}</td>
                                <td>
                                    @if ($item->status == 1)
                                    <span class="badge bg-success">Active</span>
                                    @else
                                    <span class="badge bg-danger">Inactive</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('admin.hotel.edit', $item->id) }}" class="btn btn-info"><i
                                            class="fa fa-edit"></i> Edit</a>
                                    <a href="{{ route('admin.hotel.delete', $item->id) }}" class="btn btn-danger"
                                        onclick="if(!confirm('Are You Sure?')){ return false }">
                                        <i class="fa fa-trash">
                                        </i> Delete</a>
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="5" class="text-center">No Hotel Added</td>
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
    $(document).ready(function () {
        $('#myTable').DataTable();
    });

</script>
@endpush
