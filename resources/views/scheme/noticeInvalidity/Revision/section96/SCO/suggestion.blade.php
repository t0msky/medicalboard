<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <form action="/caseinfo_revision" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-body">
                     <div class='row'>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Suggestion</label>{{-- <span
                                class="required">*</span> --}}
                                <select class="form-control" data-placeholder="Please Select"
                                tabindex="2">
                                <option selected readonly disabled hidden>Please Select</option>
                                <option value="">
                                Suggested</option>
                                <option value="">
                                Not Suggested</option>
                                 </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Route</label>{{-- <span
                                class="required">*</span> --}}
                                <select class="form-control" data-placeholder="Please Select"
                                tabindex="2">
                                <option selected readonly disabled hidden>Please Select</option>
                                <option value="">
                                IO</option>
                                <option value="">
                                SAO</option>
                                 </select>
                            </div>
                        </div>
                    </div>
                    <div class='row'>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Approved By</label>{{-- <span
                                class="required">*</span> --}}
                                <input type="text" id="hukNoticeID_Section96" name="hukNoticeID" value=""
                                class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Date of Approval</label>{{-- <span
                                class="required">*</span> --}}
                                <input type="text" id="hukNoticeID_Section96" name="hukNoticeID" value=""
                                class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                            <!--button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.cancel')</button>
                                <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.clear')</button-->
                                    <button type="submit"
                                    class="btn btn waves-effect waves-light btn-success">SAVE</button>
                                    <button type="button" class="btn btn waves-effect waves-light btn-info"
                                    onclick="submitform()">RESET</button>
                                    <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc'
                                    onclick="window.location='/noticetype'">CANCEL</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

