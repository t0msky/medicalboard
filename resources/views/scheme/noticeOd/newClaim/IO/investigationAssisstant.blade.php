<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    <h5 class="card-title">@lang('scheme/investigation.assisstant')</h5>
                    <hr>
                        <div class="row p-t-20">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/investigation.attr.sender_note')</label>
                                    <textarea type="text" name="sendernote" id="sendernote" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/investigation.attr.office')</label>
                                    <input type="text" name="office" id="office" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="row p-t-20">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/investigation.attr.recipient_note')</label>
                                    <textarea type="text" name="recipientnote" id="recipientnote" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="form-actions">
                            {{-- <button data-toggle="tab" href="#employer" role="tab" class="btn waves-effect waves-light btn-info" id="btn-nextEmpDetails">@lang('insuredPerson.next')</button> --}}
                            <button type="submit" class="btn waves-effect waves-light btn-success">
                            @lang('scheme/insuredPerson.save')</button>
                            {{-- <button type="button" class="btn waves-effect waves-light btn-info">@lang('insuredPerson.previous')</button> --}}
                        </div>
                    </form>
                </div>   
            </div>
        </div>
    </div>