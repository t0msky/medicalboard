<div class="modal fade" id="rescappt_modal" tabindex="-1" role="dialog" aria-labelledby="rescappt_modal">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header card-title">
                <h4 class="modal-title" id="rescappt_modal">@lang('form/medical.collapse.appointment.title2')</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:#fff;"><span aria-hidden="true">&times;</span></button>
            </div>
            <form action="" method="post">
            <div class="modal-body">
                {{ csrf_field() }}
                <div class="row p-t-20 ">
                    <div id="calendar"></div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="align-self-left text-left">
                <button type="button" class="btn btn waves-effect waves-light btn-danger" data-dismiss="modal">@lang('button.cancel')</button></div>
                <button type="submit" class="btn btn waves-effect waves-light btn-success" id="update-event"><i class="fa fa-check"></i> @lang('button.save')</button>
            </div>
        </form>
        </div>
    </div>
</div>

