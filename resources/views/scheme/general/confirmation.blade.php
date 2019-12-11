<div class="form-row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{route($preview)}}" method="POST" id="form_confirmation">
                    @csrf
                    <div class="row p-t-20">
                        <div class="form-group col-md-3">
                            <div class="custom-control custom-checkbox">
                                @if(!empty($bankinfo) || $bankinfo !=null)
                                <input type="checkbox" class="custom-control-input" id="customCheck1" disabled checked>
                                @else
                                <input type="checkbox" class="custom-control-input" id="customCheck1" disabled>
                                @endif
                                <label class="custom-control-label"
                                    for="customCheck1">@lang('form/scheme.general.collapse.confirmation.bank_completed')
                                    &nbsp; &nbsp; </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12 col-lg-3">
                            <label
                                class="control-label">@lang('form/scheme.general.collapse.confirmation.completion_completed')</label>
                            @if(!empty($bankinfo) || $bankinfo !=null)
                            <select name="jrecv" id="jrecv" class="form-control" onchange='fieldchange()' required>
                                @else
                                <select name="jrecv" id="jrecv" class="form-control" onchange='fieldchange()' required
                                    disabled>
                                    @endif
                                    @if((!empty($confirmation)|| $confirmation!=null)&& $confirmation->jrecv == 'Y'))
                                    <option value="Y" selected>@lang('Yes')</option>
                                    <option value="N">@lang('No')</option>
                                    @elseif (!empty($confirmation) && $confirmation->jrecv == 'N')
                                    <option value="Y">@lang('Yes')</option>
                                    <option value="N" selected>@lang('No')</option>
                                    @else
                                    <option selected disabled hidden>@lang('Please Select')</option>
                                    <option value="Y">@lang('Yes')</option>
                                    <option value="N" selected>@lang('No')</option>
                                    @endif
                                </select>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group" id="completion_date">

                                <label
                                    class="control-label">@lang('form/scheme.general.collapse.confirmation.completion_date')</label>
                                @if( ((!empty($bankinfo) || $bankinfo !=null)) && !empty($confirmation) &&
                                $confirmation->jrecvdate!=null)
                                <input type="date" id="jrecvdate" name="jrecvdate" onchange="fieldchange()"
                                    value="{{ $confirmation->jrecvdate }}" class="form-control" required>
                                @elseif((!empty($bankinfo) || $bankinfo !=null))
                                <input type="date" id="jrecvdate" name="jrecvdate" onchange="fieldchange()" value=""
                                    class="form-control" required>
                                @else
                                <input type="date" id="jrecvdate" name="jrecvdate" onchange="fieldchange()" value=""
                                    class="form-control" required readonly>
                                @endif

                            </div>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" name="action" id="btn_save_confirmation" value="Save"
                            class="btn btn waves-effect waves-light btn-success">@lang('button.save')</button>
                        <button type="submit" name="action" value="Preview"
                            class="btn waves-effect waves-light btn-secondary">@lang('button.preview')</button>
                        <button type="button" class="btn btn waves-effect waves-light btn-info"
                            onclick="submitform()">@lang('button.reset')</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $('#btn_save_confirmation').click(function () {

        $('#form_confirmation').attr('action', '{{route('notice_confirmation')}}');
    });

</script>

<!-- row -->
<script>
    function fieldchange() {
        //alert('test');
        var submitbutton = document.getElementById('submit');
        //alert(submitbutton);
        submitbutton.disabled = true;
        //alert('test');
    }

    function statechange() {

        var statecode = $("#state1").val();
        // alert(statecode);
        $('#brname').find('option').not(':first').remove();
        if (statecode) {

            $.ajax({
                url: '/branch/' + statecode,
                type: 'GET',
                dataType: 'json',
                success: function (data) {
                    //            console.log(data);

                    var len = 0;
                    if (data != null) {
                        len = data.length;
                    }

                    if (len > 0) {
                        for (var i = 0; i < len; i++) {

                            var id = data[i].brcode;
                            var name = data[i].brname;

                            var option = "<option value='" + id + "'>" + name + "</option>";

                            $("#brname").append(option);
                        }

                        if (len > 0) {
                            for (var i = 0; i < len; i++) {

                                var id = data[i].brcode;
                                var name = data[i].brname;

                                var option = "<option value='" + id + "'>" + name + "</option>";

                                $("#brname").append(option);
                            }
                        }

                    }

                }
            });

            fieldchange();
        }

        // Check
        // $("#customCheck1").attr("checked", true);
        // $('select[name=jrecv]').change(function () {
        // if (this.value == 'Y') {
        //     $("#jrecv").prop('readonly', false);
        //     $("#jrecv").disabled();


        // Uncheck
        // $("#customCheck1").attr("checked", false);
    }

</script>
