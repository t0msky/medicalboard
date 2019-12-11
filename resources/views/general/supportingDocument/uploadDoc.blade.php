<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('claim.upload') }}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-body">
                        <div class="form-actions">
                            <div class="row">
                                <div class="col-12">
                                    <div class="table-responsive">
                                        <table class="table" id="table_upload_doc_sco">
                                            <thead>
                                                <tr>
                                                    <th style="display:none;"> </th>
                                                    <th style="width:10%">@lang('Document Description')</th>
                                                    <th style="width:10%">@lang('Received Date')</th>
                                                    <th style="width:10%">@lang('Upload Date')</th>
                                                    <th style="width:18%">@lang('Source Of Documents')</th>
                                                    <th style="width:15%">@lang('Document Type')</th>
                                                    <th style="width:25%">@lang('Document Path')</th>
                                                    <th style="width:15%">@lang('Status')</th>
                                                    <th style="width:2%">@lang('View')</th>
                                                    <th style="width:2%">@lang('Delete')</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if(!empty($doclist)||$doclist!=null)
                                                @foreach($doclist as $idx=>$data)
                                                <?php $docfound = false; ?>
                                                @if (!empty($docinfo)||$docinfo!=null)
                                                @foreach ($docinfo as $idx_docinfo=>$d)
                                                @if ($d->doctype == $data->doctype)
                                                <tr>
                                                    <td style="display:none;"><input type="hidden" class="number" value="{{$idx_docinfo}}"></td>
                                                    <td><input type="hidden" name="doccat[{{$idx_docinfo}}]" value="{{ $d -> doctype}}|{{ $d -> doccat}}">{{ $data ->docdescen}}</td>
                                                    <td>{{$d->recvdate}}</td>
                                                    <td>{{$d->docdate}}</td>
                                                    <td>
                                                        @foreach($ref_table->docsrc as $document_source)
                                                        @if($d->docsts == $document_source->ref_code)
                                                        <input class="form-control" type="text" readonly value="{{$document_source->desc_en}}">
                                                        @endif
                                                        @endforeach
                                                    </td> 
                                                    <td>
                                                        @foreach($ref_table->doc_type_oc as $document_type_oc)
                                                        @if($d->docsts == $document_type_oc->ref_code)
                                                        <input class="form-control" type="text" readonly value="{{$document_type_oc->desc_en}}">
                                                        @endif
                                                        @endforeach
                                                    </td>
                                                    <td></td>
                                                    <td>
                                                        @foreach($ref_table->doc_sts as $document_status)
                                                        @if($d->docsts == $document_status->ref_code)
                                                        <input class="form-control" type="text" readonly value="{{$document_status->desc_en}}">
                                                        @endif
                                                        @endforeach     
                                                    </td>
                                                    <td><a href='{{route("download_document")}}?docname={{$d->docname}}' target="_blank"><i class="far fa-file-alt"></i></a> </td>
                                                </tr>
                                                {{$d->doctype=''}}
                                                <?php $docfound = true; ?>
                                                @endif
                                                @endforeach
                                                @endif
                                                @if($docfound==false)
                                                <tr><td style="display:none;"><input type="hidden" class="number" value="{{$idx}}"></td>
                                                    <td><input type="hidden" name="doccat[{{$idx}}]"  value="{{ $data -> doctype}}|{{ $data -> doccat}}">{{ $data ->docdescen}} </td>
                                                    <td><input type="date" class="form-control" name="receive_date[{{$idx}}]"></td>
                                                    <td></td>
                                                    <td>
                                                        <div class="custom-control custom-checkbox mr-sm-2 mb-3">
                                                            <select class="form-control" name="source_doc[{{$idx}}]" id="">
                                                                <option readonly hidden selected>Please Choose</option>
                                                                @foreach($ref_table->docsrc as $document_source)
                                                                <option type="text" value="{{$document_source->ref_code}}">{{$document_source->desc_en}} </option>
                                                                 @endforeach
                                                            </select>
                                                        </div>
                                                    </td> 
                                                    <td>
                                                        <select class="form-control" name="status[{{$idx}}]" id="">
                                                            <option readonly hidden selected>Please Choose</option>
                                                            @foreach($ref_table->doc_type_oc as $document_type_oc)
                                                            <Option type="text" value="{{$document_type_oc->ref_code}}">{{$document_type_oc->desc_en}} </option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                    <td>
                                                        <div class="row">
                                                            <span class="choosefile"><input type="file" name="pdf[{{$idx}}]" id="pdf_cancel_{{$idx}}">
                                                                <i class=" preview btn_cancel_{{$idx}} icon-close"></i>
                                                            </span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <select class="form-control" name="status[{{$idx}}]" id="">
                                                            <option readonly hidden selected>Please Choose</option>
                                                            @foreach($ref_table->doc_sts as $document_status)
                                                            <Option type="text" value="{{$document_status->ref_code}}">{{$document_status->desc_en}} </option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                                @endif
                                                @endforeach
                                                @endif
                                                @if (!empty($docinfo)||$docinfo!=null)
                                                @foreach ($docinfo as $idx_docinfo=>$d)
                                                @if ($d->doctype != '')
                                                <tr>
                                                    <td style="display:none;"><input type="hidden" class="number" value="{{$idx}}"></td>
                                                    </td>
                                                    <td><input type="hidden" name="doccat[{{$idx}}]" value="{{ $d -> doctype}}|{{ $d -> doccat}}">{{ $d->docdescen}} </td>
                                                    <td> {{$d->recvdate}}</td>
                                                    <td> {{$d->docdate}}</td>
                                                    <td>
                                                        @foreach($ref_table->docsrc as $document_source)
                                                        @if($d->docsts == $document_source->ref_code)
                                                        <input class="form-control" type="text" readonly value="{{$document_source->desc_en}}">
                                                        @endif
                                                        @endforeach
                                                    </td> 
                                                    <td>
                                                        @foreach($ref_table->doc_type_oc as $document_type_oc)
                                                        @if($d->docsts == $document_type_oc->ref_code)
                                                        <input class="form-control" type="text" readonly value="{{$document_type_oc->desc_en}}">
                                                        @endif
                                                        @endforeach
                                                    </td>
                                                    <td></td>
                                                    <td>
                                                        @foreach($ref_table->doc_sts as $document_status)
                                                        @if($d->docsts == $document_status->ref_code)
                                                        <input class="form-control" type="text" readonly value="{{$document_status->desc_en}}">
                                                        @endif
                                                        @endforeach
                                                    </td>
                                                    <td><a href='{{route("download_document")}}?docname={{$d->docname}}' target="_blank"><i class="far fa-file-alt"></i></a></td>
                                                </tr>
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
                                                        @if(!empty($doclist_select)||$doclist_select!=null)
                                                        @foreach($doclist_select as $data)
                                                        <option value="{{ $data -> doctype}}|{{ $data -> doccat}}">{{ $data -> docdescen}}</option>
                                                        @endforeach
                                                        @endif
                                                    </select>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('Save')</button>
                                        <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('Reset')</button>
                                        <button type="button" id="add_doc_sco" class="btn btn-secondary">@lang('Add Document')</button>
                                        <button type="button" class="btn btn waves-effect waves-light btn-info" data-toggle="modal"data-target="#model_supporting_document">@lang('Pop Modal')</button>
                                        <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc'onclick="window.location='/noticetype'">@lang('Cancel')</button>
                                        <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/obform_od'">@lang('Back')</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@include('general.supportingDocument.modal')
