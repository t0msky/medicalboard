<!-- sample modal content -->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="previewScheme" aria-labelledby="myLargeModalLabel"
    aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <h5 class="card-title" id="opinion">@lang('History Opinion')
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button></h5>
            <div class="modal-body">
             @include('scheme.noticeInvalidity.newClaim.PK.preview.modal')
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn waves-effect waves-light btn-success" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
