<form action="" method="">
    {{ csrf_field() }}
    <br>
    <div class="form-body">
        <div class="form-row">
            <div class="form-group col-md-12 col-lg-6">
                <label class="control-label">Accident / Invalidity Notice / Occupational Disease Notice Date</label>
                <input type="date" class="form-control" id="" value="">
            </div>
        </div>  
        <div class="form-group col-md-12 col-lg-12">
            <div class="form-actions">
                <button class="btn btn waves-effect waves-light btn-success" type="button" onclick="addfullDiagnosis({{$i}});"><i class="fa fa-plus"></i><label>Add Diagnosis</label></button>
            </div>
        </div>
        <br><br><br>
        <div id="addfullDiag{{$i}}"></div>
        <div id="accordion1" role="tablist" aria-multiselectable="true">
                            {{-- Panel 1 --}}
                            @for($i = 0; $i<$countPanel; $i++)
                            <div class="card m-b-0">
                                <div class="card-header" role="tab" id="panelOne{{$i+1}}">
                                    <h6 class="mb-0">
                                        <a class="link" data-toggle="collapse" data-parent="#accordion1"
                                            href="#panel1{{$i+1}}" aria-expanded="true" aria-controls="benefit_case"><h6 class="card-title"><i class="fa fa-plus"></i> Panel {{$i+1}}</h6>
                                        </a>
                                    </h6>
                                </div>

                                <div id="panel1{{$i+1}}" class="collapse" role="tabpanel" aria-labelledby="panelOne{{$i+1}}">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <form action="#">
                                                        <div class="form-group col-md-12 col-lg-6">
                                                            <label class="control-label">Diagnosis 1</label>
                                                            <input type="text" class="form-control" id="" value="">
                                                        </div>
                                                    <div class="form-group col-md-12 col-lg-12">
                                                        <label class="control-label">@lang('form/medical.decision.justification')</label>
                                                        <textarea type="text" class="form-control" id="" value=""  rows="6"></textarea>
                                                    </div>
                                                    <div class="form-group col-md-12 col-lg-6">
                                                        <label class="control-label">Diagnosis 2</label>
                                                        <input type="text" class="form-control" id="" value="">
                                                    </div>
                                                    <div class="form-group col-md-12 col-lg-12">
                                                        <label class="control-label">@lang('form/medical.decision.justification')</label>
                                                        <textarea type="text" class="form-control" id="" value=""  rows="6"></textarea>
                                                    </div>
                                                    <div class="form-group col-md-12 col-lg-6">
                                                        <label class="control-label">@lang('form/medical.decision.impairment_rating')</label>
                                                        <input type="text" class="form-control" id="" value="">
                                                    </div>
                                                    <div class="form-group col-md-12 col-lg-6">
                                                        <label class="control-label">@lang('form/medical.decision.chairperson_decision')</label>
                                                        <input type="text" class="form-control" id="" value="">
                                                    </div>
                                                    <div class="form-group col-md-12 col-lg-12">
                                                        <label class="control-label">@lang('form/medical.decision.description_disease')</label>
                                                        <textarea type="text" class="form-control" id="" value=""  rows="6"></textarea>
                                                    </div>
                                                    <div class="form-group col-md-12 col-lg-12">
                                                        <label class="control-label">@lang('form/medical.decision.type_recommendation')</label>
                                                        <textarea type="text" class="form-control" id="" value=""  rows="6"></textarea>
                                                    </div>

                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endfor
                        </div>
        <div class="form-actions">
            <a class="btn waves-effect waves-light btn-success text-white" href="{{ route('preview_huk') }}">Submit</a>
        </div>
    </div>
</form>


{{-- updated on 1/11/2019-ayu --}}

@section('js')
    <script>
        $(document).ready(function(){
            // Add minus icon for collapse element which is open by default
            $(".collapse.show").each(function(){
                $(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus");
            });
            
            // Toggle plus minus icon on show hide of collapse element
            $(".collapse").on('show.bs.collapse', function(){
                $(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus");
            }).on('hide.bs.collapse', function(){
                $(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus");
            });
        });
    </script>
@endsection
