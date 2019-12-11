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
                                    <label class="control-label">Scheme Ref. No.</label>
                                    <input type="text"  id="srefNo" name="srefNo" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-1">
                                <div class="form-group">
                                    <br> <br>
                                    <button type="button" class="btn btn waves-effect waves-light btn-success">@lang('View')</button>
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-12 col-lg-4">
                                <div class="form-group">
                                    <label class="control-label">Benefit Ref. No.</label>
                                    <input type="text"  id="bRefNo" name="bRefNo" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-1">
                                <div class="form-group">
                                    <br>
                                    <button type="button" class="btn btn waves-effect waves-light btn-success">@lang('View')</button>
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-12 col-lg-4">
                                <div class="form-group">
                                    <label class="control-label">Accident Date</label>
                                    <input type="date" readonly id="accDate" name="accDate" value="{{$getHUK['accDate']}}" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-12 col-lg-6">
                                <div class="form-group">
                                    <label class="control-label">Injury Description</label>
                                    <textarea rows="4" readonly cols="50"id="accDate" name="accDate" value="" class="form-control">{{$getHUK['injuryDesc']}}</textarea>                             
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