<script>
    $(document).ready(function () {
        $('#add_doc_sco').click(function () {
            var no_doc = $('#table_upload_doc_sco tr:last td:first').find("input").val();
            no_doc++;
            idtype = document.getElementById('idtype_doc').innerHTML;

            $('#table_upload_doc_sco > tbody:last-child').append('<tr id="myTableRow_sco_' + no_doc + '">'+
            '<td style="display:none;"><input type="hidden" class="number" value="' + no_doc + '"></td>'+
            '<td><select required class="form-control" name="doccat[' + no_doc + ']">' + idtype + '</select></td>'+
            '<td><input type="date"  name="receive_date[' + no_doc + ']" class="form-control"></td>'+
            '<td></td>'+
            '<td><div class="custom-control custom-checkbox mr-sm-2 mb-3"><select class="form-control" name="source_doc[' + no_doc + ']" id=""><option readonly hidden selected>Please Choose</option><option value="1">Online</option><option value="2">Offline</option></select></div></td>'+
            '<td><select class="form-control" name="document_type[' + no_doc + ']" id=""> <option readonly hidden selected>Please Choose</option><option value="1">Copy</option><option value="2">Original</option></select></td>'+
            '<td><span class="choosefile"><input type="file" id="pdf_cancel_' + no_doc + '" name="pdf[' + no_doc + ']"  /> <i class="preview btn_cancel_' + no_doc + ' icon-close"></i></span></td>'+
            '<td> <select class="form-control" name="status[' + no_doc + ']" id=""><option readonly hidden selected>Please Choose</option><option value="1">Required</option><option value="2">Not Required</option></select></td>'+
            '<td></td>'+ 
            '<td><button type="button" id="btn_delete_' + no_doc + '" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></a></button></td>'+
            '</tr>'); 
            $('#btn_delete_' + no_doc + '').click(function () {

                $('#table_upload_doc_sco').each(function () {
                    $('#myTableRow_sco_' + no_doc + '').remove();
                });
            });
            $('#table_upload_doc_sco tr').each(function () {
                var no = $(this).find(".number").val();
                // no++;
                $('.btn_cancel_' + no + '').click(function () {
                    $('#pdf_cancel_' + no + '').val("");
                });
            });
        });

        $('#table_upload_doc_sco tr').each(function () {
            var no = $(this).find(".number").val();
            // no++;
            $('.btn_cancel_' + no + '').click(function () {
                $('#pdf_cancel_' + no + '').val("");
            });
        });
    });
</script>