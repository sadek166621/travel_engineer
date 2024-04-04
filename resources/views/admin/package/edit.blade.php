@extends('admin.master')
@section('content')
<div class="animated fadeIn">
    <div class="row">

        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <strong>Package</strong>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
            <form action="{{ route('admin.package.update', $tour->id) }}"
                  method="post" enctype="multipart/form-data">
                @csrf

                <div class="card">
                    <div class="card-header">
                        <strong>Package Information</strong>
                    </div>

                    <div class="card-body">
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Name</label></div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="text-input" name="name" placeholder="Name" required class="form-control" value="{{$tour->name}}">
                                {{-- <small class="form-text text-muted">This is a help text</small> --}}
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Country</label></div>
                            <div class="col-12 col-md-9">
                                <select name="country" class="form-control"  id="country" required>
                                    <option value="">Select Country </option>
                                    @foreach ($countries as $country )
                                        <option value="{{ $country->id }}" {{$country->id == $tour->country ? 'selected':''}}>{{ $country->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Night</label></div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="text-input" name="night" placeholder="Night" required class="form-control" value="{{$tour->night}}">
                                {{-- <small class="form-text text-muted">This is a help text</small> --}}
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Days</label></div>
                            <div class="col-12 col-md-9">
                                <input type="number" readonly name="days" placeholder="Days" id="total_days" class="form-control" value="{{$tour->days}}">
                                {{-- <small class="form-text text-muted">This is a help text</small> --}}
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Price</label></div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="text-input" name="price" placeholder="Price" class="form-control" value="{{$tour->price}}">
                                {{-- <small class="form-text text-muted">This is a help text</small> --}}
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Thumbnail</label></div>
                            <div class="col-12 col-md-9">
                                <input type="file" name="thumbnail" placeholder="Exception" class="form-control">
                                <img src="{{asset('uploads')}}/package_thumbnail/{{$tour->thumbnail}}" class="mt-2" alt="" height="200px" width="400px">
                                {{-- <small class="form-text text-muted">This is a help text</small> --}}
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label class=" form-control-label">Travel Engineer Special</label>
                            </div>
                            <div class="col col-md-9">
                                <div class="form-check">
                                    <div class="checkbox">
                                        <label for="checkbox1" class="form-check-label ">
                                            <input type="checkbox"  name="special" class="form-check-input"@if($tour->special == 1) checked @endif ><span id="statusText">Show</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label class=" form-control-label">Status</label>
                            </div>
                            <div class="col col-md-9">
                                <div class="form-check">
                                    <div class="checkbox">
                                        <label for="checkbox1" class="form-check-label ">
                                            <input type="checkbox"  name="status" class="form-check-input" @if($tour->status == 1) checked @endif ><span id="statusText">Active</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <strong> Activities</strong>
                    </div>
                    <div class="card-body card-block">

                        <div class="days-container" id="addrowdays">
                            @foreach($days as $key => $day)
                                <div id="day-{{$key+1}}" class="mt-2">
                                    <div class="row form-group day-fields" >
                                        <div class="col col-md-3">
                                            <label for="title-input" class="form-control-label"><h3>Package activity
                                                    @if($key != 0)
                                                        <button type="button" class="btn btn-danger add-day-button" onclick="return deleteDayRecord({{$key+1}}, {{$tour->id}}, {{$day->id}})">-</button></h3>
                                                @endif
                                            </label>

                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="hidden" class="form-control title-input" name="day_title[]" required placeholder="Day Title" value="{{$day->title}}">
                                        </div>
                                    </div>
                                    @php $j=0; @endphp
                                    @foreach($activities as $activity)
                                        @if($activity->day_id == $day->id)
                                            @php $j++; @endphp
                                            <input type="hidden" name="activity_id[{{$key+1}}][]" value="{{$activity->id}}">
                                            <input type="hidden" name="activity_id_array[]" value="{{$activity->id}}">
                                            <div class="day-template" id="row-{{$key+1}}-{{$j}}">
                                                <div class="row form-group day-row">
                                                    <div class="col col-md-3">
                                                        <br>
                                                        <h5>
                                                            <label for="title-input" class=" form-control-label"> Activity {{$j}}
                                                                @if($j != 1)
                                                                    <button type="button" class="btn btn-danger add-day-button"
                                                                            onclick="deleteActivityRecord({{$key+1}},{{$j}}, {{$activity->id}})">-</button>
                                                                @endif
                                                            </label>
                                                        </h5>
                                                    </div>
                                                    <div class="col col-md-9">
                                                    </div>
                                                </div>
                                                <div >
                                                    <div class="row form-group day-fields">

                                                        <div class="col-12 col-md-12">
                                                            <input type="text" class="form-control title-input" name="activity[]" required placeholder="Activity" value="{{$activity->activity}}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                    <div id="activity-add{{$key+1}}">

                                    </div>
                                    <button type="button" class="btn btn-primary add-day-button mb-4" onclick="addActivity({{$key+1}})">Add Activity +</button>
                                    <input type="hidden" id="addactivities-count-{{$key+1}}" value="{{ $j }}">
                                </div>
                                <hr>
                            @endforeach
                            <!-- Add Days Button -->
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <input type="hidden" id="addday-count" value="{{count($days)}}">
                                </div>
                            </div>
                        </div>

                </div>
            </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Submit
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@push('js')
<script src="{{asset('admin-assets')}}/assets/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
                $('.js-example-basic-multiple').select2();
            });

