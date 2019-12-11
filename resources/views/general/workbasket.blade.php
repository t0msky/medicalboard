@extends('general.layouts.app')

@section('maintitle', 'Tab Screen')

@section('content')

<div class="col-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">@lang('workbasket.title')</h4>
            <div class="card-body">
                <form action="{{Route('workbasket.post')}}" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="row p-t-20">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">@lang('workbasket.module')</label>
                            <select name="module" id='module' class="form-control clearfields">
                                <option selected hidden readonly value="">@lang('Please Select')</option>
                                <option value="Scheme">Scheme</option>
                                <option value="Medical Board">Medical Board</option>
                                <option value="Medical Services">Medical Services</option>
                                <option value="RTW">Return to Work</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row p-t-20">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label">@lang('workbasket.ref_no')</label>
                            <select name="ref_type" id='ref_type' class="form-control clearfields">
                                <option selected hidden readonly value="">@lang('Please Select')</option>
                                <option value="caserefno" >Scheme Ref. No.</option>
                                <option value="medrefno" >MB Ref. No.</option>
                                <option value="msrefno" >MO Ref. No.</option>
                                <option value="rtwrefno" >RTW Ref. No.</option>
                                <option value="idno" >Identification No.</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group-turun"><br>
                            <input type="text" class="form-control" name="ref_no" id="ref_no">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group-turun"><br>
                            <div class="input-group-append">
                                {{-- <button type="submit" class="input-group-text" style="background-color: #d8e8e9;"><i class="ti-search"></i></button> --}}
                                <button type="submit" name="action" id="action" value="filter"
                                class="btn btn-facebook waves-effect waves-light"><i
                                class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="table-responsive m-t-40">
                        <table id="myTable" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>@lang('table-header.no')</th>
                                    <th width="9%">@lang('table-header.date')</th>
                                    <th>@lang('table-header.aging')</th>
                                    <th>@lang('table-header.module')</th>
                                    <th>@lang('table-header.ref_no')</th>
                                    <th>@lang('table-header.name')</th>
                                    <th width="7%">@lang('table-header.id_no')</th>
                                    <th width="9%">@lang('table-header.desc')</th>
                                    <th width="9%">@lang('table-header.status')</th>
                                    <th>@lang('table-header.action')</th>
                                </tr>
                              
                                <tbody class='align-middle'>
                                    <tr>
                                        @foreach($workbasket as $key => $wb)
                                        <td>{{$key+1}}</td>
                                        <td>{{$wb->assigned_date}}</td>
                                        @if(($wb->aging > 9))
                                        <td style="background-color: #F08080; padding: 10px; border-left: 5px solid #40e0d0">{{$wb->aging}}</td>
                                        @elseif(($wb->aging >= 5 && $wb->aging <= 8))
                                        <td style="background-color: #ffff00; padding: 10px; border-left: 5px solid #40e0d0">{{$wb->aging}}</td>
                                        @elseif(($wb->aging >= 3 && $wb->aging < 5))
                                        <td style="background-color: #32CD32; padding: 10px; border-left: 5px solid #40e0d0">{{$wb->aging}}</td>
                                        @else
                                        <td>{{$wb->aging}}</td>
                                        @endif
                                        <td>{{$wb->module}}</td>
                                        @if(is_null($wb->module))
                                        @if($wb->module == 'Scheme')
                                        <td>@php $schemerefno=$wb->case_info->schemerefno
                                        @endphp {{$schemerefno}}</td>
                                        @elseif($wb->module == 'Medical Services')
                                        <td>{{$wb->morefno}}</td>
                                        @elseif($wb->module == 'Medical Board')
                                        <td>{{$wb->mbrefno}}</td>
                                        @else
                                        <td>{{$wb->rtwrefno}}</td>
                                        @endif
                                        @else
                                        <td>Not Available</td>
                                        @endif
                                        <td>
                                        @php $name_ob=$wb->case_info->case_ob_profile->name
                                        @endphp
                                        @if(!empty($name_ob))
                                        {{$name_ob}}
                                        @else
                                        Not Available
                                        @endif
                                        </td>
                                        <td>
                                        @php $idno=$wb->case_info->case_ob_profile->idno
                                        @endphp
                                        @if(!empty($idno))
                                        {{$idno}}
                                        @else
                                        Not Available
                                        @endif
                                        </td>
                                        <td>
                                        @php $name=$wb->case_info->substatus
                                        @endphp
                                        @if(!empty($name))
                                        @foreach($status as $sts)
                                        @foreach($sts->status_sub as $sub)
                                        @if($name == $sub->id)
                                        {{$sub->name}}
                                        @endif  
                                        @endforeach
                                        @endforeach
                                        @else
                                        Not Available
                                        @endif
                                        </td>
                                        <td>
                                        @php $desc=$wb->case_info->substatus
                                        @endphp
                                        @if(!empty($desc))
                                        @foreach($status as $sts)
                                        @foreach($sts->status_sub as $sub)
                                        @if($name == $sub->id)
                                        {{$sub->description}}
                                        @endif
                                        @endforeach
                                        @endforeach
                                        @else
                                        Not Available
                                        @endif
                                        </td>
                                        <td style="align:center;width:1%;"><a class='selectdraft' href="{{ route('get_notice',$wb->caserefno)}}"><i class="fas fa-arrow-circle-right"></i></a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </thead>
                        </table>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection

