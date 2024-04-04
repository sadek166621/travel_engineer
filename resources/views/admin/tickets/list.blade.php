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
                                            <th>Origin
                                                <br>
                                                Destination
                                            </th>
                                            <th>Departure Date
                                                <br>
                                                Return Date
                                            </th>
                                            <th>Adult
                                                <br>
                                                Children
                                                <br>
                                                infants
                                            </th>
                                            <th>ways</th>
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
                                            {{$lead->origins->name}}
                                            <br>
                                            {{$lead->destinations->name}}
                                            </td>

                                            <td>
                                            {{$lead->departure_date}}
                                            <br>
                                            {{$lead->return_date}}
                                            </td>

                                            <td>
                                            Adult {{$lead->adult}}
                                            <br>
                                            Children {{$lead->children}}
                                            <br>
                                           Infants {{$lead->infants}}
                                            </td>
                                            <td>
                                                @if ( $lead->way == 1)
                                                One Way
                                                @else
                                                Round Way
                                                @endif
                                              
                                            </td>
                                            <td>
                                                {{-- <a href="{{ route('admin.tickets.edit', $lead->id) }}" class="btn btn-info"><i class="fa fa-edit"></i> Edit</a> --}}
                                                <a href="{{ route('admin.tickets.delete', $lead->id) }}" class="btn btn-danger" onclick="if(!confirm('Are You Sure?')){ return false }">
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