function adddays() {
    var count = parseInt($('#addday-count').val()) + 1;
    $('#total_days').val(count);
    $('#addday-count').val(count); // Update the day count
    addDayHtml(count); // Add the HTML for a new day
}

function addDayHtml(count) {
        var html = `<div class="row form-group day-fields mt-5" id="day-${count}">
                    <div class="col col-md-3">
                         <label for="title-input" class="form-control-label"><h3>Day ${count}</h3></label>`;
        if(count != 1){
            html += `<button type="button" class="btn btn-danger mx-3 add-day-button" onclick="deleteDay(${count})">-</button>`;
        }

        html+=`</div>
                        <div class="col-12 col-md-9">
                            <input type="text" class="form-control title-input" name="day_title[]" required placeholder="Day Title">
                        </div>
                 </div>


     <input type="hidden" id="addactivities-count-${count}" value="1">
     <div id="day-${count}-activity">
        <div class="day-template" >
        <div class="row form-group day-row">
            <div class="col col-md-3">
                <br>
                <h5>
                    <label for="title-input" class="form-control-label">Activities 1</label>
                </h5>
            </div>
            <div class="col col-md-9">
            </div>
        </div>
        <div id="activity-add${count}">
            <div class="row form-group day-fields">
                <div class="col col-md-3">
                    <label for="title-input" class="form-control-label">Activity</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" class="form-control title-input" name="activity[]" required placeholder="Activity">
                </div>
            </div>
            <div class="row form-group day-fields">
                <div class="col col-md-3">
                    <label for="text-input" class="form-control-label">Description</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" class="form-control text-input" name="description[${count}][]" required placeholder="Text">
                </div>
            </div>
            <div class="row form-group day-fields">
                <div class="col-3 col-md-3">
                    <label for="text-input" class="form-control-label">Images</label>
                </div>
                <div class="col-5 col-md-4">
                    <input type="file" class="form-control text-input" name="image1[${count}][]" placeholder="Text">
                </div>
                <div class="col-5 col-md-4">
                    <input type="file" class="form-control text-input" name="image2[${count}][]" placeholder="Text">
                </div>
            </div>
        </div>
    </div>
     <button type="button" class="btn btn-primary add-day-button" onclick="addActivity(${count})">activities +</button>
    <hr>
</div>`;

        $('#addrowdays').append(html);
    }

