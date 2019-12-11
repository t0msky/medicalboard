@extends('general.layouts.app')

@section('css')
<link href="{{asset('ui_template/assets/node_modules/wizard/steps.css')}}" rel="stylesheet">
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body m-10">
                {{-- <form id="" action="" method=""> --}}
                    <div class="form-body">
                        {{ csrf_field() }}
                        <h4 class="card-title">@lang('form/medical.collapse.briefcase.title')</h4>
                        <hr>
                        <div class="row p-t-20">
                            <div class="col-md-12">
                                <div id="accordion1" role="tablist" aria-multiselectable="true">
                                    <div class="card m-b-0">
                                        <div class="card-header" role="tab" id="headingOne1">
                                            <h5 class="mb-0">
                                            <a class="link" data-toggle="collapse" data-parent="#accordion1" href="#panel_attendance" aria-expanded="true" aria-controls="panel_attendance"><h4 class="card-title"><i class="fa fa-plus"></i> @lang('form/medical.collapse.briefcase.title2')<h4>
                                            </a>
                                            </h5>
                                        </div>
                                        <div id="panel_attendance" class="collapse show" role="tabpanel" aria-labelledby="headingOne1">
                                            <div class="card-body">
                                                {{-- <div class="col-md-12"> --}}
                                                    <div class="row p-t-20">
                                                        <div class="col-md-5">
                                                            <div class="form-group">
                                                                <label class="control-label">@lang('form/medical.general.hospital')</label>
                                                                <span class="required">*</span>
                                                                <select name="appt_hospital" required class="form-control">
                                                                    <option value="">-- @lang('option.please_select') -- </option>}
                                                                    @foreach ($state as $s)
                                                                        @php $state2 = ''; @endphp
                                                                        @foreach ($hospital as $h)
                                                                            @if($s->ref_code != $state2)
                                                                                @if($s->ref_code == $h->statecode) 
                                                                                    <optgroup style="font-weight: bold;" label="{{$s->desc_en}}">  
                                                                                        <option value={{$h->hospital_id}}>{{$h->hospital_name}}</option>
                                                                                    {{-- <optgroup> --}}
                                                                                    @php $state2 = $s->ref_code; @endphp
                                                                                @endif
                                                                            @else 
                                                                                @if($s->ref_code == $h->statecode)   
                                                                                        <option value={{$h->hospital_id}}>{{$h->hospital_name}}</option>
                                                                                    {{-- </optgroup> --}}
                                                                                    @php $state2 = $s->ref_code; @endphp
                                                                                @endif
                                                                            @endif
                                                                        @endforeach
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="form-group">
                                                                <label class="control-label">@lang('form/medical.general.date')</label>
                                                                <input name="brief_date" id="brief_date" type="date" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2 col-lg-2" style="margin-top:25px;">
                                                            <button type="button" class="btn btn waves-effect waves-light btn-success" id=""><i class="fa fa-search"></i>
                                                                    @lang('button.search')</button>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <hr>
                                                            <br>
                                                            <div class="table-responsive">
                                                                <table id="appt_listing" class="table table-bordered table-striped">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>@lang('form/medical.general.no')</th>
                                                                            <th>@lang('form/medical.general.session')</th>
                                                                            <th>@lang('form/medical.general.mbcategory')</th>
                                                                            <th>@lang('form/medical.briefcase.foldername')</th>
                                                                            <th>@lang('form/medical.general.action')</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody id="tbody">
                                                                        <tr>
                                                                            <td>1</td>
                                                                            <td>MORNING</td>
                                                                            <td>Medical Board</td>
                                                                            <td>23_08_2019_MB_Morning</td>
                                                                            <td><button type="button" class="btn btn-sm btn-info" style="margin:5px;"><i class="fas fa-download"></i></button></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>2</td>
                                                                            <td>MORNING</td>
                                                                            <td>Medical Board</td>
                                                                            <td>23_08_2019_MB_Morning</td>
                                                                            <td><button type="button" class="btn btn-sm btn-info" style="margin:5px;"><i class="fas fa-download"></i></button></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                {{-- </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card m-b-0">
                                        <div class="card-header" role="tab" id="headingTwo2">
                                            <h5 class="mb-0">
                                            <a class="collapsed link" data-toggle="collapse" data-parent="#accordion1" href="#ip_attendance" aria-expanded="false" aria-controls="ip_attendance"><h4 class="card-title"><i class="fa fa-plus"></i> @lang('form/medical.collapse.briefcase.title3')<h4>
                                            </a>
                                            </h5>
                                        </div>
                                        <div id="ip_attendance" class="collapse" role="tabpanel" aria-labelledby="headingTwo2">
                                            <div class="card-body">
                                                <div class="row p-t-20">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">@lang('form/medical.general.hospital')</label>
                                                            <span class="required">*</span>
                                                            <select name="appt_hospital" required class="form-control">
                                                                <option value="">-- @lang('option.please_select') -- </option>}
                                                                @foreach ($state as $s)
                                                                    @php $state2 = ''; @endphp
                                                                    @foreach ($hospital as $h)
                                                                        @if($s->ref_code != $state2)
                                                                            @if($s->ref_code == $h->statecode) 
                                                                                <optgroup style="font-weight: bold;" label="{{$s->desc_en}}">  
                                                                                    <option value={{$h->hospital_id}}>{{$h->hospital_name}}</option>
                                                                                {{-- <optgroup> --}}
                                                                                @php $state2 = $s->ref_code; @endphp
                                                                            @endif
                                                                        @else 
                                                                            @if($s->ref_code == $h->statecode)   
                                                                                    <option value={{$h->hospital_id}}>{{$h->hospital_name}}</option>
                                                                                {{-- </optgroup> --}}
                                                                                @php $state2 = $s->ref_code; @endphp
                                                                            @endif
                                                                        @endif
                                                                    @endforeach
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">@lang('form/medical.general.date')</label>
                                                            <input name="brief_date" id="brief_date" type="date" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="control-label">@lang('form/medical.general.session')</label>
                                                            <select name="brief_session" required class="form-control">
                                                                <option value="">-- @lang('option.please_select') -- </option>}
                                                                @foreach ($session as $s)
                                                                    <option value={{$s->ref_code}}>{{$s->desc_en}}</option> 
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label">@lang('form/medical.general.mbcategory')</label>
                                                            <select name="appt_mb_category" required class="form-control">
                                                                <option value=""><b>-- @lang('option.please_select') -- </b></option>
                                                                @foreach ($medical_board_category1 as $value)
                                                                    <option value="{{$value->ref_code}}">{{$value->desc_en}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-lg-2" style="margin-top:25px;">
                                                        <button type="button" class="btn btn waves-effect waves-light btn-success" id=""><i class="fa fa-search"></i> @lang('button.search')</button>
                                                    </div>
                                                    @include('medical.medicalboard.briefcase.briefcase_management')
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                {{-- </form> --}}
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    <script src="{{asset('ui_template/assets/node_modules/wizard/jquery.steps.min.js')}}"></script>
    <script src="{{asset('ui_template/assets/node_modules/wizard/jquery.validate.min.js')}}"></script>
    <script src="{{asset('ui_template/assets/node_modules/sweetalert/sweetalert.min.js')}}"></script>
    <script>
    $(document).ready(function(){
        // Add minus icon for collapse element which is open by default
        $(".collapse.show").each(function(){
        $(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus");
        });
        
        // Toggle plus minus icon on show hide of collapse element
        $(".collapse").on('show.bs.collapse', function(){
        $(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus");
        }).on('hide.bs.collapse', function(){
        $(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus");
        });
    });
    </script>
    <script>
        //Custom design form example
        $(".tab-wizard").steps({
            headerTag: "h6",
            bodyTag: "section",
            transitionEffect: "fade",
            titleTemplate: '<span class="step">#index#</span> #title#',
            labels: {
                finish: "Save"
            },
            onFinished: function (event, currentIndex) {
                swal("Form Submitted!", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat eleifend ex semper, lobortis purus sed.");

            }
        });


        var form = $(".validation-wizard").show();

        $(".validation-wizard").steps({
            headerTag: "h6",
            bodyTag: "section",
            transitionEffect: "fade",
            titleTemplate: '<span class="step">#index#</span> #title#',
            labels: {
                finish: "Save"
            },
            onStepChanging: function (event, currentIndex, newIndex) {
                return currentIndex > newIndex || !(3 === newIndex && Number($("#age-2").val()) < 18) && (currentIndex < newIndex && (form.find(".body:eq(" + newIndex + ") label.error").remove(), form.find(".body:eq(" + newIndex + ") .error").removeClass("error")), form.validate().settings.ignore = ":disabled,:hidden", form.valid())
            },
            onFinishing: function (event, currentIndex) {
                return form.validate().settings.ignore = ":disabled", form.valid()
            },
            onFinished: function (event, currentIndex) {
                swal("Form Submitted!", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat eleifend ex semper, lobortis purus sed.");
            }
        }), $(".validation-wizard").validate({
            ignore: "input[type=hidden]",
            errorClass: "text-danger",
            successClass: "text-success",
            highlight: function (element, errorClass) {
                $(element).removeClass(errorClass)
            },
            unhighlight: function (element, errorClass) {
                $(element).removeClass(errorClass)
            },
            errorPlacement: function (error, element) {
                error.insertAfter(element)
            },
            rules: {
                email: {
                    email: !0
                }
            }
        })
    </script>
@endsection


