@extends('general.layouts.app')



@section('head')
<!-- page css -->
<link href="/PERKESO_UI/horizontal-nav-fullwidth/dist/css/pages/tab-page.css" rel="stylesheet">
<link href="/PERKESO_UI/assets/node_modules/wizard/steps.css" rel="stylesheet">
<!--alerts CSS -->
<link href="/PERKESO_UI/assets/node_modules/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
<link href="/PERKESO_UI/assets/node_modules/datatables/media/css/dataTables.bootstrap4.css" rel="stylesheet">
<link href="/PERKESO_UI/assets/node_modules/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css" />
<link href="/PERKESO_UI/assets/node_modules/multiselect/css/multi-select.css" rel="stylesheet" type="text/css" />
@endsection



@section('content')

<div class="form-row">
    <div class="form-group col-md-12 col-lg-4">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    <div class="form-body">
                        <div class="modal-body">
                            <div class="card-body">
                                <div class="row p-t-20">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Insured Person Name / ID No :</label>
                                            <input type="text" value="" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Service Provider Name :</label>
                                            <input type="text" value="" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">Invoice No :</label>
                                            <input type="text" value="" class="form-control" readonly>
                                        </div>
                                    </div>
                                </div>




                                <div class="card-header">
                                    <div class="table-responsive">
                                        <table id="myTable_clarification" class="table table-sm table-bordered">
                                            <thead style="background-color:skyblue;">
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Insured Person Name</th>
                                                    <th>ID No</th>
                                                    <th>Type of Investigation</th>
                                                    <th>Service Provider Name</th>
                                                    <th>Invoice No.</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr id="clari1">
                                                    <td style="display:none;"><input type="hidden" value="1"></td>
                                                    <td>1</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"
                                                                style="background-color: #00008b;"><a class="get-code"
                                                                    data-toggle="modal" data-target="#modal_document"
                                                                    data-id="1" data-whatever="@getbootstrap"
                                                                    href="#tt1" aria-expanded="true"><i
                                                                        class="fas fa-file-alt" title="View"
                                                                        data-toggle="tooltip"></i></a></span>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>

@endsection
