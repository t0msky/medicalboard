<div class="row">
  <div class="col-12">
      <div class="card">
          <div class="card-body">
              <div class="p-20">
                  <form action="#">
                      <h5 class="card-title">Appendix A</h5>
                      <hr>
                      <div class="row p-t-20">
                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="control-label">New Identification No.</label>
                            <input type="text" name="idno" id="idno" class="form-control">
                          </div>
                        </div>
                        <div class="button-group">
                          <div class="form-group"><br>
                            <button class="btn btn-facebook waves-effect waves-light" id="btn_search" type="button"> <i class="fas fa-search"></i> </button>
                          </div>
                        </div>
                      </div>
                      <div class="row p-t-20">
                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="control-label">Notice ID</label>
                            <input type="text" name="notice_id" id="notice_id" class="form-control">
                        </div>
                      </div>
                    </div>
                      <div class="row p-t-20">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label class="control-label">Name</label>
                            <input type="text" name="name" id="name" class="form-control" readonly>
                          </div>
                        </div>
                      </div>
                      <div class="row p-t-20">
                          <div class="col-md-4">
                              <div class="form-group">
                                  <label class="control-label">Identification Type</label>
                                      <select class="form-control" readonly>
                                          <option selected readonly disabled hidden>Please Select</option>
                                          <option value="">New IC</option>
                                          <option value="">Old IC</option>
                                          <option value="">Army ID</option>
                                          <option value="">Police ID</option>
                                          <option value="">Social Security Number ID (SSN)</option>
                                          <option value="">CID</option>
                                </select>
                              </div>
                          </div>
                          <div class="col-md-4">
                              <div class="form-group">
                                  <label class="control-label">Identification No.</label>
                                  <input type="text" id="idno" name="idno" value="" class="form-control" readonly>
                              </div>
                          </div>
                          <div class="col-md-4">
                              <div class="form-group">
                                  <label class="control-label">No IC</label><span
                                      class="required">*</span>
                                    <select class="form-control" readonly>
                                      <option selected readonly disabled hidden>Please Select</option>
                                      <option value="">Yes</option>
                                      <option value="">No</option>
                                    </select>
                              </div>
                          </div>
                        </div>
                      <div class="row p-t-20">
                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="control-label">Year</label>
                            <input type="text" name="year" id="year" class="form-control" readonly>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="control-label">Received Date</label>
                            <input type="date" name="recv_date" id="recv_date" class="form-control" readonly>
                          </div>
                        </div>
                      </div>
                      <div class="row p-t-20">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label class="control-label">Recipient Name</label>
                            <input type="name" name="recipient_name" id="recipient_name" class="form-control" readonly>
                          </div>
                        </div>
                      </div>
                      <div class="row p-t-20">
                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="control-label">SSN</label>
                            <input type="text" name="year" id="year" class="form-control" readonly>
                          </div>
                        </div>
                      </div>
                      <div class="row p-t-20">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label class="control-label">Postal</label>
                            <input type="text" name="address1" id="address1" class="form-control" readonly>
                          </div>
                        </div>
                      </div>
                      <div class="row p-t-20">
                        <div class="col-md-12">
                          <div class="form-group">
                            {{-- <label class="control-label">Postal</label> --}}
                            <input type="text" name="address2" id="address2" class="form-control" readonly>
                          </div>
                        </div>
                      </div>
                      <div class="row p-t-20">
                        <div class="col-md-12">
                          <div class="form-group">
                            {{-- <label class="control-label">Postal</label> --}}
                            <input type="text" name="address3" id="address3" class="form-control" readonly>
                          </div>
                        </div>
                      </div>
                      <div class="row p-t-20">
                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="control-label">State</label>
                              <select class="form-control" readonly>
                                <option selected readonly disabled hidden>Please Select</option>
                                <option>Wilayah Persekutuan Kuala Lumpur</option>
                                <option>Selangor</option>
                                <option>Perak</option>
                                <option>Pulau Pinang</option>
                                <option>Kedah</option>
                                <option>Perlis</option>
                                <option>Negeri Sembilan</option>
                                <option>Melaka</option>
                                <option>Johor</option>
                                <option>Pahang</option>
                                <option>Terengganu</option>
                                <option>Kelantan</option>
                                <option>Wilayah Persekutuan Labuan</option>
                                <option>Sabah</option>
                                <option>Sarawak</option>
                              </select>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="control-label">City</label>
                            <input type="text" name="city" id="city" class="form-control" readonly>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="control-label">Postcode</label>
                            <input type="text" name="postcode" id="postcode" class="form-control" readonly>
                          </div>
                        </div>
                      </div>
                      <div class="row p-t-20">
                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="control-label">P.O Box</label>
                            <input type="text" name="pobox" id="pobox" class="form-control" readonly>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="control-label">Locked Bag</label>
                            <input type="text" name="locked_bag" id="locked_bag" class="form-control" readonly>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="control-label">W.D.T</label>
                            <input type="text" name="wdt" id="wdt" class="form-control" readonly>
                          </div>
                        </div>
                      </div>
                      <div class="row p-t-20">
                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="control-label">Case Type</label>
                            <input type="text" name="case_type" id="case_type" class="form-control" readonly>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="control-label">Perkeso Office in First Payment Case</label>
                            <input type="text" name="office" id="office" class="form-control" readonly>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="control-label">Rate (RM)</label>
                            <select class="form-control">
                              <option selected readonly disabled hidden>Please Select</option>
                              <option value="">In a day</option>
                              <option value="">In a month</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="row p-t-20">
                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="control-label">Approval Rate Date</label>
                            <input type="date" name="rate_date" id="rate_date" class="form-control" readonly>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label class="control-label">Declaration of the Year</label>
                            <input type="text" name="declaration" id="office" class="form-control">
                          </div>
                        </div>
                      </div>
                      <h3>Declaration</h3>
                      <hr>
                      <div class="row p-t-20">
                        <div class="col-md-12">
                          <div class="form-group">
                            <br>
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="declaration1">
                              <label class="custom-control-label" for="declaration1"> &nbsp; &nbsp; Penerima faedah telah diperiksa serta ditemuduga dan didapati adalah penerima faedah yang layak dibayar faedah tersebut di atas.</label>
                              <input type="checkbox" class="custom-control-input" id="declaration1">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row p-t-20">
                        <div class="col-md-12">
                          <div class="form-group">
                            <br>
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="declaration2">
                              <label class="custom-control-label" for="declaration2"> &nbsp; &nbsp; Tandatangan / cap ibu jari penerima faedah pada Borang Akuan Tahunan 117 yang diterima adalah sama dengan tandatangan / cap ibu jari pada Surat Pengenalan Did pada</label>
                              <label> &nbsp; &nbsp; rekod Pejabat PERKESO (Pejabat Perkeso yang memperakukan bayaran pertama faedah) bagi Bayaran Pertama faedah tersebut di atas.</label>
                              <input type="checkbox" class="custom-control-input" id="declaration2">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row p-t-20">
                        <div class="col-md-12">
                          <div class="form-group">
                            <br>
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="declaration3">
                              <label class="custom-control-label" for="declaration3"> &nbsp; &nbsp; Penerima faedah yang hadir untuk pengesahan adalah orang yang sama seperti pada Surat Pengenalan Din i yang dikeluarkan bagi Bayaran Pertama faedah tersebut di </label>
                              <label> &nbsp; &nbsp atas.</label>
                              <input type="checkbox" class="custom-control-input" id="declaration3">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row p-t-20">
                        <div class="col-md-12">
                          <div class="form-group">
                            <br>
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="declaration4">
                              <label class="custom-control-label" for="declaration4"> &nbsp; &nbsp; Bayaran yang dibayar sehingga  31 Disember 2017 adalah pada kadar (Kadar (RM))  dan merujuk kepada kadar yang telah diluluskan oleh Bahagian Operasi, Ibu Pejabat</label>
                              <label> &nbsp; &nbsp; PERKESO pada (tarikh kadar diluluskan).</label>
                              <input type="checkbox" class="custom-control-input" id="declaration4">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row p-t-20">
                        <div class="col-md-12">
                          <div class="form-group">
                            <br>
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="declaration5">
                              <label class="custom-control-label" for="declaration5"> &nbsp; &nbsp; Pejabat ini akan memaklumkan Bahagian Perbendaharaan, Ibu Pejabat sekiranya terdapat maklumat yang meragukan kelayakan penerima faedah</label>
                              <input type="checkbox" class="custom-control-input" id="declaration5">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row p-t-20">
                        <div class="col-md-12">
                          <div class="form-group">
                            <br>
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="declaration6">
                              <label class="custom-control-label" for="declaration6"> &nbsp; &nbsp; Pejabat ini akan membuat susulan terhadap penerima faedah untuk menguruskan permohonan mendapatkan dokumen pengenalan diri. </label>
                              <input type="checkbox" class="custom-control-input" id="declaration6">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row p-t-20">
                        <div class="col-md-12">
                          <div class="form-group">
                            <br>
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="declaration7">
                              <label class="custom-control-label" for="declaration7"> &nbsp; &nbsp; Saya dengan ini memperakukan supaya kebenaran khas bayaran kepada penerima faedah tanpa dokumen pengenalan dirt (Nama Penerima) (nama penerima faedah)</label>
                              <label> &nbsp; &nbsp; diluluskan bagi tahun 2018. </label>
                              <input type="checkbox" class="custom-control-input" id="declaration7">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-actions">
                          <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('scheme/noticetype.save')</button>
                          <button type="button" class="btn btn waves-effect waves-light btn-success" onclick="submitform()">@lang('scheme/noticetype.reset')</button>
                          <button type="button" class="btn waves-effect waves-light btn-success" id='btncancelacc' onclick="window.location='/noticetype'">@lang('scheme/noticetype.cancel')</button>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>