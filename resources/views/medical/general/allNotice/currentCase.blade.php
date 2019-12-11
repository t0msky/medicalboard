<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="p-20">
                    <form action="#">
                        <div class="form-row">
                            <div class="form-group col-md-12 col-lg-4">
                                <label class="control-label">@lang('Scheme Ref. No.')</label>
                                <div class="input-group ">
                                     @if ((!empty($schemerefno)||$schemerefno!=null))
                                    <input type="text" name="moRefNo" id="moRefNo" value="{{$schemerefno}}" class="form-control" readonly>
                                    @else
                                    <input type="text" name="moRefNo" id="moRefNo" value="" class="form-control" readonly>
                                    @endif
                                    <div class="input-group-append">
                                        <a class="get-code view" data-toggle="modal" data-target="#previewScheme" data-whatever="@getbootstrap" aria-expanded="true" id="view">
                                            <i class="fas fa-file-alt"  title="Scheme Case" data-toggle="tooltip"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12 col-lg-6">
                                <label class="control-label">@lang('Notice Date')</label>
                                @if(!empty($assigned_date)||$assigned_date!=null)
                                <input type="text" name="noticeDate" id="noticeDate" value="{{$assigned_date}}" class="form-control" readonly>
                                @else
                                <input type="text" name="noticeDate" id="noticeDate" value="" class="form-control" readonly>
                                @endif
                            </div>
                            <div class="form-group col-md-12 col-lg-6">
                                <label class="control-label">@lang('Notice Type')</label>
                                @if(!empty($ctdesc)||$ctdesc!=null)
                                <input type="text" name="noticeType" id="noticeType" value="{{$ctdesc}}"class="form-control" readonly>
                                @else
                                <input type="text" name="noticeType" id="noticeType" value="" class="form-control" readonly>
                                @endif
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12 col-lg-12">
                                @if ($casetype == '1')
                                <label class="control-label">@lang('Injury Description')</label>
                                    @if(!empty($injury) && $injury->injurydesc != '')
                                     <textarea rows="4" cols="200" name="injury" id="injury" value="{{$injury->injurydesc}}" class="form-control" readonly ></textarea>
                                    @else
                                     <textarea rows="4" cols="200" name="injury" id="injury" class="form-control" readonly ></textarea>
                                    @endif
                                @elseif ($casetype == '2')
                                <label class="control-label">@lang('Occupacational Disease Description')</label>
                                    @if(!empty($injury) && $injury->oddesc != '')
                                     <textarea rows="4" cols="200" name="injury" id="injury" value="{{$injury->oddesc}}" class="form-control" readonly ></textarea>
                                    @else
                                     <textarea rows="4" cols="200" name="injury" id="injury" class="form-control" readonly ></textarea>
                                    @endif
                                @elseif ($casetype == '3')
                                <label class="control-label">@lang('Description of Morbidity')</label>
                                    @if(!empty($injury) && $injury->morbiddesc != '')
                                    <textarea rows="4" cols="200" name="injury" id="injury" value="{{$injury->morbiddesc}}" class="form-control" readonly ></textarea>
                                    @else
                                    <textarea rows="4" cols="200" name="injury" id="injury" class="form-control" readonly ></textarea>
                                    @endif
                                @else
                                <label class="control-label">@lang('Injury Description')</label>
                                <textarea rows="4" cols="200" name="injury" id="injury" class="form-control" readonly ></textarea>
                                @endif

                               <!--  @if(!empty($injury)||$injury!=null)
                                <textarea rows="4" cols="200" name="injury" id="injury" class="form-control" readonly ></textarea>
                                @else
                                <textarea rows="4" cols="200" name="injury" id="injury" class="form-control" readonly ></textarea>
                                @endif -->
                            </div>
                        </div>
                        <div class="form-row">
                            @if ($casetype == '1')

                            <div class="form-group col-md-12 col-lg-6">
                                <label class="control-label">@lang('Potential HUK')</label>
                                <input type="text" name="potHUK" id="potHUK" value=""class="form-control" readonly>
                            </div>
                            <div class="form-group col-md-12 col-lg-6">
                                <label class="control-label">@lang('Potential Sec. 96')</label>
                                <input type="text" name="potSec96" id="potSec96" value=""class="form-control" readonly>
                            </div>

                            @elseif ($casetype == '2')
                            
                            @elseif ($casetype == '3')
                            <div class="form-group col-md-12 col-lg-6">
                                <label class="control-label">@lang(' Potential Invality')</label>
                                <input type="text" name="potHUK" id="potHUK" value=""class="form-control" readonly>
                            </div>
                            <div class="form-group col-md-12 col-lg-6">
                                <label class="control-label">@lang('Potential Sec. 96')</label>
                                <input type="text" name="potSec96" id="potSec96" value=""class="form-control" readonly>
                            </div>
                            @else
                            <div class="form-group col-md-12 col-lg-6">
                                <label class="control-label">@lang('Potential HUK')</label>
                                <input type="text" name="potHUK" id="potHUK" value=""class="form-control" readonly>
                            </div>
                            <div class="form-group col-md-12 col-lg-6">
                                <label class="control-label">@lang('Potential Sec. 96')</label>
                                <input type="text" name="potSec96" id="potSec96" value=""class="form-control" readonly>
                            </div>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@include('medical.MedicalServices.general.committee.modalPreviewScheme')