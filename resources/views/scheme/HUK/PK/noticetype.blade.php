<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <form action="/obform" method="POST">

                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-body">

                        @if(Session::get('messageob'))
                        <div class="card-footer">

                            <div class="alert alert-warning">
                                {{Session::get('messageob')}}
                            </div>

                        </div>
                        @elseif (!empty($messageob))
                        <div class="card-footer">

                            <div class="alert alert-warning">
                                {{$messageob}}
                            </div>

                        </div>
                        @endif
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Medical Type Board</label>
                                    <select class="form-control" data-placeholder="" tabindex="2" id="selectMedicalTypeBoard">
                                            <option selected readonly disabled hidden>Please Choose </option>
                                            <option value="mb">@lang('Medical Board')</option>
                                            <option value="mab">@lang('Medical Appellate Board')</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Identification Type</label>
                                    <select class="form-control" data-placeholder="idType" tabindex="2">
                                        <option selected disabled hidden>Please Choose </option>
                                        <option value="New IC">@lang('New IC')</option>
                                        <option value="Old IC">@lang('Old IC')</option>
                                        <option value="Army ID">@lang('Army ID')</option>
                                        <option value="Police ID">@lang('Police ID')</option>
                                        <option value="Social Security ID">@lang('Social Security ID')</option>
                                        <option value="CID">@lang('CID')</option>
                                </select> 
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Identification Number</label>
                                    <input type="text"  id="IDNum" name="IDNum" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-1">
                                <div class="form-group">
                                    <br>
                                    <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('Search')</button>
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Insured Person Name</label>
                                    <input type="text" id="obname" name="obname" value="" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-------- Search Result ------>
<div class="row p-t-20" style="display:none;" >
    <div class="col-md-12" >
        <div class="card" >
            <label class="control-label">Search Result</label>

            <table id="tblwb" class="table table-sm table-bordered" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th width="1%">@lang('No')</th>
                        <th width="10%">@lang('Benefit Ref No')</th>
                        <th width="13%">@lang('Notice Type')</th>
                        <th width="10%">@lang('Accident/ Notice Date')</th>
                        <th width="10%">@lang('Status')</th>
                        <th width="8%">@lang('Potential HUK')</th>
                        <th width="1%">@lang('View')</th>
                        <th width="2%">@lang('Action')</th>
                    </tr>
                </thead>

                <tbody class='align-middle'>

                    <tr>
                        <td>1.</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td> 
                        <select class="form-control" data-placeholder="" tabindex="2">
                            <option selected readonly disabled hidden>Please Choose </option>
                            <option value="">@lang('Yes')</option>
                            <option value="">@lang('No')</option>
                        </select>
                        </td>
                        <td></td>
                        <td>&nbsp;&nbsp;&nbsp;&nbsp;<label class="radio-inline m-b-10" onclick="no1()"><input name="servicetype12" id="modalMaleId"
                            type="radio" /></label>
                    </tr>
                </tbody>
            </table>
            <div class="form-actions">
                    <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('Next')</button>
            </div>
        </div>
    </div>
</div>

<!-- <script>
$(document).ready(function () {

$("#but_others").click(function () {

            var no = $('#add_others tr:last td:first').find("input").val();
            array_no_others++;
            no++;
            $("#add_others > tbody:last-child").append(
                '<tr data-expanded="true" class="workrow"><td style="display:none;"> <input type="hidden" value=' +
                no + '> </td><td><div class="col-md-12">' +
                '<div class="custom-control custom-checkbox mr-sm-6">' +
                '<input type="checkbox" class="custom-control-input cb_1" name="list_doc[]" id="checkbox12' +
                no + '" value="' + no + '">' +
                '<label class="custom-control-label" for="checkbox12' + no + '">Others</label>' +
                '</div>' +
                '</div>' +
                '</div>' +
                '</td>' +
                '<td>' +
                '&nbsp;&nbsp;&nbsp;&nbsp;' +
                '<input type="text" style="display:none;" name="list_doc_others[' +
                array_no_others +
                ']" id="description' + no + '" class="form-control" >' +
                '</td>' +
                '</tr>'
            );
        });
    });

</script> -->