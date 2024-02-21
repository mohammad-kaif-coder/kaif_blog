@extends('layouts.admin.master')

@section('content')
<div class="main-content" style="min-height: 651px;">   
    <div class="col-28 col-md-12 col-lg-12">       
        <div class="row">
            <div class="col-12">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>{{isset($services->technologies)? $services->technologies : ''}}</h4>
                            <div class="card-header-action">
                                <a href="{{route('servicespage.index')}}" class="btn btn-primary"><i class='fa fa-list'>
                                        list</i>
                                </a>
                                <a href="" type="button"  class="btn btn-danger"><i class='fa fa-trash'>
                                        Delete</i>
                                </a>
                                </form>
                                <a href="#" class="btn btn-success"><i class='fa fa-edit'>
                                        Edit</i>
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <table>
                                <tr>
                                    @if(isset($services->image))
                                    <td><p><img alt="" src="{{asset('storage/uploads/services/'.$services->image)}}" width="35"></p></td>
                                    @endif
                                </tr>
                                <tr>
                                    <td><p><h5>Short Description:</h5>{!! isset($services->short_description)? $services->short_description : '' !!}</p></td>
                                </tr>
                                <tr>
                                    <td><p><h5>Services Description:</h5>{!! isset($services->serveics_description)? $services->serveics_description : '' !!}</p></td>
                                </tr>
                                <tr>
                                    <td><p><h5>Image Name Alt:</h5>{{isset($services->alt) ? $services->alt : ''}}</p></td>
                                </tr>
                                <tr>
                                    <td><p><h5>Slug Name:</h5>{{ isset($services->slug) ? $services->slug : '' }}</p></td>
                                </tr>
                                </tr>
                            </table>
                        </div>
                    </div>         
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<script>
    function deleteImageWrapper(id) {

        console.log(id);
        $("#image_wrapper_" + id).remove();
        if ($("#deleted_ids").val() == '' || $("#deleted_ids").val() == undefined) {
            $("#deleted_ids").val(id);
        } else {
            var val = $("#deleted_ids").val();
            var deleted_ids = val.concat(',', id);
            $("#deleted_ids").val(deleted_ids);
        }

    }
</script>