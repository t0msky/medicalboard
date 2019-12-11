<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{route('socso_office')}}" method="POST" id="reset">
                    @csrf
                    <div class="row p-t-20">
                        <div class="form-group col-md-12 col-lg-4">
                            <label> @lang('form/address-info.state')</label>
                            <select class="form-control clearFields" name="state1" id="state" onchange="statechange()"required>
                                @if(!empty($state)||$state!=null)
                                @foreach($state as $s)
                                @if(!empty($socso) && $socso->statecode == $s->ref_code)
                                <option value="{{$s->ref_code}}" selected>{{$s->name}}</option>
                                @else
                                <option value="{{$s->ref_code}}">{{$s->name}}</option>
                                @endif
                                @endforeach
                                @endif
                            </select>
                        </div>
                        <div class="form-group col-md-12 col-lg-4">
                            <label>@lang('Branch')</label>

                            <select name="brname" id="brname" class="form-control" onchange="fieldchange()" required>
                                @if(!empty($socso)||$socso!=null)
                                @foreach($state as $s)
                                @if($socso->statecode == $s->ref_code)
                                @foreach($s->branch as $branch)
                                @if($socso->preferredbrcode == $branch->code)
                                <option value="{{$branch->code}}" selected>{{$branch->name}}</option>
                                @else
                                <option value="{{$branch->code}}">{{$branch->name}}</option>
                                @endif
                                @endforeach
                                @endif
                                @endforeach
                                @else
                                <option selected hidden disabled>Please Select</option>
                                @endif
                            </select>
                        </div>

                    </div>
                    <div class="form-actions">
                        <button type="submit"class="btn btn waves-effect waves-light btn-success">@lang('button.save')</button>
                        <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('button.reset')</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>

    function submitform() {
        $('#reset').find('form').submit();
        $('.clearFields').val('');
    }




    $(document).ready(function(){
    $("select[name=state1]").change(function () {

            var data_id=$("select[name=state1]").val();
        $.ajax({
                headers: {
                    'X-CSRF-Token': '{{ csrf_token() }}',
                },
                type: 'GET',
                data: {
                    id: data_id,
                },
                url: "{{route('socso_branch')}}",
                success: function (data) {
                    $('#brname').empty().append($('<option/>', {
                           
                            text : "Please Select",
                            selected:true,
                            hidden:true

                        }));

                    $.each(data, function (index, value) {
                    //     $('#brname').append('<option>'+value.name+'</option>');
                        $('#brname').append($('<option/>', {
                            value: value.code,
                            text : value.name,
                        }));

                    });


                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {
                    alert("Status: " + textStatus);
                    alert("Error: " + errorThrown);
                }
            });

        });
    });

</script>
