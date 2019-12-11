<!-- Validation wizard -->
<div class="row" id="validation">
    <div class="col-12">
        <div class="card wizard-content">
            <div class="card-body">
                {{-- <h4 class="card-title">Step wizard with validation</h4>
                <h6 class="card-subtitle">You can us the validation like what we did</h6> --}}
                <hr>
                <form action="#" class="validation-wizard wizard-circle">
                    <!-- Step 1 -->
                    <h6>Medical Board Committee</h6>
                    <br>
                    <section>
                        <h4 class="card-title">Attendance</h4>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label"> Upload</label>
                                    <div class="input-group ">
                                        <input type="text" value="@isset($cCase->schemerefno) {{$cCase->schemerefno}} @endisset"class="form-control" readonly>
                                        <div class="input-group-append">
                                            <span class="input-group-text"style="background-color: #d8e8e9;">
                                                <a class="get-code" data-toggle="modal" data-target="#test" data-whatever="@getbootstrap" href="#tt1" aria-expanded="true"><i class="fas fa-upload" title="Upload" data-toggle="tooltip"></i></a></span>
                                            {{-- @include('MedicalServices.test') --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table id="panel_list" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>@lang('medical_board/appointment.table.no')</th>
                                                <th>Committee</th>
                                                <th>Name</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tbody">
                                            <tr>
                                                <td>1</td>
                                                <td>Panel 1</td>
                                                <td>Dr.Laili</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Panel 2</td>
                                                <td>Dr.Helina</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Secretariat</td>
                                                <td>Ali Bin Abu</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Chairman</td>
                                                <td>Datin Maria</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Step 2 -->
                    <h6>List of IP</h6>
                    <br>
                    <section>
                        <h4 class="card-title">Attendance of IP</h4>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label"> Upload</label>
                                    <div class="input-group ">
                                        <input type="text" value="@isset($cCase->schemerefno) {{$cCase->schemerefno}} @endisset"class="form-control" readonly>
                                        <div class="input-group-append">
                                            <span class="input-group-text"style="background-color: #d8e8e9;">
                                                <a class="get-code" data-toggle="modal" data-target="#test" data-whatever="@getbootstrap" href="#tt1" aria-expanded="true"><i class="fas fa-upload" title="Upload" data-toggle="tooltip"></i></a></span>
                                            {{-- @include('MedicalServices.test') --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table id="panel_list" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>@lang('medical_board/appointment.table.no')</th>
                                                <th>Scheme Ref. No</th>
                                                <th>ID No</th>
                                                <th>IP Name</th>
                                                <th>Discipline</th>
                                                <th>Attendance</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tbody">
                                            <tr>
                                                <td>1</td>
                                                <td>A20190820001</td>
                                                <td>960312069990</td>
                                                <td>Khairunnisa Hannis Binti Khairul</td>
                                                <td>OTHO</td>
                                                <td>Attend</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Step 3 -->
                    <h6>Decision</h6>
                    <br>
                    <section>
                        <h4 class="card-title">Decision Details</h4>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label"> Upload</label>
                                    <div class="input-group ">
                                        <input type="text" value="@isset($cCase->schemerefno) {{$cCase->schemerefno}} @endisset"class="form-control" readonly>
                                        <div class="input-group-append">
                                            <span class="input-group-text"style="background-color: #d8e8e9;">
                                                <a class="get-code" data-toggle="modal" data-target="#test" data-whatever="@getbootstrap" href="#tt1" aria-expanded="true"><i class="fas fa-upload" title="Upload" data-toggle="tooltip"></i></a></span>
                                            {{-- @include('MedicalServices.test') --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table id="panel_list" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>@lang('medical_board/appointment.table.no')</th>
                                                <th>Scheme Ref. No</th>
                                                <th>ID No</th>
                                                <th>IP Name</th>
                                                <th>Discipline</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tbody">
                                            <tr>
                                                <td>1</td>
                                                <td>A20190820001</td>
                                                <td>960312069990</td>
                                                <td>Khairunnisa Hannis Binti Khairul</td>
                                                <td>OTHO</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </section>
                </form>
            </div>
        </div>
    </div>
</div>