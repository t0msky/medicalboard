<div class="row mcitem" id="mc_list">
     <div class="col-md-12">
       <div id="mc_accordion0" role="tablist" aria-multiselectable="true">
         <div class="card m-b-0">
           <div class="card-header" role="tab" id="attendwork">
             <h6 class="card-subtitle">
               <a class="collapsed link" data-toggle="collapse" data-parent="#mc_accordion0" href="#mc_collapse0" aria-expanded="false" aria-controls="collapseTwo2">> Medical Leave</a>
               <button type="button" id="btn_del_mc0" class="close btn_del_mc" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button>
             </h6>
           </div>
           <div id="mc_collapse0" class="collapse" role="tabpanel">
             <div class="card-body">
               <div class='row'>       
                 <div class="row">
                   <div class="col-md-3">
                     <div class="form-group">
                       <label class="control-label">Type Of HUS</label>
                       <select class="form-control" name="hussts[]">
                         <option value="">Please select</option>
                         @foreach($hussts as $typehus)
                         <option value="{{ $typehus->refcode }}" >{{$typehus->descen}}</option>
                         @endforeach
                       </select>
                     </div>
                   </div>
                   <div class="col-md-3">
                     <div class="form-group">
                       <label class="control-label" >@lang('medicalDetails.attr.start_mc')</label>
                       <input id="mcstartdate0" name="mcstartdate[]" type="date" class="form-control counttotalmc" >
                     </div>
                   </div>
                   <div class="col-md-3">
                     <div class="form-group">
                       <label class="control-label" >@lang('medicalDetails.attr.end_mc')</label>
                       <input id="mcenddate0" name="mcenddate[]" type="date" class="form-control counttotalmc" >
                     </div>
                   </div>
                   <div class="col-md-3">
                     <div class="form-group">
                       <label class="control-label">@lang('medicalDetails.attr.total_days')</label>
                       <input type="text" id="totalmc0" name="totalmc[]" class="form-control" readonly>
                     </div>
                   </div>
                 </div>
                 <label class="control-label" id='lblmcerror0' style='color:red'></label>
               </div>
                 <br/>
               <div class="row">
                 <div class="col">
                   <div id="work_accordion0" role="tablist" aria-multiselectable="true">
                     <div class="card m-b-0">
                       <div class="card-header" role="tab" id="attendwork">
                         <h6 class="card-subtitle">
                           <a class="collapsed link" data-toggle="collapse" data-parent="#work_accordion0" href="#work_collapse0" aria-expanded="false" aria-controls="collapseTwo3">
                             > @lang('medicalDetails.attr.attended_work')
                           </a>
                         </h6>
                       </div>
                       <div id="work_collapse0" class="collapse" role="tabpanel" aria-labelledby="attendwork">
                         <div class="card-body">
                           <div class="row">
                             <table id="attended_work_tbl0" class="table table-sm table-bordered" data-toggle-column="first">
                               <thead>
                                 <tr>
                                   <th style='width:17%'>@lang('medicalDetails.attr.start_date')</th>
                                   <th style='width:18%'>@lang('medicalDetails.attr.end_date')</th>
                                   <th style='width:15%'>@lang('medicalDetails.attr.days_work')</th>
                                   <th style='width:50%'>@lang('medicalDetails.attr.status')</th>
                                   <th style='width:50%'>@lang('medicalDetails.attr.action')</th>
                                 </tr>
                               </thead>
                               <tbody>
                                 <tr data-expanded="true" class="workrow">
                                   <td>
                                     <div class="col-md-12">
                                       <input id="workstartdate0-0" name="workstartdate0[]" type="date" class="form-control counttotalwork" >
                                     </div>
                                   </td>
                                   <td>
                                     <div class="col-md-12">
                                       <input id="workenddate0-0" name="workenddate0[]" type="date" class="form-control counttotalwork" >
                                     </div>
                                   </td>
                                   <td>
                                     <input type="text" id="totalwork0-0" name="totalwork0[]" class="form-control" readonly>
                                   </td>
                                   <td>
                                     <select type="text" id="statuswork" name="statuswork0[]" class="form-control">
                                       @foreach ($worksts as $w)
                                       <option value="{{$w->refcode}}">{{$w->descen}}</option>
                                       @endforeach
                                     </select>
                                   </td>
                                   <td><button type="button" id="btn_del_workmc0-0" class="btn btn-sm btn-danger btn_del_workmc"><i class="fas fa-trash-alt fa-sm"></i></button></td>
                                 </tr>
                               </tbody>
                             </table>
                             <label class="control-label" id='lblworkerror0' style='color:red'></label>
                           </div>
                           <div class="row">
                             <button type="button" id="btn_add_workmc0" class="btn btn-sm waves-effect waves-light btn-success btn_add_workmc">Add Attended Work</button>
                           </div>
                         </div>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>