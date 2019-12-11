
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-body">
                            <div class="card m-b-0">
                            
                                <div class="card-body">
                                    <div class="row p-t-20">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label">@lang('Diagnosis')</label>
                                                <input type="text" readonly id="diagnosis" name="diagnosis" value="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label">@lang('Bring to Medical')</label>
                                                <select readonly class="form-control" data-placeholder="" tabindex="2" id="selectBringToMedical">
                                                        <option selected readonly disabled hidden>Please Choose </option>
                                                        <option value="yes">@lang('Yes')</option>
                                                        <option value="no">@lang('No')</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row p-t-20">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">@lang('PP Opinion')</label>
                                                <textarea readonly rows="6" cols="100"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row p-t-20">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">@lang('Recommendation')</label>
                                                <textarea readonly rows="6" cols="100"></textarea>
                                            </div>
                                        </div>
                                    </div>

                            <!---------- SECTION B ------------->
                                <div class="row" style="display:none;" id="secB">
                                    <div class="row p-t-20">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="control-label">@lang('Bring to Medical')</label>
                                                <select readonly class="form-control" data-placeholder="" tabindex="2">
                                                        <option selected readonly disabled hidden>Please Choose </option>
                                                        <option value="">@lang('Yes')</option>
                                                        <option value="">@lang('No')</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <!---------- SECTION C ------------->
                                <div id="secC" style="display:none;">
                                    <div class="row p-t-20">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label">@lang('MB Ref. No.')</label>
                                                <input type="text" readonly id="mbRefNo " name="mbRefNo " value="" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row p-t-20">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label">@lang('MB Type')</label>
                                                <input type="text" readonly id="mbType" name="mbType" value="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label">@lang('MB Session Date')</label>
                                                <input type="text" readonly id="mbSessionDate" name="mbSessionDate" value="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label">@lang('MB/MAB Result')</label>
                                                <input type="text" readonly id="mbmabResult" name="mbmabResult" value="" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row p-t-20">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label">@lang('Invalidity')</label>
                                                <input type="text" readonly id="Invalidity" name="Invalidity" value="" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row p-t-20">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="control-label">@lang('Remarks')</label>
                                                <input type="text" readonly id="Remarks" name="Remarks" value="" class="form-control">
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
<script>
        $(document).ready(function () {
        $('#selectBringToMedical').change(function () { 
                if (this.value == 'yes') {
                    $('#secC').show();
                }else {
                    $('#secC').hide();
                }
            });
        });
        </script>