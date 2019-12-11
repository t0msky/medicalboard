
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="" method="POST">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="form-body">
                    <div class="card m-b-0">
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('Revision')</label>
                                    <input type="text" id="Revision" name="Revision" value="" class="form-control">
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
                        
                            <h6 class="card-title-sub">@lang('Insured Person Information') </h6>
                            
                            @include('scheme.general.ob')

                            <h6 class="card-title-sub">@lang('Related Case Information') </h6>
                            <br>
                            <br>
                            *To Najmi : Kalau current date <= 90 hari dari MB date, do not allow to select. Display tooltip kenapa tak boleh select. 'Case is under Appeal Category. Please proceed with Appeal Assessment'
                            
                            <div class="col-12">
                                <div class="table-responsive" id="table-generated">
                                    <table class="table table-sm table-bordered" data-toggle-column="first">
                                        <thead>
                                            <tr>
                                                <th style='width:5%'>@lang('No.')</th>
                                                <th style='width:15%'>@lang('Scheme Ref. No.')</th>
                                                <th style='width:15%'>@lang('Benefit Ref. No.')</th>
                                                <th style='width:13%'>@lang('Notice Type')</th>
                                                <th style='width:15%'>@lang('Benefit Type')</th>
                                                <th style='width:12%'>@lang('Case Status')</th>
                                                <th style='width:10%'>@lang('MB Session Date')</th>
                                                <th style='width:5%'>@lang('Select')</th>
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
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <center><input type="checkbox" id="selectCheckBox" value=""> </center>
                                                </td>
                                                <td style="align:center;width:5%;"><a id='view' class="w3-xlarge" ><i class="fas fa-file-alt"></i></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="form-body" id="caseInfo" style="display:none;">

                                <div id="accordion2" role="tablist" class="accordion">

                                    <div class="card m-b-0">
                                        <div class="card-header" role="tab" id="nreReg">
                                            <h5 class="mb-0">
                                                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#newr" aria-expanded="false"
                                                    aria-controls="collapseOne1">
                                                    <h4 class="card-title"><i class="fa fa-plus"></i> @lang('Case Information')</h4>
                                                </a>
                                            </h5>
                                        </div>

                                        <div id="newr" class="collapse" role="tabpanel" aria-labelledby="headingOne1">

                                    
                                            <div class="card-body">
                                                <div class="card m-b-0">
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
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label class="control-label">@lang('Benefit Type')</label>
                                                                <input type="text" id="benefitType" name="benefitType" value="" class="form-control">
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
                                                    </div>
            
                                                    <h6 class="card-title-sub">@lang('Medical Board Information') </h6>
                                                    <br>
                                                    <br>
                                                    <div class="col-8">
                                                        <div class="table-responsive" id="table-generated">
                                                            <table class="table table-sm table-bordered" data-toggle-column="first">
                                                                <thead>
                                                                    <tr>
                                                                        <th style='width:5%'>@lang('No.')</th>
                                                                        <th style='width:20%'>@lang('MB Type')</th>
                                                                        <th style='width:20%'>@lang('MB Session Date')</th>
                                                                        <th style='width:20%'>@lang('Invalidity')</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr data-expanded="true" class="workrow" id="tr0_0">
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                      
                                                    <div class="form-actions">
                                                        <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('SUBMIT')</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
 
<script>
    $(document).ready(function () {
        $('#selectCheckBox').on('change', function(){
            if(this.checked == true){
                $('#caseInfo').show();
            } else {
                $('#caseInfo').hide();
            }
        })
    });
</script>  
    
    