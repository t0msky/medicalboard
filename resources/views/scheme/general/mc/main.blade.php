<div class="col-lg-12">
    <div class="card" id="container">
        <div class="card-body">
            <form method="POST" action="{{route('husinfo')}}">
            @csrf
                <input type="hidden" name="caserefno" value="{{-- {{$caserefno}} --}}">
                <div class="form-body ">
                    @if(Session::get('messagemc')) 
                    <div class="card-footer">
                        <div class="alert alert-warning">
                            {{Session::get('messagemc')}}
                        </div>
                    </div>
                    @elseif (!empty($messagemc))
                    <div class="card-footer">
                        <div class="alert alert-warning">
                            {{$messagemc}}
                        </div>
                    </div>
                    @endif 
                    <div>
                    @if (Session::get('accddate'))
                    <input type="date" class="form-control" id="accddate" name="accddate" value="{{substr(Session::get('accddate'),0,4)}}-{{substr(Session::get('accddate'),4,2)}}-{{substr(Session::get('accddate'),6,2)}}" style="display:none" disabled>
                    @else
                    <input type="date" class="form-control" id="accddate" name="accddate" value="" style="display:none" disabled>
                    @endif
                    </div>
                    <div class="col-md-12" id="container">
                        <div class="table-responsive" id="table-medical">
                            <button type="button" class="btn btn-sm waves-effect waves-light btn-info" data-toggle="modal" data-target="#add_mc_modal">@lang('ADD MC')</button>
                            <table id="table-medical-details" class="table table-sm table-bordered pb-0" data-toggle-column="first">
                                <thead>
                                    <tr>
                                        <th style='width:15%'>@lang('Type of HUS')</th> 
                                        <th style='width:20%'>@lang('Name and Address of Clinic which Provides Treatment')</th> 
                                        <th style='width:15%'>@lang('Start Date')</th>
                                        <th style='width:15%'>@lang('End Date')</th>
                                        <th style='width:8%'>@lang('Total Days')</th>
                                        <th style='width:10%'>@lang('Action')</th>
                                        <th style='width:15%'>@lang('HUS Status')</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{---------- If data exist -------------}}
                                    {{-- {{dd($husinfo)}} --}}
                                    {{-- @if ((!empty($husinfo->parent)||$husinfo->parent!=null)) --}}
                                    @if(!empty($husinfo->parent) && $husinfo->parent != null )
                                    @foreach($husinfo->parent as $key => $parent)
                                    <div id="mc_list">
                                        <tr data-expanded="true" class="mc_parent_row" id="mcrow_{{ $key }}">
                                            <td>
                                                <div class="col-md-12">
                                                    @foreach($ref_table->hus_sts as $hus_status)
                                                    @if ($hus_status->ref_code == $parent->husstatus )
                                                    <input  name="hussts[{{$key}}]" id="hussts{{$key}}" type="text" value="{{$hus_status->desc_en}}" class="form-control" readonly>
                                                    @endif
                                                    @endforeach
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col-md-12">
                                                <input  name="clinicinfo[{{$key}}]" id="clinicinfo{{$key}}" type="text" value="@if (!empty($parent)){{ $parent->clinicinfo }}@endif" class="form-control" required readonly>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col-md-12">
                                                    <input name="startdate[{{$key}}]" id="mcstartdate{{$key}}" type="date" value="@if (!empty($parent) && $parent->startdate!=''){{ (DateTime::createFromFormat('Ymd', $parent->startdate))->format('Y-m-d') }}@endif" class="form-control counttotalmc" readonly>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="col-md-12">
                                                    <input type="date" name="enddate[{{$key}}]" id="mcenddate{{$key}}" value="@if (!empty($parent) && $parent->enddate!=''){{ (DateTime::createFromFormat('Ymd', $parent->enddate ))->format('Y-m-d') }}@endif" class="form-control counttotalmc" readonly>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text"  name="totalmc[{{$key}}]" id="totalwork{{$key}}" value="@if (!empty($parent)){{ $parent->totalmc }}@endif" class="form-control" readonly>
                                            </td>
                                            <td>
                                                <a class="adddraft add_mc" id="add_mc{{$key}}"><i class="fas fa-plus"></i></a>
                                                <a class="updatedraft edit_mc" id="edit_mc{{$key}}" data-id="{{$key}}" data-toggle="modal" data-target="#edit_mc_modal{{$key}}"><i class="fas fa-edit"></i></a>
                                                <a class="deletedraft btn_del_mc" id="del_mc{{$key}}"><i class="fas fa-trash-alt"></i></a>
                                            </td>
                                            <td></td>
                                            <input type="hidden" name="value_parent[]" value="{{$key}}">
                                        </tr>
                                        

                                        @foreach($parent->child as $num => $child)
                                            {{-- {{dd($child)}} --}}
                                            @if(!empty($child))
                                            <tr class="work_row" id="workrow{{$key}}_{{$num}}">
                                                <td></td>
                                                <td></td>
                                                <td>
                                                    <div class="col-md-12">
                                                        <input type="date" id="workstartdate_{{$key}}{{$num}}" name="mcitemstartdate[{{$key}}][]" value="@if (!empty($child) && $child->mcitemstartdate!=''){{ (DateTime::createFromFormat('Ymd', $child->mcitemstartdate))->format('Y-m-d') }}@endif"  class="form-control counttotalwork" >
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="col-md-12">
                                                        <input type="date"  id="workenddate_{{$key}}{{$num}}" name="mcitemenddate[{{$key}}][]" value="@if (!empty($child) && $child->mcitemenddate!=''){{ (DateTime::createFromFormat('Ymd', $child->mcitemenddate))->format('Y-m-d') }}@endif"  class="form-control counttotalwork" >
                                                    </div>
                                                </td>
                                                <td>
                                                    <input type="text" id="totalwork_{{$key}}{{$num}}" name="totalmcitem[{{$key}}][]" value="@if (!empty($child)){{ $child ->totalmcitem }}@endif" class="form-control" readonly>
                                                </td> 
                                                <td>
                                                    <a class="updatedraft edit_mc_child" id="edit_mc_child{{$key}}{{$num}}" data-id="{{$num}}" data-toggle="modal" data-target="#edit_mc_child_modal{{$key}}{{$num}}"><i class="fas fa-edit"></i></button>
                                                    <a class="deletedraft btn_del_work" id="del_work{{$key}}_{{$num}}"><i class="fas fa-trash-alt"></i></button>
                                                </td>
                                                <td>
                                                    <div class="col-md-12">
                                                        <select name="approvalsts[]" class="form-control" disabled>
                                                            <option value="">Please Choose</option>
                                                            @foreach($ref_table->mc_sts as $mc_status)
                                                                @if (!empty($child) && ($child ->approvalsts == $mc_status->ref_code))
                                                                <option value="{{$mc_status->ref_code}}" selected>{{$mc_status->desc_en}}</option>
                                                                @else
                                                            <option value="{{$mc_status->ref_code}}">{{$mc_status->desc_en}}</option>
                                                                @endif 
                                                            @endforeach
                                                        </select>
                                                        <input  name="approvalsts[{{$key}}][]" type="hidden" value="{{$key}}" class="form-control" >
                                                    </div>
                                                </td>
                                            </tr>
                                                @include('scheme.general.mc.mc_edit_child')
                                            @endif
                                        @endforeach
                                    </div>
                                        @include('scheme.general.mc.mc_edit_parent')
                                    @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="form-actions text-right">
                    <button type="submit" name="action" value="Submit" class="btn btn-sm waves-effect waves-light btn-success btn-newMC" id='btnsubmit' onclick="mcsubmit()">@lang('SAVE')</button>
                    <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('RESET')</button>
                    <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticetype'">@lang('CANCEL')</button>
                    <button type="submit" name="action" value="Back" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticeaccident'">@lang('BACK')</button>
                </div>
            </form>
        </div>
    </div>
