@extends('layouts.admin.master')

@section('content')

<div class="main-content" style="min-height: 651px;">   
    <div class="col-28 col-md-12 col-lg-15">
        <div class="card">
            <div class="padding-20">
                <ul class="nav nav-tabs" id="myTab2" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab2" data-toggle="tab" href="#about" role="tab" aria-selected="true">Site</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab2" data-toggle="tab" href="#settings" role="tab" aria-selected="false">Admin</a>
                    </li>
                </ul>

                <div class="tab-content tab-bordered" id="myTab3Content">
                    <div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="home-tab2">
                        <form action="{{route('setting.store')}}" method="POST" class="needs-validation" enctype="multipart/form-data">
                            @csrf

                            <div class="card-header">
                                <h4>Edit Site</h4>
                            </div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label>Title</label>

                                        <input type="text" class="form-control" value="{{(isset($setting->site_title)? $setting->site_title : '')}}" name="site_title">
                                        <div class="invalid-feedback">
                                            Please fill in the first name
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label>Description</label>
                                        <input type="text" class="form-control" value="{{(isset($setting->site_description)? $setting->site_description : '')}}" name="site_description">                                
                                        <div class="invalid-feedback">
                                            Please fill in the last name
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label>Favicon</label>
                                        <input type="file" class="form-control" value="" name="site_favicon">
                                        <input type="hidden"  value="{{(isset($setting->site_description)? $setting->site_favicon : '')}}" name="existing_site_f">
                                        <img src="{{(asset('/storage/uploads/setting/'.$setting->site_favicon))}}" alt="xvs" height="100px">
                                        <div class="invalid-feedback">
                                            Please fill in the first name
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label>Logo</label>
                                        <input type="file" class="form-control" value="" name="site_logo">
                                        <input type="hidden"  value="{{(isset($setting->site_description)? $setting->site_logo : '')}}" name="existing_site_l">
                                        <img src="{{(asset('/storage/uploads/setting/'.$setting->site_logo))}}" alt="xvs" height="100px">

                                        <div class="invalid-feedback">
                                            Please fill in the last name
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                            </div>

                    </div>
                    <!--==========================================================ADMIN==========================================================================-->

                    <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="profile-tab2">


                        <div class="card-header">
                            <h4>Edit Admin</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-md-6 col-12">
                                    <label>Title</label>
                                    <input type="text" class="form-control" value="{{(isset($setting->admin_title)? $setting->admin_title : '')}}" name="admin_title">
                                    <div class="invalid-feedback">
                                        Please fill in the first name
                                    </div>
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label>Description</label>
                                    <input type="text" class="form-control" value="{{(isset($setting->admin_description)? $setting->admin_description : '')}}" name="admin_description">
                                    <div class="invalid-feedback">
                                        Please fill in the last name
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6 col-12">
                                    <label>Favicone</label>
                                    <input type="file" class="form-control" value="" name="admin_favicon">
                                    <input type="hidden"  value="{{(isset($setting->site_description)? $setting->admin_favicon : '')}}" name="existing_admin_f">
                                    <img src="{{(asset('/storage/uploads/setting/'.$setting->admin_favicon))}}" alt="xvs" height="100px">
                                    <div class="invalid-feedback">
                                        Please fill in the first name
                                    </div>
                                </div>
                                <div class="form-group col-md-6 col-12">
                                    <label>Logo</label>
                                    <input type="file" class="form-control" value="" name="admin_logo">
                                    <input type="hidden"  value="{{(isset($setting->site_description)? $setting->admin_logo : '')}}" name="existing_admin_l">
                                    <img src="{{(asset('/storage/uploads/setting/'.$setting->admin_logo))}}" alt="xvs" height="100px">
                                    <div class="invalid-feedback">
                                        Please fill in the last name
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</section>

</div>

<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script type="text/javascript">
$(document).ready(function () {
    $('.ckeditor').ckeditor();
});
</script>
@endsection