function addActivity(day) {
    // alert(day);
    var activities = parseInt($('#addactivities-count-'+ day).val()) + 1;
    // alert('day:'+day+ 'Activity:'+activities);
    var activityHtml = ` <div class="day-template" id="row-${day}-${activities}">
                            <div class="row form-group day-row">
                                <div class="col col-md-3">
                                    <br>
                                    <h5>
                                        <label for="title-input" class="form-control-label">Activities ${activities}</label>
                                        <button type="button" class="btn btn-danger add-day-button" onclick="deleteActivity(${day},${activities})">-</button>
                                    </h5>
                                </div>
                                <div class="col col-md-9">
                                </div>
                            </div>
                            <div id="activity-add">
                                <div class="row form-group day-fields">

                                    <div class="col-12 col-md-12">
                                        <input type="text" class="form-control title-input" required name="activity[]" placeholder="Activity">
                                    </div>
                                </div>
                            </div>
                        </div>`;

    $('#activity-add' + day).append(activityHtml);
    $('#addactivities-count-' + day).val(activities);
}


function deleteActivity(day, rowId) {
        $('#row-' + day + '-' + rowId).remove();
        $('#addactivities-count').val( $('#addactivities-count').val() - 1);

    }
    function deleteDay(dayId) {
        $('#day-'+dayId+'-activity').remove();
        $('#day-' + dayId).remove();
        $('#addday-count').val( $('#addday-count').val() - 1);
    }
    function deleteDayRecord(day, tourId, dayId ) {

    var statement = confirm('Please Confirm Before Removing!!');

    if(statement){
        console.log(tourId, dayId)
        $('#day-'+day+'-activity').remove();
        $('#day-' + day).remove();
        $('#addday-count').val( $('#addday-count').val() - 1);

        $.ajax({
            url: '{{ route("admin.package.day.delete") }}',
            type: 'get',
            data:{
                "tour_id": tourId,
                "day_id": dayId,
            },
            dataType: 'json',
            success: function (data) {

            }
        });
    }

    }

    function deleteActivityRecord(day, rowId, activityId) {
    var statement = confirm('Please Confirm Before Removing!!');

    if (statement) {
        // Remove the activity row from the DOM
        $('#row-' + day + '-' + rowId).remove();

        // Update the indexes of the remaining activities
        $('#day-' + day + ' .day-template').each(function (index) {
            var newIndex = index + 1;
            $(this).attr('id', 'row-' + day + '-' + newIndex);
            $(this).find('.add-day-button').attr('onclick', 'deleteActivityRecord(' + day + ',' + newIndex + ',' + $(this).find('input[name^="activity_id[' + day + ']"]').val() + ')');
            $(this).find('.form-control-label').text('Activity ' + newIndex);
            $(this).find('input[name^="activity[' + day + ']"]').attr('name', 'activity[' + day + '][' + newIndex + ']');
        });

        // Update the count of activities for this day
        var remainingActivities = $('#day-' + day + ' .day-template').length;
        $('#addactivities-count-' + day).val(remainingActivities);

        // Perform AJAX request to delete the activity from the database
        $.ajax({
            url: '{{ route("admin.package.activity.delete") }}',
            type: 'get',
            data: {
                "id": activityId,
            },
            dataType: 'json',
            success: function (data) {
                // Handle success if needed
            }
        });
    }
}
   </script>





<script>
    function resetForm() {
        document.getElementById("myForm").reset();
    }
</script>

<script>
    $(function() {
      $('input[name="daterange"]').daterangepicker({
        opens: 'left'
      }, function(start, end, label) {
        console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
      });
    });
</script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
            });
    </script>
    <script>
        $(document).ready(function() {
            $('#summernote2').summernote();
            });
    </script>
    <script>
        $(document).ready(function() {
            $('#summernote3').summernote();
            });
    </script>
    <script>
        $(document).ready(function() {
            $('#summernote4').summernote();
            });


    </script>

<script>
    $(document).ready(function () {
        $('#country').change(function () {
            var countryId = $(this).val();
            if (countryId) {
                $.ajax({
                    url: '{{ route("admin.package.places.by_country", ":country") }}'.replace(':country', countryId),
                    type: 'GET',
                    dataType: 'json',
                    success: function (data) {
                        $('#place').empty();
                        $('#place').append('<option value="">Select Place</option>');
                        $.each(data, function (key, value) {
                            $('#place').append('<option value="' + value.id + '">' + value.name + '</option>');
                        });
                    }
                });
            } else {
                $('#place').empty();
                $('#place').append('<option value="">Select Place</option>');
            }
        });
    });
</script>

@endpush