</div>
    
    {{----------------- ADD MC MODAL ---------------------}}
    <div class="modal fade" id="add_mc_modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header card-title">
                    <h5 class="modal-title" id="exampleModalLabel">Add Medical Certificate</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-6">
                        <label for="recipient-name" class="control-label">HUS Type </label>
                            <select name="hussts" class="form-control" id="hus_type1">
                                <option value ="">Please Choose</option>
                                @foreach($ref_table->hus_sts as $hus_status)
                                <option value="{{$hus_status->ref_code}}">{{$hus_status->desc_en}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-6">
                            <label for="recipient-name" class="control-label">Start Date </label>
                            <input type="date" id="mcstartdate_0_0" name="startdate[]"value="" class="form-control counttotalmc" required>
                        </div>
                        <div class="form-group col-md-12 col-lg-6">
                            <label for="recipient-name" class="control-label">End Date</label>
                            <input type="date" id="mcenddate_0_0" name="enddate[]" value="" class="form-control counttotalmc" >
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-6">
                            <label for="recipient-name" class="control-label">Total Days</label>
                            <input type="text" id="totalmc_0_0" name="totalmc[]" value="" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        
                        <div class="custom-control custom-radio">
                            <input type="radio" id="radio_btn_selectClinic" name="clinicinfo[]" class="custom-control-input clinic_name" value="select_clinic_name">
                            <label class="custom-control-label" for="radio_btn_selectClinic">Select Clinic</label>
                        </div>
                        <div id="input_clinic_name1" style="display:none">
                            <div class="form-group col-md-12">
                                <select class="form-control" name="clinicinfo[]">
                                    <option selected hidden readonly value="please select">Please Select</option>
                                    @foreach ($clinicname as $clinic)
                                        <option value="{{ $clinic->clinicrefno }}" selected>{{ $clinic->clinicinfo }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div> 
                        <div class="custom-control custom-radio">
                            <input type="radio" id="checkbox_clinic_name" name="clinicinfo[]" class="custom-control-input clinic_name" value="add_clinic_name">
                            <label class="custom-control-label" for="checkbox_clinic_name">Clinic Name</label>
                        </div>
                        <div id="input_clinic_name" style="display:none">
                            <div class="form-group col-md-12">
                                <input type="text" id="clinicname1" name="clinicinfo[]" class="form-control">
                            </div>
                        </div> 
                    </div>
                </div>
                <label class="control-label" id='lblmcerror0' style='color:red'></label>
                <div class="modal-footer">
                    <button type="button" id="btn_close" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                    <button id="btn_save" class="btn btn-sm waves-effect waves-light">Save</button>
                </div>
            </div>
        </div>
    </div>

    {{----------------- ADD WORK MODAL ---------------------}}
    <div class="modal fade" id="add_work_modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header card-title">
                    <h5 class="modal-title" id="exampleModalLabel">Add Work Attended</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-6">
                            <label for="recipient-name" class="control-label">HUS Status </label>
                            <select name="type_opinion" class="form-control" id="hustatus">
                                <option selected readonly disabled hidden>Please Choose</option>
                                @foreach($ref_table->mc_sts as $mc_status)
                                @if($mc_status->ref_code == 4)
                                <option value="{{$mc_status->ref_code}}">{{$mc_status->desc_en}}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-6">
                            <label for="recipient-name" class="control-label">Start Date </label>
                            <input   type="date" id="workstartdate" name="mcitemstartdate[]" value=""  class="form-control counttotalwork" >
                        </div>
                        <div class="form-group col-md-12 col-lg-6">
                            <label for="recipient-name" class="control-label">End Date</label>
                            <input type="date"  id="workenddate" name="mcitemenddate[]" value=""  class="form-control counttotalwork" >
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-6">
                            <label for="recipient-name" class="control-label">Total Days</label>
                            <input type="text" id="totalwork" name="totalmcitem[]" value="" class="form-control" readonly>
                        </div>
                    </div>
                </div>
                <label class="control-label" id='lblmcerror' style='color:red'></label>
                <div class="modal-footer">
                    <button type="button" id="btn_close" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                    <button id="btn_save_work" value="" class="btn btn-sm waves-effect waves-light">Save</button>
                </div>
            </div>
        </div>
    </div>

    {{------------------ DELETE MODAL ---------------------}}
    <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header card-title">
                <h5 class="modal-title" id="exampleModalLabel">Delete Confirmation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete?
                <input type="hidden" class="form-control" name="id" id="id">
            </div>
            <div class="modal-footer">
                <button type="button" id="btn_close" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                <button type="button" id="btn_delete" class="btn btn-danger btn-sm btn_delete_mc" data-dismiss="modal">Delete</button>
            </div>
            </div>
        </div>
    </div>
    
    <script>
    $(document).ready(function() {
    
        console.log("count: " + {!! count($husinfo->parent) !!});
        
        if(!{!! count($husinfo->parent) !!}){
            var no_mc = {!! count($husinfo->parent) !!};
        }else{
            var no_mc = {!! count($husinfo->parent) !!};    
        }
    
        totalmc();
        totalwork();
        //APPEND NEW ROW FOR MC
        $("#btn_save").click(function () {
            no_mc++;
    
            $('#add_mc_modal').modal('hide');
            var hustype = $('#hus_type1').val();
            var clinicinfo = $('#clinicname1').val();
            var mcstartdate = $('#mcstartdate_0_0').val();
            var mcenddate = $('#mcenddate_0_0').val();
            var totalmc = $('#totalmc_0_0').val();
            var no = no_mc;
            
            console.log("no_mc: " +no);
    
            console.log("hus_type: "+hustype);
            var select = '<select name="hussts[]" class="form-control" id="hus_type_'+no+'" disabled>'+
                                '<option value="">Please Choose</option>'+
                                '@foreach($ref_table->hus_sts as $hus_status)';
                                if(hustype == {!! $hus_status->ref_code !!}){
                                    select +=  '<option value="{{$hus_status->ref_code}}" selected>{{$hus_status->desc_en}}</option>';  
                                }else{
                                    select += '<option value="{{$hus_status->ref_code}}">{{$hus_status->desc_en}}</option>'; 
                                }
                                select += '@endforeach'+
                            '</select>';
                            $('#table-medical-details > tbody:last-child').append(
                                '<tr data-expanded="true" class="mc_parent_row" id="mcrow_'+no+'">'+
                                    '<td>'+
                                        '<div class="col-md-12">'+
                                            '<input  name="hussts['+no+']" type="hidden" value="'+hustype+'" class="form-control" >'+
                                            select+
                                        '</div>'+
                                    '</td>'+
                                    '<td>'+
                                        '<div class="col-md-12">'+
                                            '<input  name="clinicinfo['+no+']" type="text" value="'+clinicinfo+'" class="form-control" readonly>'+
                                        '</div>'+
                                    '</td>'+
                                    '<td>'+
                                        '<div class="col-md-12">'+
                                            '<input type="date" id="mcstartdate'+no+'" name="startdate['+no+']" value="'+mcstartdate+'" class="form-control counttotalmc" readonly>'+
                                        '</div>'+
                                    '</td>'+
                                    '<td>'+
                                        '<div class="col-md-12">'+
                                            '<input type="date" id="mcenddate'+no+'" name="enddate['+no+']" value="'+mcenddate+'" class="form-control counttotalmc" readonly>'+
                                        '</div>'+
                                    '</td>'+
                                    '<td>'+
                                        '<input type="text"  name="totalmc['+no+']" value="'+totalmc+'" class="form-control" readonly>'+
                                    '</td>'+
                                    '<td>'+
                                        '<a class="adddraft add_mc" id="add_mc'+no+'"><i class="fas fa-plus "></i></a>'+
                                        '<a class="updatedraft edit_mc" id="edit_mc'+no+'" data-id="'+no+'" data-toggle="modal" data-target="#edit_mc_modal'+no+'"><i class="fas fa-edit"></i></a>'+
                                        '<a class="deletedraft btn_del_mc" id="del_mc'+no+'"><i class="fas fa-trash-alt "></i></a>'+
                                    '</td>'+
                                    '<td></td>'+
                                '<input type="hidden" name="value_parent[]" value="'+no+'">'+
                                '</tr>'+'<div id="try"></div>'
                            );
                             add_work_modal(no);
                             edit_work_modal(no);
        });     

        

        //CLINIC NAME AT MODAL POPUP
        function field_clinic_name()
        {
            // Get the checkbox
            var checkBox = document.getElementById("checkbox_clinic_name");
            // Get the output text
            var others = document.getElementById("input_clinic_name");
    
            // If the checkbox is checked, display the output text
            if (checkBox.checked == true){
            others.style.display = "block";
            } else {
            others.style.display = "none";
            }
        }
            
        $('.clinic_name').on("click", function()
        {  
            var radio_value = $(this).val();
          
            if(radio_value == "add_clinic_name")
            {
                $('#input_clinic_name').show();
                $('#input_clinic_name1').hide();

            }else{ 
                $('#input_clinic_name').hide();
                $('#input_clinic_name1').show();
            }
        });

        //POPUP WORK-MODAL
        $('.add_mc').on('click',function(){
                $('#add_work_modal').modal('show');
                var current_id = $(this).attr('id');
                    var values = current_id.split('c');
                    var j = values[1];
                    alert(current_id);
                    $('#btn_save_work').val(j);
                totalwork();
        });
        function add_work_modal(i)
        {
            $('.add_mc').on('click',function(){
                $('#add_work_modal').modal('show');
                var current_id = $(this).attr('id');
                    var values = current_id.split('c');
                    var i = values[0];
                    var j = values[1];
                    alert(current_id);
                    $('#btn_save_work').val(j);
                totalwork();
                
                });
        }

        //POPUP UPDATE PARENT-MODAL
        $('.edit_mc').on('click',function(){
            var current_id = $(this).attr('id');
            var values = current_id.split('c');
            var j = values[1];
            $('.edit_work_modal'+j).modal('show');
            alert(j);
            totalmc_edit();
        });
        function edit_work_modal(i)
        {
            $('.edit_mc').on('click',function(){
                var current_id = $(this).attr('id');
                var values = current_id.split('c');
                var j = values[1];
                $('.edit_work_modal'+j).modal('show');
                alert(j);
                // editModal(j);
                totalmc_edit();
            });
        }
        // function editModal(i) 
        // {
        //     $("try").append('{{-- EDIT MODEL MC --}}'+'
        //         <div class="modal fade edit_work_modal'+i+'" id="edit_mc_modal'+i+'" tabindex="-1" role="dialog" aria-hidden="true">'+'
        //             <div class="modal-dialog" role="document">'+'
        //                 <div class="modal-content">'+'
        //                     <div class="modal-header card-title">'+'
        //                         <h5 class="modal-title" id="exampleModalLabel">Update Medical Certificate</h5>'+'
        //                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">'+'
        //                             <span aria-hidden="true">&times;</span>'+'
        //                         <input type="hidden" value="'+i+'" id="modalid" name="hidden_key">'+'
        //                         </button>'+'
        //                     </div>'+'
        //                     <div class="modal-body">'+'
        //                         <div class="form-row">'+'
        //                             <div class="form-group col-md-12 col-lg-6">'+'
        //                             <label for="recipient-name" class="control-label">HUS Type </label>'+'
        //                             <select name="hussts['+i+']" class="form-control" id="modal_hussts'+i+'">'+'
        //                                 <option value="">Please Choose</option>'+'
        //                                 @foreach($ref_table->hus_sts as $hus_status)'+'
        //                                 @if ($hus_status->ref_code == $parent->husstatus )'+'
        //                                 <option value="{{$hus_status->desc_en}}" selected>{{$hus_status->desc_en}}</option>'+'
        //                                 @else'+'
        //                                 <option value="{{$hus_status->desc_en}}">{{$hus_status->desc_en}}</option>'+'
        //                                 @endif'+'
        //                                 @endforeach'+'
        //                             </select>'+'
        //                             </div>'+'
        //                         </div>'+'
        //                         <div class="form-row">'+'
        //                             <div class="form-group col-md-12 col-lg-12">'+'
        //                                 <label for="recipient-name" class="control-label">Name and Address of Clinic</label>'+'
        //                             <input type="text" id="modal_clinic_info'+i+'" name="modal_clinicinfo['+i+']"value="@if (!empty($parent)){{ $parent->clinicinfo }}@endif" class="form-control" required>'+'
        //                             </div>'+'
        //                         </div>'+'
        //                         <div class="form-row">'+'
        //                             <div class="form-group col-md-12 col-lg-6">'+'
        //                                 <label for="recipient-name" class="control-label">Start Date </label>'+'
        //                                 <input type="date" id="modal_start_date'+i+'" name="modal_startdate['+i+']"value="@if (!empty($parent) && $parent->startdate!=''){{ (DateTime::createFromFormat('Ymd', $parent->startdate))->format('Y-m-d') }}@endif" class="form-control counttotalmc_edit" required>'+'
        //                             </div>'+'
        //                             <div class="form-group col-md-12 col-lg-6">'+'
        //                                 <label for="recipient-name" class="control-label">End Date</label>'+'
        //                                 <input type="date" id="modal_end_date'+i+'" name="modal_enddate['+i+']" value="@if (!empty($parent) && $parent->enddate!=''){{ (DateTime::createFromFormat('Ymd', $parent->enddate ))->format('Y-m-d') }}@endif" class="form-control counttotalmc_edit" >'+'
        //                             </div>'+'
        //                         </div>'+'
        //                         <div class="form-row">'+'
        //                             <div class="form-group col-md-12 col-lg-6">'+'
        //                                 <label for="recipient-name" class="control-label">Total Days</label>'+'
        //                                 <input type="text" id="modal_total_days'+i+'" name="modal_totalmc['+i+']" value="@if (!empty($parent)){{ $parent->totalmc }}@endif" class="form-control" readonly>'+'
        //                             </div>'+'
        //                         </div>'+'
        //                     </div>'+'
        //                     <label class="control-label" id="lblmcerror'+i+'" style='color:red'></label>'+'
        //                     <div class="modal-footer">'+'
        //                         <button type="button" id="btn_close" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>'+'
        //                         {{-- <a class="btn btn-sm waves-effect waves-light" href="{{route('edit_husinfo', $key)}}">Save</a> --}}'+'
        //                         <button type="button" id="btn_edit_close'+i+'" onclick="editFunc('+i+')" class="btn btn-sm waves-effect waves-light btn_edit_close'+i+'">Save</button>'+'
        //                     </div>'+'
        //                 </div>'+'
        //             </div>'+'
        //         </div>');
        // }

        //POPUP UPDATE CHILD-MODAL
        $('.edit_mc_child').on('click',function(){
            var current_id = $(this).attr('id');
            alert(current_id);
            var values = current_id.split('ld');
            var j = values[1];
            $('.edit_mc_child_modal'+j).modal('show');
            alert(j);
            // $('#btn_edit_close').val(j);
            totalwork_edit();  

        });

        //POPUP DELETE-MODAL
        function modal_delete()
        {
            // Delete work
            $('.btn_del_workmc').on('click',function(){
                var delete_id = $(this).attr('id');
                $("#deletemodal").modal('show');
                $("#deletemodal .modal-footer button").on('click', function(e) {
                    var btn_id = event.target.id;
                    if(btn_id == 'btn_delete'){
                        e.preventDefault();
                        $("#"+delete_id).closest("tr").remove(); 
                    }
                });
            });
        }
    
        // APPEND NEW ROW FOR ATTENDED WORK
        $("#btn_save_work").click(function () {
            $('#add_work_modal').modal('hide');
    
            // var id = $(this).attr('id');
            // var id_split = id.split("c");
            var val_parent = $(this).val();
    
            alert("val_parent: "+val_parent);
            var hustatus = $('#hustatus').val();
            var workstartdate = $('#workstartdate').val();
            var workenddate = $('#workenddate').val();
            var totalwork = $('#totalwork').val();
            var val_child = $("tr[id^=workrow"+val_parent+"_]").length;
            alert("val_child :"+val_child);
            for (w = 0; w <= val_child; w++) { 
                if($("#workrow"+val_parent+"_"+w).length == 0) {
    
                    var select = '<select name="approvalsts['+ val_parent +'][]" class="form-control" id="mc_status'+ val_parent +'_'+ w +'" disabled>'+
                                        '<option value="">Please Choose</option>'+
                                        '@foreach($ref_table->mc_sts as $mc_status)';
                                        '<option value="{{ $mc_status->ref_code }}">{{ $mc_status->desc_en }}</option>';
    
                                        if(hustatus == {!! $mc_status->ref_code !!}){
                                        select +=  '<option value="{{$mc_status->ref_code}}" selected>{{$mc_status->desc_en}}</option>';  
                                        }else{
                                        select += '<option value="{{$mc_status->ref_code}}">{{$mc_status->desc_en}}</option>'; 
                                        }
                                        select += '@endforeach'+
                                    '</select>';
    
                    $('#mcrow_'+ val_parent).after(
                        '<tr class="work_row" id="workrow'+ val_parent +'_'+ w +'">' +
                            '<td><div class="col-md-12"><input name="attendedwork['+ val_parent +'][]" type="text" value="" class="form-control" readonly></div></td>'+
                            '<td><div class="col-md-12"><input id="clinicname'+ val_parent +'_'+ w +'" name="clinicinfo['+ val_parent +']" type="text" value="" class="form-control" readonly></div></td>'+
                            '<td><div class="col-md-12"><input type="date" id="workstartdate_'+ val_parent +'_'+ w +'" name="mcitemstartdate['+ val_parent +'][]" value="'+workstartdate+'" class="form-control counttotalwork"></div></td>'+
                            '<td><div class="col-md-12"><input type="date" id="workenddate_'+ val_parent +'_'+ w +'" name="mcitemenddate['+ val_parent +'][]" value="'+workenddate+'" class="form-control counttotalwork"></div></td>'+
                            '<td><input type="text" id="totalwork_'+ val_parent +'_'+ w +'" name="totalmcitem['+ val_parent +'][]" value="'+totalwork+'" class="form-control" readonly></td>'+
                            '<td>'+
                                '<a class="updatedraft "><i class="fas fa-edit"></i></a>'+
                                '<a class="deletedraft btn_del_work" id="del_work'+ val_parent +'_'+ w +'"><i class="fas fa-trash-alt "></i></a>'+
                            '</td>'+
                            '<td><div class="col-md-12">'+
                                '<input  name="approvalsts['+val_parent+'][]" type="hidden" value="'+hustatus+'" class="form-control" >'+
                                    select+
                            '</div></td>'+
                        '</tr>'
                    );
                }
            }
            // totalwork();
        });

        var no = $('#modalid').val();
    
        $('#container').on("click", '.btn_del_mc', function(){
            var delete_id = $(this).attr('id');
            var id_split = delete_id.split("c");
            var val = id_split[1];
    
            $("#deletemodal").modal('show');
            $("#deletemodal .modal-footer button").on('click', function(e) {
                var btn_id = event.target.id;
                if(btn_id == 'btn_delete'){
                    e.preventDefault();
                    $("#mcrow_"+val).remove();
                    $("tr[id^=workrow"+val+"_]").remove();
                }
            });
        });
        
        $('#container').on("click", '.btn_del_work', function(){
            var delete_id = $(this).attr('id');
            var id_split = delete_id.split("k");
            var val = id_split[1];
    
            $("#deletemodal").modal('show');
            $("#deletemodal").find('#id').val(val);
    
            $("#deletemodal .modal-footer button").on('click', function(e) {
                var id_val = $("#deletemodal").find('#id').val();
                var btn_id = event.target.id;
                if(btn_id == 'btn_delete' && id_val == val){
                    e.preventDefault();
                    $("#workrow"+val).remove();
                }
            });
        });
    
        function totalmc(){
            // Get the total mc day
            $('.counttotalmc').on('change',function(){
                var current_id = event.target.id;
                var values = current_id.split('_');
                var i = values[1];
                var j = values[2];
    
                counttotal(i,j);
            });
        }
    
        function counttotal(i,j){
            // console.log("i: "+i+ " j: " +j);
            var startdate = document.getElementById('mcstartdate_'+i+'_'+j).value;
            var enddate = document.getElementById('mcenddate_'+i+'_'+j).value;
            var total = document.getElementById('totalmc_'+i+'_'+j);
            var lblmcerror = document.getElementById('lblmcerror'+i);
            var btnsubmit = document.getElementById('btnsubmit');
            var today = new Date();
            var dd = today.getDate();
            var mm = today.getMonth()+1; //January is 0!
            var yyyy = today.getFullYear();
            
            if(dd<10) {
            dd = '0'+dd;
            } 
    
            if(mm<10) {
            mm  = '0'+mm;
            } 
    
            var currdate = yyyy + '-' + mm + '-' + dd;
            var days = getdays(currdate,startdate);
            var accddate = document.getElementById('accddate').value;
            var days2 = getdays(accddate,startdate);
    
            // Check the mc start date must before the current date
            if(days > 1){
                lblmcerror.innerHTML = 'Start date must not after current date';
                total.value = '';
                btnsubmit.disabled = true;
                return;
            }else{
                lblmcerror.innerHTML = '';
                btnsubmit.disabled = false;
            }
    
            // Check the mc start date must after accident date
            if(days2 <= 0){
                lblmcerror.innerHTML = 'Start date must not before accident date';
                total.value = '';
                btnsubmit.disabled = true;
                return;
            }else{
                lblmcerror.innerHTML = '';
                btnsubmit.disabled = false;
            }
            // Count the total mc work
            if(startdate != "" && enddate != ""){
                var totalmc = getdays(startdate,enddate);
                if(totalmc <= 0){
                    lblmcerror.innerHTML = 'End date must not before start date';
                    total.value = '';
                    btnsubmit.disabled = true;
                    return;
                }else{
                    lblmcerror.innerHTML = '';
                    btnsubmit.disabled = false;
                }
                total.value = totalmc;
                return;
            }else{
                total.value = '';
                return;
            }
        }

        function totalmc_edit(){
            // Get the total mc day
            $('.counttotalmc_edit').on('change',function(){
                var current_id = event.target.id;
                var values = current_id.split('te');
                var i = values[1];
    
                counttotal_edit(i);
            });
        }
    
        function counttotal_edit(i){
            // console.log("i: "+i+ " j: " +j);
            alert(i);
            // alert(i +" startdate:"  +startdate  ",enddate:"  +enddate);
            var startdate = document.getElementById('modal_start_date'+i).value;
            var enddate = document.getElementById('modal_end_date'+i).value;
            var total = document.getElementById('modal_total_days'+i);
            var lblmcerror = document.getElementById('lblmcerror'+i);
            var btnsubmit = document.getElementById('btnsubmit');
            var today = new Date();
            var dd = today.getDate();
            var mm = today.getMonth()+1; //January is 0!
            var yyyy = today.getFullYear();
            
            if(dd<10) {
            dd = '0'+dd;
            } 
    
            if(mm<10) {
            mm  = '0'+mm;
            } 
    
            var currdate = yyyy + '-' + mm + '-' + dd;
            var days = getdays(currdate,startdate);
            var accddate = document.getElementById('accddate').value;
            var days2 = getdays(accddate,startdate);
    
            // Check the mc start date must before the current date
            if(days > 1){
                lblmcerror.innerHTML = 'Start date must not after current date';
                total.value = '';
                btnsubmit.disabled = true;
                return;
            }else{
                lblmcerror.innerHTML = '';
                btnsubmit.disabled = false;
            }
    
            // Check the mc start date must after accident date
            if(days2 <= 0){
                lblmcerror.innerHTML = 'Start date must not before accident date';
                total.value = '';
                btnsubmit.disabled = true;
                return;
            }else{
                lblmcerror.innerHTML = '';
                btnsubmit.disabled = false;
            }
            // Count the total mc work
            if(startdate != "" && enddate != ""){
                var totalmc = getdays(startdate,enddate);
                if(totalmc <= 0){
                    lblmcerror.innerHTML = 'End date must not before start date';
                    total.value = '';
                    btnsubmit.disabled = true;
                    return;
                }else{
                    lblmcerror.innerHTML = '';
                    btnsubmit.disabled = false;
                }
                total.value = totalmc;
                return;
            }else{
                total.value = '';
                return;
            }
        }
    
        function totalwork(){
            // Get the total work day
            $('.counttotalwork').on('change',function(){
                var current_id = event.target.id;
                // alert(i);
                var i = $('#btn_save_work').val();
    
                counttotalwork(i);
            });
        }
    
        function counttotalwork(i)
        {
            console.log("i: "+i);
            // id adalah nilai urutan mc
            // x adalah nilai urutan work
            var mcstartdate = document.getElementById('mcstartdate'+i).value;
            var mcenddate = document.getElementById('mcenddate'+i).value;
            var startdate = document.getElementById('workstartdate').value;
            var enddate = document.getElementById('workenddate').value;
            var total = document.getElementById('totalwork');
            var lblmcerror = document.getElementById('lblmcerror');
            var btnsubmit = document.getElementById('btnsubmit');
            alert(startdate + enddate);
    
            if(getdays(startdate,mcstartdate) > 0){
                total.value = '';
                lblmcerror.innerHTML = 'Start date must not before MC start date';
                btnsubmit.disabled = true;
                return;
            }else if(getdays(enddate,mcenddate) < 0){
                total.value = '';
                lblmcerror.innerHTML = 'End date must not after MC end date';
                btnsubmit.disabled = true;
                return;
            }else{
                lblmcerror.innerHTML = '';
                btnsubmit.disabled = true;
            }
    
            if(startdate != "" && enddate != ""){
                var totalwork = getdays(startdate,enddate);
                if (totalwork <= 0){
                    total.value = "";
                    lblmcerror.innerHTML  = 'End date must not before start date';
                    btnsubmit.disabled = true;
                    return;
                }
                else{
                    
                    total.value = totalwork;
                    lblmcerror.innerHTML  = '';
                    btnsubmit.disabled = false;
                    return;
                }
            }else{
                total.value = "";
                return;
            }
        }
        
        function totalwork_edit(){
            // Get the total work day
            $('.counttotalwork_edit').on('change',function(){
                var current_id = event.target.id;
                alert(current_id);  
                var values = current_id.split('_');
                var i = values[2];
                var j = values[3];
                // var i = $('#btn_edit_child_close').val();
                alert(i+","+j);
                counttotalwork_edit(i,j);
            });
        }

        function counttotalwork_edit(i,j)
        {
            console.log("i: "+i);
            // id adalah nilai urutan mc
            // x adalah nilai urutan work
            var mcstartdate = document.getElementById('mcstartdate'+i).value;
            var mcenddate = document.getElementById('mcenddate'+i).value;
            var startdate = document.getElementById('modal_workstartdate_'+i+'_'+j).value;
            var enddate = document.getElementById('modal_workenddate_'+i+'_'+j).value;
            var total = document.getElementById('modal_totalwork_'+i+'_'+j);
            var lblmcerror = document.getElementById('lblmcerror'+i);
            var btnsubmit = document.getElementById('btnsubmit');
            alert(startdate + enddate);
    
            if(getdays(startdate,mcstartdate) > 0){
                total.value = '';
                lblmcerror.innerHTML = 'Start date must not before MC start date';
                btnsubmit.disabled = true;
                return;
            }else if(getdays(enddate,mcenddate) < 0){
                total.value = '';
                lblmcerror.innerHTML = 'End date must not after MC end date';
                btnsubmit.disabled = true;
                return;
            }else{
                lblmcerror.innerHTML = '';
                btnsubmit.disabled = true;
            }
    
            if(startdate != "" && enddate != ""){
                var totalwork = getdays(startdate,enddate);
                if (totalwork <= 0){
                    total.value = "";
                    lblmcerror.innerHTML  = 'End date must not before start date';
                    btnsubmit.disabled = true;
                    return;
                }
                else{
                    
                    total.value = totalwork;
                    lblmcerror.innerHTML  = '';
                    btnsubmit.disabled = false;
                    return;
                }
            }else{
                total.value = "";
                return;
            }
        }

        function getdays(startdate,enddate)
        {
            var dropdt = new Date(startdate);
            var pickdt = new Date(enddate);
            return parseInt(((pickdt - dropdt) / (24 * 3600 * 1000)) + 1);
        }
    
    });
    </script>