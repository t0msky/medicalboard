<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    <div class="form-body">
                        <div class="col-md-12">
                                <div class="table-responsive" id="table-medical">
                                    <div class="form-actions text-right">
                                        <button type="button" id="btn_add_inconsistency0" value='0' class="btn btn-sm waves-effect waves-light btn-info">@lang('scheme/inconsistency.addItem')</button>
                                    </div>{{-- <label class="control-label">@lang('inconsistency.attr.medicalleave')</label> --}}
                                    <table  class="table table-sm table-bordered" data-toggle-column="first">
                                        <thead>
                                            <tr>
                                                <th style='width:10%'>@lang('scheme/inconsistency.attr.section')</th> 
                                                <th style='width:15%'>@lang('scheme/inconsistency.attr.item')</th> 
                                                <th style='width:15%'>@lang('scheme/inconsistency.attr.noticedetails')</th> 
                                                <th style='width:15%'>@lang('scheme/inconsistency.attr.supportDoc')</th>
                                                <th style='width:15%'>@lang('scheme/inconsistency.attr.correcData')</th>
                                                {{-- <th style='width:15%'>@lang('scheme/inconsistency.attr.investigation')</th>
                                                <th style='width:15%'>@lang('scheme/inconsistency.attr.justification')</th> --}}
                                                <th style='width:5%'>@lang('scheme/inconsistency.attr.findings')</th>
                                                <th style='width:5%'>@lang('scheme/inconsistency.attr.consistent')</th>
                                                <th style='width:5%'>@lang('scheme/inconsistency.attr.action')</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr data-expanded="true" class="workrow" id="tr0_0">
                                                <td>
                                                    <div class="col-md-12">
                                                        <select class="form-control" name="hussts[]">
                                                        <option value="" selected>Please select</option>
                                                        </select>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="col-md-12">
                                                        <select class="form-control" name="hussts[]">
                                                        <option value="" selected>Please select</option>
                                                        <option value="" >Accident Time</option>
                                                        <option value="" >Accident Date</option>
                                                        <option value="" >Place Of Accident </option>
                                                        <option value="" >Injury Type</option>
                                                        <option value="" >How Accident Happen</option>
                                                        </select>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="col-md-12">
                                                        <input id="noticedetails" name="noticedetails" type="text" value="" class="form-control" >
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="col-md-12">
                                                        <input type="text" id="supportDoc" name="supportDoc" value="" class="form-control " >
                                                    </div>
                                                </td>
                                                <td>
                                                    <input type="text" id="correctdata" name="correctdata" value="" class="form-control" >
                                                </td>
                                                {{-- <td>
                                                    <input type="text" id="investigation" name="investigation" value="" class="form-control" >
                                                </td>
                                                <td>
                                                    <input type="text" id="statement" name="statement" value="" class="form-control" >
                                                </td> --}}
                                                <td>
                                                    
                                                </td>
                                                <td>
                                                    <input type="text" id="consistent" name="consistent" value="" class="form-control" >
                                                </td>
                                                <td>
                                                    <button type="button"  class="btn btn-sm btn-danger btn_del_workinconsistency" id="del_attended_work0_0"><i class="fas fa-trash-alt fa-sm"></i></button>
                                                    
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>     
                                    <label class="control-label" id='lblinconsistencyerror0' style='color:red'></label>
                                </div>
                            </div>
                            {{-- <div class="row p-t-20">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>@lang('scheme/inconsistency.attr.review')</label>
                                        <input type="text" class="form-control clearFields" name="city"  value="">
                                    </div>
                                </div>
                            </div> --}}
                            {{-- <div class="row p-t-20">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>@lang('scheme/inconsistency.attr.reviewBy')</label>
                                        <input type="text" class="form-control clearFields" name="origin"  value="">
                                    </div>
                                </div>
                            </div> --}}
                        <div class='row'>
                            <div class="col-md-12">
                                <div class="form-actions">
                                    <!--button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.cancel')</button>
                                    <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.clear')</button-->
                                    <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('scheme/noticetype.save')</button>
                                    <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('scheme/noticetype.reset')</button>
                                    <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticetype'">@lang('scheme/noticetype.cancel')</button>
                                    <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticeaccident'">@lang('scheme/noticetype.back')</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>