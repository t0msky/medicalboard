<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{route('post.ob')}}" method="POST" id="reset">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-body">
                    <h5 class="card-title"></i>@lang('Case History')</h5>
                    <br>
                        <div class='form-row'>
                            <div class="table-responsive">
                                <div class="col-md-12 col-lg-9">
                                    <table id="table-medical-details0" class="table table-sm table-bordered" data-toggle-column="first">
                                        <thead>
                                            <tr>
                                                <th style='width:2%'>@lang('No.')</th>
                                                <th style='width:40%'>@lang('Scheme Ref. No./ Benefit Ref. No.')</th>
                                                <th style='width:30%'>@lang('Notice Date')</th>
                                                <th style='width:25%'>@lang('Status')</th>
                                                <th style='width:3%'>@lang('Action')</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr data-expanded="true" class="workrow">
                                                <td>1.</td>
                                                <td>
                                                    <div class="col-md-">
                                                        <input id="noticedetails" name="noticedetails" type="text" value="" class="form-control">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="col-md-">
                                                        <input id="noticedetails" name="noticedetails" type="text" value="" class="form-control">
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="col-md-">
                                                        <input id="noticedetails" name="noticedetails" type="text" value="" class="form-control">
                                                    </div>
                                                </td>
                                                <td style="align:center;width:10%;"><a class='view'><i class="fas fa-file-alt"></i></a><br></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
