<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="p-20">
                    <form action="#">
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Send to</label>
                                    <!--input type="text" name="state" id="state" value="@if(!empty($obcontact)){{ $obcontact->statecode }} @endif" class="form-control"-->
                                    <select name='state' id='state' class='form-control'>
                                        <option value="">Please Select</option>
                                        <option value="">Insured Person</option>
                                        <option value="">Employer</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="control-label">Notification Type</label>
                                </div>
                            </div>
                            <div class="col-md-1">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio0" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio0">Copy Document</label>
                                </div>
                            </div>
                            <div class="col-md-1">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio01" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio01">Additional Information</label>
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Remarks</label>
                                    <input type="text" class="form-control clearFields" name="preferred_socso"  value="">
                                </div>
                            </div>
                        </div>     
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>