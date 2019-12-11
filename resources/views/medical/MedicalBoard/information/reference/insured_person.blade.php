{{-- Include insured person (from scheme) --}}

{{-- <div class="row">
    <div class="col-12"> --}}
        <!-- <div class="card"> -->
            <div class="card-body">
                <form action="/obform_death" method="POST">
                    <input type="hidden" name="_token" value="MA7VGexCLNxDj4bzpCIZJREzOOB4qnLXgHGSdlCg">
                    <div class="form-body">
                        {{-- <h5 class="card-title">Insured Person Information</h5> --}}
                        {{-- <hr> --}}
                        <div class="row p-t-20">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('form/personal-info.name')</label>
                                    <input type="text" id="name" name="name" value="Khairunnisa Hannis Binti Khairul" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">@lang('form/personal-info.id_type')</label>
                                    <select id="idtype" class="form-control" value="01 " name="idtype" required>
                                    <option value="01" selected>New IC</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">@lang('form/personal-info.id_no')</label>
                                    <input type="text" id="idno" name="idno" value="" class="form-control" required>
                                    <input type="hidden" id="previdno" name="previdno" value="" class="form-control" >
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">@lang('form/personal-info.date_birth')</label>
                                    <input type="date" id="dob" name="dob" value="1961-09-07" class="form-control" >
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">@lang('form/personal-info.race')</label>
                                   
                                    <select class="form-control" name="race"> 
                                            <!--option value="">01 </option-->
                                        <option value="01" selected>Malay</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">@lang('form/personal-info.gender')</label>
                                   
                                    <select class="form-control" name="gender">
                                <!--option value="">F </option-->
                                        <option value="F" selected>Female</option>
                                         <option value="M">Male</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('form/personal-info.nationality')</label>
                                        <select class="form-control" tabindex="1" name='nationality' id='nationality'>
                                                <!--option value=""></option-->
                                        </select>
                                    </div>
                                </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Occupation</label>
                                    <input type="text" id="occupation" name="occupation" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>@lang('form/address-info.address')</label>
                                    <input type="text" id="add1" name="add1" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" id="add2" name="add2" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" id="add3" name="add3" value="" class="form-control">
                                </div>
                            </div>
                        </div>
            
                        <div class='row'>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>@lang('form/address-info.city')</label>
                                        <input type="text" class="form-control" name="city"  value=" ">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">@lang('form/address-info.state')</label>
                                        <!--input type="text" name="state" id="state" value="" class="form-control"-->
                                        <select name='state' id='state' class='form-control'>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>@lang('form/address-info.postcode')</label>
                                        <input type="text" id="postcode" name="postcode" value=" " class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class='row'>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>P.O Box</label>
                                        <input type="text" class="form-control" name="pobox" value=" ">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="control-label">Locked Bag</label>
                                        <input type="text" name="lockedbag" id="lockedbag" value=" " class="form-control">
                                    
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>W.D.T</label>
                                        <input type="text" id="wdt" name="wdt" value=" " class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>@lang('form/address-info.tel_no')</label>
                                        <input type="text" id="telno" name="telno" value=" " class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>@lang('form/address-info.mobile_no')</label>
                                        <input type="text" id="mobileno" name="mobileno" value=" " class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>@lang('form/address-info.email')</label>
                                        <input type="email" id="email" name="email"  value=" " class="form-control">
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="form-actions"> --}}
                                <!--button type="button" class="btn btn waves-effect waves-light btn-secondary">Cancel</button>
                                <button type="button" class="btn btn waves-effect waves-light btn-secondary">Clear</button-->
                                {{-- <button type="submit" class="btn btn waves-effect waves-light btn-success"> 
                                SAVE</button>
                            </div> --}}  
                        <br/>
                    </div>
                    <div class="form-actions">
                        {{-- <button type="button" class="btn waves-effect waves-light btn-success" id='btncancelacc'>@lang('medical_board/index.cancel')</button>
                        <button type="button" class="btn waves-effect waves-light btn-success" id='btncancelacc'>@lang('medical_board/index.reset')</button> --}}

                        <button type="button" class="btn btn waves-effect waves-light btn-success" id="btn_next_insured_person">@lang('button.next')</button>
                        {{-- <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('medical_board/index.save')</button> --}}
                    </div>
                </form>
            </div>
        <!-- </div> -->
{{--     </div>
</div> --}}



<script>
    function submitform()
    {
        $('#reset').find('form').submit();
        $('.clearFields').val('');
    }
</script>