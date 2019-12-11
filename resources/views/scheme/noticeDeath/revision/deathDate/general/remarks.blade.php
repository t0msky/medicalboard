<div class="row">
   <div class="col-lg-12">
       <div class="card">
           <div class="card-body">
               <form action="#">
                   <div class="form-body">
                       <h6 class="card-title">@lang('form/scheme.general.collapse.remarks.title')</h6>
                       <hr>
                       <div class="row p-t-20">
                           <div class="col-md-10">
                               <div class="card">
                                   <div class="table-responsive" >
                                       <table id="tblwb" class="table table-sm table-bordered" cellspacing="0" width="100%">
                                           <thead>
                                               <tr>
                                                   <th>@lang('form/scheme.general.collapse.remarks.date')</th>
                                                   <th>@lang('form/scheme.general.collapse.remarks.time')</th>
                                                   <th>@lang('form/scheme.general.collapse.remarks.from')</th>
                                                   <th>@lang('form/scheme.general.collapse.remarks.to')</th>
                                                   <th>@lang('form/scheme.general.collapse.remarks.remark')</th>
                                               </tr>
                                           </thead>
                                           <tbody class='align-middle'>
                                               <tr> 
                                                   <td> <input  type="hidden" id="date" name="date" value="" class="form-control" >No Record</td>
                                                   <td> <input  type="hidden" id="time" name="time" value="" class="form-control" required ></td>
                                                   <td> <input  type="hidden" id="from" name="from" value="" class="form-control" required ></td>
                                                   <td> <input  type="hidden" id="to" name="to" value="" class="form-control" required ></td>
                                                   <td> <input  type="hidden" id="remark" name="remark" value="" class="form-control" required ></td>
                                               </tr>
                                           </tbody>
                                       </table>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class='row'>
                           <div class="form-group col-md-12 col-lg-12">
                               <label class="control-label">@lang('form/scheme.general.collapse.remarks.remark')</label>
                               <textarea type="text" class="form-control"></textarea>
                           </div>
                       </div>
                       <div class='row'>
                           <div class="col-md-12">
                               <div class="form-actions">
                                 <button type="submit" id="btnnotice"
                                     class="btn btn waves-effect waves-light btn-success">@lang('button.next')</button>
                                 <button type="button" id="btn_reset" class="btn btn waves-effect waves-light btn-info"
                                     onclick="submitform()">@lang('button.reset')</button>

                                 <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc'
                                     onclick="window.location='/noticetype'">@lang('button.cancel')</button>
                                 <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc'
                                     onclick="window.location='/home'">@lang('button.back')</button>
                             </div>
                           </div>
                       </div>
                   </div>
               </form>
           </div>
       </div>
   </div>
</div>