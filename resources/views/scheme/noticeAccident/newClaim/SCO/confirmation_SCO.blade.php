<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
            <form action="{{ route('confirmation_sco.accident') }}" method="POST" id="form_Preview">  
                @csrf
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
                <div class="row p-t-20">
                    <div class="col-md-12 col-lg-3">
                        <div class="form-group">
                            <label class="control-label">@lang('form/scheme.general.collapse.confirmation.confirmation_completed')</label>
                            <select name="jrecv" id="jrecv" class="form-control" onchange='fieldchange()' required>
                                {{-- @if (!empty($confirmation) && $confirmation->jrecv == 'N')
                                <option value="N"  selected>@lang('confirmation.attr.no')</option>
                                <option value="Y" >@lang('confirmation.attr.yes')</option>
                                @elseif (!empty($confirmation) && $confirmation->jrecv == 'Y')
                                <option value="N" >@lang('confirmation.attr.no')</option>
                                <option value="Y" selected>@lang('confirmation.attr.yes')</option>
                                @else --}}
                                <option value="Y">@lang('scheme/confirmation.attr.yes')</option>
                                <option value="N" selected>@lang('scheme/confirmation.attr.no')</option>
                                {{-- @endif --}}
                            </select>
                            {{-- <input type="text" name="section_j_received" id="section_j_received"
                                class="form-control"> --}}
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-3">
                        <div class="form-group">
                            <label class="control-label">@lang('form/scheme.general.collapse.confirmation.completion_date')</label>
                            {{-- @if(!empty($confirmation) && $confirmation->jrecvdate != '')
                            <input type="date" id="jrecvdate" name="jrecvdate" onchange='fieldchange()' value="{{substr($confirmation->jrecvdate,0,4)}}-{{substr($confirmation->jrecvdate,4,2)}}-{{substr($confirmation->jrecvdate,6,2)}}" class="form-control" required>
                            @else --}}
                            <input type="date" id="jrecvdate" name="jrecvdate" onchange='fieldchange()' value="" class="form-control" required>
                            {{-- @endif --}}
                            
                        </div>
                    </div>
                </div>
                {{-- <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="control-label">@lang('scheme/confirmation.attr.notice_date')</label>
                            {{-- @if(!empty($confirmation) && $confirmation->jrecvdate != '')
                            <input type="date" id="jrecvdate" name="jrecvdate" onchange='fieldchange()' value="{{substr($confirmation->jrecvdate,0,3)}}-{{substr($confirmation->jrecvdate,4,2)}}-{{substr($confirmation->jrecvdate,6,2)}}" class="form-control" required>
                            @else 
                            <input type="date" id="jrecvdate" name="jrecvdate" onchange='fieldchange()' value="" class="form-control" required>
                            @endif 
                            
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="control-label">@lang('scheme/confirmation.attr.acceptance_date')</label>
                            {{-- @if(!empty($confirmation) && $confirmation->jrecvdate != '')
                            <input type="date" id="jrecvdate" name="jrecvdate" onchange='fieldchange()' value="{{substr($confirmation->jrecvdate,0,4)}}-{{substr($confirmation->jrecvdate,4,2)}}-{{substr($confirmation->jrecvdate,6,2)}}" class="form-control" required>
                            @else 
                            <input type="date" id="jrecvdate" name="jrecvdate" onchange='fieldchange()' value="" class="form-control" required>
                            {{-- @endif 
                            
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label class="control-label">@lang('scheme/confirmation.attr.routing')</label>
                            <select name="routing" id="jrecv" class="form-control" onchange='fieldchange()' required>
                                {{-- @if (!empty($confirmation) && $confirmation->jrecv == 'N') 
                                <option value="PK">@lang('scheme/confirmation.attr.employer')</option>
                                <option value="IO" selected>@lang('scheme/confirmation.attr.IO')</option>
                                <option value="SAO" selected>@lang('scheme/confirmation.attr.SAO')</option>
                                
                            </select>
                        </div>
                    </div>
                </div> --}}
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-actions">
                            <!--button type="button" class="btn waves-effect waves-light btn-secondary">Back</button-->

                            <button type="button" name="action" value="Save" class="btn waves-effect waves-light btn-success">@lang('button.submit')</button>
                            {{-- <button type="submit" class="btn btn waves-effect waves-light btn-success"  id="btnPreview">@lang('button.preview')</button> --}}
                            <button type="submit" name="action" value="Preview" class="btn waves-effect waves-light btn-secondary" >@lang('button.preview')</button>    
                        
                            {{--  @if (!empty ($confirmation))
                            
                            <button type="submit" name="action" value="Preview" class="btn waves-effect waves-light btn-secondary">@lang('confirmation.preview')</button>
                            <a href="/odpreview" type="button" name="action" value="Preview" class="btn waves-effect waves-light btn-secondary" disabled>@lang('confirmation.preview')</a>
                            <button type="submit" name="action" value="Submit" class="btn waves-effect waves-light btn-primary" id="sa-warning">@lang('confirmation.submit')</button>
                            
                            @else
                            
                            <button type="button" name="action" value="Preview" class="btn waves-effect waves-light btn-secondary" disabled>@lang('confirmation.preview')</button>
                            <button type="submit" name="action" value="Submit" class="btn waves-effect waves-light btn-primary" id="sa-warning" disabled>@lang('confirmation.submit')</button>
                            
                            @endif --}}
                                {{-- <button data-toggle="tab" href="#uploaddoc" role="tab" class="btn waves-effect waves-light btn-info" id="btn-previousUpdDoc">@lang('insuredPerson.previous')</button> --}}
                        </div>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
         
    
<script>
    function fieldchange()
    {
        //alert('test');
        var submitbutton = document.getElementById('sa-warning');
        //alert(submitbutton);
        if(submitbutton != null) submitbutton.disabled = true;
        //alert('test');
    }
    
    function statechange()
    {
        var statecode = $("#state1").val();
            // alert(statecode);
            $('#brname').find('option').not(':first').remove();
            if (statecode)
            {  
                $.ajax(
                { 
                    url: '/branch/'+statecode,
                    type: 'GET',
                    dataType: 'json',
                    success: function(data)
                    {
                    // console.log(data);
                    var len = 0;
                    if(data != null)
                    {
                        len = data.length;
                    }   

                        if(len > 0)
                        {
                            for(var i=0; i<len; i++)
                            {

                                var id = data[i].brcode;
                                var name = data[i].brname; 
                                
                                var option ="<option value='"+id+"'>"+name+"</option>";

                                $("#brname").append(option);
                            }
                        }   

                    }

                }); 
            }
        fieldchange();
    }
 </script>

 <script>
    $(document).ready(function () {
        $("#btnPreview").click(function () {
            $('#form_Preview').attr('action', '{{ route('confirmation_io.accident') }}');
        });
    });
</script>