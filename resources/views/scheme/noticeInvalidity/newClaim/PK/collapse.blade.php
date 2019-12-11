<div id="accordion2" role="tablist" class="accordion">

    <form action="{{route('post.ob')}}" method="POST" id="reset">
        <div class="card m-b-0">
            <div class="card-header" role="tab" id="headingOb">
                <div class="form-row"><br>
                    <div class="form-group col-md-12 col-lg-3">
                        <label class="control-label ">Form 34 Received Date</label><span class="required">*</span>
                        @if ((!empty($obprofile)||$obprofile!=null))
                        <input type="date" id="f34recvdate" name="f34recvdate" value="{{$obprofile->f34recvdate}}"
                            class="form-control clearFields" required>
                        @else
                        <input type="date" id="f34recvdate" name="f34recvdate" value="" class="form-control clearFields"
                            required>
                        @endif
                    </div>
                </div>
                <div class="form-row"><br>
                    <div class="form-group col-md-12 col-lg-3">
                        <label class="control-label">@lang('Form 34 Submission By')</label><span class="required">*</span>
                        <select class="form-control clearFields" name="f34submitby" id="f34submitby">
                            <option hidden disabled value="please select" selected>@lang('Please Select')</option>
                            @if(!empty($ref_table)|| $reftable!=null )
                            @foreach($ref_table->f34submitby as $f34)
                            @if ((!empty($obprofile)||$obprofile!=null)&& $obprofile->f34submitby == $f34->ref_code)
                            <option value="{{$f34->ref_code}}" selected>{{$f34->desc_en}}</option>
                            @else
                            <option value="{{$f34->ref_code}}">{{$f34->desc_en}}</option>
                            @endif
                            @endforeach
                            @endif
                        </select>
                    </div>
                </div>
                <h6 class="mb-0">
                    <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#collapseOb"
                        aria-expanded="false" aria-controls="collapseOb">
                        <h6 class="card-title"><i class="fa fa-plus"></i> @lang('form/scheme.general.collapse.ob.title')
                        </h6>
                    </a>
                </h6>
            </div>
            <div id="collapseOb" class="collapse" role="tabpanel" aria-labelledby="headingOb">
                <div class="card-body">
                    @include('scheme.general.ob')
                </div>
            </div>
        </div>
    </form>

    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingOne1">
            <h5 class="mb-0">
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#invalidityInfo"
                    aria-expanded="false" aria-controls="collapseOne1">
                    <h6 class="card-title"><i class="fa fa-plus"></i>
                        @lang('Invalidity Information')</h6>
                </a>
            </h5>
        </div>
        <div id="invalidityInfo" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
            <div class="card-body">
                @include('scheme.noticeInvalidity.newClaim.pk.invalidityInfo')
            </div>
        </div>
    </div>
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingOne1">
            <h5 class="mb-0">
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#empHistory"
                    aria-expanded="false" aria-controls="collapseOne1">
                    <h6 class="card-title"><i class="fa fa-plus"></i>
                        @lang('Employment History')</h6>
                </a>
            </h5>
        </div>
        <div id="empHistory" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
            <div class="card-body">
                @include('scheme.general.empHistory.main')
            </div>
        </div>
    </div>
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingOne1">
            <h5 class="mb-0">
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#wages" aria-expanded="false"
                    aria-controls="collapseOne1">
                    <h6 class="card-title"><i class="fa fa-plus"></i>
                        @lang('Wages Information')</h6>
                </a>
            </h5>
        </div>
        <div id="wages" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
            <div class="card-body">
                @include('scheme.noticeInvalidity.newClaim.pk.wages')
            </div>
        </div>
    </div>

    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingOne1">
            <h5 class="mb-0">
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#socso" aria-expanded="false"
                    aria-controls="collapseOne1">
                    <h6 class="card-title"><i class="fa fa-plus"></i>
                        @lang('SOCSO Office')</h6>
                </a>
            </h5>
        </div>
        <div id="socso" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
            <div class="card-body">
                @include('scheme.general.socso')
            </div>
        </div>
    </div>
    @if(!empty($obprofile)|| $obprofile!=null)
    @if($obprofile->f34submitby==1)
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingOne1">
            <h5 class="mb-0">
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#ceterfication"
                    aria-expanded="false" aria-controls="collapseOne1">
                    <h6 class="card-title"><i class="fa fa-plus"></i>
                        @lang('Employer Certification')</h6>
                </a>
            </h5>
        </div>
        <div id="ceterfication" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
            <div class="card-body">
                @include('scheme.general.certification')
            </div>
        </div>
    </div>
    @endif
    @endif


    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingOne1">
            <h5 class="mb-0">
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#bankInfo" aria-expanded="false"
                    aria-controls="collapseOne1">
                    <h6 class="card-title"><i class="fa fa-plus"></i>
                        @lang('Bank Information')</h6>
                </a>
            </h5>
        </div>
        <div id="bankInfo" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
            <div class="card-body">
                @include('scheme.general.bank')
            </div>
        </div>
    </div>
    <div class="card m-b-0">
        <div class="card-header" role="tab" id="headingOne1">
            <h5 class="mb-0">
                <a class="link" data-toggle="collapse" data-parent="#accordion2" href="#confirmation"
                    aria-expanded="false" aria-controls="collapseOne1">
                    <h6 class="card-title"><i class="fa fa-plus"></i>
                        @lang('Confirmation')</h6>
                </a>
            </h5>
        </div>
        <div id="confirmation" class="collapse" role="tabpanel" aria-labelledby="headingOne1">
            <div class="card-body">
                @include('scheme.general.confirmation')
            </div>
        </div>
    </div>
</div>
