<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="/applicantinfo">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">

                    <div class="form-body">
                           <h5 class="card-title">@lang('applicantDetails.title')</h5>
                           <hr>

                           @if(Session::get('messageapplicantinfo'))
                           <div class="card-footer">
   
                               <div class="alert alert-warning">
                                   {{Session::get('messageapplicantinfo')}}
                               </div>
   
                           </div>
                           @elseif (!empty($messageapplicantinfo))
                           <div class="card-footer">
   
                               <div class="alert alert-warning">
                                   {{$messageapplicantinfo}}
                               </div>
   
                           </div>
                           @endif

                           

                           @if (!empty($applicantinfo)) 
                           @foreach($applicantinfo as $key => $app)
                           <div class="row">
                               <div class="col-md-12">
                                   <div id="applicant_accordion{{ $key }}" role="tablist" aria-multiselectable="true">
                                       <div class="card m-b-0">
                                           <div class="card-header" role="tab" id="applicantinfo">
                                               <h6 class="card-subtitle">
                                                   @if ($app->name != '')
                                                   <a class="collapsed link" data-toggle="collapse" data-parent="#applicant_accordion{{ $key }}" href="#applicant_collapse{{ $key }}" aria-expanded="false" aria-controls="collapseTwo2">
                                                       @lang('applicantDetails.title') ({{$app->idno}})
                                                   </a>
                                                   @endif
                                               </h6>
                                           </div>
                                           <div id="applicant_collapse{{ $key }}" class="collapse" role="tabpanel">
                                               <div class="card-body">
                                               <div class="row">
                                               <div class="col-md-6">
                                                   <div class="form-group">
                                                       <label class="control-label">@lang('applicantDetails.attr.name')</label>
                                                       @if(!empty($app) && $app->name !='')
                                                       <input type="text" id="name" name="name[]" value="{{ $app->name }}" class="form-control">
                                                       @else
                                                       <input type="text" id="name" name="name[]" value="" class="form-control">
                                                       @endif
                                                       <input type="hidden" class="kira" id="kira" name="kira" value="{{ $key }}" disabled>
                                                   </div>
                                               </div>
                                               <div class="col-md-6">
                                                   <div class="form-group">
                                                       <label class="control-label">@lang('applicantDetails.attr.relationship')</label>
                                                       <select name='relation[]' id='relation{{ $key }}' class='form-control'>
                                                           @foreach($applrelation as $aplrl)
                                                           @if(!empty($app) && $app->relation == $aplrl->refcode)
                                                           <option value='{{$aplrl->refcode}}' selected>{{$aplrl->descen}}</option>
                                                           @else
                                                           <option value='{{$aplrl->refcode}}'>{{$aplrl->descen}}</option>
                                                           @endif
                                                           @endforeach
                                                       </select>
                                               
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="row">
                                               <div class="col-md-6">
                                                   <div class="form-group">
                                                       <label class="control-label">@lang('applicantDetails.attr.id_type')</label>
                                                       <select id="idtype" class="form-control" value="@if(!empty($app)){{$app->idtype}} @endif" name="idtype[]">
                                                           <!--option value="">@if(!empty($obprofile)){{$obprofile->idtype}} @endif</option-->
                                                       @foreach($idtype as $id)
                                                       @if (!empty($app) && $id->refcode == $app->idtype)
                                                       <option value="{{$id->refcode}}" selected>{{$id->descen}}</option>
                                                       @else
                                                       <option value="{{$id->refcode}}">{{$id->descen}}</option>
                                                       @endif
                                                       @endforeach
                                                   </select>
                                                   </div>
                                               </div>
                                               <div class="col-md-6">
                                                   <div class="form-group">
                                                       <label class="control-label">@lang('applicantDetails.attr.id_no')</label>
                                                       @if(!empty($app) && $app->idno !='')
                                                       <input type="text" id="idno" name="idno[]" value="{{ $app->idno }}" class="form-control">
                                                       @else
                                                       <input type="text" id="idno" name="idno[]" value="" class="form-control">
                                                       @endif
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="row">
                                               <div class="col-md-12">
                                                   <div class="form-group">
                                                       <label class="control-label">@lang('applicantDetails.attr.address')</label>
                                                       @if(!empty($app) && $app->add1 !='')
                                                       <input type="text" id="add1" name="add1[]" value="{{ $app->add1 }}" class="form-control">
                                                       @else
                                                       <input type="text" id="add1" name="add1[]" value="" class="form-control">
                                                       @endif
                                                   </div>
                                               </div>
                                               <div class="col-md-12">
                                                   <div class="form-group">
                                                       @if(!empty($app) && $app->add2 !='')
                                                       <input type="text" id="add2" name="add2[]" value="{{ $app->add2 }}" class="form-control">
                                                       @else
                                                       <input type="text" id="add2" name="add2[]" value="" class="form-control">
                                                       @endif
                                                   </div>
                                               </div>
                                               <div class="col-md-12">
                                                   <div class="form-group">
                                                       @if(!empty($app) && $app->add3 !='')
                                                       <input type="text" id="add3" name="add3[]" value="{{ $app->add3 }}" class="form-control">
                                                       @else
                                                       <input type="text" id="add3" name="add3[]" value="" class="form-control">
                                                       @endif
                                                   </div>
                                               </div>
                                           </div>

                                           <div class="row">
                                               <div class="col-md-4">
                                                   <div class="form-group">
                                                       <label class="control-label">@lang('applicantDetails.attr.postcode')</label>
                                                       @if(!empty($app) && $app->postcode !='')
                                                       <input type="text" id="postcode" name="postcode[]" value="{{ $app->postcode }}" class="form-control">
                                                       @else
                                                       <input type="text" id="postcode" name="postcode[]" value="" class="form-control">
                                                       @endif
                                                   </div>
                                               </div>
                                               <div class="col-md-4">
                                                   <div class="form-group">
                                                       <label class="control-label">@lang('applicantDetails.attr.state')</label>
                                                       <select name='statecode[]' id='statecode' class='form-control'>
                                                           @foreach($state as $s)
                                                           @if(!empty($app) && $app->statecode == $s->refcode)
                                                           <option value='{{$s->refcode}}' selected>{{$s->descen}}</option>
                                                           @else
                                                           <option value='{{$s->refcode}}'>{{$s->descen}}</option>
                                                           @endif
                                                           @endforeach
                                                       </select>
                                                   </div>
                                               </div>
                                               <div class="col-md-4">
                                                   <div class="form-group">
                                                       <label class="control-label">@lang('applicantDetails.attr.city')</label>
                                                       @if(!empty($app) && $app->city !='')
                                                       <input type="text" id="city" name="city[]" value="{{ $app->city }}" class="form-control">
                                                       @else
                                                       <input type="text" id="city" name="city[]" value="" class="form-control">
                                                       @endif
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="row">
                                                <div class="col-md-4">
                                                   <div class="form-group">
                                                       <label class="control-label">@lang('applicantDetails.attr.telNo')</label>
                                                       @if(!empty($app) && $app->telno !='')
                                                       <input type="text" id="telno" name="telno[]" value="{{ $app->telno }}" class="form-control">
                                                       @else
                                                       <input type="text" id="telno" name="telno[]" value="" class="form-control">
                                                       @endif
                                                   </div>
                                               </div>
                                               <div class="col-md-4">
                                                   <div class="form-group">
                                                       <label class="control-label">@lang('applicantDetails.attr.mobileNo')</label>
                                                       @if(!empty($app) && $app->mobileno !='')
                                                       <input type="text" id="mobileno" name="mobileno[]" value="{{ $app->mobileno }}" class="form-control">
                                                       @else
                                                       <input type="text" id="mobileno" name="mobileno[]" value="" class="form-control">
                                                       @endif
                                                   </div>
                                               </div>
                                               <div class="col-md-4">
                                                   <div class="form-group">
                                                       <label class="control-label">@lang('applicantDetails.attr.email')</label>
                                                       @if(!empty($app) && $app->email !='')
                                                       <input type="text" id="email" name="email[]" value="{{ $app->email }}" class="form-control">
                                                       @else
                                                       <input type="text" id="email" name="email[]" value="" class="form-control">
                                                       @endif
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="row">                                              
                                               <div class="col-md-4">
                                                   <div class="form-group">
                                                       <label class="control-label">@lang('applicantDetails.attr.pobox')</label>
                                                       @if(!empty($app) && $app->pobox !='')
                                                       <input type="text" id="pobox" name="pobox[]" value="{{ $app->pobox }}" class="form-control">
                                                       @else
                                                       <input type="text" id="pobox" name="pobox[]" value="" class="form-control">
                                                       @endif
                                                   </div>
                                               </div>
                                               <div class="col-md-4">
                                                   <div class="form-group">
                                                       <label class="control-label">@lang('applicantDetails.attr.lockedbag')</label>
                                                       @if(!empty($app) && $app->lockedbag !='')
                                                       <input type="text" id="lockedbag" name="lockedbag[]" value="{{ $app->lockedbag }}" class="form-control">
                                                       @else
                                                       <input type="text" id="lockedbag" name="lockedbag[]" value="" class="form-control">
                                                       @endif
                                                   </div>
                                               </div>
                                               <div class="col-md-4">
                                                   <div class="form-group">
                                                       <label class="control-label">@lang('applicantDetails.attr.wdt')</label>
                                                       @if(!empty($app) && $app->wdt !='')
                                                       <input type="text" id="wdt" name="wdt[]" value="{{ $app->wdt }}" class="form-control">
                                                       @else
                                                       <input type="text" id="wdt" name="wdt[]" value="" class="form-control">
                                                       @endif
                                                   </div>
                                                   
                                               </div>
                                           </div>
                                           <div class="row">
                                         
                                               <div class="col-md-4" id="div_amount{{ $key }}" >
                                                   <div class="form-group">
                                                       <label class="control-label">@lang('applicantDetails.attr.amount')</label>
                                                       @if(!empty($app) && $app->amount !='')
                                                       <input type="text" id="amount" name="amount[]" value="{{ $app->amount }}" class="form-control">
                                                       @else
                                                       <input type="text" id="amount" name="amount[]" value="" class="form-control">
                                                       @endif
                                                   </div>
                                               </div>  
                                           
                                           </div>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           @endforeach 

                           @else
                               @include('scheme.noticeDeath.PK.applicant_add')
                           @endif
                       </div>
                       <div id="add_app_accordian">
                       </div>

                       <div class="form-actions text-right">
                           <button type="submit" class="btn btn waves-effect waves-light btn-success"> <i class="fa fa-check"></i>
                           @lang('applicantDetails.save')</button>
                               <button type="button" id="btn_add_applicant" class="btn btn-sm waves-effect waves-light btn-info">Add Applicant</button>
                           
                           <br><br>
                       </div>
                   
                   </div>
               </form>
           </div>
       </div>
   </div>

