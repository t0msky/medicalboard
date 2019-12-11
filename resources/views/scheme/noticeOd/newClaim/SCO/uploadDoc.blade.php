<div class="row">
    <div class="col-lg-12">
        <div class="card">
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
                                        <table class="table table-sm table-bordered" id="table_upload_doc" data-toggle-column="first">
                                            <thead>
                                                <tr>
                                                    <th style="display:none;">Doctype </th>
                                                    <th style="width:5%">@lang('scheme/uploaddoc.attr.docdesc')</th>
                                                    <th style="width:5%">@lang('scheme/uploaddoc.attr.recvdate')</th>
                                                    <th style="width:5%">@lang('scheme/uploaddoc.attr.uploaddate')</th>
                                                    <th style="width:5%">@lang('scheme/uploaddoc.attr.certify')</th>
                                                    <th style="width:10%">@lang('scheme/uploaddoc.attr.source')</th>
                                                    <th style="width:10%">@lang('scheme/uploaddoc.attr.doctype')</th>
                                                    <th style="width:20%">@lang('scheme/uploaddoc.attr.docpath')</th>
                                                    <th style="width:5%">@lang('scheme/uploaddoc.attr.verify')</th>
                                                    <th style="width:5%">@lang('scheme/uploaddoc.attr.view')</th>
                                                    {{-- <th>@lang('scheme/uploaddoc.attr.delete')</th>  --}}

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $cnt = 0; ?>
                                                <?php $i = 0; ?>
                                                @foreach($doclist as $data)
                                                <?php $docfound = false; ?>
                                                @if (!empty($docinfo))
                                                @foreach ($docinfo as $d)
                                                @if ($d->doctype == $data->doctype)
                                                <tr>

                                                    
                                                    <td style="display:none;"><input type="hidden" class="number"
                                                            value="{{$cnt}}"></td>
                                                    <td style="display:none;"><input type="hidden"
                                                            name="doctype[{{$cnt}}]" value="{{ $data -> doctype}}">
                                                    </td>
                                                    <td><input type="hidden" name="doccat[{{$cnt}}]"
                                                            value="{{ $data -> doctype}}|{{ $data -> doccat}}">{{ $data -> docdescen}}</td>
                                                    <td><input type="date" class="form-control"></td>
                                                    <td><input type="date" class="form-control"></td>
                                                    <td>
                                                        <div class="custom-control custom-checkbox mr-sm-2 mb-3">
                                                            <input type="checkbox" class="custom-control-input" id="checkbox[{{$cnt}}" value="check">
                                                            <label class="custom-control-label" for="checkbox[{{$cnt}}]"></label>
                                                        </div>
                                                    </td> 
                                                    <td>
                                                        <input type="text" class="form-control">
                                                    </td>
                                                    <td><input type="date" class="form-control"></td>
                                                    <td>
                                                        <div class="col-md-1">
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" id="customRadioView" name="customRadio" class="custom-control-input">
                                                                <label class="custom-control-label" for="customRadioView">Viewed</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" id="customRadioNot" name="customRadio" class="custom-control-input">
                                                                <label class="custom-control-label" for="customRadioNot">Not Required</label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><a href='/viewdoc?docname={{$d->docname}}'
                                                            target="_blank"><i class="far fa-file-alt"></i></a>
                                                    </td>

                                                           
                                                    <?php $docfound = true; $cnt++;?>
                                                </tr>    
                                                {{$d->doctype=''}}
                                                @endif
                                                
                                                @endforeach
                                                
                                                @endif

                                                @if ($docfound == false)
                                                <tr>
                                                    <td style="display:none;"><input type="hidden" class="number" value="{{$cnt}}"></td>
                                                    <td style="display:none;"><input type="hidden" name="doctype[{{$cnt}}]" value="{{ $data -> doctype}}">
                                                    </td>
                                                    <td><input type="hidden" name="doccat[{{$cnt}}]" value="{{ $data -> doctype}}|{{ $data -> doccat}}">{{ $data -> docdescen}}</td>
                                                    <td><input type="date" class="form-control"></td>
                                                    <td><input type="date" class="form-control"></td> 
                                                    <td>
                                                        <div class="custom-control custom-checkbox mr-sm-2 mb-3">
                                                            <input type="checkbox" class="custom-control-input" id="checkbox[{{$cnt}}]" value="check">
                                                            <label class="custom-control-label" for="checkbox[{{$cnt}}]"></label>
                                                        </div>
                                                    </td>   
                                                    <td>
                                                        <input type="text" class="form-control">
                                                    </td>
                                                    <td><input type="text" class="form-control"></td> 
                                                    <td><span class="choosefile"><input type="file" name="pdf[{{$cnt}}]" id="pdf_cancel_{{$cnt}}">
                                                    
                                                            <i class=" preview btn_cancel_{{$cnt}} icon-close"></i>
                                                        
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <div class="col-md-1">
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" id="customRadioView" name="customRadio" class="custom-control-input">
                                                                <label class="custom-control-label" for="customRadioView">Viewed</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-1">
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" id="customRadioNot" name="customRadio" class="custom-control-input">
                                                                <label class="custom-control-label" for="customRadioNot">Not Required</label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td></td>
                                                    
                                                    

                                                </tr>
                                                <?php $cnt++; ?>
                                                <?php $i++; ?>
                                                @endif
                                                
                                                @endforeach
                                                
                                                @if (!empty($docinfo))
                                                @foreach ($docinfo as $d)
                                                @if ($d->doctype != '')
                                                <tr>
                                                    <td style="display:none;"><input type="hidden" class="number"
                                                        value="{{$cnt}}"></td>
                                                <td style="display:none;"><input type="hidden"
                                                        name="doctype[{{$cnt}}]" value="{{ $d -> doctype}}">
                                                </td>
                                                <td><input type="hidden" name="doccat[{{$cnt}}]"
                                                        value="{{ $d -> doctype}}|{{ $d -> doccat}}">{{ $d-> docdescen}}</td>
                                                        
                                                <td></td>

                                                    <td><a href='/viewdoc?docname={{$d->docname}}'
                                                            target="_blank"><i class="far fa-file-alt"></i></a></td>
                                                    

                                                </tr>
                                                <?php $cnt++; ?>
                                                <?php $i++; ?>
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
                                                        <option value="{{ $data -> doctype}}|{{ $data -> doccat}}">
                                                            {{ $data -> docdescen}}
                                                        </option>
                                                        @endforeach
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
                                        <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('scheme/noticetype.save')</button>
                                        <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('scheme/noticetype.reset')</button>
                                        <button type="button" id="add_doc"
                                        class="btn btn-secondary">@lang('scheme/uploaddoc.adddoc')</button>
                                        <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticetype'">@lang('scheme/noticetype.cancel')</button>
                                        <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/obform_od'">@lang('scheme/noticetype.back')</button>
                                    </div>

                                </div>
                            </div>
                            <br/>
                        </div>
                    </div>
                </form>
        </div>
    </div>
</div>