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
                        <form action="{{route('aboutpage.store')}}" method="POST" class="needs-validation" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="deleted_skill_images" id="deleted_skill_images">
                            <input type="hidden" name="deleted_specializes" id="deleted_specializes">
                            <div class="card-header">
                                <h4>Edit About Page</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label>name</label>
                                        <input type="text" class="form-control" value="{{(isset($data->name)? $data->name : '')}}" name="name">
                                        <div class="invalid-feedback">
                                            Please fill in the first name
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label>Title</label>
                                        <input type="text" class="form-control" value="{{(isset($data->title)? $data->title : '')}}" name="title">                                
                                        <div class="invalid-feedback">
                                            Please fill in the last name
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label>Description</label>
                                        <input type="text" class="form-control" value="{{(isset($data->description)? $data->description : '')}}" name="description">
                                        <div class="invalid-feedback">
                                            Please fill in the first name
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label>Sub Title</label>
                                        <input type="text" class="form-control" value="{{(isset($data->sub_title)? $data->sub_title : '')}}" name="sub_title">                                
                                        <div class="invalid-feedback">
                                            Please fill in the last name
                                        </div>
                                    </div>
                                </div><br />
                                <!--=========START=============SPECIALIZED AREA=======================================------->
                                <div class="card-header">
                                    <h4>Specialze Area</h4>
                                </div>
                               
                                <table class="table table-bordered" id="dynamicAddRemove">
                                    <thead>
                                        <tr>                                           
                                            <td>Title</td>
                                            <td>Stats</td>
                                            <td>Delete</td>
                                        </tr>
                                    </thead>
                                    <tbody> 
                                        @foreach($specialize as $value)
                                        <tr id="existing_row_wrapper_{{$value->id}}">
                                            <td><input type="text" name="existing_specializes[{{$value->id}}][s_title]"  value="{{$value->s_title}}" class="form-control"/> </td>  
                                            <td><input type="text" name="existing_specializes[{{$value->id}}][s_stash]"  value="{{$value->s_stash}}" class="form-control"/> </td>                        
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-danger remove-input-field" onclick="delete_specialize('{{$value->id}}', 'existing_row_wrapper_')"><i class="fa fa-trash"></i></button>
                                            </td>
                                        </tr>
                                        @endforeach
                                        <tr id="last_row">

                                        </tr>                 
                                    </tbody>
                                </table><div style="text-align: center">
                                    <div type="button" name="add" id="add_more" class="btn btn-success">+ Add New Column</div>
                                </div>
                                <!--=========END=============SPECIALIZED AREA==========================================------->

                                <!--=========START=============Skill======================================------->
                                <div class="card-header">
                                    <h4>Skill</h4>
                                </div>
                                <table class="table table-bordered" id="dynamicAddRemove">
                                    <thead>
                                        <tr>                                           
                                            <td>Icon</td>
                                            <td>alt</td>
                                            <td>Title</td>
                                            <td>stash</td>
                                            <td>Delete</td>
                                        </tr>
                                    </thead>
                                    <tbody> 
                                        @foreach($skill as $value)
                                        <tr id="existing_row_wrapper_{{$value->id}}">
                                            <td><input type="text" name="existing_skill_images[{{$value->id}}][alt]"   value="{{$value->alt}}"  class="form-control"/> </td>
                                            <td><input type="text" name="existing_skill_images[{{$value->id}}][title]"  value="{{$value->title}}" class="form-control"/> </td>  
                                            <td><input type="number" name="existing_skill_images[{{$value->id}}][stash]"  value="{{$value->stash}}" class="form-control"/> </td>                        
                                            <td><input type="file"  name="existing_skill_images[{{$value->id}}][image]" />
                                                <img src="{{ asset('storage/uploads/about/skill/'.$value->image) }}" style='height:50px'class="remove-input-field" alt=""> 
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-danger remove-input-field" onclick="delete_skill_image('{{$value->id}}', 'existing_row_wrapper_')"><i class="fa fa-trash"></i></button>
                                            </td>
                                        </tr>
                                        @endforeach
                                        <tr id="last_row_skill">

                                        </tr>                 
                                    </tbody>
                                </table><div style="text-align: center">
                                    <div type="button" name="add" id="add_more_skill" class="btn btn-success">+ Add New Column</div>
                                </div>
                                <!--=========END=============Skill==========================================------->

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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<script>
                                                    /*
                                                     * ---------------
                                                     * special area
                                                     * ---------------
                                                     */

                                                    $('document').ready(function () {
                                                    window.key = 102;
                                                    $("#add_more").on('click', function () {
                                                    $("#last_row").before('<tr  id="row_wrapper_' + window.key + '">' +
                                                            '<td><input type="text" name="specialize[' + window.key + '][s_title]" placeholder="Title" class="form-control" />' +
                                                            '<td><input type="text" name="specialize[' + window.key + '][s_stash]" placeholder="Stash"class="form-control"  />' +
                                                            '</td><td><button type="button" class="btn btn-danger remove-input-field" onclick="delete_specialize(' + window.key + ', "row_wrapper_")"><i class="fa fa-trash"></i></button></td></div>' +
                                                            '</tr>');
                                                    window.key = Number(window.key) + 1;
                                                    });
                                                    });
                                                    /**
                                                     * Delete Specialize Images
                                                     */ deleted_specializes
                                                    function delete_specialize(id, selector_id) {
                                                    if ($("#deleted_specializes").val() == '' || $("#deleted_specializes").val() == undefined) {
                                                    $("#deleted_specializes").val(id);
                                                    } else {
                                                    var val = $("#deleted_specializes").val();
                                                    var deleted_ids = val.concat(',', id);
                                                    $("#deleted_specializes").val(deleted_ids);
                                                    }
                                                    $("#" + selector_id + id).remove();
                                                    }


                                                    /*
                                                     * ---------------
                                                     * SKILL
                                                     * ---------------
                                                     */

                                                    $('document').ready(function () {
                                                    window.key = 102;
                                                    $("#add_more_skill").on('click', function () {
                                                    $("#last_row_skill").before('<tr  id="row_wrapper_' + window.key + '">' +
                                                            '<td><input type="file" name="skill[' + window.key + '][image]" class="form-control" />' +
                                                            '<td><input type="text" name="skill[' + window.key + '][alt]" placeholder="Alt" class="form-control" />' +
                                                            '<td><input type="text" name="skill[' + window.key + '][title]" placeholder="title"  class="form-control" />' +
                                                            '<td><input type="text" name="skill[' + window.key + '][stash]"  class="form-control" />' +
                                                            '</td><td><button type="button" class="btn btn-danger remove-input-field" onclick="delete_skill_image(' + window.key + ', "row_wrapper_")"><i class="fa fa-trash"></i></button></td></div>' +
                                                            '</tr>');
                                                    window.key = Number(window.key) + 1;
                                                    });
                                                    });
                                                    /**
                                                     * Delete Banner Images
                                                     */
                                                    function delete_skill_image(id, selector_id) {
                                                    if ($("#deleted_skill_images").val() == '' || $("#deleted_skill_images").val() == undefined) {
                                                    $("#deleted_skill_images").val(id);
                                                    } else {
                                                    var val = $("#deleted_skill_images").val();
                                                    var deleted_ids = val.concat(',', id);
                                                    $("#deleted_skill_images").val(deleted_ids);
                                                    }
                                                    $("#" + selector_id + id).remove();
                                                    }
//delete empty fildes
                                                    $(document).on('click', '.remove-input-field', function () {
                                                    $(this).parents('tr').remove();
                                                    });
</script>
@endsection