@php($no_app = 0)
@php($applicantinfo == null ? $no_app = 0 : $no_app = count($applicantinfo))

<script src="{{ asset('/PERKESO_UI/assets/node_modules/jquery/jquery-3.2.1.min.js') }}"></script>
<link href="{{ asset('/css/overrides.css') }}" rel="stylesheet" type="text/css" />
<script>
   
$(document).ready(function() {

   $("#btn_add_applicant").hide();

   var no_app = {!! $no_app !!};
   //alert(no_app);

   if(no_app > 0){
       var i = no_app-1;

       check_fromdb();

   }else{
       var i = 0;
   }

   var html;
   // alert('Jquery detected');

   // Append applicant


   $('#btn_add_applicant').click(function(){  
       //alert(i);

   var abc = $('div[id^="applicant_collapse"]').length;
   console.log('no of applicant:' + abc);
   var relation = $('#relation').val();

   //01 - wife
   //02 - husband
   //03 - father
   //04 - mother
   //05 - child
   //06 - sibling
   //07 - Grandparent
   //08 - others

   if(relation == '03' || relation == '04') {
       var next_applicant = "04";

       if(abc >1){
           return false;
       }else if(abc == 1){
           $("#btn_add_applicant").hide();
       }
   }else if(relation == '01') {
       var next_applicant = "01";
       if(abc >3){
           return false;
       }else if (abc == 3){
           $("#btn_add_applicant").hide();
       }
   }
       i++;

       $('#applicantinfo0').show();

       var no = i + 1;

       html = '<div class="row"><div class="col-md-12"><div id="applicant_accordion'+i+'" role="tablist" aria-multiselectable="true"><div class="card m-b-0">';
       html += '<div class="card m-b-0"><div class="card-header" role="tab" id="applicantinfo"><h6 class="card-subtitle"><a class="collapsed link" data-toggle="collapse" data-parent="#applicant_accordion'+i+'" href="#applicant_collapse'+i+'" aria-expanded="false" aria-controls="collapseTwo2">@lang('applicantDetails.title') '+no+'</a> <a onclick="delete_div('+i+')" style="text-align:right; color:red"><i class="far fa-trash-alt"></i></a></h6></div>';
       html += '<div id="applicant_collapse'+i+'" class="collapse" role="tabpanel">';
       html += '<div class="card-body"><div class="row">';    
       html += ' <div class="col-md-6"><div class="form-group"><label class="control-label">@lang('applicantDetails.attr.name')</label><input type="text" id="name" name="name[]" value="" class="form-control"><input type="hidden" class="kira" id="kira" name="kira" value="'+i+'" disabled></div></div>';
       html += '<div class="col-md-6"><div class="form-group"><label class="control-label">@lang('applicantDetails.attr.relationship')</label>';
       if(next_applicant == '01' || next_applicant == '04'){
           html += '<select class="form-control" name="relation[]" id="relation'+i+'" disabled>'; 
           html += '@foreach($applrelation as $aplrl)';
           if (next_applicant == {{$aplrl->refcode}}){
               html += '<option value="{{$aplrl->refcode}}" selected>{{$aplrl->descen}}</option>';
           }else{
               html += '<option value="{{$aplrl->refcode}}">{{$aplrl->descen}}</option>';
           }
           html += '@endforeach </select></div> </div></div>';
       }else{
           html += '<select class="form-control" name="relation[]" id="relation'+i+'">'; 
           html += '@foreach($applrelation as $aplrl)<option value="{{$aplrl->refcode}}">{{$aplrl->descen}}</option> @endforeach </select></div> </div></div>';
       }
       html += '<div class="row"><div class="col-md-6"><div class="form-group"><label class="control-label">@lang('applicantDetails.attr.id_type')</label><select id="idtype" class="form-control" value="" name="idtype[]"> @foreach($idtype as $id)<option value="{{$id->refcode}}">{{$id->descen}}</option> @endforeach </select></div> </div>';
       html += '<div class="col-md-6"><div class="form-group"><label class="control-label">@lang('applicantDetails.attr.id_no')</label><input type="text" id="idno" name="idno[]" value="" class="form-control"></div></div></div>';
       html += '<div class="row"><div class="col-md-12"><div class="form-group"><label class="control-label">@lang('applicantDetails.attr.postal_address')</label><input type="text" id="add1" name="add1[]" value="" class="form-control"></div></div>';
       html += '<div class="col-md-12"><div class="form-group"><input type="text" id="add2" name="add2[]" value="" class="form-control"></div></div><div class="col-md-12"><div class="form-group"><input type="text" id="add3" name="add3[]" value="" class="form-control"></div></div></div>';
       html += '<div class="row"><div class="col-md-4"><div class="form-group"><label class="control-label">@lang('applicantDetails.attr.postcode')</label><input type="text" id="postcode" name="postcode[]" value="" class="form-control"></div></div>';
       html += '<div class="col-md-4"><div class="form-group"><label class="control-label">@lang('applicantDetails.attr.state')</label><select name="statecode[]" id="statecode" class="form-control"> @foreach($state as $s)<option value="{{$s->refcode}}">{{$s->descen}}</option> @endforeach </select></div></div>';
       html += '<div class="col-md-4"><div class="form-group"><label class="control-label">@lang('applicantDetails.attr.city')</label><input type="text" id="city" name="city[]" value="" class="form-control"></div></div></div>';
       html += '<div class="row"><div class="col-md-4"><div class="form-group"><label class="control-label">@lang('applicantDetails.attr.telNo')</label><input type="text" id="telno" name="telno[]" value="" class="form-control"></div></div>';
       html += '<div class="col-md-4"><div class="form-group"><label class="control-label">@lang('applicantDetails.attr.mobileNo')</label><input type="text" id="mobileno" name="mobileno[]" value="" class="form-control"></div></div>';
       html += '<div class="col-md-4"><div class="form-group"><label class="control-label">@lang('applicantDetails.attr.email')</label><input type="text" id="email" name="email[]" value="" class="form-control"></div></div></div>';
       html += '<div class="row"><div class="col-md-4"><div class="form-group"><label class="control-label">@lang('applicantDetails.attr.amount')</label><input type="text" id="amount" name="amount[]" value="" class="form-control"></div></div>';
       html += '<div class="col-md-4"><div class="form-group"><label class="control-label">@lang('applicantDetails.attr.pobox')</label><input type="text" id="pobox" name="pobox[]" value="" class="form-control"></div></div>';
       html += '<div class="col-md-4"><div class="form-group"><label class="control-label">@lang('applicantDetails.attr.lockedbag')</label><input type="text" id="lockedbag" name="lockedbag[]" value="" class="form-control"> </div></div></div>';
       html += '<div class="row"><div class="col-md-4"><div class="form-group"><label class="control-label">@lang('applicantDetails.attr.wdt')</label><input type="text" id="wdt" name="wdt[]" value="" class="form-control"></div></div></div></div></div></div></div></div>';


       $('#add_app_accordian').append(html);
   });

   $('select[id^=relation]').on('change', function () {

       var nilai = $(this).val();
       var id = $(this).attr("id");
       var values = id.split('n');
       var this_id = values[1];

       console.log('id'+id);
       console.log('this_id'+ this_id);

   //01 - wife
   //02 - husband
   //03 - father
   //04 - mother
   //05 - child
   //06 - sibling
   //07 - Grandparent
   //08 - others

      // alert(nilai);

       if (nilai == '08'){
           alert(nilai);
           $('#btn_add_applicant').hide();
           $('#div_amount'+this_id).show();

       }else if(nilai == '03'){
           $('#btn_add_applicant').show();
           $('#div_amount'+this_id).hide();

       }else if(nilai == '04'){
           $('#btn_add_applicant').show();
           $('#div_amount'+this_id).hide();

       }else if(nilai == '01'){
           $('#btn_add_applicant').show();
           $('#div_amount'+this_id).hide();

       }else if(nilai == '02' || nilai == '05' || nilai == '06' || nilai == '07'){ 

           if (this_id == '0'){

               var count = document.getElementsByClassName('kira');
               var len = count.length;
               for (var j=0; j<len; j++) {

                   var val = count[j].value;
                       if (val !== 0){

                           var relation = $('#relation'+val).val();
                           if(relation !== '02' && relation !== '05' && relation !== '06' && relation !== '07'){

                               // $('#applicant_accordion'+val).empty();

                               $('#applicant_accordion'+val).find('input:text').val('');
                               $('#applicant_accordion'+val).find('select').val('');

                           }
                           
                       }

               }

           }

       }else{
           $('#btn_add_applicant').hide();
           $('#div_amount'+id).hide();
       }


     

   });

}); 

