@extends('admin.master')
@section('content')
<div class="animated fadeIn">
    <div class="row">
        <div class="col-lg-12">
            <form action="@isset($item){{ route('admin.testimonial.update', $item->id) }}@else{{ route('admin.testimonial.store') }}@endisset"
                  method="post" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <strong>Testimonial</strong>
                    </div>
    {{--                @if ($errors->any())--}}
    {{--                    <div class="alert alert-danger">--}}
    {{--                        <ul>--}}
    {{--                            @foreach ($errors->all() as $error)--}}
    {{--                                <li>{{ $error }}</li>--}}
    {{--                            @endforeach--}}
    {{--                        </ul>--}}
    {{--                    </div>--}}
    {{--                @endif--}}
                    <div class="card-body card-block">
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Name</label></div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="text-input" name="name" placeholder="Name" class="form-control @error('name') is-invalid @enderror" value="@isset($item){{ $item->name }}@else{{old('name')}}@endisset" required>
                                    {{-- <small class="form-text text-muted">This is a help text</small> --}}
                                    @error('name')
                                        <div class="invalid-feedback" role="alert">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Country</label></div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="text-input" name="country" placeholder="Country" class="form-control @error('country') is-invalid @enderror" value="@isset($item){{ $item->country }}@else{{old('country')}}@endisset" required>
                                    {{-- <small class="form-text text-muted">This is a help text</small> --}}
                                    @error('country')
                                    <div class="invalid-feedback" role="alert">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">State</label></div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="text-input" name="state" placeholder="State" class="form-control @error('state') is-invalid @enderror" value="@isset($item){{ $item->state }}@else{{old('state')}}@endisset" required>
                                    {{-- <small class="form-text text-muted">This is a help text</small> --}}
                                    @error('state')
                                    <div class="invalid-feedback" role="alert">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Image</label></div>
                                <div class="col-12 col-md-9">
                                    <input type="file" id="" name="image" class="form-control @error('image') is-invalid @enderror">
                                    {{-- <small class="form-text text-muted">This is a help text</small> --}}
                                    @isset($item)
                                        @if($item->image)
                                            <img src="{{asset($item->image)}}" height="200px" width="200px" alt="" class="mt-2">
                                        @endif
                                    @endisset
                                    @error('image')
                                    <div class="invalid-feedback" role="alert">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Description</label></div>
                                <div class="col-12 col-md-9">
                                    @isset($item)
                                        <textarea rows="3" id="text-input" name="description" placeholder="Description" class="form-control @error('description') is-invalid @enderror" required>
                                            {{ $item->description }}
                                        </textarea>
                                    @else
                                        <textarea rows="3" id="text-input" name="description" placeholder="Description" class="form-control @error('description') is-invalid @enderror" required>
                                            {{old('description')}}
                                        </textarea>
                                    @endisset
                                    {{-- <small class="form-text text-muted">This is a help text</small> --}}
                                    @error('description')
                                    <div class="invalid-feedback" role="alert">{{$message}}</div>
                                    @enderror
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
                                                <input type="checkbox"  name="status" class="form-check-input" @isset($item) @if($item->status == 1) checked @endif @else checked @endisset><span id="statusText">Active</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
<script>
    function resetForm() {
        document.getElementById("myForm").reset();
    }
</script>
@endpush
