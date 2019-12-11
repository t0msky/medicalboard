<div class="row">
      <div class="col-lg-12">
          <div class="card">
              <div class="card-body">
                  <form action="#">
                      <div class="form-body">
                          <div class="row p-t-20">
                              <div class="col-md-8">
                                  <div class="card">
                                     <div class="table-responsive">
                                          <table id="table-contribution" class="table table-sm table-bordered" data-toggle-column="first">
                                                <thead>
                                              <tr>
                                                  <th style='width:1%'>No.</th>
                                                  <th style='width:4%'>Employer Code</th>
                                                  <th style='width:14%'>Employer Name</th>
                                                  <th style='width:1%'>Action</th>
                                                  <th style='width:3%'>Recommmendation Status</th>
                                              </tr>
                                          </thead>
                                          <tbody class='align-middle'>
                                        <tr data-expanded="true" class="workrow" id="tr0_0">
                                                  <td> <input  type="hidden" id="date" name="date" value="" class="form-control" >1.</td>
                                                  <td> <input  type="hidden" id="time" name="time" value="" class="form-control" required >0004</td>
                                                  <td> <input  type="hidden" id="from" name="from" value="" class="form-control" required >Wan Nur Shamiera Natasha Binti Wan Azizan Ahmad</td>
                                                  <td> <a id='selectdraft' href='#'><i class="fas fa-edit"></i></a>&nbsp;<a id="deletedraft" href='#'><i class="fas fa-trash-alt fa-sm"></i></a></td>
                                                  <td> <input  type="hidden" id="remark" name="remark" value="" class="form-control" required >Recommended</td>
                                              </tr>
                                          </tbody>
                                       </table>
                                       <button type="button" id="btn_add_inconsistency0" value='0' class="btn btn-sm waves-effect waves-light btn-info text-right">ADD EMPLOYER</button>
                                     </div>
                                  </div>
                              </div>
                           </div>

                           <div class="row">
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label class="control-label">Total Months Recommended</label>
                                    <input type="text" id="" name="" class="form-control" placeholder="" value="@if(!empty($accinfo)){{$accinfo->witnessname}} @endif">
                                 </div>
                              </div>
                           </div>

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