function Cuba(){
   var abc = $('input[name*="idno"]').length;
   // alert(abc);
   var relation = $('#relation').val();
   // alert(relation);

   if(relation == '03') {
       if(abc >4){
           // alert("hahahaha");
           return false;
       }
   }
}

function labelOnClick () {
   function makeDivId(id) {
       return id + "_div";
   };

   var div = this.getElementById(makeDivId(this.id));

   if (div) {
       div.parentNode.removeChild(div);
   } else {
       div = document.createElement("div");
       div.innerHTML = outMsg;
       div.id = makeDivId(this.id);

       this.appendChild(div);
   }
}

function delete_div(i){

   // alert(i);
   $("#applicant_accordion"+i).empty();

   var abc = $('div[id^="applicant_collapse"]').length;
   var relation = $('#relation').val();
   if(relation == '03' || relation == '04') {

       if(abc <2){
           $("#btn_add_applicant").show();
       }
   }else if(relation == '01') {
       if(abc <4){
           $("#btn_add_applicant").show();
       }
   }

}

function check_fromdb(){
        
   var count = document.getElementsByClassName('kira');
   var len = count.length;
       for (var j=0; j<len; j++) {

           var id = count[j].value;
           
           var relation = $('#relation'+id).val();

           if (relation !== '08'){
               $('#div_amount'+id).hide();

           }

                 
       }

       var relation0 = $('#relation0').val();
       if (relation0 == '04'){

           if ( len >= '2'){
               $("#btn_add_applicant").hide();
           }else{
               $("#btn_add_applicant").show();
           }

           
       }else if(relation0 == '01'){

           if(len >= '4'){

               $("#btn_add_applicant").hide();
           }else{

               $("#btn_add_applicant").show();

           }

       }
   
}

</script>