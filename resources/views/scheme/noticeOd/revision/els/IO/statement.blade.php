<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <form action="/caseinfo_revision" method="POST">
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

                        <div id="statementAccordion" role="tablist" class="accordion" >
                    
                            <!-- statement 1-->
                            <div class="card m-b-0">
                                <div class="card-header" role="tab" id="statement1">
                                    <h5 class="mb-0">                           
                                        <a class="link" data-toggle="collapse" data-parent="#statementAccordion" href="#statecol1" aria-expanded="false" aria-controls="statecol1"><h5 class="card-title"><i class="fa fa-plus"></i>
                                        Download Document</h5>
                                        </a>
                                    </h5>
                                </div>
                                <div id="statecol1" class="collapse" role="tabpanel" aria-labelledby="statement1">
                                    <div class="card-body">
                                        <table class="table">
                                            <col width="50%">
                                            <col width="10%">
                                        
                                            <thead>
                                                <tr>
                                                    <th style="display:none;">Doctype </th>                
                                                    <th>Document Type</th>
                                                    <th style="text-align:right;padding-right:50px;">Download</th>        
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Form 12</td>
                                                    <td><button class="btn"><a href="https://documentcloud.adobe.com/link/track?uri=urn%3Aaaid%3Ascds%3AUS%3Ab0bfbc2e-16e4-4213-8711-fb9add3d2d04"><i class="fa fa-download"></i> Download </a></button></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- statement 2-->
                            <div class="card m-b-0">
                                <div class="card-header" role="tab" id="statement2">
                                    <h5 class="mb-0">                           
                                        <a class="link" data-toggle="collapse" data-parent="#statementAccordion" href="#statecol2" aria-expanded="false" aria-controls="statecol2"><h5 class="card-title"><i class="fa fa-plus"></i>
                                        INSPECTOR INFORMATION</h5>
                                        </a>
                                    </h5>
                                </div>
                                <div id="statecol2" class="collapse" role="tabpanel" aria-labelledby="statement2">
                                    <div class="card-body">
                                        <div class="row p-t-20">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                <label class="control-label">Inspector Name </label>
                                                <input type="text" readonly id="Inspector_name" name="Inspector" value="" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- statement 3-->
                            <div class="card m-b-0">
                                <div class="card-header" role="tab" id="statement3">
                                    <h5 class="mb-0">                           
                                        <a class="link" data-toggle="collapse" data-parent="#statementAccordion" href="#statecol3" aria-expanded="false" aria-controls="statecol3"><h5 class="card-title"><i class="fa fa-plus"></i>
                                        INTERVIEWEE INFORMATION</h5>
                                        </a>
                                    </h5>
                                </div>
                                <div id="statecol3" class="collapse" role="tabpanel" aria-labelledby="statement3">
                                    <div class="card-body">
                                        <div class="row p-t-20">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Name</label>
                                                    <input type="text" readonly id="iv_name" name="iv_name" value="" class="form-control">
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row p-t-20">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('scheme/ob.attr.id_type')</label>
                                                    <select readonly class="form-control clearfields" name='iv_idtype' id='iv_idtype' required>
                                                        <option value="">New IC</option>
                                                        <option value="">Old IC </option>
                                                        <option value="">Army ID</option>
                                                        <option value="">Police ID</option>
                                                        <option value="">Social Security Number ID (SSN)</option>
                                                        <option value="">CID</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('scheme/ob.attr.id_no')</label>
                                                    <input type="text" readonly id="iv_idNum_els" name="iv_idNum" value="" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class='row'>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('scheme/ob.attr.postal_address1')</label>
                                                    <input type="text" readonly id="telNo_els" name="telNo" value="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('scheme/ob.attr.postal_address2')</label>
                                                    <input type="text" readonly id="email_els" name="email" value="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('scheme/ob.attr.postal_address3')</label>
                                                    <input type="text" readonly id="email_els" name="email" value="" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class='row'>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('scheme/ob.attr.postcode')</label>
                                                    <input type="text" readonly id="telNo_els" name="telNo" value="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('scheme/ob.attr.state')</label>
                                                    <input type="text" readonly id="email_els" name="email" value="" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class='row'>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Telephone No.</label>
                                                    <input type="text" readonly id="telNo_els" name="telNo" value="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('scheme/ob.attr.age')</label>
                                                    <input type="text" readonly id="email_els" name="email" value="" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class='row'>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label"> About Investigation </label>
                                                    <textarea type="text" readonly class="form-control" name="investigate_about" id="investigate_about" cols="12" rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- statement 4-->
                            <div class="card m-b-0">
                                <div class="card-header" role="tab" id="statement4">
                                    <h5 class="mb-0">                           
                                        <a class="link" data-toggle="collapse" data-parent="#statementAccordion" href="#statecol4" aria-expanded="false" aria-controls="statecol4"><h5 class="card-title"><i class="fa fa-plus"></i>
                                        WITNESS INFORMATION</h5>
                                        </a>
                                    </h5>
                                </div>
                                <div id="statecol4" class="collapse" role="tabpanel" aria-labelledby="statement4">
                                    <div class="card-body">
                                        <div class="row p-t-20">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Name</label>
                                                    <input type="text" readonly id="wit_name" name="wit_name" value="" class="form-control">
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row p-t-20">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('scheme/ob.attr.id_type')</label>
                                                    <select readonly class="form-control clearfields" name='wit_idtype' id='wit_idtype' required>
                                                        <option value="">New IC</option>
                                                        <option value="">Old IC </option>
                                                        <option value="">Army ID</option>
                                                        <option value="">Police ID</option>
                                                        <option value="">Social Security Number ID (SSN)</option>
                                                        <option value="">CID</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">@lang('scheme/ob.attr.id_no')</label>
                                                    <input type="text" readonly id="wit_idNum_els" name="wit_idNum" value="" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class='row'>
                                            <div class="col-md-8">
                                                <div class="form-group">
                                                    <label class="control-label"> Witness Statement </label>
                                                    <textarea type="text" readonly class="form-control" name="Witness" id="Witness" cols="12" rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row p-t-20">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="control-label">Language</label>
                                                <select class="form-control" readonly data-placeholder="lang" tabindex="2">
                                                <option selected disabled hidden>Please Select</option>  
                                                        <option value="malay">Malay</option>
                                                        <option value="eng">English</option>
                                                        <option value="tamil">Tamil</option>
                                                        <option value="mandarin">Mandarin</option>
                                                        <option value="others">Others</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row p-t-20">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label"> Translator Name </label>
                                                    <input type="text" readonly id="translator_name" name="translator_name" value="" class="form-control">
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row p-t-20">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="control-label">Investigation Date</label>
                                                <input type="date" readonly id="investigation_date" name="investigation_date" value="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="control-label">Investigation Start Time</label>
                                                <input type="time" readonly id="investigation_timestart" name="investigation_timestart" value="" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                <label class="control-label">Investigation End Time</label>
                                                <input type="time" readonly id="investigation_timeend" name="investigation_timeend" value="" class="form-control">
                                                </div>
                                            </div>
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
