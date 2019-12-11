<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <form action="{{route('socso_office')}}" id="reset">
          @csrf
          <div class="row p-t-20">
            <div class="form-group col-md-12 col-lg-6">
              <label> @lang('form/address-info.state')</label>

              <select class="form-control clearFields" name="state1" required >
               @foreach($ref_table->state as $state)
               @if(!empty($socso) && $socso->statecode == $state->ref_code)
               <option value="{{$state->ref_code}}" selected>{{$state->desc_en}}</option>
               @else
               <option value="{{$state->ref_code}}">{{$state->desc_en}}</option>
               @endif
               @endforeach
             </select>
           </div>
           <div class="form-group col-md-12 col-lg-6">
            <label>@lang('form/address-info.city')</label>
            @if(!empty($socso) && $socso->preferredbrcode !='')
            <input type="text" name="brname" id="brname" value="{{$socso->preferredbrcode}}" class="form-control clearFields" value="">
            @else
            <input type="text" name="brname" id="brname" value="" class="form-control clearFields" value="">
            @endif
          </div>
          <div class="form-group col-md-12 col-lg-6">
            <label>@lang('Origin')</label>
           {{--  @if(!empty($socso) && $socso->origin !='')
            <input type="text" name="origin" id="origin" value="{{$socso->origin}}" class="form-control clearFields" value="">
            @else --}}
            <input type="text" name="origin" id="origin" value="" class="form-control clearFields" value="">
            {{-- @endif --}}
          </div>
          <div class="form-group col-md-12 col-lg-6">
            <label>@lang('Current')</label>
            {{-- @if(!empty($socso) && $socso->current !='')
            <input type="text" name="current" id="current" value="{{$socso->current}}" class="form-control clearFields" value="">
            @else --}}
            <input type="text" name="current" id="current" value="" class="form-control clearFields" value="">
            {{-- @endif --}}
          </div>
        </div>
        <div class="form-actions">
          <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('button.save')</button>
          <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('button.reset')</button>
        </div>
      </form>
    </div>
  </div>
</div>
</div>

<script>
  function submitform(){
    $('#reset').find('form').submit();
    $('.clearFields').val('');
  }
</script>

