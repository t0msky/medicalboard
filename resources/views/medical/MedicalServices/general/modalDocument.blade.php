<div class="modal fade" id="modal_document" tabindex="-1" role="dialog" aria-labelledby="modal_document">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
                <h5 class="card-title" id="modal_document">Request Document
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button></h5>
            <div class="modal-body">
                <form novalidate>
                    {{ csrf_field() }}
                    <div class="form-group">
                        <div class="row">

                            @foreach($ref_table->ms_reqspdoc as $idx=>$ms)
                            @if($idx >= '11')

                            <div class="col-md-6">

                                <fieldset>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" value="{{$ms->desc_en}}" name="medical_report"
                                            class="custom-control-input" id="{{$ms->ref_code}}">
                                        <label class="custom-control-label"
                                            for="{{$ms->ref_code}}">{{$ms->desc_en}}</label>
                                    </div>
                                </fieldset>
                            </div>
                            @else
                            <div class="col-md-6">
                                <fieldset>

                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" value="{{$ms->desc_en}}" name="medical_report"
                                            class="custom-control-input" id="{{$ms->ref_code}}">
                                        <label class="custom-control-label"
                                            for="{{$ms->ref_code}}">{{$ms->desc_en}}</label>
                                    </div>
                                </fieldset>
                            </div>
                            @endif
                            @endforeach
                            <!-- <fieldset>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" value="Skin Prick Test" name="medical_report"
                                            class="custom-control-input" id="ent">
                                        <label class="custom-control-label" for="ent">Skin Prick Test</label>
                                    </div>
                                </fieldset>

                                <fieldset>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" value="Laporan Perubatan" name="medical_report"
                                            class="custom-control-input" id="orl">
                                        <label class="custom-control-label" for="orl">Laporan Perubatan</label>
                                    </div>
                                </fieldset>

                                <fieldset>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" value="Ergonomic Risk Assesment (ERA) Report"
                                            name="medical_report" class="custom-control-input" id="echo">
                                        <label class="custom-control-label" for="echo">Ergonomic Risk Assesment (ERA)
                                            Report</label>
                                    </div>
                                </fieldset>

                                <fieldset>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" value="CT Scan" name="medical_report"
                                            class="custom-control-input" id="cardiology">
                                        <label class="custom-control-label" for="cardiology">CT Scan</label>
                                    </div>
                                </fieldset>

                                <fieldset>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" value="Chemical Monitoring Report" name="medical_report"
                                            class="custom-control-input" id="ortho">
                                        <label class="custom-control-label" for="ortho">Chemical Monitoring
                                            Report</label>
                                    </div>
                                </fieldset>

                                <fieldset>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" value="Noise Mapping" name="medical_report"
                                            class="custom-control-input" id="psy">
                                        <label class="custom-control-label" for="psy">Noise Mapping</label>
                                    </div>
                                </fieldset>

                                <fieldset>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" value="Chemical Health Risk Assessment (CHRA) Report"
                                            name="medical_report" class="custom-control-input" id="neurology">
                                        <label class="custom-control-label" for="neurology">Chemical Health Risk
                                            Assessment (CHRA) Report</label>
                                    </div>
                                </fieldset>
                            </div>

                            <div class="col-md-6">
                                <fieldset>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" value="Audiogram" name="medical_report"
                                            class="custom-control-input" id="oncology">
                                        <label class="custom-control-label" for="oncology">Audiogram</label>
                                    </div>
                                </fieldset>

                                <fieldset>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" value="Safety Data Sheet (SDS)" name="medical_report"
                                            class="custom-control-input" id="nephrology">
                                        <label class="custom-control-label" for="nephrology">Safety Data Sheet
                                            (SDS)</label>
                                    </div>
                                </fieldset>

                                <fieldset>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" value="Echo" name="medical_report"
                                            class="custom-control-input" id="dermatology">
                                        <label class="custom-control-label" for="dermatology">Echo</label>
                                    </div>
                                </fieldset>

                                <fieldset>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" value="Activity of Daily Living (ADL) Report"
                                            name="medical_report" class="custom-control-input" id="plastic">
                                        <label class="custom-control-label" for="plastic">Activity of Daily Living (ADL)
                                            Report</label>
                                    </div>
                                </fieldset>

                                <fieldset>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" value="Lung Function Test" name="medical_report"
                                            class="custom-control-input" id="respiratory">
                                        <label class="custom-control-label" for="respiratory">Lung Function Test</label>
                                    </div>
                                </fieldset>

                                <fieldset>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" value="Pengesahan Sijil Cuti Sakit" name="medical_report"
                                            class="custom-control-input" id="surgical">
                                        <label class="custom-control-label" for="surgical">Pengesahan Sijil Cuti
                                            Sakit</label>
                                    </div>
                                </fieldset>

                                <fieldset>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" value="Visual Equity" name="medical_report"
                                            class="custom-control-input" id="dental">
                                        <label class="custom-control-label" for="dental">Visual Equity </label>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" value="Others (Remark)" name="medical_report"
                                            class="custom-control-input" id="onther">
                                        <label class="custom-control-label" for="onther">Others (Remark)</label>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" value="HVF" name="medical_report"
                                            class="custom-control-input" id="hvf">
                                        <label class="custom-control-label" for="hvf">HVF</label>
                                    </div>
                                </fieldset> -->


                            <!-- </div> -->
                        </div>
                    </div>

                    <div class="modal-footer">
                        <div class="align-self-center text-left">
                            <button type="button" class="btn btn waves-effect waves-light btn-danger"
                                data-dismiss="modal">@lang('Cancel')</button></div>
                        <button type="button" class="btn btn waves-effect waves-light btn-success submitModal"
                            value=""><i class="fa fa-check"></i> @lang('Save')</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
