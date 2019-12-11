<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    <div class="form-body">
                        {{-- <h3 class="card-title">@lang('scheme/index.attr.inconsistency')</h3>
                        <hr> --}}
                        <div class="col-md-12 col-lg-12">
                                <div class="table-responsive">{{-- <label class="control-label">@lang('inconsistency.attr.medicalleave')</label> --}}
                                    <table class="table table-sm table-bordered" data-toggle-column="first" id="table_inconsistent">
                                        <thead>
                                            <tr>
                                                <th style='width:5%'>No.</th> 
                                                <th style='width:15%'>@lang('form/scheme.general.collapse.inconsistent.section')</th> 
                                                <th style='width:15%'>@lang('form/scheme.general.collapse.inconsistent.item')</th> 
                                                <th style='width:15%'>@lang('form/scheme.general.collapse.inconsistent.notice_details')</th> 
                                                <th style='width:10%'>@lang('form/scheme.general.collapse.inconsistent.supporting_documents')</th>
                                                <th style='width:10%'>@lang('form/scheme.general.collapse.inconsistent.corrected_data')</th>
                                                <th style='width:5%'>Justification</th>
                                                    {{-- <th style='width:15%'>@lang('form/scheme.general.collapse.inconsistent.justification')</th> --}}
                                                <th style='width:5%'>@lang('form/scheme.general.collapse.inconsistent.findings')</th>
                                                <th style='width:15%'>@lang('form/scheme.general.collapse.inconsistent.consistent')</th>
                                                <th style='width:5%'>@lang('form/scheme.general.collapse.inconsistent.action')</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr data-expanded="true" class="workrow" id="tr0_0">
                                                <td>
                                                    <div class="col-md-0">
                                                        1.
                                                    </div>
                                                </td>
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
                                                </td>--}}
                                                <td>
                                                    <div class="col-md-0">
                                                        <a class='view'><i class="fas fa-file-alt"  data-toggle="modal" data-target="#exampleModal3" data-whatever="@fat"></i></a>
                                                    </div>
                                                    <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3">
                                                        <div class="modal-dialog modal-xl" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header  card-title">
                                                                    <h4 class="modal-title" id="exampleModalLabel3">@lang('form/scheme.general.collapse.inconsistent.title')</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    @include('scheme.noticeAccident.newClaim.SCO.inconsistency_popup') 
                                                                </div>
                        
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">@lang('button.close')</button>
                                                                    <button type="submit" class="btn btn-primary">@lang('button.save')</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> 
                                                </td> 
                                                <td>
                                                    <div class="custom-control custom-checkbox mr-sm-2 mb-3">
                                                        <input type="checkbox" class="custom-control-input" id="checkbox0" value="check">
                                                        <label class="custom-control-label" for="checkbox0"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <input type="text" id="consistent" name="consistent" value="" class="form-control" readonly>
                                                </td>
                                                <td>
                                                    <a class='deletedraft'><i class="fas fa-trash-alt "></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table> 
                                    <div class="form-actions col-md-12 col-lg-12">
                                        <button type="button" id="btn_add_item" value='' class="btn btn-sm waves-effect waves-light btn-info">@lang('button.add_Item')</button>
                                    </div>    
                                    <label class="control-label" id='lblinconsistencyerror0' style='color:red'></label>
                                </div>
                            </div>
                            {{-- <div class="row p-t-20">
                                <!--/span-->
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>@lang('scheme/inconsistency.attr.review')</label>
                                        <input type="text" class="form-control clearFields" name="city"  value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <!--/span-->
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>@lang('scheme/inconsistency.attr.reviewBy')</label>
                                        <input type="text" class="form-control clearFields" name="origin"  value="">
                                    </div>
                                </div>
                            </div> --}}
                        <br>
                        <div class='row'>
                            <div class="col-md-12">
                                <div class="form-actions">
                                    <!--button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.cancel')</button>
                                    <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.clear')</button-->
                                    <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('button.save')</button>
                                    <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('button.reset')</button>
                                    <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticetype'">@lang('button.cancel')</button>
                                    <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticeaccident'">@lang('button.back')</button>
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
var no = '1';

$('#btn_add_item').click(function(){
    no++;
    $('#table_inconsistent > tbody:last-child').append('<tr data-expanded="true" class="workrow" id="tr">'+
        '<td>'+
        '<div class="col-md-0">'+
            +no+
        '</div>'+
    '</td>'+
    '<td>'+
        '<div class="col-md-12">'+
            '<select class="form-control" name="hussts[]">'+
            '<option value="" selected>Please select</option>'+                                                        
            '</select>'+
        '</div>'+
    '</td>'+
    '<td>'+
        '<div class="col-md-12">'+
            '<select class="form-control" name="hussts[]">'+
            '<option value="" selected>Please select</option>'+
            '<option value="" >Accident Time</option>'+
            '<option value="" >Accident Date</option>'+
            '<option value="" >Place Of Accident </option>'+
            '<option value="" >Injury Type</option>'+
            '<option value="" >How Accident Happen</option>'+
            '</select>'+
        '</div>'+
    '</td>'+
    '<td>'+
        '<div class="col-md-12">'+
            '<input id="noticedetails" name="noticedetails" type="text" value="" class="form-control" >'+
        '</div>'+
    '</td>'+
    '<td>'+
        '<div class="col-md-12">'+
            '<input type="text" id="supportDoc" name="supportDoc" value="" class="form-control " >'+
        '</div>'+
    '</td>'+
    '<td>'+
        '<input type="text" id="correctdata" name="correctdata" value="" class="form-control" >'+
    ' </td>'+
    '<td>'+
        '<div class="col-md-0">'+
            ' <a class="view"><i class="fas fa-file-alt"  data-toggle="modal" data-target="#exampleModal3" data-whatever="@fat"></i></a>'+
        '</div>'+
        '<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3">'+
            '<div class="modal-dialog modal-xl" role="document">'+
                '<div class="modal-content">'+
                    '<div class="modal-header  card-title">'+
                        '<h4 class="modal-title" id="exampleModalLabel3">@lang("scheme/index.attr.inconsistency")</h4>'+
                        '<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
                    '</div>'+
                    '<div class="modal-body">'+
                      
                    ' </div>'+
                    '<div class="modal-footer">'+
                        '<button type="button" class="btn btn-default" data-dismiss="modal">@lang("scheme/accidentDetails.close")</button>'+
                        '<button type="submit" class="btn btn-primary">@lang("scheme/accidentDetails.save")</button>'+
                    '</div>'+
                '</div>'+
            '</div>'+
        '</div> '+
    '</td>'+ 
    '<td>'+
        '<div class="custom-control custom-checkbox mr-sm-2 mb-3">'+
            '<input type="checkbox" class="custom-control-input" id="checkbox0" value="check">'+
            '<label class="custom-control-label" for="checkbox0"></label>'+
        '</div>'+
    '</td>'+
    '<td>'+
        '<input type="text" id="consistent" name="consistent" value="" class="form-control" readonly>'+
    '</td>'+
    '<td>'+
        '<button type="button"  class="btn btn-sm btn-danger btn_del_workinconsistency" id="del_attended_work0_0"><i class="fas fa-trash-alt fa-sm"></i></button>'+
        '</td>'+
'</tr>');
});
</script>