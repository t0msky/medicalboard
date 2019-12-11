<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('css');
    @include('general.layouts.css');
    <style>
        html,
        body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 40;
            font-size: 13px;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            padding: 20px 30px;
        }

        .title {
            font-size: 30px;
        }

        .small_title {
            font-size: 17px;
            font-weight: bold;
        }

        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        .p-t {
            padding-top: 20px;
        }

        .text-center {
            text-align: center;
        }

        .small-font {
            font-size: 9px;
            font-style: italic;
        }

        table,
        td,
        th {
            border: 1px solid #ddd;
            text-align: left;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            padding: 5px 10px;
        }

        h5 {
            font-size: 15px;
        }

    </style>

</head>

<body>
    <div class="content">
        <table>
            <tr>
                <th class="text-center" width="10%"><img src="{{ url('images/htp.png') }}" width="66" height="80"></th>
                <th class="title">HeiTech Padu Berhad</th>
            </tr>
        </table>
        <br>
        <div class="text-center small_title"> SERVICE EXECUTION ORDER (SEO)
        </div>
        <br>
        <div class=""> PROJECT INFORMATION <a class="small-font">(To be filled up by Account Manager)</a></div>
        <table>

            <tr>
                <th width="20%">Tajuk</th>
                <td colspan="2">PROGRAM RAWATAN PEMULIHAN (RETURN TO WORK)<br>NAMA OB : <br>NO KPPN:</td>
            </tr>
            <tr>
                <th>KEPADA</th>
                <td>Pengarah/Pengurus PERKESO</td>
                <th rowspan="2">S.K.:WONG FONG WEI</th>
            </tr>
            <tr>
                <th>DARIPADA</th>
                <td>PC(RTW)</td>
            </tr>

        </table>
        <br>
        <hr>
        <div class="col-md-20">
            <div class="card">
                <div class="card-body">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="modal-body">
                        <div class='row'>
                            <div class="form-group col-md-12 col-lg-6">
                                <label class="custom-control-label">@lang('Send To') :</label>
                                <label class="custom-control-label">{{$sendnotification['send_to']}}</label>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="form-group col-md-12 col-lg-6">
                                <label class="control-label">@lang('Name'):</label>
                                <label class="custom-control-label">{{$sendnotification['name_others']}}</label>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="form-group col-md-12 col-lg-6">
                                <label class="control-label">@lang('Email') :</label>
                                <label class="custom-control-label">{{$sendnotification['email_others']}}</label>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="form-group col-md-12 col-lg-6">
                                <label class="control-label">@lang('Address') :</label>
                                <label class="custom-control-label">{{$sendnotification['add1']}},</label>
                                <label class="custom-control-label">{{$sendnotification['add2']}},</label>
                                <label class="custom-control-label">{{$sendnotification['add3']}}</label>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="form-group col-md-12 col-lg-6">
                                <label class="control-label">@lang('Select Employer') :</label>
                                <label class="custom-control-label">{{$sendnotification['select_employer']}}</label>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="form-group col-md-12 col-lg-6">
                                <label class="control-label">@lang('Notification Type') :</label>
                                <label class="custom-control-label">{{$sendnotification['notification_type']}}</label>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="form-group col-md-12 col-lg-6">
                                <label class="control-label">@lang('Select Employer') :</label>
                                <label class="custom-control-label">{{$sendnotification['select_employer']}}</label>
                            </div>
                        </div>                       
                        <div class="col-md-12">
                            <h4><label>List Of Document : </label></h4>
                            <div class="col-md-12">
                                <br>
                                <div class="table-responsive">
                                    <table class="table table-sm " id="add_infor">
                                        <tbody>
                                            <tr data-expanded="true" class="workrow">
                                                <td> 
                                                    @if(!empty($sendnotification)&& (in_array("check1",
                                                    $sendnotification['list_doc'])) )
                                                    Document 1
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr data-expanded="true" class="workrow">
                                                <td> 
                                                    @if(!empty($sendnotification)&& (in_array("check2",
                                                    $sendnotification['list_doc'])) )
                                                    Document 2 
                                                    @endif
                                                </td>
                                            </tr>
                                            @if(!empty($sendnotification))
                                            @foreach ($sendnotification['list_doc_others'] as $key=>$others)
                                            <tr data-expanded="true" class="workrow">
                                                <td>{{ $others}}</td>
                                            </tr>
                                            @endforeach
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>
                        <br>
                        <br>
                        <div class="col-md-12">
                            <h4><label>Additional Information</label></h4>
                            <div class="col-md-12">
                                <br>
                                <div class="table-responsive">
                                    <table class="table table-sm table-bordered" id="add_infor">
                                        <thead>
                                            <tr>
                                                <th style='width:1%'>@lang('No.')</th>
                                                <th style='width:10%'>@lang('Information')</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if(!empty($sendnotification))
                                            @foreach ($sendnotification['information'] as $key=>$others)
                                            <tr data-expanded="true" class="workrow">
                                                    <td><input type="hidden">{{$key+1}}</td>
                                                <td>{{$others}}</td>
                                            </tr>
                                            @endforeach
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('general.layouts.js')
    @include('sweetalert::alert')
    @yield('js')
</body>

</html>
