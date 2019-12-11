
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-body">
                        <div class="card m-b-0">

                            <h5 class="card-title">@lang('Revision - New Registeration')</h5>

                            <div class="row p-t-20">
                                <div class="col-md-1">
                                    <div class="form-group">
                                        <label class="control-label">@lang('Revision')</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input type="text" id="revision" name="revision" value="" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="row p-t-20">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('Revision Notice Received Date ')</label>
                                        <input type="text" id="revNoticeReceivedDate" name="revNoticeReceivedDate" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('Source')</label>
                                        <select class="form-control" data-placeholder="" tabindex="2">
                                            <option selected readonly disabled hidden>Please Choose </option>
                                            <option value="">@lang('Online')</option>
                                            <option value="">@lang('Offline')</option>
                                        </select>                                      
                                    </div>
                                </div>
                            </div>
                        <div class="card-body">
                            <h6 class="card-title-sub">@lang('Insured Person Information') </h6>
                            
                            {{-- @include('scheme.general.ob') --}}

                            <h6 class="card-title-sub">@lang('Case Information') </h6>
                            <br>
                            <div class="row p-t-20">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">@lang('Scheme Ref. No. ')</label>
                                        <input type="text" id="schemeRefNo" name="schemeRefNo" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-0">
                                    <div class="form-group pt-2">
                                        <br>
                                        <td style="align:center;width:10%;"><a id='searchdraft' class="w3-xlarge" ><i class="fas fa-search"></i></a></td>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="control-label">@lang('Benefit Ref. No. ')</label>
                                        <input type="text" id="benefitRefNo" name="benefitRefNo" value="" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('Case Category')</label>
                                        <input type="text" id="caseCategory" name="caseCategory" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('Case Status')</label>
                                        <input type="text" id="caseStatus" name="caseStatus" value="" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('Notice Type')</label>
                                        <input type="text" id="noticeType" name="noticeType" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('Notice Date')</label>
                                        <input type="date" id="noticeDate" name="noticeDate" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('Accident Date')</label>
                                        <input type="date" id="accidentDate" name="accidentDate" value="" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <h6 class="card-title-sub">@lang('Related Case Information') </h6>
                            <br>
                            <br>
                            <div class="col-12">
                                <div class="table-responsive" id="table-generated">
                                    <table class="table table-sm table-bordered" data-toggle-column="first">
                                        <thead>
                                            <tr>
                                                <th style='width:5%'>@lang('No.')</th>
                                                <th style='width:20%'>@lang('Scheme Ref. No.')</th>
                                                <th style='width:20%'>@lang('Benefit Ref. No.')</th>
                                                <th style='width:20%'>@lang('Notice Type')</th>
                                                <th style='width:25%'>@lang('Accident Date/Date of OD/Date of Death/Notice Death')</th>
                                                <th style='width:5%'>@lang('Action')</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr data-expanded="true" class="workrow" id="tr0_0">
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td style="align:center;width:5%;"><a id='view' class="w3-xlarge" ><i class="fas fa-file-alt"></i></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <h6 class="card-title-sub">@lang('Option Permanent Disablement Benefit/invalidity Pension (Section 96)')</h6>
                            <br>
                            <label class="control-label">@lang('Option HUK or ILT (Section 96)')</label>
                            <div class="row p-t-20">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="ques21a" name="ques21" class="custom-control-input">
                                            <label class="custom-control-label" for="ques21a">@lang('HUK')</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="ques21b" name="ques21" class="custom-control-input">
                                            <label class="custom-control-label" for="ques21b">@lang('ILT')</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row p-t-20">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('Date of Option Received (Section 96)')</label>
                                        <input type="date" id="dateSection96" name="dateSection96" value="" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('button.save')</button>
                            <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('button.reset')</button>
                            <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticetype'">@lang('button.cancel')</button>
                            <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/obform_od'">@lang('button.back')</button>
                        </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    

