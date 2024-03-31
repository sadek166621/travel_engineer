@extends('admin.master')
@section('content')
<div class="animated fadeIn">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <strong>Slider</strong>
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
                    <form action="@isset($slider){{ route('admin.slider.update', $slider->id) }}@else{{ route('admin.slider.store') }}@endisset"
                        method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Title</label></div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="text-input" name="title" placeholder="Title" class="form-control @error('title') is-invalid @enderror" value="@isset($slider){{ $slider->title }}@else{{old('title')}}@endisset" required>
                                {{-- <small class="form-text text-muted">This is a help text</small> --}}
                                @error('name')
                                    <div class="invalid-feedback" role="alert">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Main Title</label></div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="text-input" name="main_title" placeholder="Main Title" class="form-control @error('main_title') is-invalid @enderror" value="@isset($slider){{ $slider->main_title }}@else{{old('main_title')}}@endisset" required>
                                {{-- <small class="form-text text-muted">This is a help text</small> --}}
                                @error('name')
                                    <div class="invalid-feedback" role="alert">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Image</label></div>
                            <div class="col-12 col-md-9">
                                <input type="file" id="" name="image" class="form-control @error('image') is-invalid @enderror" @isset($slider) @else required @endisset>
                                {{-- <small class="form-text text-muted">This is a help text</small> --}}
                                @isset($slider)
                                    <img src="{{asset('uploads/sliders')}}/{{ $slider->image }}" height="150px" width="150px" alt="" class="mt-2">
                                @endisset
                                @error('image')
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
                                            <input type="checkbox"  name="status" class="form-check-input" @isset($slider) @if($slider->status == 1) checked @endif @else checked @endisset><span id="statusText">Active</span>
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
