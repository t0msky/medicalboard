<div class="row">
   <div class="col-lg-12">
      <div class="card">
         <div class="card-body">
            <form action="#">
               <div class="form-body">
                  <h6 class="card-title">Query & Opinion</h6>
                  <hr>
                  <div class='row'>
                     <div class="col-md-12 col-lg-4">
                        <div class="form-group">
                           <label class="control-label">Action</label>
                           <select name="action" class="form-control">
                              <option value="">Please Select</option>
                              <option value="query">Query</option>
                              <option value="opinion">Opinion</option>
                           </select>
                        </div>
                     </div>
                  </div>
                  <div id="query0">
                     <h6 class="card-title-sub">Query</h6>
                     <hr>
                     <div class='row'>
                        <div class="col-md-12 col-lg-4">
                           <div class="form-group">
                              <label class="control-label">Description</label>
                              <textarea type="text" id="desc" name="desc" class="form-control" rows="10" value=""></textarea>
                           </div>
                        </div>
                     </div>
                     <div class='row'>
                        <div class="col-md-12 col-lg-4">
                           <div class="form-group">
                              <label class="control-label">Route to:</label>
                              <select name="route_to" class="form-control">
                                 <option>Please Select</option>
                              </select>                           
                           </div>
                        </div>
                     </div>
                  </div>
                  <div id="opinion_req0">
                     <h6 class="card-title-sub">Request for Opinion</h6>
                     <hr>
                     <div class="row p-t-20">
                        <div class="col-md-12 col-lg-5">
                           <div class="card">
                              <div class="table-responsive">
                                 <table id="table-contribution" class="table table-sm table-bordered" data-toggle-column="first">
                                    <thead>
                                       <tr>
                                          <th style='width:1%'>No.</th>
                                          <th style='width:4%'>Type of Opinion</th>
                                          <th style='width:1%'>Action</th>
                                       </tr>
                                    </thead>
                                    <tbody class='align-middle'>
                                       <tr data-expanded="true" class="workrow" id="tr0_0">
                                          <td> <input  type="hidden" id="date" name="date" value="" class="form-control" >1.</td>
                                          <td> <input  type="hidden" id="time" name="time" value="" class="form-control" required >Medical</td>
                                          <td> <a class='deletedraft'><i class="fas fa-trash-alt "></i></a>
                                             <a class='adddraft'><i class="fas fa-plus "></i></a><br>
                                          </td>
                                       </tr>
                                    </tbody>
                                    </table>
                                 <button type="button" data-toggle="modal" data-target="#add_opinion" class="btn btn-sm waves-effect waves-light btn-info text-right">Add Opinion</button>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div id="add_opinion_accordian">
                     </div>
                  </div>
                  {{-- MODEL FOR VIEW --}}
                  <div class="col-md-4">
                     <div class="card">
                           <div class="card-body">
                              <!-- sample modal content -->
                              <div class="modal fade" id="viewOpinion" tabindex="-1" role="dialog" aria-labelledby="viewOpinionLabel1">
                                 <div class="modal-dialog" role="document">
                                       <div class="modal-content">
                                          <div class="modal-header">
                                             <h4 class="modal-title" id="exampleModalLabel1">Opinion</h4>
                                             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                          </div>
                                          <div class="modal-body">
                                             <form>
                                                   <div class="row">
                                                      <div class="col-md-6">
                                                         <label for="recipient-name" class="control-label">Type of Opinion </label>
                                                         <input type="text" class="form-control" readonly>
                                                      </div>
                                                      <div class="col-md-6">
                                                         <label for="recipient-name" class="control-label">Purpose of Reference </label>
                                                         <input type="text" class="form-control" readonly>
                                                      </div>
                                                   </div>
                                                   <div class="form-group">
                                                      <label for="recipient-name" class="control-label">Case Details</label>
                                                      <input type="text" class="form-control" readonly>
                                                   </div>
                                                   <div class="form-group">
                                                      <label for="message-text" class="control-label">Investigation Details</label>
                                                      <textarea class="form-control" readonly></textarea>
                                                   </div>
                                                   <div class="form-group">
                                                      <label for="recipient-name" class="control-label">Doubtful/Issue</label>
                                                      <textarea class="form-control" readonly></textarea>
                                                   </div>
                                                   <div class="form-group">
                                                      <label for="message-text" class="control-label">Recommendation</label>
                                                      <textarea class="form-control" readonly></textarea>
                                                   </div>
                                             </form>
                                          </div>
                                          <div class="modal-footer">
                                             <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                             <button type="button" class="btn btn-primary">Save</button>
                                          </div>
                                       </div>
                                 </div>
                              </div>
                              <!-- /.modal -->
                           </div>
                     </div>
                  </div>

                  {{-- MODEL FOR OPINION --}}
                  <div class="col-md-4">
                     <div class="card">
                           <div class="card-body">
                              <!-- sample modal content -->
                              <div class="modal fade" id="add_opinion" tabindex="-1" role="dialog" aria-labelledby="viewOpinionLabel1">
                                 <div class="modal-dialog" role="document">
                                       <div class="modal-content">
                                          <div class="modal-header">
                                             <h4 class="modal-title" id="exampleModalLabel1">Add New Opinion</h4>
                                             <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                          </div>
                                          <div class="modal-body">
                                             <form>
                                                <div class="row">
                                                   <div class="col-md-12 col-lg-12">
                                                      <div class="form-group">
                                                         <label class="control-label">Type of Opinion</label>
                                                         <select name="type_opinion" class="form-control">
                                                            <option>Please Select</option>
                                                            <option value="medical_o">Medical Opinion</option>
                                                            <option value="legal_o">Legal Opinion</option>
                                                            <option value="ppn_o">PPN Opinion</option>
                                                            <option value="aro_o">ARO Opinion</option>
                                                         </select>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="form-group">
                                                   <label for="recipient-name" class="control-label">Case Details</label>
                                                   <input type="text" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                   <label for="message-text" class="control-label">Investigation Details</label>
                                                   <textarea class="form-control"></textarea>
                                                </div>
                                                <div class="form-group">
                                                   <label for="recipient-name" class="control-label">Doubtful/Issue</label>
                                                   <textarea class="form-control"></textarea>
                                                </div>
                                                <div class="form-group">
                                                   <label for="message-text" class="control-label">Recommendation</label>
                                                   <textarea class="form-control"></textarea>
                                                </div>
                                             </form>
                                          </div>
                                          <div class="modal-footer">
                                             <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                             <button type="button" class="btn btn-primary">Save</button>
                                          </div>
                                       </div>
                                 </div>
                              </div>
                              <!-- /.modal -->
                           </div>
                     </div>
                  </div>
                  {{-- END MODEL --}}

                  {{-- <div id="opinion0">
                  </div> --}}
                  <div class='row'>
                     <div class="col-md-12">
                        <div class="form-actions">
                           <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('button.save')</button>
                           <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('button.reset')</button>
                        </div>
                     </div>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
      
      @section('js')
      
      <script>
      
      $(document).ready(function() {
      
         // alert('hello');
      
         $("#query0").hide();
         $("#opinion_req0").hide();
         $("#opinion0").hide();
      
         $('select[name=action]').change(function () {
            if (this.value == 'query') {
               $("#query0").show();
               $("#opinion_req0").hide();
      
            } else if (this.value == 'opinion') {
               $("#opinion_req0").show();
               $("#query0").hide();
            } else {
               $("#query0").hide();
               $("#opinion_req0").hide();
            }
         });
      
      });
      </script>
      
      @endsection