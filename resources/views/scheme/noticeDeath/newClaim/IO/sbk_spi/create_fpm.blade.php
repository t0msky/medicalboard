<div class="row">
   <div class="col-12">
      <div class="card">
         <div class="card-body">
            {{-- <form method="POST" action="/create_fpm" id="reset"> --}}
               <input type="hidden" name="_token" value="{{csrf_token()}}">
               <div class="row p-t-20">
                  <div class="col-md-4">
                     <div class="form-group">
                        <label class="control-label">@lang("form/scheme.notice_death.SCO.create_fpm.create_fpm")</label>
                        <select class="form-control" name="createfpm" id="createfpm" required>
                           <option value="">@lang('option.please_select')</option>
                           <option value="yes">@lang('option.yes')</option>
                           <option value="no">@lang('option.no')</option>
                        </select>
                     </div>
                  </div>
                  <div class="col-md-0" id="button_create_fpm">
                     <div class="card">
                        <div class="card-body">
                           <button type="button" class="btn btn waves-effect waves-light btn-success" alt="alert" id="sa-warning" >@lang('button.create')</button>
                        </div>
                     </div>
                  </div>
               </div>
            {{-- </form> --}}
         </div>
      </div>
   </div>
</div>

<script>

$(document).ready(function() {
          
   $("#button_create_fpm").hide();

   $('select[name=createfpm]').change(function () {
      if (this.value == 'yes') {
         $("#button_create_fpm").show();
      } else {
         $("#button_create_fpm").hide();
      }
   });

   //Warning Message
   $('#sa_warning').click(function(){
      swal({   
         title: 'Are you sure you want to create FPM?',
         showCancelButton: true,
         confirmButtonText: 'Submit',
         cancelButtonText: 'Cancel',
         reverseButtons: true
      }, function(){   
         swal(); 
      });
   });
});

</script>