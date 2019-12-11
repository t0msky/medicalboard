<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="/accsave" method="POST">    
                    @csrf
                   
                    <input type='hidden' name='caserefno' id='caserefno' value=''>
                    <input type="hidden" name="_token" value="">
                    <div class="row p-t-20">
                        
                        <div class="col-md-12 col-lg-6">
                            <div class="form-group">
                                <label class="control-label">@lang('State')</label>
                                <select class="form-control clearFields" name="state1" required >
                                    @foreach($ref_table->state as $state)
                                    <option value="{{$state->ref_code}}">{{$state->desc_en}}</option>
                                    @endforeach
                                 </select>
                            </div>
                        </div>
                       
                        <div class="col-md-12 col-lg-6">
                            <div class="form-group">
                                <label>@lang('Preferred Socso')</label>
                                <input type="text" class="form-control clearFields" name="preferred_socso"  value="">
                            </div>
                        </div>
                    </div>
                    <div class="row p-t-20">
                        <div class="col-md-12 col-lg-6">
                            <div class="form-group">
                                <label>@lang('Origin')</label>
                                <input type="text" class="form-control clearFields" name="origin"  value="">
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6">
                            <div class="form-group">
                                <label class="control-label">@lang('Current')</label>
                                <input type="text" class="form-control clearFields" name="current"  value="">
                            </div>
                        </div>
                    </div>
                    <div class='row'>
                        <div class="col-md-12">
                            <div class="form-actions">
                                <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('button.save')</button>
                                <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('button.reset')</button>
                              
                                <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticetype'">@lang('button.cancel')</button>
                                <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/obform_od'">@lang('button.back')</button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>