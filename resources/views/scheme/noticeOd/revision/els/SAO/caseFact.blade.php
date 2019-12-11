<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <form action="/caseinfo_revision" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-body">
                    
                        @if(Session::get('messageob'))
                        <div class="card-footer">

                            <div class="alert alert-warning">
                                {{Session::get('messageob')}}
                            </div>

                        </div>
                        @elseif (!empty($messageob))
                        <div class="card-footer">

                            <div class="alert alert-warning">
                                {{$messageob}}
                            </div>

                        </div>
                        @endif

                        <div class='row'>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label"> List of Task </label>
                                    <textarea type="text" readonly class="form-control" name="list_task" id="list_task" cols="12" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label"> Reviewer Comment </label>
                                    <textarea type="text" readonly class="form-control" name="review_comment" id="review_comment" cols="12" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class='row'>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label"> Recommendation </label>
                                    <textarea type="text" readonly class="form-control" name="recommend" id="recommend" cols="12" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label"> Approval Comment </label>
                                    <textarea type="text"  class="form-control" name="approval_comment" id="approval_comment" cols="12" rows="3"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row p-t-20">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label class="control-label"> IO Name</label>
                                    <input type="text" readonly id="io_name" name="io_name" value="" class="form-control">
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label"> Date</label>
                                    <input type="date" readonly id="io_name" name="io_name" value="" class="form-control">
                                    </select>
                                </div>
                            </div>
                        </div>
                          
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
