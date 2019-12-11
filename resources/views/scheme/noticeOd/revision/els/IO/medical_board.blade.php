<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <form action="/caseinfo_revision" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-body">
                    
                        @if(Session::get('messageob'))
                        <div class="card-footer">

                            <div class="alert alert-warning">
                                {{Session::get('messageob')}}
                            </div>

                        </div>
                        @elseif (!empty($messageob))
                        <div class="card-footer">

                            <div class="alert alert-warning">
                                {{$messageob}}
                            </div>

                        </div>
                        @endif

                        <div id="accordion22" role="tablist" class="accordion" >
                    
                            <!-- claim case info-->
                            <div class="card m-b-0">
                                <div class="card-header" role="tab" id="medical1">
                                    <h5 class="mb-0">                           
                                        <a class="link" data-toggle="collapse" data-parent="#accordion22" href="#medicalcol1" aria-expanded="false" aria-controls="medicalcol1"><h5 class="card-title"><i class="fa fa-plus"></i>
                                        PREVIOUS HUK</h5>
                                        </a>
                                    </h5>
                                </div>
                                <div id="medicalcol1" class="collapse" role="tabpanel" aria-labelledby="medical1">
                                    <div class="card-body">
                                        <div class="row p-t-20">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="control-label">JD Type</label>
                                                <select class="form-control" data-placeholder="jdType_els" tabindex="2">
                                                <option selected disabled hidden>Please Select</option>  
                                                        <option value="JD">JD</option>
                                                        <option value="JDR">JDR</option>
                                                        <option value="JDK">JDK</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">JD / JDR Session Date</label>
                                                    <input type="date" id="jdorjdrsesionDate_els" name="jdorjdrsesionDate" value="" class="form-control">
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="control-label">Venue Session</label>
                                                <input type="text" id="venue_session" name="venue" value="" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row p-t-20">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="control-label">Assessment Type</label>
                                                <select class="form-control" readonly data-placeholder="jdType_els" tabindex="2">
                                                <option selected disabled hidden>Please Select</option>  
                                                        <option value="JD">@lang('wages.attr.jd')</option>
                                                        <option value="JDR">JDR</option>
                                                        <option value="JDK">JDK</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row p-t-20">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">JD / JDR Result</label>
                                                    <input type="text" id="jdjdr_result" name="asessment" value="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Assessment % </label>
                                                    <input type="text" id="assessment_els" name="asessment" value="" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class='row'>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="control-label">ELS</label>
                                                <input type="text" id="els_els" name="els" value="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('scheme/ob.attr.remark')</label>
                                                    <input type="text" id="remarks_els" name="remarks" value="" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- claim case info-->
                            <div class="card m-b-0">
                                <div class="card-header" role="tab" id="medical2">
                                    <h5 class="mb-0">                           
                                        <a class="link" data-toggle="collapse" data-parent="#accordion22" href="#medicalcol2" aria-expanded="false" aria-controls="medicalcol2"><h5 class="card-title"><i class="fa fa-plus"></i>
                                        PREVIOUS ILAT</h5>
                                        </a>
                                    </h5>
                                </div>
                                <div id="medicalcol2" class="collapse" role="tabpanel" aria-labelledby="medical2">
                                    <div class="card-body">
                                        <div class="row p-t-20">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="control-label">JD Type</label>
                                                <select class="form-control" data-placeholder="jdType_ilat2" tabindex="2">
                                                <option selected disabled hidden>Please Select</option>  
                                                        <option value="JD">@lang('wages.attr.jd')</option>
                                                        <option value="JDR">JDR</option>
                                                        <option value="JDK">JDK</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">JD / JDR Session Date</label>
                                                    <input type="date" id="jdorjdrsesionDate_ilat2" name="jdorjdrsesionDate2" value="" class="form-control">
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="control-label">Venue Session</label>
                                                <input type="text"  id="venue_session_ilat2" name="venue_ilat2" value="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Morbid Date</label>
                                                    <input type="date"  id="jdorjdrsesionDate_ilat2" name="jdorjdrsesionDate_ilat2" value="" class="form-control">
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row p-t-20">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Invalidity Decision</label>
                                                    <input type="text"  id="jdjdr_result_ilat2" name="asessment_ilat2" value="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="control-label">ELS</label>
                                                <input type="text"  id="els_ilat2" name="els_ilat2" value="" class="form-control">
                                                </div>
                                            </div>
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
