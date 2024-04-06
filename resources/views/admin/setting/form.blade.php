@extends('admin.master')
@section('content')
<div class="animated fadeIn">

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <strong>Settings</strong>
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
                <div class="card-body card-block">
                    <form action="{{ route('admin.setting.update',$setting->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Site Name</label></div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="text-input" name="site_name" placeholder="Site Name" class="form-control" @isset($setting) value="{{ $setting->site_name }}" @endisset>
                                {{-- <small class="form-text text-muted">This is a help text</small> --}}
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="file-input" class=" form-control-label">Website Logo</label></div>
                            <div class="col-12 col-md-9">
                                @isset($setting) <img src="{{ asset('assets') }}/images/uploads/settings/{{ $setting->logo }}" alt=" image" width="50px" height="50px"><br/> @endisset
                                <input type="file" name="logo" class="form-control-file" >
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="file-input" class=" form-control-label">Website Fav Icon</label></div>
                            <div class="col-12 col-md-9">
                                @isset($setting) <img src="{{ asset('assets') }}/images/uploads/settings/{{ $setting->fav_icon }}" alt=" image" width="50px" height="50px"><br/> @endisset
                                <input type="file" name="fav_icon" class="form-control-file" >
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Google Map</label></div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="text-input" name="map" placeholder="Map" class="form-control" @isset($setting) value="{{ $setting->map }}" @endisset>
                                {{-- <small class="form-text text-muted">This is a help text</small> --}}
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Telephone</label></div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="text-input" name="telephone" placeholder="Telephone" class="form-control" @isset($setting) value="{{ $setting->telephone }}" @endisset>
                                {{-- <small class="form-text text-muted">This is a help text</small> --}}
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Mobile</label></div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="text-input" name="mobile" placeholder="Mobile" class="form-control" @isset($setting) value="{{ $setting->mobile }}" @endisset>
                                {{-- <small class="form-text text-muted">This is a help text</small> --}}
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Email</label></div>
                            <div class="col-12 col-md-9">
                                <input type="email" id="text-input" name="email" placeholder="Email" class="form-control" @isset($setting) value="{{ $setting->email }}" @endisset>
                                {{-- <small class="form-text text-muted">This is a help text</small> --}}
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Address</label></div>
                            <div class="col-12 col-md-9">
                                <textarea type="text" id="text-input" name="address" placeholder="Address" class="form-control">{{ $setting->address }}</textarea>
                                {{-- <small class="form-text text-muted">This is a help text</small> --}}
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Facebook Link</label></div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="text-input" name="facebook_link" placeholder="facebook_link" class="form-control" @isset($setting) value="{{ $setting->facebook_link }}" @endisset>
                                {{-- <small class="form-text text-muted">This is a help text</small> --}}
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Instagram Link</label></div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="text-input" name="instagram_link" placeholder="instagram_link" class="form-control" @isset($setting) value="{{ $setting->instagram_link }}" @endisset>
                                {{-- <small class="form-text text-muted">This is a help text</small> --}}
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Twitter Link</label></div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="text-input" name="twitter_link" placeholder="twitter_link" class="form-control" @isset($setting) value="{{ $setting->twitter_link }}" @endisset>
                                {{-- <small class="form-text text-muted">This is a help text</small> --}}
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">linkedin Link</label></div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="text-input" name="linkedin_link" placeholder="linkedin_link" class="form-control" @isset($setting) value="{{ $setting->linkedin_link }}" @endisset>
                                {{-- <small class="form-text text-muted">This is a help text</small> --}}
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Youtube Link</label></div>
                            <div class="col-12 col-md-9">
                                <input type="text" id="text-input" name="youtube_link" placeholder="youtube_link" class="form-control" @isset($setting) value="{{ $setting->youtube_link }}" @endisset>
                                {{-- <small class="form-text text-muted">This is a help text</small> --}}
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
</div><!-- .animated -->
@endsection
@push('js')
<script>
    function resetForm() {
        document.getElementById("myForm").reset();
    }
</script>
@endpush
