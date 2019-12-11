{{-- Include insured person (from scheme) --}}

<div class="card-header">
    <div class="card-body">
        <form action="/obform_death" method="POST">
            <input type="hidden" name="_token" value="MA7VGexCLNxDj4bzpCIZJREzOOB4qnLXgHGSdlCg">
            <div class="form-body">
                <div class="form-row p-t-20">
                    <div class="form-group col-md-12 col-lg-12">
                        <label class="control-label">@lang('form/personal-info.name')</label>
                        <input type="text" id="name" name="name" value="Khairunnisa Hannis Binti Khairul" class="form-control" disabled>
                    </div>
                </div>
                <div class='form-row'>
                    <div class="form-group col-md-12 col-lg-4">
                        <label class="control-label">@lang('form/personal-info.id_type')</label>
                        <select id="idtype" class="form-control" value="01" name="idtype" disabled>
                            <option value="01" selected>New IC</option>
                        </select>
                    </div>
                    <div class="form-group col-md-12 col-lg-4">
                        <label class="control-label">@lang('form/personal-info.id_no')</label>
                        <input type="text" id="idno" name="idno" value="" class="form-control" disabled>
                        <input type="hidden" id="previdno" name="previdno" value="" class="form-control" >
                    </div>
                    <div class="form-group col-md-12 col-lg-4">
                        <label class="control-label">@lang('form/personal-info.date_birth')</label>
                        <input type="date" id="dob" name="dob" value="1961-09-07" class="form-control" disabled >
                    </div>
                </div>
                <div class='form-row'>
                    <div class="form-group col-md-12 col-lg-4">
                        <label class="control-label">@lang('form/personal-info.race')</label>
                        <select class="form-control" name="race" id="race" disabled> 
                            <option value="01" selected>Malay</option>
                        </select>
                    </div>
                    <div class="form-group col-md-12 col-lg-4">
                        <label class="control-label">@lang('form/personal-info.gender')</label>
                        <select class="form-control" name="gender" id="gender" disabled>
                            <option value="F" selected>Female</option>
                             <option value="M">Male</option>
                        </select>
                    </div>
                    <div class="form-group col-md-12 col-lg-4">
                        <label class="control-label">@lang('form/personal-info.nationality')</label>
                        <select class="form-control" tabindex="1" name='nationality' id='nationality' disabled>
                        </select>
                    </div>
                </div>
                <div class='form-row'>
                    <div class="form-group col-md-12 col-lg-12">
                        <label class="control-label">Occupation</label>
                        <input type="text" id="occupation" name="occupation" value="" class="form-control" disabled>
                    </div>
                </div>
                <div class='form-row'>
                    <div class="form-group col-md-12 col-lg-12">
                        <label>@lang('form/address-info.address')</label>
                        <input type="text" id="add1" name="add1" value="" class="form-control" disabled>
                    </div>
                    <div class="form-group col-md-12 col-lg-12">
                        <input type="text" id="add2" name="add2" value="" class="form-control" disabled>
                    </div>
                    <div class="form-group col-md-12 col-lg-12">
                        <input type="text" id="add3" name="add3" value="" class="form-control" disabled>
                    </div>
                </div>
                <div class='form-row'>
                    <div class="form-group col-md-12 col-lg-4">
                        <label>@lang('form/address-info.city')</label>
                        <input type="text" class="form-control" name="city" id="city" value="" disabled>
                    </div>
                    <div class="form-group col-md-12 col-lg-4">
                        <label class="control-label">@lang('form/address-info.state')</label>
                        <select name='state' id='state' class='form-control' disabled>
                        </select>
                    </div>
                    <div class="form-group col-md-12 col-lg-4">
                        <label>@lang('form/address-info.postcode')</label>
                        <input type="text" id="postcode" name="postcode" value=" " class="form-control" disabled>
                    </div>
                </div>
                <div class='form-row'>
                    <div class="form-group col-md-12 col-lg-4">
                        <label>P.O Box</label>
                        <input type="text" class="form-control" name="pobox" id="pobox" value="" disabled>
                    </div>
                    <div class="form-group col-md-12 col-lg-4">
                        <label class="control-label">Locked Bag</label>
                        <input type="text" name="lockedbag" id="lockedbag" value="" class="form-control" disabled>
                    
                    </div>
                    <div class="form-group col-md-12 col-lg-4">
                        <label>W.D.T</label>
                        <input type="text" id="wdt" name="wdt" value=" " class="form-control" disabled>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12 col-lg-4">
                        <label>@lang('form/address-info.tel_no')</label>
                        <input type="text" id="telno" name="telno" value=" " class="form-control" disabled>
                    </div>
                    <div class="form-group col-md-12 col-lg-4">
                        <label>@lang('form/address-info.mobile_no')</label>
                        <input type="text" id="mobileno" name="mobileno" value=" " class="form-control" disabled>
                    </div>
                    <div class="form-group col-md-12 col-lg-4">
                        <label>@lang('form/address-info.email')</label>
                        <input type="email" id="email" name="email"  value=" " class="form-control" disabled>
                    </div>
                </div> 
            </div>
            <div class="form-actions">
                <button type="button" class="btn btn waves-effect waves-light btn-success" id="btn_next_insured_person">@lang('button.next')</button>
            </div>
        </form>
    </div>
</div>

<script>
    function submitform()
    {
        $('#reset').find('form').submit();
        $('.clearFields').val('');
    }
</script>