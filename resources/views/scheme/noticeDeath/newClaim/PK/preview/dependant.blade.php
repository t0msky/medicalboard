<div class="card m-b-0">
      <div class="card-header" role="tab" id="headingZero0">
          <h6 class="mb-0">                           
              <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#dependantInfo" aria-expanded="false" aria-controls="dependantInfo">
                  <h6 class="card-title"><i class="fa fa-plus"></i> Dependant Information </h4>
              </a>
          </h6>
      </div>
      <div id="dependantInfo" class="collapse" role="tabpanel" aria-labelledby="headingZero0">  
          <div class="card-body">
              <div class="row p-t-20">
                  <div class="col-md-4">
                      <div class="form-group-preview row">
                          <div class="col-sm-9 label-preview">
                              <span class="no_bold">Dependant Information Available?</span>
                          </div>
                          <div class="col-sm-9">
                              @if(!empty($obprofile) && $obprofile->name != '')
                              <input type="text" class="form-control-preview" value="{{ $obprofile->name }}"  disabled style="background-color:transparent">
                              @elseif(!empty($obformassist) && $obformassist->name != '')
                              <input type="text" class="form-control-preview" value="{{ $obformassist->name }}"  disabled style="background-color:transparent">
                              @else
                              <input type="text" class="form-control-preview" value="YES" disabled style="background-color:transparent">
                              @endif
                          </div>
                      </div>
                  </div>   
              </div>
              <div class="card-body">
                  <div class="card-body">
                      <div class="row p-t-20">
                          <div class="table-responsive m-t-40">
                              <table id="tableDependent" class="display nowrap table table-hover table-striped table-bordered" cellspacing="40" width="50%">
                                  <thead>
                                      <tr>
                                          <th>No</th>
                                          <th>Dependant Name</th>
                                          <th>ID No</th>
                                          <th>Date of Birth</th>
                                          <th>Relationship</th>
                                          <th>Status</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                      </tr>
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>