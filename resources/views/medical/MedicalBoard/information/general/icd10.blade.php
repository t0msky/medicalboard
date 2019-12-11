<div class="form-body" id="div_'+count+'_'+fulldiagnosis+'">
    <div class="col-md-12 col-lg-12">
        <div class="form-group">
            <label>@lang('form/medical.decision.diagnosis')</label>
        </div>
    </div>
    
    <div class="form-row col-md-12 col-lg-12">
        <label for="searchicd'+ count +'_'+ fulldiagnosis +'" class="col-form-label">@lang('form/medical.decision.icd10')</label>
        <div class="form-group col-md-5 col-lg-5">
            <input class="form-control ui-autocomplete-list" type="text" id="searchicd'+ count +'_'+ fulldiagnosis +'">
        </div>
    </div>

    <div class="col-md-12 col-lg-12">
        <div class="form-group">
            <div class="input-group">
                <textarea name="diagDetail'+ count +'_'+ fulldiagnosis +'" id="diagDetail'+ count +'_' + fulldiagnosis +'" class=" form-control ui-widget" required rows="6" ></textarea>
            </div>
        </div>
    </div>
</div>

<script>
var BASEURL = "{!! url('/') !!};";
</script>