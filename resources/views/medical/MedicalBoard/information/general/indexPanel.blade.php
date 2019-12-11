@section('csssss')

<!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->

<style>
    b { color:blue; 
    }
    .ui-autocomplete {
        font-size:12px;/*
        border:1px solid #a4bed4;*/
        /*background-color:#e2efff;*/
        /*background:linear-gradient(#e2efff,#d3e7ff);*/
        /*filter:progid:DXImageTransform.Microsoft.Gradient(gradientType=0,startColorStr=#e2efff,endColorStr=#d3e7ff) progid:DXImageTransform.Microsoft.Alpha(opacity=100);*/
        /*border-radius:2px;*/
        /*cursor:pointer;
        -webkit-user-select:none;
        -khtml-user-select:none;
        -moz-user-select:none;
        -o-user-select:none;
        user-select:none;
        -ms-user-select:none;*/
        /*overflow:hidden;*/
        /*overflow-y: scroll;
        max-width: 1000px;*/
        /*background: #4a4a4a;*/
        border-radius: 0px;
    }   

    .ui-autocomplete-list {
        max-height: 400px;
        overflow-y: auto;   /* prevent horizontal scrollbar */
        overflow-x: hidden; /* add padding to account for vertical scrollbar */
        z-index:1000 !important;
    }

</style>
@endsection

{{-- @section('content') --}}

<div class="form-row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body m-10">
                <form action="" method="">
                {{ csrf_field() }}
                    <div class="form-body">
                        <h5 class="card-title">
                         @if($casetype == '1')
                         @lang('form/medical.decision.title_huk')
                         @elseif($casetype == '2')
                         @lang('form/medical.decision.title_od')
                        @elseif($casetype == '3')
                        @lang('form/medical.decision.title_ilat')
                        @endif
                     </h5>
                        <hr>
                        <div class="tab-content tabcontent-border">
                            <div class="tab-pane p-20 active" id="registerrtw" role="tabpanel">
                                <ul class="nav nav-tabs" role="tablist">

                                @for($i = 0; $i<$countPanel; $i++)
                                    <li class="nav-item"> 
                                        <a class="nav-link " data-toggle="tab" href="#panelDr{{$i+1}}" role="tab" id="navbar_panelDr{{$i+1}}"><span class="hidden-sm-up"><i class="ti-notepad"></i></span> <span class="hidden-xs-down">@lang('form/medical.decision.panel'){{$i+1}}</span>
                                        </a> 
                                    </li> 
                                @endfor

                                    <li class="nav-item"> 
                                        <a class="nav-link" data-toggle="tab" href="#chairman" role="tab">
                                            <span class="hidden-sm-up"><i class="ti-home"></i></span> 
                                            <span class="hidden-xs-down">Chairman</span>
                                        </a>
                                    </li> 
                                      
                                </ul>

                                <div class="tab-content tabcontent-border">
                                @for($i=0;$i<$countPanel;$i++)
                                    <div class="tab-pane p-20" id="panelDr{{$i+1}}" role="tabpanel">
                                        @include('medical.medicalboard.information.general.panelForm')
                                    </div>
                                @endfor
                                    <div class="tab-pane p-20" id="chairman" role="tabpanel">
                                        <div class="tab-pane p-20 " id="chairman" role="tabpanel">
                                            @include('medical.medicalboard.decision.chairperson_decision_huk')
                                        </div>
                                    </div>
                                    
                                </div> 
                            </div>
                        </div>
                           {{--  Modal for Insured Person sustained permanent disability from the diagnosis (if Pending & No)--}}
                        <div id="Pending" class="modal fade" role="dialog">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Pending</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="form-horizontal" role="form" id="PendingPermanentDisability">
                                            <div class="form-row">
                                                <div class="col-md-3">
                                                    <label class="control-label">@lang('form/medical.decision.has_not_achievedMMI')</label>
                                                </div>
                                                <div class="col-sm-1">
                                                    <div class="custom-control custom-checkbox"> 
                                                        <input type="checkbox" class="custom-control-input " id="has_not_achievedMMI" onclick="show_mmi()">
                                                        <label class="custom-control-label" for="has_not_achievedMMI"></label>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-12 col-lg-6">
                                                    <div id="hideMmi" class="form-group" style="display:none">
                                                        <div class="form-group">
                                                            <label class="control-label">Date<span class="text-danger">*</span></label>
                                                            <input type="date" id="mmi" class="form-control clearFields" required>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-3">
                                                    <label class="control-label">@lang('form/medical.decision.add_document')</label>
                                                </div>
                                                <div class="col-sm-1">
                                                    <div class="custom-control custom-checkbox"> 
                                                        <input type="checkbox" class="custom-control-input" id="add_document" onclick="add_doc()">
                                                        <label class="custom-control-label" for="add_document"></label>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-12 col-lg-6">
                                                    <div id="hideDoc" class="form-group" style="display:none">
                                                        <div class="form-group">
                                                            <label class="control-label">@lang('form/medical.decision.add_document')<span class="text-danger">*</span></label>
                                                            <select id="add_doc" class="form-control select clearFields"  required>
                                                                <option value="">Please Select</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-3">
                                                    <label class="control-label">@lang('form/medical.decision.others')</label>
                                                </div>
                                                <div class="col-sm-1">
                                                    <div class="custom-control custom-checkbox"> 
                                                        <input type="checkbox" class="custom-control-input" id="others1" onclick="show_other()">
                                                        <label class="custom-control-label" for="others1"></label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div id="hideOther1" class="form-group" style="display:none">
                                                            <div class="form-group">
                                                                <label class="control-label">@lang('form/medical.decision.others')<span class="text-danger">*</span></label>
                                                                <input type="text" id="other_" class="form-control clearFields" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary edit addNewWorkHistory" data-dismiss="modal" id="addNewWorkHistory" value="">
                                                <span class='glyphicon glyphicon-check'></span>SAVE
                                            </button>
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

{{-- @endsection --}}

{{-- @section('js')
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
@endsection --}}