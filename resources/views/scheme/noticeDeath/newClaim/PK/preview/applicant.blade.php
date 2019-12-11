<div class="card m-b-0">
      <div class="card-header" role="tab" id="headingZero0">
          <h6 class="mb-0">                           
              <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#applicantInfo" aria-expanded="false" aria-controls="applicantInfo">
                  <h6 class="card-title"><i class="fa fa-plus"></i> Applicant Information </h4>
              </a>
          </h6>
      </div>
      <div id="applicantInfo" class="collapse" role="tabpanel" aria-labelledby="headingZero0">
          <div class="card-body">
              <div class="col-10-applicant">
                  <div class="card">
                      <div class="card-body">
                          <div class="table-responsive m-t-40">
                              <table id="tableClaimant" class="display nowrap table table-hover table-striped table-bordered" cellspacing="40" width="50%">
                                  <thead>
                                      <tr>
                                          <th>No</th>
                                          <th width="40%">Name</th>
                                          <th>Identification No</th>
                                          <th>Date Of Birth</th>
                                          <th>Relationship</th>
                                      </tr>
                                  </thead>
                                  <tbody class='align-middle'>
                                      {{-- @if (!empty($applicantinfo))
                                      @if (count($applicantinfo) == 0)
                                      <td>No record</td>
                                      @else
                                      @foreach ($applicantinfo as $wb) --}}
                                      <tr>
                                          @if (!empty($applicantinfo))
                                          <td>w</td>
                                          <td>w</td>
                                          <td>w</td>
                                          <td>w</td>
                                          <td>w</td>
                                          @else
                                          <td></td>
                                          <td>No records</td>
                                          <td></td>
                                          <td></td>
                                          <td></td>
                                          @endif
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