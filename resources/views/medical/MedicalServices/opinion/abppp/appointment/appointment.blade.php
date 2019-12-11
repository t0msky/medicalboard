<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    <div class="col-12">
                        <div class="align-self-center text-right">
                            <button type="button" class="btn btn waves-effect waves-light btn-success" data-toggle="modal" data-target="#appointment">@lang('Create Appointment')</button>
                            @include('medical.MedicalServices.opinion.abppp.appointment.modalCreateApp')
                        </div>
                        <div class="table-responsive" id="table-generated">
                            <table id="createapp" class="table table-sm table-bordered" data-toggle-column="first">
                                <thead>
                                    <tr>
                                        <th style='width:15%'>@lang('Meeting Ref. No.')</th>
                                        <th style='width:15%'>@lang('Date')</th>
                                        <th style='width:15%'>@lang('Time')</th>
                                        <th style='width:20%'>@lang('No. Of Case')</th>
                                        <th style='width:15%'>@lang('Status')</th>
                                        <th style='width:10%'>@lang('Action')</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <td style="display:none;"><input type="hidden" value="0"></td>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@section('js')

<script>
    var no = '1';

    $('#add_panel').click(function(){
        
    no++;
    $('#table_panel > tbody:last-child').append('<tr><td>'+
    +no+c
    '</td>'+
        '<td><input type="text" value="" class="form-control"></td>'+
        '<td></td></tr>');
    });


</script>



@endsection