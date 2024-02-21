<div class="card-header">
                                    <h4>Edit Seo Content</h4>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label>Meta Title</label>
                                        <input type="text" class="form-control" value="{{(isset($meta->meta_title)? $meta->meta_title : '')}}" name="meta_title">
                                        <div class="invalid-feedback">
                                            Please fill in the first name
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label>Meta Description</label>
                                        <input type="text" class="form-control" value="{{(isset($meta->meta_description)? $meta->meta_description : '')}}" name="meta_description">                                
                                        <div class="invalid-feedback">
                                            Please fill in the last name
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 col-12">
                                        <label>Page Title</label>

                                        <input type="text" class="form-control" value="{{(isset($meta->page_title)? $meta->page_title : '')}}" name="page_title">
                                        <div class="invalid-feedback">
                                            Please fill in the first name
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6 col-12">
                                        <label>Meta Keyword</label>
                                        <input type="text" class="form-control" value="{{(isset($meta->meta_keyword)? $meta->meta_keyword : '')}}" name="meta_keyword">                                
                                        <div class="invalid-feedback">
                                            Please fill in the last name
                                        </div>
                                    </div>
                                </div>