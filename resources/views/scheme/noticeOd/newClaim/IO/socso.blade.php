<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="#" id="reset">
                    {{-- <h5 class="card-title">@lang('scheme/socso.title')</h5>
                    <hr> --}}
                    <div class="row p-t-20">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label> @lang('scheme/socso.attr.state')</label>
                                <select name="state1" id="state1" class="form-control">
                                    @foreach($state as $S)
                                    @if (!empty($confirmation) == $S->ref_code)
                                    <option value="{{$S->ref_code}}" selected>{{$S->desc_en}}</option>
                                    @else
                                    <option value="{{$S->ref_code}}">{{$S->desc_en}}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>@lang('scheme/socso.attr.office')</label>
                                <input type="text" name="office" id="office" class="form-control clearFields" value="">
                                {{-- <select name="brname" id="brname" class="form-control" onchange='fieldchange()' required>
                                    <option value=""></option>
                                    @foreach($branch as $B)
                                    @if (!empty($confirmation) && $confirmation->preferredbranch == $B->brcode)
                                    <option value="{{$B->brcode}}" selected>{{$B->brname}}</option>
                                    @else
                                    <option value="{{$B->brcode}}">{{$B->brname}}</option>
                                    @endif
                                    @endforeach
                                </select> --}}
                            </div>
                        </div>
                        <div class="col-md-6">
                             <div class="form-group">
                                <label>@lang('scheme/socso.attr.origin')</label>
                                <input type="text" name="origin" id="origin" class="form-control clearFields" value="">
                                {{-- <select name="brname" id="brname" class="form-control" onchange='fieldchange()' required>
                                    <option value=""></option>
                                    @foreach($branch as $B)
                                    @if (!empty($confirmation) && $confirmation->preferredbranch == $B->brcode)
                                    <option value="{{$B->brcode}}" selected>{{$B->brname}}</option>
                                    @else
                                    <option value="{{$B->brcode}}">{{$B->brname}}</option>
                                    @endif
                                    @endforeach
                                </select> --}}
                            </div>
                        </div>
                        <div class="col-md-6">
                             <div class="form-group">
                                <label>@lang('scheme/socso.attr.current')</label>
                                <input type="text" name="current" id="current" class="form-control clearFields" value="">
                                {{-- <select name="brname" id="brname" class="form-control" onchange='fieldchange()' required>
                                    <option value=""></option>
                                    @foreach($branch as $B)
                                    @if (!empty($confirmation) && $confirmation->preferredbranch == $B->brcode)
                                    <option value="{{$B->brcode}}" selected>{{$B->brname}}</option>
                                    @else
                                    <option value="{{$B->brcode}}">{{$B->brname}}</option>
                                    @endif
                                    @endforeach
                                </select> --}}
                            </div>
                        </div>
                        {{ csrf_field() }}
                    <!--/span-->
                    </div>
                    <div class="form-actions">
                        <!--button type="button"
                            class="btn btn waves-effect waves-light btn-secondary">@lang('confirmation.cancel')</button>
                        <button type="button"
                        class="btn btn waves-effect waves-light btn-secondary">@lang('confirmation.clear')</button-->
                        <button type="submit" class="btn btn waves-effect waves-light btn-success">
                        @lang('scheme/confirmation.save')</button>
                        {{-- <button type="button" onclick="submitform()" class="btn btn waves-effect waves-light btn-info">@lang('insuredPerson.reset')</button> --}}
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- <script>
    function submitform(){
        $('#reset').find('form').submit();
        $('.clearFields').val('');
    }
</script> --}}

                   