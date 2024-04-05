@extends('admin.master')
@section('content')
<div class="animated fadeIn">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <strong>Offer</strong>
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
                    <form action="@isset($offer){{ route('admin.offer.update', $offer->id) }}@else{{ route('admin.offer.store') }}@endisset"
                        method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">title</label></div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="text-input" name="title" offerholder="title" class="form-control @error('name') is-invalid @enderror" value="@isset($offer){{ $offer->title }}@else{{old('name')}}@endisset" required>
                                {{-- <small class="form-text text-muted">This is a help text</small> --}}
                                @error('name')
                                    <div class="invalid-feedback" role="alert">{{$message}}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Desciption</label></div>
                            <div class="col-12 col-md-9">
                                <textarea id="summernote2" name="description">@isset($offer){{ $offer->description }}@else{{old('description')}}@endisset</textarea>
                                {{-- <small class="form-text text-muted">This is a help text</small> --}}
                                @error('description')
                                    <div class="invalid-feedback" role="alert">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Desciption</label></div>
                            <div class="col-12 col-md-9">
                                <textarea id="summernote3" name="term">@isset($offer){{ $offer->term }}@else{{old('description')}}@endisset</textarea>
                                {{-- <small class="form-text text-muted">This is a help text</small> --}}
                                @error('description')
                                    <div class="invalid-feedback" role="alert">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Image</label></div>
                            <div class="col-12 col-md-9">
                                <input type="file" id="" name="image" class="form-control @error('image') is-invalid @enderror" @isset($offer) @else required @endisset>
                                {{-- <small class="form-text text-muted">This is a help text</small> --}}
                                @isset($offer)
                                    <img src="{{ asset('assets') }}/images/uploads/offer/{{ $offer->image }}" height="200px" width="200px" alt="" class="mt-2">
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
                                            <input type="checkbox"  name="status" class="form-check-input" @isset($offer) @if($offer->status == 1) checked @endif @else checked @endisset><span id="statusText">Active</span>
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
<script>
    $(document).ready(function() {
        $('#summernote2').summernote();
        });

    $(document).ready(function() {
        $('#summernote3').summernote();
        });
</script>
@endpush
