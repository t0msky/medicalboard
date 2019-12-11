<div class="row">
   <div class="col-12">
       <div class="card">
           <div class="card-body">
               <div class="p-20">
                  <form action="#">
                     <div class="col-md-12" id="container">
                        <div class="table-responsive" id="table-medical">
                           <table  id="table-medical-details0" class="table table-sm table-bordered" data-toggle-column="first">
                              <thead>
                                    <tr>
                                       <th style='width:1%'>No</th> 
                                       <th style='width:15%'>Year</th> 
                                       <th style='width:15%'>Month</th> 
                                       <th style='width:15%'>Employer Code</th> 
                                       <th style='width:15%'>Employer Name</th> 
                                       <th style='width:15%'>Wages (RM)</th> 
                                       <th style='width:15%'>Assumed Wages</th> 
                                       <th style='width:1%'>Contribution Paid</th>
                                       <th style='width:1%'>Contribution Payable (RM)</th>
                                       <th style='width:1%'>Contribution Surplus/Deficit (RM)</th>
                                       <th style='width:1%'>Action</th>
                                    </tr>
                              </thead>
                              <tbody>
                                 <tr data-expanded="true" class="workrow" id="tr0_0">
                                    <td>
                                       1.                                                   
                                    </td>
                                    <td>
                                       <input type="text" name="" id="" class="form-control">                                                   
                                    </td>
                                    <td>
                                       <input type="text" name="" id="" class="form-control">                                                   
                                    </td>
                                    <td>
                                       <input type="text" name="" id="" class="form-control">                                                   
                                    </td>
                                    <td>
                                       <input type="text" name="" id="" class="form-control">                                                   
                                    </td>
                                    <td>
                                       <input type="text" name="" id="" class="form-control">                                                   
                                    </td>
                                    <td>
                                       <input type="text" name="" id="" class="form-control">                                                   
                                    </td> 
                                    <td>
                                       <input type="text" name="" id="" class="form-control">                                                   
                                    </td>
                                    <td>
                                       <input type="text" name="" id="" class="form-control">                                                   
                                    </td>
                                    <td>
                                       <input type="text" name="" id="" class="form-control">                                                   
                                    </td>
                                    <td>
                                       <a id='updatedraft' href="#"><i class="fas fa-edit"></i></a>&nbsp;<a id="deletedraft" href='#'><i class="fas fa-trash-alt fa-sm"></i></a>                                                     
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                           
                        </div>
                     </div>
                     <div class="form-actions">
                        <button type="button" class="btn btn waves-effect waves-light btn-info" data-toggle="modal" data-target="#wagesmodal">@lang('ADD WAGES')</button>
                     </div>            
                  </form>
               </div>
           </div>
       </div>
   </div>
</div>

<!-------------- WAGES modal -------------------->
    

<div id="wagesmodal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="vcenter" aria-hidden="true">
   <div class="modal-dialog modal-xl ">
      <div class="modal-content">
         <div class="modal-header">
            <h4 class="modal-title" id="vcenter">Add Wages</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
         </div>
         <div class="modal-body">
            <div class='row'>
               <div class="col-md-4">
                  <div class="form-group">
                     <label>@lang('Employer Code')</label>
                     <input type="text" name="employerCode" id="empCode" value="" class="form-control">
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="form-group">
                     <label class="control-label">@lang('Employer Name')</label>
                     <input type="text" name="employerName" id="empName" value="" class="form-control">
                  </div>
               </div>
               <div class="col-md-0">
                  <div class="form-group">
                     <br>
                     <button type="button" data-toggle="modal" data-target="#verticalcenter" class="btn btn-facebook waves-effect waves-light"><i class="fas fa-search"></i></button>
                  </div>
               </div>
            </div>
            <div class='row'>
               <div class="col-md-4">
                  <div class="form-group">
                     <label>@lang('Year')</label>
                     <input type="text" name="employerCode" id="empCode" value="" class="form-control">
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="form-group">
                     <label class="control-label">@lang('Month')</label>
                     <input type="text" name="employerName" id="empName" value="" class="form-control">
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="form-group">
                     <label class="control-label">@lang('Wages (RM)')</label>
                     <input type="text" name="employerName" id="empName" value="" class="form-control">
                  </div>
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">CANCEL</button>
               <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">RESET</button>
               <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">SAVE</button>
            </div>
         </div>
      </div>
   </div>
</div>