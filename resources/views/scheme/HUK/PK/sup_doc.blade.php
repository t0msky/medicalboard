<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <form action="/obform" method="POST">

                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-body">

                        @if(Session::get('messageob'))
                        <div class="card-footer">

                            <div class="alert alert-warning">
                                {{Session::get('messageob')}}
                            </div>

                        </div>
                        @elseif (!empty($messageob))
                        <div class="card-footer">

                            <div class="alert alert-warning">
                                {{$messageob}}
                            </div>

                        </div>
                        @endif
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Medical Type Board</label>
                                    <select class="form-control" data-placeholder="" tabindex="2">
                                            <option selected readonly disabled hidden>Please Choose </option>
                                            <option value="">@lang('Medical Board')</option>
                                            <option value="">@lang('Medical Appellate Board')</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Identification Type</label>
                                    <select class="form-control" data-placeholder="idType" tabindex="2">
                                        <option selected disabled hidden>Please Choose </option>
                                        <option value="New IC">@lang('New IC')</option>
                                        <option value="Old IC">@lang('Old IC')</option>
                                        <option value="Army ID">@lang('Army ID')</option>
                                        <option value="Police ID">@lang('Police ID')</option>
                                        <option value="Social Security ID">@lang('Social Security ID')</option>
                                        <option value="CID">@lang('CID')</option>
                                </select> 
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Identification Number</label>
                                    <input type="text"  id="IDNum" name="IDNum" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-1">
                                <div class="form-group">
                                    <br>
                                    <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('Search')</button>
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Insured Person Name</label>
                                    <input type="text" id="obname" name="obname" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>