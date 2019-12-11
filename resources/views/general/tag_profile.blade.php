<!-- =================================== Contains tag in every index for all modules ===================================== -->

<div class="row" id="rowindex">
   <div class="col-md-4 offset-md-8">
      <div class="card text-left" id="cardindex">
         @if($casetype==1)
         <div class="card-body" id="cardbodyaccident">
         @elseif($casetype==2)
         <div class="card-body" id="cardbodyod">
         @elseif($casetype==3)
         <div class="card-body" id="cardbodyilat">
         @elseif($casetype==4)
         <div class="card-body" id="cardbodydeath">
         @endif
            <table>
               <thead>
                     @if(!empty($tag_case_info)||$tag_case_info!=null)
                  <tr>
                     <td><span class="no_bold">@lang('form/scheme.general.green_header.name')</span>&nbsp;
                        <span class="no_bold">@lang('form/scheme.general.green_header.dash')</span>&nbsp;
                        <span class="no_bold">@lang('form/scheme.general.green_header.idno')</span></td>
                  </tr>
                 
                  <tr>
                     <td><label class="no_margin">{{$tag_case_info->case_ob_profile->name}} - {{$tag_case_info->case_ob_profile->idno}}</label></td>
                  </tr>
                  <tr>
                     <td><label></label></td>
                  </tr>
                  
                  <tr>
                     <td>
                        <span class="no_bold">@lang('form/scheme.general.green_header.scheme_ref_no')</span>&nbsp;
                        <span class="no_bold">@lang('form/scheme.general.green_header.dash')</span>&nbsp;
                        @if($casetype==4)
                        <span class="no_bold">@lang('form/scheme.general.green_header.date_of_death')</span>
                        @elseif($casetype==1)
                        <span class="no_bold">@lang('Date Of Accident')</span>
                        @else
                        <span class="no_bold">@lang('Date Of Notice')</span>
                        @endif
                     </td>
                  </tr>
                  <tr>
                     <td><label class="no_margin">{{$tag_case_info->schemerefno}} -  {{$tag_case_info->workbasket->assigned_date}}</label></td>
                  </tr>
                  @else
                 <tr>
                     <td><label class="no_margin">Web Service Problem</label></td>
                  </tr>
                 @endif
               </thead>
            </table>
         </div>
      </div>
   </div>
</div>