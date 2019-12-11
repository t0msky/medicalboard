<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('claim.upload') }}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-body">
                        {{-- <h5 class="card-title">@lang('scheme/uploaddoc.title')</h5> --}}
                        {{--<hr class="m-t-0 m-b-40">--}}
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

                            <div class="row">
                                <div class="col-12">

                                    <div class="table-responsive">
                                        @if(count($errors)>0)
                                        
                                            @foreach($errors->all() as $error)

                                            <div class="alert alert-warning">{{$error}} </div>
<br>
                                            @endforeach


                                        @endif
                                        <div class="table-responsive m-t-40">
                                            <table id="tableClaimant" class="display nowrap table table-hover table-striped table-bordered" cellspacing="40" width="50%">
                                                    
                                                <thead>
                                                    <tr>
                                                        <th>@lang('scheme/uploaddoc.attr.docdesc')</th>
                                                        <th>Received Date</th>
                                                        <th>Upload Date</th>
                                                        <th>Certify True</th>
                                                        <th>Document Type</th>
                                                        <th>Source of Documents</th>
                                                        <th>@lang('scheme/uploaddoc.attr.docpath')</th>
                                                        <th>@lang('scheme/uploaddoc.attr.view')</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Form 34</td>
                                                        <td><input type="date" class="form-control" name="" id=""></td>
                                                        <td><input type="date" class="form-control" name="" id=""></td>
                                                        <td><input type="checkbox" id="customCheck2"><label for="customRadio1"></td>
                                                        <td>
                                                            <select name="doc_type" class="form-control">
                                                                <option value="Original">Original</option>
                                                                <option value="Copy">Copy</option>
                                                            </select>
                                                        </td>
                                                        <td>OTC</td>
                                                        <td>@lang('scheme/uploaddoc.attr.docpath')</td>
                                                        <td><a id='selectdraft' href=''><i class="fas fa-edit"></i></a></td>
                                                    </tr>

                                                    <?php $cnt = 0; ?>
                                                    @foreach($doclist as $data)
                                                    <?php $docfound = false; ?>
                                                    @if (!empty($docinfo))
                                                    @foreach ($docinfo as $d)
                                                    @if ($d->doctype == $data->doctype)
                                                    <tr>
                                                        <td><input type="hidden" name="doctype[{{$cnt}}]" value="{{ $data -> doctype}}"></td>
                                                        <td><input type="hidden" name="doccat[{{$cnt}}]" value="{{ $data -> doctype}}|{{ $data -> doccat}}">{{ $data -> docdescen}}</td>
                                                        <td></td>
                                                        <td><input type="date" class="form-control"></td>
                                                        <td><a href='/viewdoc?docname={{$d->docname}}' target="_blank"><i class="far fa-file-alt"></i></a></td>    
                                                        <?php $docfound = true; $cnt++;?>
                                                    </tr>    
                                                    {{$d->doctype=''}}
                                                    @endif
                                                    @endforeach
                                                    @endif

                                                    @if ($docfound == false)
                                                    <tr>
                                                        <td><input type="hidden" name="doccat[{{$cnt}}]" value="{{ $data -> doctype}}|{{ $data -> doccat}}">{{ $data -> docdescen}}</td>        
                                                        <td><span class="choosefile"><input type="file" name="pdf[{{$cnt}}]" id="pdf_cancel_{{$cnt}}"><i class=" preview btn_cancel_{{$cnt}} icon-close"></i></span></td>
                                                        <td><input type="date" class="form-control"></td>                                     
                                                    </tr>

                                                    <?php $cnt++; ?>
                                                    @endif
                                                    
                                                    @endforeach
                                                    
                                                    @if (!empty($docinfo))
                                                    @foreach ($docinfo as $d)
                                                    @if ($d->doctype != '')
                                                    <tr>
                                                        <td style="display:none;"><input type="hidden" class="number" value="{{$cnt}}"></td>
                                                        <td style="display:none;"><input type="hidden" name="doctype[{{$cnt}}]" value="{{ $d -> doctype}}"></td>
                                                        <td><input type="hidden" name="doccat[{{$cnt}}]" value="{{ $d -> doctype}}|{{ $d -> doccat}}">{{ $d-> docdescen}}</td>
                                                        <td></td>
                                                        <td><a href='/viewdoc?docname={{$d->docname}}' target="_blank"><i class="far fa-file-alt"></i></a></td>
                                                    </tr>

                                                    <?php $cnt++; ?>
                                                    @endif
                                                    @endforeach
                                                    @endif

                                                </tbody>
                                            </table>
                                            <table>
                                                <tr>
                                                    <td id="select_database" style="display:none;">
                                                        <select id="idtype_doc" class="form-control" name="idtype">
                                                            <option value="" selected disable hidden></option>
                                                            @foreach($doclist_select as $data)
                                                            <option value="{{ $data -> doctype}}|{{ $data -> doccat}}">{{ $data -> docdescen}}</option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="form-actions">
                                        <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('button.save')</button>
                                        <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('button.reset')</button>
                                        <button type="button" id="add_doc" class="btn btn waves-effect waves-light btn-info">@lang('button.adddoc')</button>
                                        <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticetype'">@lang('button.cancel')</button>
                                        <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/obform_od'">@lang('button.back')</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Row -->
</div>
