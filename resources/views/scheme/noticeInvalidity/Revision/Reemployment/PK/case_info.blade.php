<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <form action="/caseinfo_revision" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-body">
                        
                        @if(Session::get('messageob'))
                        <div class="card-footer">

                            <div class="alert alert-warning">
                                {{Session::get('messageob')}}
                            </div>

                        </div>
                        @elseif (!empty($messageob))
                        <div class="card-footer">

                            <div class="alert alert-warning">
                                {{$messageob}}
                            </div>

                        </div>
                        @endif
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                   <label class="control-label">@lang('Notice')</label><span class="required">*</span>
                                   <input type="text"  id="noticeID_reemployment" name="notice" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('Type of Revision')</label><span class="required">*</span>
                                    <input type="text"  id="typeRevision_reemployment" name="typeRevision" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                    
                        <div class="form-actions">
                            <!--button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.cancel')</button>
                                <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.clear')</button-->
                                <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('Save')</button>
                                <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('Reset')</button>   
                                <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticetype'">@lang('Cancel')</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
