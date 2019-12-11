<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="p-20">
                        <form action="#">
                                <div class="row p-t-20"> 
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('scheme/medicalBoard.attr.potential_not_emp_injury')</label>
                                            <select class="form-control" required>
                                                <option>@lang('scheme/scoRecommend.attr.yes')</option> 
                                                <option>@lang('scheme/scoRecommend.attr.no')</option> 
                                            </select>
                                        </div>
                                    </div>
                                </div> 
                                <div class="row p-t-20"> 
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('scheme/medicalBoard.attr.speciality')</label>
                                            <select class="form-control" required>
                                                <option>Ophthalmology</option> 
                                                <option>ENT / ORL</option> 
                                                <option>ECHO / CARDIOLOGY</option> 
                                                <option>ORTHO</option> 
                                                <option value="">PSY</option>
                                                <option value="">Neurology</option>
                                                <option value="">Oncology</option>
                                                <option value="">Nephrology</option>
                                                <option value="">Dermatology</option>
                                                <option value="">Plastic</option>
                                                <option value="">Respiratory</option>
                                                <option value="">Surgical</option>
                                                <option value="">Dental</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                           <label class="control-label">@lang('scheme/medicalBoard.attr.part_injury')</label><br>
                                           <input type="text" name="part_injury" id="part_injury" class="form-control">   
                                         </div>
                                    </div>   
                                </div> 
                                <div class="row p-t-20"> 
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('scheme/medicalBoard.attr.app_loc')</label>
                                            <input type="text" name="app_loc" id="app_loc" class="form-control">   
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('scheme/medicalBoard.attr.JD_session_date')</label>
                                             <input type="date" name="JD_session_date" id="JD_session_date" class="form-control">   
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                           <label class="control-label">@lang('scheme/medicalBoard.attr.JD_Decision')</label><br>
                                           <select class="form-control" required>
                                            <option>@lang('scheme/scoRecommend.attr.yes')</option> 
                                            <option>@lang('scheme/scoRecommend.attr.no')</option> 
                                            <option value="">Pending</option>
                                        </select>
                                         </div>
                                    </div>   
                                </div> 
                                <div class="row p-t-20"> 
                                    <div class="col-md-4">
                                        <div class="form-group">
                                           <label class="control-label">@lang('scheme/medicalBoard.attr.JD_Type')</label>
                                                <input type="text" name="JD_Type" id="JD_Type" class="form-control">   
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('scheme/medicalBoard.attr.assesment_type')</label>
                                                <input type="text" name="assesment_type" id="assesment_type" class="form-control">   
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('scheme/medicalBoard.attr.assesment')</label>
                                                <input type="text" name="assesment" id="assesment" class="form-control">   
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-t-20"> 
                                        <div class="col-md-4">
                                            <div class="form-group">
                                               <label class="control-label">@lang('scheme/medicalBoard.attr.els')</label>
                                               <select class="form-control" required>
                                                    <option>@lang('scheme/scoRecommend.attr.yes')</option> 
                                                    <option>@lang('scheme/scoRecommend.attr.no')</option> 
                                                </select>  
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label">@lang('scheme/medicalBoard.attr.remark')</label>
                                                    <input type="text" name="remark" id="remark" class="form-control">   
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label">@lang('scheme/medicalBoard.attr.hus_end_date')</label>
                                                    <input type="date" name="hus_end_date" id="hus_end_date" class="form-control">   
                                            </div>
                                        </div>
                                </div>
                                <div class="row p-t-20"> 
                                        <div class="col-md-4">
                                            <div class="form-group">
                                               <label class="control-label">@lang('scheme/medicalBoard.attr.accrual_date')</label>
                                                    <input type="date" name="accrual_date" id="accrual_date" class="form-control">   
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label">@lang('scheme/medicalBoard.attr.proviaional_assesment_accrual_date')</label>
                                                    <input type="date" name="proviaional_assesment_accrual_date" id="proviaional_assesment_accrual_date" class="form-control">   
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label">@lang('scheme/medicalBoard.attr.provisional_end_Date')</label>
                                                    <input type="date" name="provisional_end_Date" id="provisional_end_Date" class="form-control">   
                                            </div>
                                        </div>
                                </div>
                                <div class='row'>
                                    <div class="col-md-12">
                                        <div class="form-actions">
                                            <!--button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.cancel')</button>
                                            <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.clear')</button-->
                                            <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('scheme/noticetype.save')</button>
                                            <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('scheme/noticetype.reset')</button>
                                            <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticetype'">@lang('scheme/noticetype.cancel')</button>
                                            <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticeaccident'">@lang('scheme/noticetype.back')</button>
                                        </div>
                                    </div>
                                </div>               
                          </form>
                        </div>
                    </div>
                </div>
            </div>
</div>