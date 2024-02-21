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
                </ul>
                <div class="tab-content tab-bordered" id="myTab3Content">
                    <div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="home-tab2">
                        <form action="{{route('homepage.store')}}" method="POST" class="needs-validation" enctype="multipart/form-data">
                            @csrf
                            <div class="card-header">
                                <h4>Edit Home Page</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label>name</label>

                                        <input type="text" class="form-control" value="{{(isset($home_page->name)? $home_page->name : '')}}" name="name">
                                        <div class="invalid-feedback">
                                            Please fill in the first name
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label>Designation</label>
                                        <input type="text" class="form-control" value="{{(isset($home_page->designation)? $home_page->designation : '')}}" name="designation">                                
                                        <div class="invalid-feedback">
                                            Please fill in the last name
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label>Title</label>
                                        <input type="text" class="form-control" value="{{(isset($home_page->title)? $home_page->title : '')}}" name="title">
                                        <div class="invalid-feedback">
                                            Please fill in the first name
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label>Description</label>
                                        <input type="text" class="form-control" value="{{(isset($home_page->description)? $home_page->description : '')}}" name="description">                                
                                        <div class="invalid-feedback">
                                            Please fill in the last name
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label>facebook</label>
                                        <input type="url" class="form-control" value="{{(isset($home_page->facebook)? $home_page->facebook : '')}}" name="facebook">
                                        <div class="invalid-feedback">
                                            Please fill in the first name
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label>Twitter</label>
                                        <input type="url" class="form-control" value="{{(isset($home_page->twitter)? $home_page->twitter : '')}}" name="twitter">                                
                                        <div class="invalid-feedback">
                                            Please fill in the last name
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label>Instagram</label>
                                        <input type="url" class="form-control" value="{{(isset($home_page->instagram)? $home_page->instagram : '')}}" name="instagram">
                                        <div class="invalid-feedback">
                                            Please fill in the first name
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label>Linkedin</label>
                                        <input type="url" class="form-control" value="{{(isset($home_page->linkedin)? $home_page->linkedin : '')}}" name="linkedin">                                
                                        <div class="invalid-feedback">
                                            Please fill in the last name
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label>Pinterest</label>
                                        <input type="url" class="form-control" value="{{(isset($home_page->pinterest)? $home_page->pinterest : '')}}" name="pinterest">
                                        <div class="invalid-feedback">
                                            Please fill in the first name
                                        </div>
                                    </div>                                    
                                    <div class="form-group col-md-6 col-12">
                                        <label>CV</label>
                                        <input type="url" class="form-control" value="{{(isset($home_page->cv)? $home_page->cv : '')}}" name="cv">
                                        <div class="invalid-feedback">
                                            Please fill in the first name
                                        </div>
                                    </div>          
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label>Profile</label>
                                        <input type="file" class="form-control" name="profile">
                                        @if(isset($home_page->profile))
                                        <img src="{{(asset('/storage/uploads/homepage/'.$home_page->profile))}}" alt="xvs" height="100px">
                                        @endif
                                        <input type="hidden"  value="{{(isset($home_page->profile)? $home_page->profile : '')}}" name="existing_profile">
                                        <div class="invalid-feedback">
                                            Please fill in the first name
                                        </div>
                                    </div>               
                                    <div class="form-group col-md-6 col-12">
                                        <label>Logo</label>
                                        <input type="file" class="form-control" name="logo">
                                        @if(isset($home_page->logo))
                                        <img src="{{(asset('/storage/uploads/homepage/'.$home_page->logo))}}" alt="xvs" height="100px">
                                        @endif
                                        <input type="hidden"  value="{{(isset($home_page->logo)? $home_page->logo : '')}}" name="existing_logo">
                                        <div class="invalid-feedback">
                                            Please fill in the last name
                                        </div>
                                    </div>                                   
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label>Back Ground Image</label>
                                        <input type="file" class="form-control" name="back_image">
                                        @if(isset($home_page->back_image))
                                        <img src="{{(asset('/storage/uploads/homepage/'.$home_page->back_image))}}" alt="xvs" height="100px">
                                        @endif
                                        <input type="hidden"  value="{{(isset($home_page->back_image)? $home_page->back_image : '')}}" name="existing_back_image">
                                        <div class="invalid-feedback">
                                            Please fill in the first name
                                        </div>
                                    </div>               
                                </div>
                                <!--=======START============META DATA================================--->
                                @include('partials.seocontent')
                                

                                <!--=======END============META DATA================================--->
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
</section>
</div>


@endsection
