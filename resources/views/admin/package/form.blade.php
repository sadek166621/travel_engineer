@extends('admin.master')
@section('content')
<div class="animated fadeIn">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <strong>Package</strong>
                </div>
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
            <form action="{{ route('admin.package.store') }}"
                  method="post" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <strong>
                            Package Information
                        </strong>
                    </div>
                    <div class="card-body">
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Name</label></div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="text-input" name="name" placeholder="Name" required class="form-control">
                                {{-- <small class="form-text text-muted">This is a help text</small> --}}
                            </div>
                        </div>
                        {{-- <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Category</label></div>
                            <div class="col-12 col-md-9">
                                <select name="category" id="select" class="form-control" required>
                                    <option value="">Select Category </option>
                                    @foreach ($categoryies as $category )
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div> --}}
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Country</label></div>
                            <div class="col-12 col-md-9">
                                <select name="country" class="form-control"  id="country" required>
                                    <option value="">Select Country </option>
                                    @foreach ($countries as $country )
                                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        {{-- <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Place</label></div>
                            <div class="col-12 col-md-9">
                                <select name="place" class="form-control" required id="place" >
                                    <option value="">Select Place</option>
                                </select>
                            </div>
                        </div> --}}
                        {{-- <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Departure Point</label></div>
                            <div class="col-12 col-md-9">
                                <select class="js-example-basic-multiple form-control" required name="departure_point[]" multiple="multiple">
                                    @foreach ($departures as $departure )
                                        <option value="{{ $departure->name }}">{{ $departure->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div> --}}
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Night</label></div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="text-input" name="night" placeholder="Night"  class="form-control">
                                {{-- <small class="form-text text-muted">This is a help text</small> --}}
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Days</label></div>
                            <div class="col-12 col-md-9">
                                <input type="number" name="days" placeholder="Days" class="form-control">
                                {{-- <small class="form-text text-muted">This is a help text</small> --}}
                            </div>
                        </div>

                        {{-- <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Number of Person</label></div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="text-input" name="no_of_people" placeholder="Number of Person" required class="form-control">
                                {{-- <small class="form-text text-muted">This is a help text</small>
                            </div>
                        </div> --}}
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Price</label></div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="text-input" name="price" placeholder="Price" class="form-control">
                                {{-- <small class="form-text text-muted">This is a help text</small> --}}
                            </div>
                        </div>
                        {{-- <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Age</label></div>
                            <div class="col-12 col-md-9">
                                <select name="age" required id="select" class="form-control">
                                    <option value="">Select Age</option>
                                    <option value="1">Adult</option>
                                    <option value="2">Kids</option>
                                    <option value="3">Both</option>
                                </select>
                            </div>
                        </div> --}}
                        {{-- <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Travel Period</label></div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="text-input" name="daterange" value="01/01/2024 - 01/31/2024" required placeholder="Travel Period" class="form-control">
                                {{-- <small class="form-text text-muted">This is a help text</small>
                            </div>
                        </div> --}}
                        {{-- <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Exception <span style="color:grey">[optional]</span></label></div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="text-input" name="exception" placeholder="Exception" class="form-control">
                                {{-- <small class="form-text text-muted">This is a help text</small>
                            </div>
                        </div> --}}
                        {{-- <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Booking Offer Text</label></div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="text-input" name="booking_offer" placeholder="Booking Offer Text" class="form-control">
                                {{-- <small class="form-text text-muted">This is a help text</small>
                            </div>
                         </div>  --}}
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Thumbnail</label></div>
                            <div class="col-12 col-md-9">
                                <input type="file" name="thumbnail" required placeholder="Exception" class="form-control">
                                {{-- <small class="form-text text-muted">This is a help text</small> --}}
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Package Comment</label></div>
                            <div class="col-12 col-md-9">
                                <input type="text" name="comment"  placeholder="Package Comment" class="form-control">
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
                                            <input type="checkbox"  name="special" class="form-check-input" ><span id="statusText">Show</span>
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
                                            <input type="checkbox"  name="status" class="form-check-input" checked ><span id="statusText">Active</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <strong>Activities</strong>
                    </div>
                    <div class="card-body card-block">
                        <div class="days-container" id="addrowdays">
                            <!-- Add Days Button -->
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <input type="hidden" id="addday-count" value="0">
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-success mb-3" id="addrowdays-button" onclick="adddays()">Add Activity +</button>



                        {{-- <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Includes</label></div>
                            <div class="col-12 col-md-9">
                            </div>
                        </div> --}}
                </div>

                </div>
                {{-- <div class="card">
                    <div class="card-header">
                        <strong>Other Information</strong>
                    </div>
                    <div class="card-body">
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Includes <span style="color:grey">[optional]</span></label></div>
                            <div class="col-12 col-md-9">
                                <textarea id="summernote2" name="includes"></textarea>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Excludes <span style="color:grey">[optional]</span></label></div>
                            <div class="col-12 col-md-9">
                                <textarea id="summernote" name="exclude"></textarea>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Important Note <span style="color:grey">[optional]</span></label></div>
                            <div class="col-12 col-md-9">
                                <textarea id="summernote3" name="important_note"></textarea>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Terms & Condition <span style="color:grey">[optional]</span>
                                </label></div>
                            <div class="col-12 col-md-9">
                                <textarea id="summernote4" name="terms"></textarea>
                            </div>
                         </div> --}}

                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Submit
                    </button>
                    <button type="reset" class="btn btn-danger btn-sm" onclick="resetForm()">
                        <i class="fa fa-ban"></i> Reset
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
    var html = `<div class="row form-group day-fields mt-2" id="day-${count}">
                    <div class="col col-md-3">
                         <label for="title-input" class="form-control-label"><h3>Package Activity</h3></label>`;
    if(count != 1){
        html += `<button type="button" class="btn btn-danger mx-3 add-day-button" onclick="deleteDay(${count})">-</button>`;
    }

                    html+=`</div>
                        <div class="col-12 col-md-9">
                            <input type="hidden" value="day1" class="form-control  title-input" name="day_title[]" required placeholder="Day Title">
                        </div>
                 </div>


    <input type="hidden" id="addactivities-count-${count}" value="1">
     <div id="day-${count}-activity">
        <div class="day-template" >
        <div class="row form-group day-row">
            <div class="col col-md-3">
                <br>
                <h5>
                    <label for="title-input" class="form-control-label"> Activities 1</label>
                </h5>
            </div>
            <div class="col col-md-9">
            </div>
        </div>
        <div id="activity-add${count}">
            <div class="row form-group day-fields">

                <div class="col-12 col-md-12">
                    <input type="text" class="form-control title-input" name="activity[${count}][]" required placeholder="Activity">
                </div>
            </div>

        </div>
    </div>
     <button type="button" class="btn btn-primary add-day-button" onclick="addActivity(${count})">Add Activity +</button>
    <hr>
</div>`;

    $('#addrowdays').append(html);

    // Hide the "Add Day +" button when it is clicked
    if (count === 1) {
        $('#addrowdays-button').hide();
    }
}

function addActivity(day) {
    var activities = parseInt($('#addactivities-count-' + day).val()) + 1;
    var activityHtml = ` <div class="day-template" id="row-${day}-${activities}">
                            <div class="row form-group day-row">
                                <div class="col col-md-3">
                                    <br>
                                    <h5>
                                        <label for="title-input" class="form-control-label">Activitiy ${activities}</label>
                                        <button type="button" class="btn btn-danger add-day-button" onclick="deleteActivity(${day},${activities})">-</button>
                                    </h5>
                                </div>
                                <div class="col col-md-9">
                                </div>
                            </div>
                            <div id="activity-add">
                                <div class="row form-group day-fields">
                                    <div class="col-12 col-md-12">
                                        <input type="text" class="form-control title-input" required name="activity[${day}][]" placeholder="Activity">
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
