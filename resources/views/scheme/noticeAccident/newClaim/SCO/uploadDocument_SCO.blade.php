<div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('claim.upload') }}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-body">
                            <h5 class="card-title">@lang('uploaddoc.title')</h5>
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
                                            <table class="table" id="table_upload_doc">
                                                <col width="50%">
                                                <col width="30%">
                                                <col width="20%">
                                                <thead>
                                                    <tr>
                                                        <th style="display:none;">Doctype </th>
                                                        <th>@lang('uploaddoc.attr.docdesc')</th>
                                                        <th>@lang('uploaddoc.attr.docpath')</th>
                                                        <th>@lang('uploaddoc.attr.date')</th>
                                                        <th>@lang('uploaddoc.attr.view')</th>
                                                       <th>@lang('uploaddoc.attr.delete')</th> 
    
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $cnt = 0; ?>
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
                                                        
                                                        <td><input type="hidden"  name="doccat[{{$cnt}}]"
                                                                value="{{ $data -> doctype}}|{{ $data -> doccat}}">{{ $data -> docdescen}} </td>
                                                                <td></td>
                                                        {{-- <td><input type="file" name="pdf[{{$cnt}}]"
                                                                id="pdf_cancel_{{$cnt}}">
                                                            <div class="preview btn_cancel_{{$cnt}}"> <i
                                                                    class="icon-close"></i></div>
                                                        </td> --}}
                                                        <td><input type="date" class="form-control"></td>
                                                        <td><a href='/viewdoc?docname={{$d->docname}}'
                                                                target="_blank"><i class="far fa-file-alt"></i></a></td>
                                                               
                                                        <?php $docfound = true; $cnt++;?>
                                                    </tr>    
                                                    {{$d->doctype=''}}
                                                    @endif
                                                    
                                                    @endforeach
                                                    
                                                    @endif
    
                                                    @if ($docfound == false)
                                                    <tr>
                                                        <td style="display:none;"><input type="hidden" class="number"
                                                            value="{{$cnt}}"></td>
                                                    <td style="display:none;"><input type="hidden"
                                                            name="doctype[{{$cnt}}]" value="{{ $data -> doctype}}">
                                                    </td>
                                                   
                                                    <td><input type="hidden" name="doccat[{{$cnt}}]"
                                                            value="{{ $data -> doctype}}|{{ $data -> doccat}}">{{ $data -> docdescen}}</td>
                                                            @if( $data -> doctype=='C03'|| $data -> doctype=='O01')
                                                    <td><span class="choosefile"><input type="file" required name="pdf[{{$cnt}}]"
                                                            id="pdf_cancel_{{$cnt}}">
                                                            @else
                                                            <td><span class="choosefile"><input type="file" name="pdf[{{$cnt}}]"
                                                                id="pdf_cancel_{{$cnt}}">
                                                                @endif
                                                            <i class="preview btn_cancel_{{$cnt}} icon-close"></i>
                                                        
                                                        </span>
                                                    </td>
                                                    
                                                   
                                                   
                                                    <td><input type="date" class="form-control"></td>
                                                        <td></td>
                                                        
                                                        
    
                                                    </tr>
                                                    <?php $cnt++; ?>
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
                                            <button type="submit"
                                                class="btn btn waves-effect waves-light btn-success">@lang('uploaddoc.uploadall')</button>
                                            <button type="button" id="add_doc"
                                                class="btn btn-secondary">@lang('uploaddoc.adddoc')</button>
                                            <!--button type="submit"
                                                class="btn btn-rounded btn-block btn-outline-success ">Upload All</button-->
                                            
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
    