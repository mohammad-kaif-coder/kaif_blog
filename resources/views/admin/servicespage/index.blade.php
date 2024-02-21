@extends('layouts.admin.master')
@section('content')
<div class="main-content" style="min-height: 651px;">   
    <div class="col-28 col-md-12 col-lg-">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header"><h4 class="fa fa-tools"> Services Record</h4></div>
                    <div class="card-body">
                        <a href="{{route('servicespage.create')}}" class="btn btn-success"><i class="fa fa-pen-square"> Add New</i></a>
                        <a href="{{route('servicespage.create')}}" class="btn btn-danger"><i class="fa fa-trash"> Bulk Delete</i></a>
                        <div class="table">
                            <div id="table-2_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                                <div class="row">
                                    <!---------ENTRIES---------->
                                    <div class="col-sm-22 col-md-10">  
                                        <div class="dataTables_length" id="table-2_length"> 
                                            <label>Show <select name="table-2_length" aria-controls="table-2" class="form-control form-control-sm">
                                                    <option value="10">10</option>
                                                    <option value="25">25</option>
                                                    <option value="50">50</option>
                                                    <option value="100">100</option>
                                                </select>entries
                                            </label>                          
                                        </div> 
                                    </div>
                                    <!-------SEARCH----------->
                                    <div id="table-2_filter" class="dataTables_filter" >
                                        <label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="table-2"></label>
                                    </div>
                                </div>
                                <!-----TABLE--------------->
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table class="table table-striped dataTable no-footer" id="table-2" role="grid" aria-describedby="table-2_info">
                                        <thead>

                                            <tr role="row">                               
                                                <th class="text-center pt-3 sorting_disabled" rowspan="1" colspan="1" aria-label="
                                                    &amp;nbsp;
                                                    " style="width: 56.675px;">
                                                    <div class="custom-checkbox custom-checkbox-table custom-control">
                                                        <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad" class="custom-control-input" id="checkbox-all">
                                                        <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                                                    </div>
                                                </th>
                                                <th class="sorting_asc" tabindex="0" aria-controls="table-2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Task Name: activate to sort column descending" style="width: 179.4px;">Technologies</th>
                                                <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Progress" style="width: 95.95px;">short Description</th>
                                                <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Members" style="width: 249.188px;">Icon</th>
                                                <th class="sorting" tabindex="0" aria-controls="table-2" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 92.625px;" with="280px">Action</th>                                                  
                                            </tr>

                                        </thead>
                                        <tbody>
                                            @foreach($services_datas as $data)
                                            <tr role="row" class="odd">
                                                <!---------BULK----------->
                                                <td class="text-center pt-2">
                                                    <div class="custom-checkbox custom-control">
                                                        <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-3">
                                                        <label for="checkbox-3" class="custom-control-label">&nbsp;</label>
                                                    </div>
                                                </td>
                                                <td class="sorting_1">{{$data->technologies}}</td>
                                                <td class="align-middle">{!! $data->short_description !!}</td>                                                           
                                                <td> <img alt="image" src="{{asset('storage/uploads/services/'.$data->image)}}" width="35"></td> 
                                                <!----------ACTION------------>
                                                <td> 
                                                    <form action="{{ route('servicespage.destroy',$data->id) }}" method="POST">
                                                        <a href="{{route('servicespage.show',$data->id)}}" class="btn btn-primary"><i class="fa fa-eye"></i></a>
                                                        <a href="#" class="btn btn-success"><i class="fa fa-edit"></i></a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <!--<a href="" class="btn btn-danger"><i class="fa fa-trash"></i></a>-->
                                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this technology?')"><i class="fa fa-trash"></i></button>


                                                    </form>
                                                </td>
                                            </tr> 
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-20 col-md-5">
                                    <div class="dataTables_info" id="table-2_info" role="status" aria-live="polite">Showing 1 to 4 of 4 entries</div>
                                </div>
                                <div class="col-sm-12 col-md-7">
                                    <div class="dataTables_paginate paging_simple_numbers" id="table-2_paginate">
                                        <ul class="pagination"><li class="paginate_button page-item previous disabled" id="table-2_previous">
                                                <a href="#" aria-controls="table-2" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                                            </li>
                                            <li class="paginate_button page-item active"><a href="#" aria-controls="table-2" data-dt-idx="1" tabindex="0" class="page-link">1</a>
                                            </li>
                                            <li class="paginate_button page-item next disabled" id="table-2_next">
                                                <a href="#" aria-controls="table-2" data-dt-idx="2" tabindex="0" class="page-link">Next</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection