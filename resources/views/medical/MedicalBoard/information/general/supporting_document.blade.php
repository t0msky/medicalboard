<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('claim.upload') }}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-body">
                        <h5 class="card-title">@lang('form/medical.supporting_doc.title')</h5>
                        <hr>
                        @if(Session::get('messagedoc'))
                        <div class="card-footer">

                            <div class="alert alert-warning">
                                {{Session::get('messagedoc')}}
                            </div>

                        </div>
                        <br>

                        @elseif (!empty($messagedoc))
                        <div class="card-footer">

                            <div class="alert alert-warning">
                                {{$messagedoc}}
                            </div>

                        </div>
                        <br>
                        <br>
                        @endif

                        <div class="form-actions">

                            <div class="row p-t-20">
                                <div class="col-12">

                                    <div class="table-responsive">
                                        @if(count($errors)>0)
                                        
                                            @foreach($errors->all() as $error)

                                            <div class="alert alert-warning">{{$error}} </div>
<br>
                                            @endforeach


                                        @endif
                                        <table class="table" id="table_upload_doc">
                                            <col width="50%">
                                            <col width="30%">
                                            <col width="20%">
                                            <thead>
                                                <tr>
                                                    <th style="display:none;">Doctype </th>
                                                    <th>@lang('form/medical.supporting_doc.docdesc')</th>
                                                    <th>@lang('form/medical.supporting_doc.docpath')</th>
                                                    <th>@lang('form/medical.general.date')</th>
                                                    <th>@lang('form/medical.general.view')</th>
                                                   <th>@lang('form/medical.supporting_doc.delete')</th> 

                                                </tr>
                                            </thead>
                                            <tbody>
                                                

                                            </tbody>
                                        </table>
                                        <table>
                                            <tr>
                                                <td id="select_database" style="display:none;">
                                                    <select id="idtype_doc" class="form-control" name="idtype">
                                                        <option value="" selected disable hidden></option>
                                                        @isset($doclist_select)
                                                        @foreach($doclist_select as $data)
                                                        <option value="{{ $data -> doctype}}|{{ $data -> doccat}}">
                                                            {{ $data -> docdescen}}
                                                        </option>
                                                        @endforeach
                                                        @endisset
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
                                            <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('button.save')</button>
                                            <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('button.reset')</button>
                                            <button type="button" id="add_doc"
                                            class="btn btn-secondary">@lang('button.adddoc')</button>
                                            <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticetype'">@lang('button.cancel')</button>
                                            <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/obform_od'">@lang('button.back')</button>
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
