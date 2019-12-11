<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="confirmationilat" method="POST">  
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
                    @csrf
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="control-label">@lang('Confirmation Completed?')</label>
                                <select name="jrecv" id="jrecv" class="form-control" onchange='fieldchange()' required>
                                    @if (!empty($confirmation) && $confirmation->jrecv == 'Y')
                                    <option selected hidden readonly value="please select">@lang('Please Select')</option>
                                    <option value="Y" selected>@lang('Yes')</option>
                                    <option value="N">@lang('No')</option>
                                    @elseif (!empty($confirmation) && $confirmation->jrecv == 'N')
                                    <option selected hidden readonly value="please select">@lang('Please Select')</option>
                                    <option value="Y">@lang('Yes')</option>
                                    <option value="N" selected>@lang('No')</option>
                                    @else
                                    <option selected hidden readonly value="please select">@lang('Please Select')</option>
                                    <option value="Y">@lang('Yes')</option>
                                    <option value="N" selected>@lang('No')</option>
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group" id="completion_date">
                                <label class="control-label">@lang('Completion Date')</label>
                                    @if(!empty($confirmation) && $confirmation->jrecvdate != '')
                                    <input type="date" id="jrecvdate" name="jrecvdate" value="{{substr($confirmation->jrecvdate,0,4)}}-{{substr($confirmation->jrecvdate,4,2)}}-{{substr($confirmation->jrecvdate,6,2)}}" class="form-control" required>
                                    @else
                                    <input type="date" id="jrecvdate" name="jrecvdate" value="" class="form-control" required>
                                    @endif
                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('scheme/ob.save')</button>
			@foreach(Session::get('workflow') as $s)
                        	<button type="submit" class="btn btn waves-effect waves-light btn-success" id="submit" name="submit" value="{{$s->id}}">{{$s->name}}</button>
                        @endforeach
                    </div>
                    <br/>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- row -->
<script>

    function fieldchange()
    {
        //alert('test');
        var submitbutton = document.getElementById('submit');
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

    // Check
    // $("#customCheck1").attr("checked", true);
    // $('select[name=jrecv]').change(function () {
    // if (this.value == 'Y') {
    //     $("#jrecv").prop('readonly', false);
    //     $("#jrecv").disabled();


    // Uncheck
    // $("#customCheck1").attr("checked", false);


</script>


