@extends('admin.master')
@section('content')
<div class="animated fadeIn">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <strong>Category</strong>
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
                    <form action="{{ route('admin.category.update', $category->id) }}"
                        method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Name</label></div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="text-input" name="name" placeholder="Name" class="form-control @error('image') is-invalid @enderror" @isset($category) value="{{ $category->name }}" @endisset>
                                {{-- <small class="form-text text-muted">This is a help text</small> --}}
                                @error('name')
                                <div class="invalid-feedback" role="alert">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Image</label></div>
                            <div class="col-12 col-md-9">
                                <input type="file" id="text-input" name="image" class="form-control @error('image') is-invalid @enderror" accept="/image/*" @isset($category) @else required @endisset>
                                @isset($category)
                                    @if($category->image)
                                        <img src="{{asset($category->image)}}" height="200px" width="200px" class="mt-2 rounded-circle" alt="">
                                    @endif
                                @endisset
                                @error('image')
                                    <div class="invalid-feedback" role="alert">{{$message}}</div>
                                @enderror
                                {{-- <small class="form-text text-muted">This is a help text</small> --}}
                            </div>
                         </div>
                                @if ($category->id != 2 && $category->id != 3 && $category->id != 4 && $category->id != 5 )
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="text-input" class=" form-control-label">Position</label></div>
                                    <div class="col-12 col-md-9">
                                    <select name="cat_id" id="" class="form-control @error('cat_id') is-invalid @enderror">
                                        <option value="">Select Position</option>
                                        @foreach ($categoryies as $cat )
                                        @if ($cat->id == 2 )
                                        <option value="{{$cat->id}}" @if( $cat->id == 2) selected @endif >{{ $cat->name }}</option>
                                        @elseif($cat->id == 3)
                                        <option value="{{$cat->id}}" @if( $cat->id == 3) selected @endif >{{ $cat->name }}</option>
                                        @elseif($cat->id == 4)
                                        <option value="{{$cat->id}}" @if( $cat->id == 4) selected @endif >{{ $cat->name }}</option>
                                        @elseif($cat->id == 5)
                                        <option value="{{$cat->id}}" @if( $cat->id == 5) selected @endif >{{ $cat->name }}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                    @error('country_id')
                                    <div class="invalid-feedback" role="alert">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                                @endif
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label class=" form-control-label">Status</label>
                            </div>
                            <div class="col col-md-9">
                                <div class="form-check">
                                    <div class="checkbox">
                                        <label for="checkbox1" class="form-check-label ">
                                            <input type="checkbox"  name="status" class="form-check-input" @isset($category) @if($category->status == 1) checked @endif @else checked @endisset><span id="statusText">Active</span>
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
