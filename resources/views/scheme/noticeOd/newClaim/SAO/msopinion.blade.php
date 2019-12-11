<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    <div class="row p-t-20">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">@lang('scheme/msopinion.attr.opinion_type')</label>
                                <input type="text" name="opiniontype" id="opiniontype" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">@lang('scheme/msopinion.attr.ms_opinion')</label>
                                <textarea type="date" name="msopinion" id="msopinion" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="form-actions">
                      {{-- <button data-toggle="tab" href="#employer" role="tab" class="btn waves-effect waves-light btn-info" id="btn-nextEmpDetails">@lang('insuredPerson.next')</button> --}}
                      <button type="submit" class="btn waves-effect waves-light btn-success">
                      SAVE & NEXT</button>
                      {{-- <button type="button" class="btn waves-effect waves-light btn-info">@lang('insuredPerson.previous')</button> --}}
                    </div>             
                </form>
            </div>
        </div>
    </div>
</div>