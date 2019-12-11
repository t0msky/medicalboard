<form action="{{ route('claim.upload') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="modal fade" id="model_supporting_document" tabindex="-1" role="dialog" aria-labelledby="viewOpinionLabel1">
        <div class="modal-dialog modal-l" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel1">Upload Document </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <input type="hidden" name="emp_id" value="">
                </div>
                <div class="modal-body">
                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-6">
                            <label class="control-label">@lang('Document Description')</label>
                            <select id="idtype_doc" class="form-control" name="idtype[]">
                                    <option value="" selected disable hidden></option>
                                    @if(!empty($doclist_select)||$doclist_select!=null)
                                    @foreach($doclist_select as $data)
                                    <option value="{{ $data -> doctype}}|{{ $data -> doccat}}">{{ $data -> docdescen}}</option>
                                    @endforeach
                                    @endif
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-8">
                            <label class="control-label">@lang('Choose Document')</label>
                            <span class="choosefile"><input type="file" name="pdf[]" id="pdf_cancel"> <i class=" preview icon-close" id="btn_cancel"></i>
                            </span>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-6">
                            <label class="control-label">@lang('Received Date')</label>
                            <input type="date" class="form-control" name="receive_date[]">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6 col-lg-5">
                            <label>@lang('Source Of Document')</label>
                            <select class="form-control" name="source_doc[]" id="">
                                <option readonly hidden selected>Please Choose</option>
                                @foreach($ref_table->docsrc as $document_source)
                                <option type="text" value="{{$document_source->ref_code}}">{{$document_source->desc_en}} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6 col-lg-5">
                            <label class="control-label">@lang('Document Type')</label>
                            <select class="form-control" name="status[]" id="">
                                <option readonly hidden selected>Please Choose</option>
                                @foreach($ref_table->doc_type_oc as $document_type_oc)
                                <Option type="text" value="{{$document_type_oc->ref_code}}">{{$document_type_oc->desc_en}} </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>
</form>
<script>
$(document).ready(function () {
    $('#btn_cancel').click(function () {
        $('#pdf_cancel').val("");
    });
});
</script>