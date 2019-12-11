<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="p-20">
                    <form action="#">
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Recommended Notice Type</label>
                                    <!--input type="text" name="state" id="state" value="@if(!empty($obcontact)){{ $obcontact->statecode }} @endif" class="form-control"-->
                                    <select name='state' id='state' class='form-control'>
                                        <option value="">Please Select</option>
                                        <option value="">Occupational Disease</option>
                                        <option value="">Invalidity</option>
                                        <option value="">Accident</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Justification</label>
                                    <textarea type="text" name="justification" id="justification" class="form-control"></textarea>
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