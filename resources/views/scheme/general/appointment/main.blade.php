<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="p-20">
                    <div class="row p-t-20">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table id="table_appointment" class="table table-bordered"
                                    data-toggle-column="first">
                                    <thead>
                                        <tr>
                                            <th style='width:8%'>@lang('scheme/appointment.attr.investigate_date')
                                            </th>
                                            <th style='width:8%'>@lang('scheme/appointment.attr.investigate_time')
                                            </th>
                                            <th style='width:8%'>@lang('scheme/appointment.attr.location')</th>
                                            <th style='width:8%'>Attendees</th>
                                            {{-- <th style='width:8%'>@lang('scheme/appointment.attr.name')</th> --}}
                                            <th style='width:8%'>@lang('scheme/appointment.attr.action')</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        @if(!empty($ioappt)||$ioappt!=null)
                                        @if(empty($ioappt->ioappt)||$ioappt->ioappt==null) 
                                        <tr>
                                            <td colspan="5"> 
                                                <center> No Record Found</center>
                                            </td>
                                        </tr>
                                        @else
                                        @foreach ($ioappt->ioappt as $key => $ioappts)
                                        <tr>
                                            <td>{{ $ioappts->ia_date}}</td>
                                            <td>{{ $ioappts->ia_time }}</td>
                                            <td>
                                                @foreach($ref_table->ivattendees as $reftable)
                                                @if($reftable->ref_code ==$ioappts->ia_intvloc )
                                                {{ $reftable->desc_en }}
                                                @endif
                                                @endforeach
                                            </td>
                                            <td>{{ $ioappts->ia_officerid }}</td>
                                            <td>
                                                @if($ioappts->ia_apptid !== null || !empty($ioappts->ia_apptid))
                                                <a id="selectdraft" href="" data-id="{{ $ioappts->ia_apptid }}"
                                                    data-target="#reshedule_popup" data-toggle="modal"><i
                                                        class="fas fa-calendar-alt"></i></a>
                                                <a id="deletedraft" href="" data-target="#delete_popup"
                                                    data-toggle="modal"><i class="fas fa-trash-alt fa-sm"></i></a>
                                                @endif
                                            </td>
                                        </tr>
                                        @endforeach
                                        @endif
                                        @endif
                                    </tbody>
                                </table>

                                <div class="form-actions"><br>
                                    <button type="button" name="action" id="action"
                                        class="btn btn-facebook waves-effect waves-light" data-toggle="modal"
                                        data-target="#appointment_popup" data-whatever="@fat">ADD
                                        APPOINTMENT</button>
                                </div>
                            </div>
                        </div>

                        {{-- POPUP From Dropdown  --}}
                        {{-- Appointment --}}
                       
                                        @include('scheme.general.appointment.popup')
                                   
                        {{-- Reshedule --}}
                        <div class="modal fade" id="reshedule_popup" tabindex="-1" role="dialog"
                            aria-labelledby="reshedulePopup">
                            <div class="modal-dialog modal-xl" role="document">
                                <div class="modal-content">
                                    <div class="modal-header  card-title">
                                        <h4 class="modal-title" id="reshedulePopup">Reshedule</h4>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <div class="modal-body">
                                        @include('scheme.general.appointment.reschedule_popup')
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default"
                                            data-dismiss="modal">@lang('scheme/accidentDetails.close')</button>
                                        <button type="submit"
                                            class="btn btn-primary">@lang('scheme/accidentDetails.save')</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class='row'>
                        <div class="col-md-12">
                            <div class="form-actions">
                                <!--button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.cancel')</button>
                                <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.clear')</button-->
                                <button type="submit"
                                    class="btn btn waves-effect waves-light btn-success">@lang('scheme/noticetype.save')</button>
                                <button type="button" class="btn btn waves-effect waves-light btn-info"
                                    onclick="submitform()">@lang('scheme/noticetype.reset')</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

