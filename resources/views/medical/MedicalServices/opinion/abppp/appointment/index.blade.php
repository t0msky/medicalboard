@extends('general.layouts.app')
@section('head')
@endsection
@section('content')


<!----------------- Row --------------------->

<div class="row">
    <div class="col-md-12">
        <h4 class="card-title">@lang('ABPPP APPOINTMENT')</h4>

        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#appointments" role="tab">
                    <span class="hidden-sm-up"><i class="ti-notepad"></i></span> 
                    <span class="hidden-xs-down">@lang('Appointment')</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#committees" role="tab">
                    <span class="hidden-sm-up"><i class="ti-notepad"></i></span> 
                    <span class="hidden-xs-down">@lang('Medical Board Review Committee')</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#minutes" role="tab">
                    <span class="hidden-sm-up"><i class="ti-user"></i></span> 
                    <span class="hidden-xs-down">@lang('Minutes of Meeting')</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#mom" role="tab">
                    <span class="hidden-sm-up"><i class="ti-user"></i></span> 
                    <span class="hidden-xs-down">@lang('MOM History')</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#supDoc" role="tab">
                    <span class="hidden-sm-up"><i class="ti-user"></i></span> 
                    <span class="hidden-xs-down">@lang('Supporting Document')</span>
                </a>
            </li>
           
        </ul>

        <div class="row" id="rowindex">
            <div class="col-md-4 offset-md-8">
                <div class="card text-left" id="cardindex">
                    <div class="card-body" id="cardbodyaccident">
                        <table>
                            <thead>
                                <tr>
                                    <th><label>Name</label></th>
                                    <th>:</th>
                                    <th>@isset($FactC->name) {{$FactC->name}} @endisset</th>
                                </tr>
                                <tr>
                                    <th><label>Identification No.</label></th>
                                    <th>:</th>
                                    <th>@isset($FactC->idno) {{$FactC->idno}} @endisset</th>
                                </tr>

                                <tr>
                                    <th><label>Scheme Reference No.</label></th>
                                    <th>:</th>
                                    <th>{{(Session::get('schemerefno'))}}</th>
                                </tr>
                                <tr>
                                    <th><label>MO Reference No.</label></th>
                                    <th>:</th>
                                    <th>@isset($FactC->msrefno) {{$FactC->msrefno}} @endisset</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-------------- Tab panes ------------------------>

        <div class="tab-content tabcontent-border">

            <div class="tab-pane p-20 active" id="appointments" role="tabpanel">
                @include('medical.MedicalServices.opinion.abppp.appointment.appointment')
            </div>
            <div class="tab-pane p-20" id="committees" role="tabpanel">
                @include('medical.MedicalServices.opinion.abppp.appointment.MBReviewCommittee')
            </div>
            <div class="tab-pane p-20" id="minutes" role="tabpanel">
                @include('medical.MedicalServices.opinion.abppp.appointment.minutesMeeting')
            </div>
            <div class="tab-pane p-20" id="mom" role="tabpanel">
                @include('medical.MedicalServices.opinion.abppp.appointment.momHistory')
            </div>
            <div class="tab-pane p-20" id="supDoc" role="tabpanel">
                @include('general.supportingDocument.uploadDoc')
            </div>

        </div>
    </div>
</div>

@endsection

@section('script')
<script>
    // DataTable
    var table = $('#committeeTable').DataTable({
        "paging": false,
        "ordering": false,
        "info": false,
        sDom: 'lrtip'
    });

    // Apply the search
    table.columns(0).every(function () {
        var that = this;

        $('#commit_no').on('keyup change', function () {
            if (that.search() !== this.value) {
                that
                    .search(this.value)
                    .draw();
            }
        });
    });

</script>

@endsection
