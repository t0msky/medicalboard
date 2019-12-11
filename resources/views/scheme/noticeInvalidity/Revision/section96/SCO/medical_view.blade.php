<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <form action="/caseinfo_revision" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-body">
                     <h5 class="card-title">HUK (Accident)</h5>
                     <hr>
                     <div class='row'>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Opinion Type</label>{{-- <span
                                class="required">*</span> --}}
                                <select class="form-control" data-placeholder="Please Select"
                                tabindex="2">
                                <option selected readonly disabled hidden>Please Select</option>
                                <option value="">
                                Confirmation of service patient</option>
                                <option value="">
                                Duty of assessment</option>
                                <option value="">Validity of the Decision</option>
                                <option value="">Validity of ELS</option>
                                <option value="">Section 96</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>MS Opinion</label>{{-- <span
                            class="required">*</span> --}}
                            <input type="text" id="jdtype_section96" class="form-control"
                            name="jdtype_section96" value="">
                        </div>
                    </div>
                </div>
                <h5 class="card-title">HUK (Occupational Disease)</h5>
                <hr>

                <div class='row'>
                    <div class="col-md-6">
                        <div class="form-group">
                                <label>Opinion Type</label>{{-- <span
                                class="required">*</span> --}}
                                <select class="form-control" data-placeholder="Please Select"
                                tabindex="2">
                                <option selected readonly disabled hidden>Please Select</option>
                                <option value="">
                                Confirmation of service patient</option>
                                <option value="">
                                Duty of assessment</option>
                                <option value="">Validity of the Decision</option>
                                <option value="">Validity of ELS</option>
                                <option value="">Section 96</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>MS Opinion</label>{{-- <span
                            class="required">*</span> --}}
                            <input type="text" id="jdtype_section96" class="form-control"
                            name="jdtype_section96" value="">
                        </div>
                    </div>
                </div>
                <h5 class="card-title">Invalidity</h5>
                <hr>
                <div class='row'>
                    <div class="col-md-6">
                        <div class="form-group">
                                <label>Opinion Type</label>{{-- <span
                                class="required">*</span> --}}
                                <select class="form-control" data-placeholder="Please Select"
                                tabindex="2">
                                <option selected readonly disabled hidden>Please Select</option>
                                <option value="">
                                Confirmation of service patient</option>
                                <option value="">
                                Duty of assessment</option>
                                <option value="">Validity of the Decision</option>
                                <option value="">Validity of ELS</option>
                                <option value="">Section 96</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>MS Opinion</label>{{-- <span
                            class="required">*</span> --}}
                            <input type="text" id="jdtype_section96" class="form-control"
                            name="jdtype_section96" value="">
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
