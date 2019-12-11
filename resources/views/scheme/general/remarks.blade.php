@section('css')
<style>
    /*MESSAGE*/
    .chat {
        list-style: none;
        margin: 0;
        padding: 0;
        overflow: auto;
    }

    .chat li {
        margin-bottom: 60px;
        padding-bottom: 5px;
        border-bottom: 1px dotted #B3A9A9;
    }

    .chat li.left .chat-body {
        // margin-left: 60px;
        //margin-top:-50px;
        float: left;
    }



    .chat li.right .chat-body {
        //  margin-right: 60px;
        //margin-top:-50px;
        float: right;
    }


    .chat li .chat-body p {
        margin: 0;
        color: #777777;
    }

    .panel .slidedown .glyphicon,
    .chat .glyphicon {
        margin-right: 5px;
    }

</style>
@endsection
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <!-- <form action="#">
                    <div class="form-body"> -->
                <h6 class="card-title">@lang('form/scheme.general.collapse.remarks.title')</h6>
                <hr>
                <div class="card">
                    <div class="card-body">
                        <div class="row offset-2">
                            <div class="col-md-10">
                                <div class="panel panel-remarkPop">
                                    <div class="panel-heading">
                                        <div class="panel-body">
                                            <ul class="chat">
                                                @if(!empty($remark)||$remark !=null)
                                                @foreach ($remark as $remark)
                                                <li class="left clearfix">
                                                    <div class="chat-body clearfix text-left">
                                                        <div class="header">
                                                            <strong
                                                                class="primary-font ">{{ $remark->addby->name }}</strong>
                                                            <small class="pull-right text-muted">
                                                                <span class="glyphicon glyphicon-time"></span>
                                                                {{ $remark->created_at }}</small>
                                                        </div>
                                                        <p>
                                                            {{ $remark->remark }}
                                                        </p>
                                                    </div>
                                                </li>
                                                @endforeach
                                                @endif
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <form action="{{ route('remarks') }}" method="POST">
                    @csrf
                    <div class="form-body">
                        <div class='row offset-2'>
                            <div class="col-md-10">
                                <div class="form-group">
                                    <label
                                        class="control-label">@lang('form/scheme.general.collapse.remarks.remark')</label>
                                    <textarea type="text" name="remark" id="remark" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class='row offset-2'>
                            <div class="col-md-10">
                                <div class="form-actions">
                                    <button type="submit" id="btnnotice"
                                        class="btn btn waves-effect waves-light btn-success">@lang('button.next')</button>
                                    <button type="button" id="btn_reset"
                                        class="btn btn waves-effect waves-light btn-info"
                                        onclick="submitform()">@lang('button.reset')</button>

                                    <button type="button" class="btn waves-effect waves-light btn-secondary"
                                        id='btncancelacc'
                                        onclick="window.location='/noticetype'">@lang('button.cancel')</button>
                                    <button type="button" class="btn waves-effect waves-light btn-secondary"
                                        id='btncancelacc'
                                        onclick="window.location='/home'">@lang('button.back')</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
