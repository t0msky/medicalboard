<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    <div class="form-body">
                        <div class="col-md-10">
                            <div class="table-responsive" id="table-generated">
                                <table class="table table-sm table-bordered" data-toggle-column="first">
                                    <thead>
                                        <tr>
                                            <th style='width:15%'>@lang('scheme/uploaddoc.attr.doc_desc')</th> 
                                            <th style='width:15%'>@lang('scheme/uploaddoc.attr.generated_date')</th> 
                                            <th style='width:5%'>@lang('scheme/uploaddoc.attr.view')</th> 
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr data-expanded="true" class="workrow" id="tr0_0">
                                            <td>
                                                <div class="col-md-12">
                                                    <input name="doc_desc" type="text" value="" class="form-control" >
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col-md-12">
                                                    <input type="date" name="generated_date" value="" class="form-control" >
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>    
                            </div>
                        </div>
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