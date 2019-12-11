<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <div class="form-body">
                    <form action="{{route('query_opinion')}}" method="POST">
                        @csrf
                        <h5 class="card-title">@lang('Query and Opinion')</h5>
                        <div class='row'>
                            <div class="col-md-12 col-lg-4">
                                <div class="form-group">
                                    <label class="control-label">Action</label>
                                    <select name="action_query_opinion" class="form-control">
                                        <option selected readonly disabled hidden>Please Choose</option>
                                        <option value="query">Query</option>
                                        <option value="opinion">Opinion</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div id="query0">
                            <h6 class="card-title-sub">Query</h6>
                            <hr>
                            <div class='row'>
                                <div class="col-md-12 col-lg-4">
                                    <div class="form-group">
                                        <label class="control-label">Description</label>
                                        <textarea type="text" id="desc" name="desc" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class='row'>
                                <div class="col-md-12 col-lg-4">
                                    <div class="form-group">
                                        <label class="control-label">Route to:</label>
                                        <select name="route_to" class="form-control">
                                            <option>Please Select</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="add_opinion" tabindex="-1" role="dialog"
                            aria-labelledby="viewOpinionLabel1">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="exampleModalLabel1">Add New Opinion</h4>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-12 col-lg-12">
                                                <div class="form-group">
                                                    <label class="control-label">Type of Opinion</label>
                                                    <select name="type_opinion" class="form-control">
                                                        <option selected readonly disabled hidden>Please Choose</option>
                                                        @foreach($ref_table->opinion_type as $op_type)
                                                        <option value="{{$op_type->ref_code}}">{{$op_type->desc_en}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="recipient-name" class="control-label">Case Details</label>
                                            <input type="text" name="case_details" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="message-text" class="control-label">Investigation
                                                Details</label>
                                            <textarea name="investigation_details" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="recipient-name" class="control-label">Doubtful/Issue</label>
                                            <textarea name="doubtful_issue" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="message-text" class="control-label">Recommendation</label>
                                            <textarea name="recommendation" class="form-control"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label for="message-text" class="control-label">Conclusion</label>
                                            <textarea name="query_conclusion" class="form-control"></textarea>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default"
                                            data-dismiss="modal">Close</button>
                                        <button type="Submit" class="btn btn-primary">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div id="opinion_req0">
                        <h6 class="card-title-sub">Request Opinion</h6>
                        <hr>
                        <div class="row p-t-20">
                            <div class="col-md-12 col-lg-5">
                                <div class="card">
                                    <div class="table-responsive">
                                        <table id="table-contribution" class="table table-sm table-bordered"
                                            data-toggle-column="first">
                                            <thead>
                                                <tr>
                                                    <th style='width:1%'>No.</th>
                                                    <th style='width:4%'>Type of Opinion</th>
                                                    <th style='width:1%'>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class='align-middle'>
                                                @if(!empty($query_opinion))

                                                @foreach($query_opinion as $idx=> $query)
                                                <tr data-expanded="true" class="workrow" id="tr0_0" data-opinion="{{ $query->op_opiniontype }}">
                                                    <td>{{$idx+1}}</td>
                                                    <td>
                                                        @foreach($ref_table->opinion_type as $op_type)
                                                        @if($query->op_opiniontype == $op_type ->ref_code)
                                                        {{$op_type->desc_en}}
                                                        @endif
                                                        @endforeach
                                                    </td>
                                                    <td>
                                                        <a class='adddraft' data-toggle="modal" data-target="#viewOpinion{{$query->op_id}}"><i class="fas fa-plus "></i></a>

                                                        <a class='deletedraft' href="" data-target="#delete_popup{{$query->op_id}}" data-toggle="modal" ><i class="fas fa-trash-alt "></i></a>
                                                    </td>
                                                </tr>
                                                {{-- VIEW MODEL --}}
                                                @include('scheme.general.queryOpinion.add')
                                                {{-- DELETE MODEL --}}
                                                @include('scheme.general.queryOpinion.delete')


                                                @endforeach
                                                @endif
                                            </tbody>
                                        </table>
                                        <button type="button" data-toggle="modal" data-target="#add_opinion"
                                            class="btn btn-sm waves-effect waves-light btn-info text-right">Add
                                            Opinion</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@section('js')
<script>
    $(document).ready(function () {



        $("#query0").hide();
        $("#opinion_req0").hide();
        $("#opinion0").hide();

        $('select[name=action_query_opinion]').change(function () {
            if (this.value == 'query') {
                $("#query0").show();
                $("#opinion_req0").hide();

            } else if (this.value == 'opinion') {
                $("#opinion_req0").show();
                $("#query0").hide();
            } else {
                $("#query0").hide();
                $("#opinion_req0").hide();
            }
        });

        $('#add_opinion').on('show.bs.modal', function (e) {
            var type_opinion = $('select[name="type_opinion"]');
            $('#table-contribution tbody tr').each(function(){
                //console.log($(this).data('opinion'));
                var a = type_opinion.find('option[value="'+$(this).data('opinion')+'"]').detach();
            });
        });

    });

</script>

@endsection
