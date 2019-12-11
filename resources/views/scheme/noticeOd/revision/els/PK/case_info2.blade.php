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
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                   <label class="control-label">Notice ID</label>
                                   <input type="text" readonly id="notice_els" name="notice" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/ob.attr.name')</label>
                                    <input type="text" readonly id="name_els" name="name" value="" class="form-control">
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <label class="control-label">@lang('scheme/ob.attr.id_no')</label>
                                <input type="text" readonly id="idNum_els" name="id_num" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                        <div class="col-md-6">
                                <div class="form-group">
                                <label class="control-label">Accident Date</label>
                                <input type="date" readonly id="accDate_els" name="accDate" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Notice Date</label>
                                    <input type="date" readonly id="noticeDate_els" name="notice_date" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label"> Assessment </label>
                                    <input type="text" readonly id="assess_pk" name="assess_pk" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label"> Invalidity Decision </label>
                                    <input type="text" readonly id="ilat_des_pk" name="ilat_des_pk" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Case Type</label>
                                    <input type="text" readonly id="caseType_els_pk" name="casetype_pk" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">@lang('scheme/ob.attr.status')</label>
                                    <input type="text" readonly id="status_els_pk" name="status_pk" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <!--button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.cancel')</button>
                                <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.clear')</button-->
                                <button type="submit" class="btn btn waves-effect waves-light btn-success">SAVE</button>
                                <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">RESET</button>
                                <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticetype'">CANCEL</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
