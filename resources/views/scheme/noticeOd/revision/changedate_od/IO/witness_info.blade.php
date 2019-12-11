<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                {{-- <form action="#"> --}}
                <form action="" method="POST">
                    <div class="form-body">
                        {{-- <h3 class="card-title">@lang('insuredPerson.title')</h3>
                        <hr> --}}
                         <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Identification Type</label>
                                    <select class="form-control">
                                        <option selected readonly disabled hidden>Please Select</option>
                                        <option value="">New IC</option>
                                        <option value="">Old IC</option>
                                        <option value="">Army ID</option>
                                        <option value="">Police ID</option>
                                        <option value="">Social Security Number ID (SSN)</option>
                                        <option value="">CID</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">New Identification No.</label>
                                    <input type="text" id="ic_no" name="ic_no" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Name</label>
                                    <input type="text" id="name" name="name" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Witness Statement</label>
                                    <textarea type="text" id="statement" name="statement" value="" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Language</label>
                                    <select class="form-control" tabindex="1">
                                        <option selected readonly disabled hidden>Please Select</option>
                                        <option value="">Bahasa</option>
                                        <option value="Kedah">English</option>
                                        <option value="Kelantan">Tamil</option>
                                        <option value="Melaka">Mandarin</option>
                                        <option value="NegeriSembilan">Others</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Translator Name</label>
                                    <input type="text" id="translator_name" name="translator_name" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Investigation Date</label>
                                    <input type="date" id="date" name="date" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Investigation Start Time</label>
                                    <div class="input-group clockpicker" data-placement="bottom" data-align="top"
                                        data-autoclose="true">
                                    <input type="time" class="form-control" id='time' name="time" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Investigation End Time</label>
                                    <div class="input-group clockpicker" data-placement="bottom" data-align="top"
                                        data-autoclose="true">
                                    <input type="time" class="form-control" id='time' name="time" value="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('scheme/noticetype.save')</button>
                            <button type="button" class="btn btn waves-effect waves-light btn-success" onclick="submitform()">@lang('scheme/noticetype.reset')</button>
                            <button type="button" class="btn waves-effect waves-light btn-success" id='btncancelacc' onclick="window.location='/noticetype'">@lang('scheme/noticetype.cancel')</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
