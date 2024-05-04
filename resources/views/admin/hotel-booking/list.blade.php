@extends('admin.master')
@section('content')

<div class="animated fadeIn">
    <div class="row">
        <div class="col-md-6">
          </div>
        <div class="col-md-6">
            {{-- <a href="{{ route('admin.tickets.add') }}" class="btn btn-info float-right">Add New</a> --}}
          </div>
    </div>
    <br>
                <div class="row">
                    @if (Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                    @endif
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Leads</strong>
                            </div>
                            <div class="card-body">
                                <table id="myTable" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>First Name
                                                <br>
                                                Last Name
                                            </th>
                                            <th>Email
                                                <br>
                                                Phone
                                            </th>
                                            <th>Country
                                                <br>
                                                Hotel Name
                                            </th>
                                            <th>How Many Person
                                                <br>
                                                Stay Duration
                                            </th>
                                            <th>Check In</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($leads as $lead )
                                        <tr>
                                            <td>
                                            {{$lead->firstname}}
                                            <br>
                                            {{$lead->lastname}}
                                            </td>

                                            <td>
                                            {{$lead->email}}
                                            <br>
                                            {{$lead->phone}}
                                            </td>
                                            <td>
                                             {{$lead->Country->name}}
                                            <br>
                                             {{$lead->Hotel->name}}
                                            <br>
                                            </td>
                                            <td>
                                                {{$lead->person}} Person
                                                <br>
                                                 {{$lead->stay_duration}} Days
                                            </td>
                                            <td>
                                                {{$lead->check_in}}
                                            </td>
                                            <td>
                                                {{-- <a href="{{ route('admin.tickets.edit', $lead->id) }}" class="btn btn-info"><i class="fa fa-edit"></i> Edit</a> --}}
                                                <a href="{{ route('admin.hotel-booking.delete', $lead->id) }}" class="btn btn-danger" onclick="if(!confirm('Are You Sure?')){ return false }">
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
