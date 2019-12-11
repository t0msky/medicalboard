<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="col-md-12 col-lg-8">
                    <form action="#">
                        <table  class="table table-sm table-bordered" data-toggle-column="first">
                            <thead>
                                <tr>
                                    <th style='width:0.5%'> No.</th> 
                                    <th style='width:15%'> Send To</th> 
                                    <th style='width:15%'> Notification Type</th>
                                    <th style='width:15%'> Action</th> 
                                </tr>
                            </thead>
                            <tbody>
                                <tr data-expanded="true" class="workrow" id="tr0_0">
                                    <td>
                                        <div class="col-md-12">
                                            1
                                        </div>
                                    </td>
                                    <td>
                                        <div class="col-md-12">
                                            <input name="doc_desc" type="text" value="" class="form-control" >
                                        </div>
                                    </td>
                                    <td>
                                        <div class="col-md-12">
                                            <input type="text" name="notification_type" value="" class="form-control" >
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <button class="btn btn-facebook waves-effect waves-light" type="button">View</button>
                                            <button class="btn btn-facebook waves-effect waves-light" type="button">Preview</button>
                                            <button class="btn btn-facebook waves-effect waves-light" type="button">Generate</button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>   
                        <div class="row p-t-20">
                            <div class="col-md-12 col-lg-6">
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
                            <div class="col-md-12 col-lg-6">
                                <div class="form-group">
                                    <label class="control-label">Notification Type</label>
                                    <select name='state' id='state' class='form-control'>
                                        <option value="">Please Select</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-lg-6">
                                <div class="form-group">
                                    <label class="control-label">List Document</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-lg-2">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio0" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio0">Copy Document</label>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-2">
                                <div class="custom-control custom-radio">
                                    <input type="radio" id="customRadio01" name="customRadio" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadio01">Additional Information</label>
                                </div>
                            </div>
                        </div> 
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>