<div class="modal fade" id="viewOpinion{{$query->op_id}}" tabindex="-1" role="dialog"
    aria-labelledby="viewOpinionLabel1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel1">
                    Opinion
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <label for="recipient-name" class="control-label">Type of Opinion </label>
                        @foreach($ref_table->opinion_type as $op_type)
                        @if($op_type->ref_code==$query->op_opiniontype)
                        <input type="text" class="form-control" readonly value="{{$op_type->desc_en}}">
                        @endif
                        @endforeach
                    </div>
                    <div class="col-md-6">
                        <label for="recipient-name" class="control-label">Purpose of
                            Reference </label>
                        <input type="text" class="form-control" readonly value="{{$query->op_category}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="control-label">Case
                        Details</label>
                    <input type="text" class="form-control" readonly value="{{$query->op_casedetails}}">
                </div>
                <div class="form-group">
                    <label for="message-text" class="control-label">Investigation
                        Details</label>
                    <textarea class="form-control" readonly>{{$query->op_invdetails}}</textarea>
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="control-label">Doubtful/Issue</label>
                    <textarea class="form-control" readonly>{{$query->op_issue}}</textarea>
                </div>
                <div class="form-group">
                    <label for="message-text" class="control-label">Recommendation</label>
                    <textarea class="form-control" readonly>{{$query->op_recommend}}</textarea>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>
