@extends('layouts.admin.master')

@section('content')
<div class="main-content" style="min-height: 651px;">   
    <div class="col-28 col-md-12 col-lg-15">
        <div class="card">
            <div class="padding-20">
                <ul class="nav nav-tabs" id="myTab2" role="tablist">
                    <a href="{{route('servicespage.index')}}" class="btn btn-success"><i class="fa fa-list"></i></a>                   
                </ul>
                <div class="tab-content tab-bordered" id="myTab3Content">
                    <div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="home-tab2">
                        <form action="{{route('servicespage.store')}}" method="POST" class="needs-validation" enctype="multipart/form-data">    
                            @csrf
                            <div class="card-header">
                                <h4><i class="fa fa-tools"></i> Add Services</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label>Technologies</label>
                                        <input type="text" class="form-control" value="{{(isset($home_page->name)? $home_page->name : '')}}" id="technologies"name="technologies">
                                        <div class="invalid-feedback">
                                            Please fill in the first name
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label>Slug</label>
                                        <input type="text" class="form-control" value="{{(isset($home_page->designation)? $home_page->designation : '')}}"id="slug" name="slug">                                
                                        <div class="invalid-feedback">
                                            Please fill in the last name
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label>Icon</label>
                                        <input type="file" class="form-control" value="{{(isset($home_page->title)? $home_page->title : '')}}" name="image">
                                        <div class="invalid-feedback">
                                            Please fill in the first name
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label>Alt</label>
                                        <input type="text" class="form-control" value="{{(isset($home_page->description)? $home_page->description : '')}}" name="alt">                                
                                        <div class="invalid-feedback">
                                            Please fill in the last name
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label>Short Description</label>
                                        <textarea class="ckeditor form-control" name="short_description">{{isset($profile->short_description)? $profile->short_description : ''}}</textarea>
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label>Services Description</label>
                                        <textarea class="ckeditor form-control" name="serveics_description">{{isset($profile->short_description)? $profile->short_description : ''}}</textarea>
                                    </div>
                                </div>
                                <!--========START MULTIPLE=============================--->
                                       <div class="card-header">
                                    <h4>How We Works</h4>
                                </div>
                               
                                <table class="table table-bordered" id="dynamicAddRemove">
                                    <thead>
                                        <tr>                                           
                                            <td>Title</td>
                                            <td>description</td>
                                            <td>Delete</td>
                                        </tr>
                                    </thead>
                                    <tbody> 
                                       
                                        <tr id="last_row">

                                        </tr>                 
                                    </tbody>
                                </table><div style="text-align: center">
                                    <div type="button" name="add" id="add_more" class="btn btn-success">+ Add New Column</div>
                                </div>
                                <!--========END MULTIPLE=============================--->

                                <!--=======START============META DATA================================--->
                                @include('partials.seocontent')


                                <!--=======END============META DATA================================--->
                            </div>
                            <div class="card-footer text-right">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>                                                         
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script type="text/javascript">
$(document).ready(function () {
    $('.ckeditor').ckeditor();
});


/*
                                                     * ---------------
                                                     * special area
                                                     * ---------------
                                                     */

                                                    $('document').ready(function () {
                                                    window.key = 102;
                                                    $("#add_more").on('click', function () {
                                                    $("#last_row").before('<tr  id="row_wrapper_' + window.key + '">' +
                                                            '<td><input type="text" name="specialize[' + window.key + '][title]" placeholder="Title" class="form-control" />' +
                                                            '<td><input type="text" name="specialize[' + window.key + '][description]" placeholder="Description"class="form-control"  />' +
                                                            '</td><td><button type="button" class="btn btn-danger remove-input-field" onclick="delete_specialize(' + window.key + ', "row_wrapper_")"><i class="fa fa-trash"></i></button></td></div>' +
                                                            '</tr>');
                                                    window.key = Number(window.key) + 1;
                                                    });
                                                    });
                                                    
                                                    //delete empty fildes
                                                    $(document).on('click', '.remove-input-field', function () {
                                                    $(this).parents('tr').remove();
                                                    });
                                                    
                                                    
                                                      <!-- for slug-->
           
                $("#technologies").keyup(function () {
                    var Text = $(this).val();
                    Text = Text.toLowerCase();
                    Text = Text.replace(/[^a-zA-Z0-9]+/g, '-');
                    $("#slug").val(Text);
                });
            
            <!-- end slug-->
</script>
@endsection
