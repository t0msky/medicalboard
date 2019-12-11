<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="#">
                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-6">
                            <label class="control-label">@lang('Meeting Reference No. ')</label>
                            <select class="form-control" data-placeholder="" tabindex="2">
                                <option selected readonly disabled hidden>Please Choose </option>
                                <option value="">@lang('')</option>
                                <option value="">@lang('')</option>
                             </select>
                        </div>
                    </div>
                    <div class="row p-t-20">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table id="committeeTable" class="table table-bordered" data-toggle-column="first">
                                    <thead>
                                        <th style='width:5%'>@lang('No.')</th>
                                        <th style='width:25%'>@lang('Insured Person Name')</th>
                                        <th style='width:15%'>@lang('Identification Number')</th>
                                        <th style='width:15%'>@lang('Notice Type')</th>
                                        <th style='width:25%'>@lang('MO Name')</th>
                                        <th style='width:5%'>@lang('Action')</th>
                                    </thead>
                                    <tbody>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <select class="form-control" data-placeholder="" tabindex="2">
                                                <option selected readonly disabled hidden>Please Choose </option>
                                                <option value="">@lang('Invalidity')</option>
                                                <option value="">@lang('Accident')</option>
                                             </select>
                                            </td>
                                        <td></td>
                                        <td><center><a class='view'><i class="fas fa-file-alt" title="View"></i></a></center></td>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!---------------COLLAPSE ------------->
                    
                    @include('medical.MedicalServices.opinion.abppp.appointment.collapseMBReviewCommittee')

                </form>
            </div>
        </div>
    </div>
</div>


{{-- JS FOR TABLE OB AND PANEL --}}
<script type="text/javascript">
    function committeeHideShow(){
            $('#showTable').show();
    }

    function showAccordion(){
            $('#accordionShow').show();
    }
</script>


{{--  JS FOR + - COLLAPSE --}}
<script>
    //redirect to specific tab
    $(document).ready(function () {
        $('#tabMenu a[href="#{{ old('
            tab ') }}"]').tab('show')
    });
    //redirect to specific tab
    $(document).ready(function () {
        $('#tabMenu a[href="#{{ old('
            tab ') }}"]').tab('show')
    });

    $(document).ready(function () {
        // Add minus icon for collapse element which is open by default
        $(".collapse.show").each(function () {
            $(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus");
        });

        // Toggle plus minus icon on show hide of collapse element
        $(".collapse").on('show.bs.collapse', function () {
            $(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus");
        }).on('hide.bs.collapse', function () {
            $(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus");
        });
    });

</script>