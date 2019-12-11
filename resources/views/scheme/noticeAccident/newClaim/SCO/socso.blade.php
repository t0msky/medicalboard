<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="/accsave" method="POST">    
                    
                    @if(Session::get('messageconf')) 
                    <div class="card-footer">
                        <div class="alert alert-warning">
                            {{Session::get('messageconf')}}
                        </div>
                    </div>
                    @elseif (!empty($messageconf))
                    <div class="card-footer">
                        <div class="alert alert-warning">
                            {{$messageconf}}
                        </div>
                    </div>
                    @endif 
                    <input type='hidden' name='caserefno' id='caserefno' value=''>
                    <input type="hidden" name="_token" value="">
                    <div class="row p-t-20">
                        
                        <div class="col-md-12 col-lg-6">
                            <div class="form-group">
                                <label class="control-label">@lang('form/address-info.state')</label>
                                <!--input type="text" name="state" id="state" value="@if(!empty($obcontact)){{ $obcontact->statecode }} @endif" class="form-control"-->
                                <select name='state' id='state' class='form-control'>
                                    @foreach($state as $s)
                                    @if(!empty($obprofile) && $obprofile->state_code == $s->ref_code)
                                    <option value='{{$s->ref_code}}' selected>{{$s->desc_en}}</option>
                                    @else
                                    <option value='{{$s->ref_code}}'>{{$s->desc_en}}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        {{ csrf_field() }}
                        <div class="col-md-12 col-lg-6">
                            <div class="form-group">
                                <label>@lang('form/address-info.preferred_socso')</label>
                                <input type="text" class="form-control clearFields" name="preferred_socso"  value="">
                            </div>
                        </div>
                    </div>
                    <div class="row p-t-20">
                        <div class="col-md-12 col-lg-6">
                            <div class="form-group">
                                <label>@lang('form/address-info.origin')</label>
                                <input type="text" class="form-control clearFields" name="origin"  value="">
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6">
                            <div class="form-group">
                                <label class="control-label">@lang('form/address-info.current')</label>
                                <input type="text" class="form-control clearFields" name="current"  value="">
                            </div>
                        </div>
                                {{ csrf_field() }}
                    </div>
                    {{-- <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>@lang('scheme/socso.attr.registerBranch')</label>
                                <select name="brname" id="brname" class="form-control clearFields" onchange='fieldchange()' required>
                                    <option value=""></option> --}}
                                    {{-- @foreach($branch as $B)
                                    @if (!empty($confirmation) && $confirmation->preferredbranch == $B->brcode)
                                    <option value="{{$B->brcode}}" selected>{{$B->brname}}</option>
                                    @else
                                        <option value="{{$B->brcode}}">{{$B->brname}}</option>
                                    @endif
                                        @endforeach --}}
                                {{-- </select>
                            </div>
                        </div>
                    </div> --}}
                    <div class='row'>
                        <div class="col-md-12">
                            <div class="form-actions">
                                <!--button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.cancel')</button>
                                <button type="button" class="btn btn waves-effect waves-light btn-secondary">@lang('insuredPerson.clear')</button-->
                                <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('button.save')</button>
                                <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('button.reset')</button>
                                <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticetype'">@lang('button.cancel')</button>
                                <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticeaccident'">@lang('button.back')</button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>