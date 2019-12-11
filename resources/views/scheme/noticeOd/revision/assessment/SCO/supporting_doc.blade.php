<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('claim.upload') }}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-body">
                        {{-- <h5 class="card-title">@lang('scheme/uploaddoc.title')</h5> --}}
                        {{--<hr class="m-t-0 m-b-40">--}}
                        {{-- @if(Session::get('messagedoc')) --}}
                        {{-- <div class="card-footer"> --}}

                            {{-- <div class="alert alert-warning"> --}}
                                {{-- {{Session::get('messagedoc')}} --}}
                            {{-- </div> --}}

                        {{-- </div> --}}
                        <br>

                        {{-- @elseif (!empty($messagedoc))
                        <div class="card-footer">

                            <div class="alert alert-warning">
                                {{$messagedoc}}
                            </div>

                        </div>
                        <br>
                        <br>
                        @endif --}}

                        <div class="form-actions">

                            <div class="row">
                                <div class="col-12">
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Revision Notice ID </label><span
                                                        class="required"></span>
                                                        <input type="text" name="revision_id" id="revision_id" value="" class="form-control">
                                                </div>
                                            </div>

                                    <div class="table-responsive">
                                        {{-- @if(count($errors)>0)
                                        
                                            @foreach($errors->all() as $error)

                                            <div class="alert alert-warning">{{$error}} </div>
<br>
                                            @endforeach


                                        @endif --}}
                                        <table class="table" id="table_upload_doc">
                                            <col width="50%">
                                            <col width="30%">
                                            <col width="20%">
                                            <thead>
                                                <tr>
                                                    <th style="display:none;">Doctype </th>
                                                    <th>@lang('scheme/uploaddoc.attr.docdesc')</th>
                                                    <th>@lang('scheme/uploaddoc.attr.docpath')</th>
                                                    <th>@lang('scheme/uploaddoc.attr.date')</th>
                                                    <th>@lang('scheme/uploaddoc.attr.view')</th>
                                                   <th>@lang('scheme/uploaddoc.attr.delete')</th> 

                                                </tr>
                                            </thead>
                                            <tbody>
                                               
                                                 <tr>
                                                            <td style="display:none;"><input type="hidden" class="number"
                                                                value=""></td>
                                                        <td style="display:none;"><input type="hidden"
                                                                name="" value="">
                                                        </td>
                                                        <td><input type="hidden" name=""
                                                                value="">Medical Report</td>
                                                                
                                                        <td><span class="choosefile"><input type="file" name=""
                                                                id="pdf_cancel_">
                                                           
                                                                <i class=" preview btn_cancel_ icon-close"></i>
                                                            
                                                            </span>
                                                        </td>
                                                        <td><input type="date" class="form-control"></td>
                                                            <td></td>
                                                            
                                                            
        
                                                </tr>

                                                <tr>
                                                    <td style="display:none;"><input type="hidden" class="number"
                                                        value=""></td>
                                                <td style="display:none;"><input type="hidden"
                                                        name="" value="">
                                                </td>
                                                <td><input type="hidden" name=""
                                                        value="">Application of Revision</td>
                                                        
                                                <td><span class="choosefile"><input type="file" name=""
                                                        id="pdf_cancel_">
                                                   
                                                        <i class=" preview btn_cancel_ icon-close"></i>
                                                    
                                                    </span>
                                                </td>
                                                <td><input type="date" class="form-control"></td>
                                                    <td></td>
                                                    
                                                    

                                                </tr>
                                                
                                                <tr>
                                                    
                                                    <td style="display:none;"><input type="hidden" class="number"
                                                        value=""></td>
                                                <td style="display:none;"><input type="hidden"
                                                        name="" value="">
                                                </td>
                                                <td><input type="hidden" name="doccat[]"
                                                        value=""></td>
                                                        
                                                <td></td>

                                                    <td><a href=''
                                                            target="_blank"><i class="far fa-file-alt"></i></a></td>
                                                    

                                                </tr>
                                               

                                            </tbody>


                                        </table>
                                        <table>
                                            <tr>
                                                <td id="select_database" style="display:none;">
                                                    <select id="idtype_doc" class="form-control" name="idtype">
                                                        <option value="" selected disable hidden></option>
                                                        {{-- @foreach($doclist_select as $data)
                                                        <option value="{{ $data -> doctype}}|{{ $data -> doccat}}">
                                                            {{ $data -> docdescen}}
                                                        </option>
                                                        @endforeach --}}
                                                    </select>
                                                </td>

                                            </tr>


                                        </table>
                                    </div>



                                    <div class="form-action">
                                       
                                        <!--button type="submit"
                                            class="btn btn-rounded btn-block btn-outline-success ">Upload All</button-->
                                        
                                    </div>
                

                                        <div class="form-actions">
                                            <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('scheme/ob.save')</button>
                                            <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('scheme/noticetype.reset')</button>
                                            <button type="button" id="add_doc"
                                            class="btn btn-secondary">@lang('scheme/uploaddoc.adddoc')</button>
                                            <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticetype'">@lang('scheme/noticetype.cancel')</button>
                                            <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/obform_od'">@lang('scheme/noticetype.back')</button>
                                        </div>

                                </div>
                            </div>
                            <br />


                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Row -->
</div>
