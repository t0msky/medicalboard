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
                        <div class='row'>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Employer's Code</label>{{-- <span class="required">*</span> --}}
                                    <input type="text" id="notice_section96" name="notice" value=""
                                        class="form-control">
                                </div>
                            </div>
                             <div class="col-md-6">
                                <div class="form-group">
                                    <label>Year</label>{{-- <span class="required">*</span> --}}
                                    <input type="text" id="notice_section96" name="notice" value=""
                                        class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                             <div class="col-md-6">
                                <div class="form-group">
                                    <label>Employee Monthly Contribution</label>{{-- <span class="required">*</span> --}}
                                    <input type="text" id="revType_section96" name="revType" value=""
                                        class="form-control">
                                </div>
                            </div>
                             <div class="col-md-6">
                                <div class="form-group">
                                    <label>No of Contribution</label>{{-- <span class="required">*</span> --}}
                                    <input type="text" id="revType_section96" name="revType" value=""
                                        class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                             <div class="col-md-6">
                                <div class="form-group">
                                    <label>Total Months Contributed</label>{{-- <span class="required">*</span> --}}
                                    <input type="text" id="revType_section96" name="revType" value=""
                                        class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <!--button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.cancel')</button>
                                <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.clear')</button-->
                            <button type="submit"
                                class="btn btn waves-effect waves-light btn-success">Save</button>
                            <button type="button" class="btn btn waves-effect waves-light btn-info"
                                onclick="submitform()">Reset</button>
                            <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc'
                                onclick="window.location='/noticetype'">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
