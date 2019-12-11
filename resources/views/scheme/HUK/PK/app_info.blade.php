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
                            <div class="col-md-12 col-lg-4">
                                <div class="form-group">
                                    <label class="control-label">@lang('Potential HUK')</label>
                                    <select class="form-control" data-placeholder="" tabindex="2" readonly>
                                            <option selected disabled hidden>{{$getHUK['potentialHUK']}}</option>
                                            <option value="y">@lang('Yes')</option>
                                            <option value="n">@lang('No')</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-12 col-lg-4">
                                <div class="form-group">
                                    <label class="control-label">Application Recv Date</label>
                                    <input type="text"  id="appRecv" name="appRecv" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-4">
                                <div class="form-group">
                                    <label class="control-label">Source</label>
                                    <input type="text" readonly id="Source" name="Source" value="{{$getHUK['source']}}" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-12 col-lg-4">
                                <div class="form-group">
                                    <label class="control-label">Accident Date from other source</label>
                                    <input type="date" id="accDateOtherSource" name="accDateOtherSource" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-12 col-lg-6">
                                <div class="form-group">
                                    <label class="control-label">Injury Description</label>
                                    <textarea rows="4" readonly cols="50"id="accDate" name="accDate" value="" class="form-control"></textarea>                             
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
