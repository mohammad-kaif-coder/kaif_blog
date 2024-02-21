@extends('layouts.admin.master')

@section('content')
<style>
    .note-icon-bar{
        background-color: #fff;
    }
</style>

<div class="main-content" style="min-height: 651px;">
    <section class="section">
        <div class="section-body">
            <div class="row mt-sm-4">
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card author-box">
                        <div class="card-body">
                            <div class="author-box-center">
                                <img alt="image" src="{{asset('/storage/'.$profile->image)}}" class="rounded-circle author-box-picture" height="100px">
                                <div class="clearfix"></div>
                                <div class="author-box-name">
                                    <a href="#">{{isset($profile->name)? $profile->name : ''}}</a>
                                </div>
                                <div class="author-box-job">{{isset($profile->designation)? $profile->designation : ''}}</div>
                            </div>
                            <div class="text-center">
                                <div class="author-box-description">
                                    <p>
                                        {!! isset($profile->short_description)? $profile->short_description : '' !!}
                                    </p>
                                </div>
                                <div class="mb-2 mt-3">
                                    <div class="text-small font-weight-bold">Follow Hasan On</div>
                                </div>
                                <a href="#" class="btn btn-social-icon mr-1 btn-facebook">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" class="btn btn-social-icon mr-1 btn-twitter">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#" class="btn btn-social-icon mr-1 btn-github">
                                    <i class="fab fa-github"></i>
                                </a>
                                <a href="#" class="btn btn-social-icon mr-1 btn-instagram">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <div class="w-100 d-sm-none"></div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4>Personal Details</h4>
                        </div>
                        <div class="card-body">
                            <div class="py-4">
                                <p class="clearfix">
                                    <span class="float-left">
                                        Birthday
                                    </span>
                                    <span class="float-right text-muted">
                                        30-05-1998
                                    </span>
                                </p>
                                <p class="clearfix">
                                    <span class="float-left">
                                        Phone
                                    </span>
                                    <span class="float-right text-muted">
                                        (0123)123456789
                                    </span>
                                </p>
                                <p class="clearfix">
                                    <span class="float-left">
                                        Mail
                                    </span>
                                    <span class="float-right text-muted">
                                        test@example.com
                                    </span>
                                </p>
                                <p class="clearfix">
                                    <span class="float-left">
                                        Facebook
                                    </span>
                                    <span class="float-right text-muted">
                                        <a href="#">John Deo</a>
                                    </span>
                                </p>
                                <p class="clearfix">
                                    <span class="float-left">
                                        Twitter
                                    </span>
                                    <span class="float-right text-muted">
                                        <a href="#">@johndeo</a>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--                <div class="card">
                                      <div class="card-header">
                                        <h4>Skills</h4>
                                      </div>
                                      <div class="card-body">
                                        <ul class="list-unstyled user-progress list-unstyled-border list-unstyled-noborder">
                                          <li class="media">
                                            <div class="media-body">
                                              <div class="media-title">Java</div>
                                            </div>
                                            <div class="media-progressbar p-t-10">
                                              <div class="progress" data-height="6" style="height: 6px;">
                                                <div class="progress-bar bg-primary" data-width="70%" style="width: 70%;"></div>
                                              </div>
                                            </div>
                                          </li>
                                          <li class="media">
                                            <div class="media-body">
                                              <div class="media-title">Web Design</div>
                                            </div>
                                            <div class="media-progressbar p-t-10">
                                              <div class="progress" data-height="6" style="height: 6px;">
                                                <div class="progress-bar bg-warning" data-width="80%" style="width: 80%;"></div>
                                              </div>
                                            </div>
                                          </li>
                                          <li class="media">
                                            <div class="media-body">
                                              <div class="media-title">Photoshop</div>
                                            </div>
                                            <div class="media-progressbar p-t-10">
                                              <div class="progress" data-height="6" style="height: 6px;">
                                                <div class="progress-bar bg-green" data-width="48%" style="width: 48%;"></div>
                                              </div>
                                            </div>
                                          </li>
                                        </ul>
                                      </div>
                                    </div>-->
                </div>
                <div class="col-12 col-md-12 col-lg-8">
                    <div class="card">
                        <div class="padding-20">
                            <ul class="nav nav-tabs" id="myTab2" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab2" data-toggle="tab" href="#about" role="tab" aria-selected="true">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab2" data-toggle="tab" href="#settings" role="tab" aria-selected="false">Setting</a>
                                </li>
                            </ul>
                            <div class="tab-content tab-bordered" id="myTab3Content">
                                <div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="home-tab2">
                                    <div class="row">
                                        <div class="col-md-3 col-6 b-r">
                                            <strong>Full Name</strong>
                                            <br>
                                            <p class="text-muted">{{isset($profile->name)? $profile->name : ''}}</p>
                                        </div>
                                        <div class="col-md-3 col-6 b-r">
                                            <strong>Mobile</strong>
                                            <br>
                                            <p class="text-muted">{{isset($profile->phone)? $profile->phone : ''}}</p>
                                        </div>
                                        <div class="col-md-3 col-6 b-r">
                                            <strong>Email</strong>
                                            <br>
                                            <p class="text-muted">{{isset($profile->email)? $profile->email : ''}}</p>
                                        </div>
                                        <div class="col-md-3 col-6">
                                            <strong>Location</strong>
                                            <br>
                                            <p class="text-muted">{{isset($profile->location)? $profile->location : ''}}</p>
                                        </div>
                                    </div>
                                    <div> {!! isset($profile->long_description)? $profile->long_description : '' !!}</div>

                                </div>
                                <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="profile-tab2">

                                    <form action="{{ route('profile.store') }}" method="POST" class="needs-validation" enctype="multipart/form-data">
                                        @csrf
                                        <div class="card-header">
                                            <h4>Edit Profile</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="form-group col-md-6 col-12">
                                                    <label>Name</label>
                                                    <input type="text" class="form-control" value="{{isset($profile->name)? $profile->name : ''}}" name="name">
                                                    <div class="invalid-feedback">
                                                        Please fill in the first name
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6 col-12">
                                                    <label>Location</label>
                                                    <input type="text" class="form-control" value="{{isset($profile->location)? $profile->location : ''}}" name="location">
                                                    <div class="invalid-feedback">
                                                        Please fill in the last name
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="form-group col-md-6 col-12">
                                                    <label>Birth</label>
                                                    <input type="text" class="form-control" value="{{isset($profile->birth)? $profile->birth : ''}}" name="birth">
                                                    <div class="invalid-feedback">
                                                        Please fill in the first name
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6 col-12">
                                                    <label>Designation</label>
                                                    <input type="text" class="form-control" value="{{isset($profile->designation)? $profile->designation : ''}}" name="designation">
                                                    <div class="invalid-feedback">
                                                        Please fill in the last name
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6 col-12">
                                                    <label>Email</label>
                                                    <input type="email" class="form-control" value="{{isset($profile->email)? $profile->email : ''}}" name="email">
                                                    <div class="invalid-feedback">
                                                        Please fill in the email
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6 col-12">
                                                    <label>Phone</label>
                                                    <input type="tel" class="form-control" value="{{isset($profile->phone)? $profile->phone : ''}}" name="phone">
                                                </div>
                                            </div>

                                            <!----custom---->
                                            <div class="row">
                                                <div class="form-group col-md-6 col-12">
                                                    <label>Picture</label>
                                                    <input type="file" class="form-control"  value="" name="image">
                                                    <input type="hidden" class="form-control" value="{{isset($profile->image)? $profile->image : ''}}" name="existing_image">

                                                    <div class="invalid-feedback">
                                                        Please fill in the email
                                                    </div>
                                                </div>

                                            </div>
                                            <!-----end custom---->
                                            <div class="row">
                                                <div class="form-group col-12">
                                                    <label>Short Description</label>
                                                    <textarea class="ckeditor form-control" name="short_description">{{isset($profile->short_description)? $profile->short_description : ''}}</textarea>
                                                </div>

                                                <div class="form-group col-12">
                                                    <label>Long Description</label>
                                                    <textarea class="ckeditor form-control" name="long_description">{{isset($profile->long_description)? $profile->long_description : ''}}</textarea>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group mb-0 col-12">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" name="remember" class="custom-control-input" id="newsletter">
                                                        <label class="custom-control-label" for="newsletter">Subscribe to newsletter</label>
                                                        <div class="text-muted form-text">
                                                            You will get new information about products, offers and promotions
                                                        </div>
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
