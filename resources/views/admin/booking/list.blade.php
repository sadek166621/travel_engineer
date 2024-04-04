@extends('admin.master')
@section('content')

<div class="animated fadeIn">
    <div class="row">
        <div class="col-md-6">
          </div>
        <div class="col-md-6">
            <a href="{{ route('admin.booking.add') }}" class="btn btn-info float-right">Add New</a>
          </div>
    </div>
    <br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Booking List</strong>
                            </div>
                            <div class="card-body">
                                <table id="myTable" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Expected Travel Date</th>
                                            <th>Package</th>
                                            {{-- <th>Price</th> --}}
                                            {{-- <th>Departure Point</th> --}}
                                            <th>Number of Person</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @if(count($bookings) >0)
                                            @foreach ($bookings as $booking )
                                                <tr>
                                                    <td>{{$booking->name}}</td>
                                                    <td>{{$booking->email}}</td>
                                                    <td>{{$booking->phone}}</td>
                                                    <td>{{$booking->expected_travel_date}}</td>
                                                    <td>{{$booking->Tour->name}}</td>
                                                    {{-- <td>{{$booking->price}}</td> --}}
                                                    {{-- <td>{{$booking->departure_point}}</td> --}}
                                                    <td>{{$booking->no_of_person}}</td>
                                                    <td>
                                                        <a href="{{ route('admin.booking.edit', $booking->id) }}" class="btn btn-info"><i class="fa fa-edit"></i> Edit</a>
                                                        <a href="{{ route('admin.booking.delete', $booking->id) }}" class="btn btn-danger" onclick="if(!confirm('Are You Sure?')){ return false }">
                                                            <i class="fa fa-trash">
                                                            </i> Delete</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="8" class="text-center">No Booking Added</td>
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
