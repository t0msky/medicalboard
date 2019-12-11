<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="p-20">
                        <form action="#">
                            <div class="row p-t-20">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">@lang('scheme/ob.attr.state')</label>
                                        <!--input type="text" name="state" id="state" value="@if(!empty($obcontact)){{ $obcontact->statecode }} @endif" class="form-control"-->
                                        <select name='state' id='state' class='form-control'>
                                            @if(isset($ref_table->state))
                                                @foreach($ref_table->state as $s)
                                                    @if(!empty($obprofile) && $obprofile->statecode == $s->ref_code)
                                                        <option value='{{$s->ref_code}}' selected>{{$s->desc_en}}</option>
                                                    @else
                                                        <option value='{{$s->ref_code}}'>{{$s->desc_en}}</option>
                                                    @endif
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>@lang('scheme/socso.attr.office')</label>
                                        <input type="text" class="form-control clearFields" name="preferred_socso"  value="">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>