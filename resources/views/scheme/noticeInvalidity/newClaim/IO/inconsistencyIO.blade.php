<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    <div class="form-body">
                 
                        <div class="col-md-12" >
                                <div class="table-responsive" >
                                    <div class="form-actions text-right">
                                        <button type="button" class="btn btn-sm waves-effect waves-light btn-info">@lang('scheme/inconsistency.addItem')</button>
                                    </div>
                                    <table class="table table-sm table-bordered" data-toggle-column="first">
                                        <thead>
                                            <tr>
                                                <th style='width:15%'>@lang('scheme/inconsistency.attr.section')</th> 
                                                <th style='width:15%'>@lang('scheme/inconsistency.attr.item')</th> 
                                                <th style='width:15%'>@lang('scheme/inconsistency.attr.noticedetails')</th> 
                                                <th style='width:10%'>@lang('scheme/inconsistency.attr.supportDoc')</th>
                                                <th style='width:10%'>@lang('scheme/inconsistency.attr.correcData')</th>
                                                <th style='width:5%'>@lang('scheme/inconsistency.attr.investigation')</th>
                                                <th style='width:15%'>@lang('scheme/inconsistency.attr.consistent')</th>
                                                <th style='width:5%'>@lang('scheme/inconsistency.attr.accept')</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr data-expanded="true" class="workrow">
                                                <td>
                                                    <div class="col-md-12">
                                                        <select class="form-control" name="">
                                                        <option value="" selected>Please select</option>
                                                        </select>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="col-md-12">
                                                        <select class="form-control" name="">
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
                                                        <input name="noticedetails" type="text" value="" class="form-control" >
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
                                                <td>
                                                    <div class="col-md-0">
                                                        <button type="button" name="action" id="action" class="btn btn-facebook waves-effect waves-light" data-toggle="modal" data-target="#exampleModal3" data-whatever="@fat">View</button>
                                                    </div>
                                                    <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3">
                                                        <div class="modal-dialog modal-xl" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header  card-title">
                                                                    <h4 class="modal-title" id="exampleModalLabel3">@lang('scheme/index.attr.inconsistency')</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                   
                                                                </div>
                        
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">@lang('scheme/accidentDetails.close')</button>
                                                                    <button type="submit" class="btn btn-primary">@lang('scheme/accidentDetails.save')</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                </td> 
                                                <td>
                                                    <select class="form-control" name="">
                                                        <option value="" selected>Please select</option>
                                                        <option value="" selected>Yes</option>
                                                        <option value="" selected>No</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <div class="custom-control custom-checkbox mr-sm-2 mb-3">
                                                        <input type="checkbox" class="custom-control-input" id="checkbox0" value="check">
                                                        <label class="custom-control-label" for="checkbox0"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>     
                                    <label class="control-label" id='lblinconsistencyerror0' style='color:red'></label>
                                </div>
                            </div>
                        <div class='row'>
                            <div class="col-md-12">
                                <div class="form-actions">
                                    <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('button.save')</button>
                                    <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('button.reset')</button>
                                  
                                    <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticetype'">@lang('button.cancel')</button>
                                    <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/obform_od'">@lang('button.back')</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>