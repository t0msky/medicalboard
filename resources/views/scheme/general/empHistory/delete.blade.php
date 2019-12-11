<div class="modal fade" id="model_delete_employer_{{$data->empid}}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Employer History</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="{{ route('delete_emp_history', $data->empid) }}">
                @method('delete')
                @csrf
                <div class="modal-body">
                    Are you sure you want to delete?
                    <input type="hidden" class="form-control" name="id" id="id">
                </div>
                <div class="modal-footer">
                    <button type="button" id="btn_close" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                    <button type="submit" id="btn_deletedependent" class="btn btn-danger btn-sm">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>
