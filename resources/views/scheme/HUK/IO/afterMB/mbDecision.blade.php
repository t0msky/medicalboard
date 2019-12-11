
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <form action="/obform" method="POST">
                    <h5 class="card-title">@lang('Medical Board Information')</h5>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-body">
                        <div class="row p-t-20">
                            <div class="col-md-12 col-lg-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('Is the diagnosis related to accident?')</label>
                                    <select class="form-control" data-placeholder="" tabindex="2" name="quest1">
                                        <option selected readonly disabled hidden>{{$getHUKsco['quest1']}}</option>
                                        @if($getHUKsco['quest1'] == 'yes')
                                        <option value="yes" selected>@lang('yes')</option>
                                        @elseif($getHUKsco['quest1'] == 'no')
                                        <option value="no" selected>@lang('no')</option>
                                        @else
                                        <option value="yes" >@lang('yes')</option>
                                        <option value="no" >@lang('no')</option>
                                        @endif
                                    </select>                                
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-12 col-lg-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('Does Insured Person sustained permanent disability from above diagnosis?')</label>
                                    <select class="form-control" data-placeholder="" tabindex="2" name="quest2">
                                        <option selected readonly disabled hidden>{{$getHUKsco['quest2']}}</option>
                                        @if($getHUKsco['quest2'] == 'yes')
                                        <option value="yes" selected>@lang('yes')</option>
                                        @elseif($getHUKsco['quest2'] == 'no')
                                        <option value="no" selected>@lang('no')</option>
                                        @else
                                        <option value="yes" >@lang('yes')</option>
                                        <option value="no" >@lang('no')</option>
                                        @endif
                                    </select>                                   
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-12 col-lg-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('Description of Injury')</label>
                                    <textarea readonly rows="6" cols="100" class="form-control" name="descInjury">{{$getHUKsco['descInjury']}}</textarea>                                
                                </div>
                            </div>
                        </div>
                        <div class="form-body">
                            <div class="row p-t-20">
                                <div class="col-md-12 col-lg-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('MB Type')</label>
                                        <input type="text" readonly id="mbtype" name="mbtype" value="{{$getHUKsco['mbtype']}}" class="form-control">
                                    </div>
                                </div>

                                <div class="col-md-12 col-lg-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('MB Session Date')</label>
                                        <input type="text" readonly id="mbsessionDate" name="mbsessionDate" value="{{$getHUKsco['mbsessionDate']}}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('MB/MAB Result')</label>
                                        <input type="text" readonly id="mbabResult" name="mbabResult" value="{{$getHUKsco['mbabResult']}}" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-body">
                            <div class="row p-t-20">
                                <div class="col-md-12 col-lg-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('Assessment Type')</label>
                                        <select class="form-control" data-placeholder="" tabindex="2" name="quest3">
                                            <option selected readonly disabled hidden>{{$getHUKsco['quest3']}}</option>

                                            @if($getHUKsco['quest3'] == 'pro')
                                            <option value="pro" selected>@lang('Provisional')</option>
                                            
                                            @elseif($getHUKsco['quest3'] == 'final')
                                            <option value="final" selected>@lang('Final')</option>
                                            
                                            @elseif($getHUKsco['quest3'] == 'mInjury')
                                            <option value="mInjury" selected>@lang('Multiple Injury')</option>

                                            @elseif($getHUKsco['quest3'] == 'fmInjury')
                                            <option value="fmInjury" selected>@lang('Final Multiple Injury')</option>

                                            @else
                                            <option value="pro">@lang('Provisional')</option>
                                            <option value="final">@lang('Final')</option>
                                            <option value="mInjury">@lang('Multiple Injury')</option>
                                            <option value="fmInjury">@lang('Final Multiple Injury')</option>
                                            @endif
                                        </select>                                       
                                    </div>
                                </div>

                                <div class="col-md-12 col-lg-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('Assessment')</label>
                                        <input type="text" readonly id="assessment" name="assessment" value="{{$getHUKsco['assessment']}}" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('Provisional End Date')</label>
                                        <input type="text" readonly id="proendDate" name="proendDate" value="{{$getHUKsco['proendDate']}}" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!------------- TABLE LISTING ------------->
                        <div class="col-md-12 col-lg-9">
                            <div class="table-responsive" id="table-generated">
                                <label class="control-label">@lang('Table Listing')</label>
                                <table class="table table-sm table-bordered" data-toggle-column="first">
                                    <thead>
                                        <tr>
                                            <th style='width:5%'>@lang('No.')</th>
                                            <th style='width:20%'>@lang('Dicipline')</th>
                                            <th style='width:20%'>@lang('Assessment')</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr data-expanded="true" class="workrow" id="tr0_0">
                                            <td></td>
                                            <td> </td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-12 col-lg-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('ELS')</label>
                                    <select class="form-control" data-placeholder="" tabindex="2" name="els">
                                            <option selected readonly disabled hidden>{{$getHUKsco['els']}}</option>
                                            @if($getHUKsco['quest2'] == 'yes')
                                            <option value="yes" selected>@lang('yes')</option>
                                            @elseif($getHUKsco['quest2'] == 'no')
                                            <option value="no" selected>@lang('no')</option>
                                            @else
                                            <option value="yes" >@lang('yes')</option>
                                            <option value="no" >@lang('no')</option>
                                            @endif
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-12 col-lg-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('Remarks')</label>
                                    <textarea readonly rows="6" cols="100" class="form-control" name="remarks">{{$getHUKsco['remarks']}}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>