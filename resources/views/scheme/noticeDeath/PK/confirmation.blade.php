    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                <form action="/confirmation_death" method="POST">    
                    

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
                <input type='hidden' name='caserefno' id='caserefno' value='{{$caserefno}}'>
                <input type="hidden" name="_token" value="{{csrf_token()}}">

                    <h5 class="card-title">@lang('confirmation.title_c')</h5>
                    <hr>
            
                    @if (!empty($confirmation -> jsection)) 
                    @foreach($confirmation -> jsection as $d)

                    <div class="row p-t-20">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label">@lang('confirmation.attr.idtype')</label>
                                @foreach($idtype as $id)
                                @if(!empty($d) && $id->refcode == $d->idtype)
                                <input type="text" id="idtype" name="idtype[]" value="{{$id->descen}}" class="form-control" readonly>
                                 @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label">@lang('confirmation.attr.idno')</label>
                                @if(!empty($d) && $d->idno !='')
                                <input type="text" id="idno" name="idno[]" value="{{ $d->idno }}" class="form-control" readonly>
                                @else
                                <input type="text" id="idno" name="idno[]" value="" class="form-control">
                                @endif
                            </div>
                        </div>

                        
                        <input type='hidden' name='uniquerefno[]' id='uniquerefno' value='{{ $d->uniquerefno }}'>
                    
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label">@lang('confirmation.attr.sectionj_received')</label>
                                <select name="jrecv[]" id="jrecv" class="form-control" onchange='fieldchange()' required>
                                    @if (!empty($d) && $d->jrecv == 'Y')
                                    <option value="Y" selected>Complete</option>
                                    <option value="N">Not Complete</option>
                                    @elseif (!empty($d) && $d->jrecv == 'N')
                                    <option value="Y">Complete</option>
                                    <option value="N" selected>Not Complete</option>
                                    @else
                                    <option value="Y">Complete</option>
                                    <option value="N">Not Complete</option>
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label">@lang('confirmation.attr.complete_sectionj')
                                </label>
                                @if(!empty($d) && $d->jrecvdate != '')
                                <input type="date" id="jrecvdate" name="jrecvdate[]" onchange='fieldchange()' value="{{substr($d->jrecvdate,0,4)}}-{{substr($d->jrecvdate,4,2)}}-{{substr($d->jrecvdate,6,2)}}" class="form-control" required>
                                @else
                                <input type="date" id="jrecvdate" name="jrecvdate[]" onchange='fieldchange()' value="" class="form-control" required>
                                @endif
                            </div>
                        </div>
                
                    </div>

                    @endforeach
                    @endif

                    <h5 class="card-title">@lang('confirmation.title_ot')</h5>
                    <hr>

                    @if (!empty($confirmation -> jsection)) 
                    @foreach($confirmation -> jsection as $d)

                    <div class="row p-t-20">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label">@lang('confirmation.attr.idtype')</label>
                                @foreach($idtype as $id)
                                @if(!empty($d) && $id->refcode == $d->idtype)
                                <input type="text" id="idtype" name="idtype[]" value="{{$id->descen}}" class="form-control" readonly>
                                 @endif
                                @endforeach
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label">@lang('confirmation.attr.idno')</label>
                                @if(!empty($d) && $d->idno !='')
                                <input type="text" id="idno" name="idno[]" value="{{ $d->idno }}" class="form-control" readonly>
                                @else
                                <input type="text" id="idno" name="idno[]" value="" class="form-control">
                                @endif
                            </div>
                        </div>

                        
                        <input type='hidden' name='uniquerefno[]' id='uniquerefno' value='{{ $d->uniquerefno }}'>
                    
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label">@lang('confirmation.attr.sectionj_received')</label>
                                <select name="jrecv[]" id="jrecv" class="form-control" onchange='fieldchange()' required>
                                    @if (!empty($d) && $d->jrecv == 'Y')
                                    <option value="Y" selected>Complete</option>
                                    <option value="N">Not Complete</option>
                                    @elseif (!empty($d) && $d->jrecv == 'N')
                                    <option value="Y">Complete</option>
                                    <option value="N" selected>Not Complete</option>
                                    @else
                                    <option value="Y">Complete</option>
                                    <option value="N">Not Complete</option>
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label">@lang('confirmation.attr.complete_sectionj')
                                </label>
                                @if(!empty($d) && $d->jrecvdate != '')
                                <input type="date" id="jrecvdate" name="jrecvdate[]" onchange='fieldchange()' value="{{substr($d->jrecvdate,0,4)}}-{{substr($d->jrecvdate,4,2)}}-{{substr($d->jrecvdate,6,2)}}" class="form-control" required>
                                @else
                                <input type="date" id="jrecvdate" name="jrecvdate[]" onchange='fieldchange()' value="" class="form-control" required>
                                @endif
                            </div>
                        </div>
                
                    </div>

                    @endforeach
                    @endif

                    <div class="row p-t-20">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label"> @lang('confirmation.attr.notice_date')</label>
                                <input type="date" name="notice_date" id="notice_date" onchange='fieldchange()' class="form-control" value="{{date('Y-m-d')}}" readonly>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label">@lang('confirmation.attr.acceptance_stamp')</label>
                                @if(!empty($confirmation) && $confirmation->stampdate != '')
                                <input type="date" id="stampdate" name="stampdate" onchange="checkstampdate()" value="{{substr($confirmation->stampdate,0,4)}}-{{substr($confirmation->stampdate,4,2)}}-{{substr($confirmation->stampdate,6,2)}}" class="form-control" required>
                                @else
                                <input type="date" id="stampdate" name="stampdate" onchange="checkstampdate()" value="" class="form-control" required>
                                @endif
                                <label class="control-label" id='lblstamperror' style='color:red'></label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label">@lang('confirmation.attr.remarks')</label>
                               @if(!empty($confirmation) && $confirmation->remarks != '')
                                <textarea type="text" id="remarks" name="remarks" value="" onchange='fieldchange()' class="form-control">{{$confirmation->remarks}}</textarea>
                                @else
                                <textarea type="text" id="remarks" name="remarks" value="" onchange='fieldchange()' class="form-control"></textarea>
                                @endif
                               
                            </div>
                        </div>
                    </div>
                        
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-actions">
                                @if (!empty ($confirmation))
                                <!--button type="submit" name="action" value="Preview" class="btn waves-effect waves-light btn-secondary">@lang('confirmation.preview')</button-->
                                <button type="submit" name="action" value="Submit" class=" btn waves-effect waves-light btn btn-primary" alt="alert" id="btnsubmit" onclick="return confirm('Are you sure want to submit?');">@lang('confirmation.submit')</button>
                                <a href="/preview" id='preview' type="button" name="action" value="Preview" class="btn btn-secondary">@lang('confirmation.preview')</a>
                                {{-- <button type="submit" name="action" value="Submit" class="btn btn-primary" alt="alert"  id="sa-warning">@lang('confirmation.submit')</button> --}}
                                 @else
                                <button type="submit" name="action" value="Submit" class="btn waves-effect waves-light btn btn-primary" id="btnsubmit" disabled>@lang('confirmation.submit')</button>
                                <a href="/preview" id='preview' type="button" name="action" value="Preview" class="btn btn-secondary">@lang('confirmation.preview')</a>
                                @endif
                                <button type="submit" name="action" value="Save" id="btnsubmit" class="btn waves-effect waves-light btn btn-success">@lang('confirmation.save')</button>
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
    submitbutton.disabled = true;
    //alert('test');
    }

    function statechange(){
    
    var statecode = $("#state1").val();
    // alert(statecode);
    $('#brname').find('option').not(':first').remove();
    if (statecode){  

         $.ajax({ 
           url: '/branch/'+statecode,
           type: 'GET',
           dataType: 'json',
           success: function(data){
//            console.log(data);

            var len = 0;
            if(data != null){
            len = data.length;
            }   

            if(len > 0){
            for(var i=0; i<len; i++){

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
    function checkstampdate()
    {
       
        var stampdate = document.getElementById('stampdate').value;
        var lblstamperror = document.getElementById('lblstamperror');
        var btnsubmit = document.getElementById('btnsubmit');
        var today = new Date();
        var dd = today.getDate();
        var mm = today.getMonth()+1; //January is 0!
        var yyyy = today.getFullYear();
      
        if(dd<10) {
            dd = '0'+dd;
        } 
    
        if(mm<10) {
            mm  = '0'+mm;
        } 
  
      var currdate = yyyy + '-' + mm + '-' + dd;
      var days2 = getdiff(currdate,stampdate);
      
      if(days2 > 1)
      {
        lblstamperror.innerHTML = 'Stamp date must not after current date';
        btnsubmit.disabled = true;
        return;
      }
      else
      {
        lblstamperror.innerHTML = '';
        btnsubmit.disabled = false;
      }
    }
    
    function getdiff(startdate,enddate){
      var dropdt = new Date(startdate);
      var pickdt = new Date(enddate);
      return parseInt(((pickdt - dropdt) / (24 * 3600 * 1000)) + 1);
    }
  </script>

