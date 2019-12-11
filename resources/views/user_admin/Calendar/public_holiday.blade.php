
<div class="row">
    <div class="col-lg-12">
     <div class="card">
        <form method='POST' action="{{route('search_holiday')}}" >
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="form-body">
                <div class='row'>
                    <div class="col-sm-2">
                        <div class="form-group">
                            <label class="control-label">@lang('form/admin.general.calendar.year')</label>
                            <div class="input-group">
                                <select id="year_holiday" name="year" class="form-control">
                                    @for($year=2015; $year<=Carbon\Carbon::now()->year; $year++)
                                    <option value="{{$year}}" selected>{{$year}}</option>
                                    @endfor
                                </select>
                            </div>
                            <div class="form-group">
                                <button style="margin-right:500px;" type="submit" class="btn btn waves-effect waves-light btn-success">@lang('form/admin.general.search')</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
              <form method='POST' action="{{route('register_publicHoliday')}}" >
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="form-body">
                   {{--  <div class="table-responsive m-t-40">
                    <table id="bebeh_1" class="display nowrap table table-hover table-striped table-bordered" width="100%"> --}}
                        <table  id="bebeh_1" class="table table-sm table-bordered" data-toggle-column="first">
                            <thead>
                                <tr>
                                    <th style='width:15%'>@lang('form/admin.general.calendar.holiday_name')</th> 
                                    <th style='width:15%'>@lang('form/admin.general.calendar.description')</th> 
                                    <th style='width:15%'>@lang('form/admin.general.calendar.date')</th>
                                    <th style='width:15%'>@lang('form/admin.general.calendar.region')</th>
                                    <th style='width:15%'>@lang('form/admin.general.calendar.status')</th>
                                    <th style='width:5%'>@lang('form/admin.general.calendar.action')</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($result_public as $key => $values)

                                <tr data-expanded="true" class="" id="">
                                    <td>
                                        {{$values->name}}
                                    </td>
                                    <td>
                                        {{$values->description}}
                                    </td>
                                    <td> 
                                        {{$values->start_date}} - {{$values->end_date}}
                                    </td>
                                    <td>
                                        @foreach ($values->states as $q)
                                        @foreach ($result as $w)
                                        @if ($q == $w->ref_code)
                                        {{$w->desc_en}},
                                        @endif
                                        @endforeach
                                        @endforeach
                                    </td>
                                    <td>
                                        @if($values->status == "1")
                                        Active
                                        @else
                                        Inactive
                                        @endif
                                    </td>
                                    <td><a class='updatedraft' data-toggle="modal" data-id="" data-case="" data-target="#edit_modal{{$values->id}}"><i class="fas fa-edit"></i></a> | &nbsp;<a class='view' data-id="{{$values->id}}" data-toggle="modal" data-target="#delete_holiday_1"><i class="fas fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>  
                        <div class="form-actions">
                         <button id='add_holiday_bebeh' type="button" class="btn btn waves-effect waves-light btn-success" onclick="submitform()"><i class="fa fa-plus"></i>@lang('form/admin.general.add_holiday')</button>
                         <button id='save' type="submit" style="display:none;" class="btn btn waves-effect waves-light btn-success" >@lang('button.save')</button>
                         <a href=""><button id='del' type="button" style="display:none;" class="btn btn waves-effect waves-light btn-success deleteholiday " id='delete0'>@lang('button.cancel')</button></a>
                     </div>
                 </div>
             </form>
         </div>
     </div>
 </div>
</div>

{{-- modal update --}}
@foreach ($result_public as $key => $values)

<div class="modal fade" id="edit_modal{{$values->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3">
    <div class="modal-dialog {{-- modal-xl --}}" role="document">
        <div class="modal-content">
            <div class="modal-header  card-title">
                <h4 class="modal-title" id="exampleModalLabel3">@lang('form/admin.general.calendar.update_public_holiday')</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <form method="post" action="{{route('update_publicHoliday')}}" >
                @csrf
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="id" value="{{$values->id}}">
                <div class="modal-body">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-row">
                                  <div class="form-group col-md-12 col-lg-12">
                                    <label>@lang('form/admin.general.calendar.holiday_name')</label>
                                    <input type="text" class="form-control" id="" name="name" value="{{$values->name}}">
                                  </div>
                                </div>
                                <div class="form-row">
                                  <div class="form-group col-md-12 col-lg-12">
                                    <label>@lang('form/admin.general.calendar.description')</label>
                                    <input type="text" class="form-control" id="" name="description" value="{{$values->description}}">
                                  </div>
                                </div>
                                <div class="form-row">
                                  <div class="form-group col-md-12 col-lg-12">
                                    <label>@lang('form/admin.general.calendar.date')</label>
                                    <div class="input-group input-daterange">
                                      <input id="min-date" type="date" class="form-control" name="start_date" value="{{$values->start_date}}">
                                      <div class="input-group-prepend input-group-append">
                                        <div class="input-group-text">@lang('form/admin.general.calendar.to')</div>
                                      </div>
                                      <input type="date" class="form-control" name="end_date" value="{{$values->end_date}}">
                                    </div>
                                  </div>
                                </div>
                                <div class="form-row">
                                  <div class="form-group col-md-12 col-lg-12">
                                    <label>@lang('form/admin.general.calendar.region')</label>
                                    <select name="states[]" class="select2 m-b-10 form-control select2-multiple clearFields" style="width: 100%" multiple="multiple" data-placeholder="Choose" required>
                                      @foreach ($values->states as $v)
                                      @foreach ($result as $s)
                                      @if($s->ref_code==$v)
                                      <option value="{{$s->ref_code}}" selected>{{$s->desc_en}}</option>
                                      @else
                                      <option value="{{$s->ref_code}}">{{$s->desc_en}}</option>
                                      @endif
                                      @endforeach
                                      @endforeach
                                    </select>
                                  </div>
                                </div>
                                <div class="form-row">
                                  <div class="form-group col-md-12 col-lg-6">
                                   <label>@lang('form/admin.general.calendar.status')</label>
                                   <select name="status" class="form-control">
                                     <option selected disabled hidden></option>
                                     @if($values->status=="1")
                                     <option value="1" selected>Active</option>
                                     <option value="0">Active</option>
                                     @else
                                     <option value="1">Active</option>
                                     <option value="0" selected>Inactive</option>
                                     @endif
                                   </select>
                                 </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
               <div class="modal-footer">
                <button type="button" id="close_just" class="btn btn waves-effect waves-light btn-info" data-dismiss="modal">@lang('button.close')</button>
                <button type="submit" id="save_just" class="btn btn-primary save_just" value="">@lang('button.save')</button>
            </div> 
        </form>
    </div>
</div>
</div>
@endforeach

{{-- modal delete --}}
<div class="modal fade" id="delete_public_holiday" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Confirmation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @csrf
      <div class="modal-body">
        Are you sure you want to delete?
        <input type="hidden" class="form-control" name="id" id="id">
      </div>
      <div class="modal-footer">
        <button type="button" id="btn_close" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
        <button type="button" id="btn_delete" class="btn btn-danger btn-sm" data-dismiss="modal">Delete</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="delete_holiday_1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Confirmation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="{{route('delete_holiday')}}">
                @csrf
                <div class="modal-body">
                    Are you sure you want to delete?
                    <input type="hidden" class="form-control" name="id" id="idDelete">
                </div>
                <div class="modal-footer">
                    <button type="button" id="btn_close" class="btn btn-secondary btn-sm"
                    data-dismiss="modal">Close</button>
                    <button type="submit" id="btn_deletedependent"  class="btn btn-danger btn-sm" >Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>

@section('js')
<script>

    $(document).ready(function(){

  modal_delete_holiday();
  multi_select();

  var k = 0;

  $('#add_holiday_bebeh').on('click',function(){
            // alert();
            $('#save').show();
            $('#del').show();

            k++;

            var bebeh = '<tr data-expanded="true" class="workrow" id="">'+
            '<td>'+
            '<input type="text" class="form-control" id="" name="name" value="">'+
            '</td>'+ 

            ' <td>'+
            ' <input type="text" class="form-control" id="" name="description" value="">'+
            '</td>'+

            '<td>'+
            '<div class="row">'+
            ' <div class="col-md-6">'+
            '<input type="date" class="form-control" id="" name="start_date"  value="">'+
            ' </div>'+

            ' <div class="col-md-6">'+
            ' <input type="date" class="form-control" id="" name="end_date"  value="">'+
            ' </div>'+
            ' </div>'+
            ' </td>'+

            '<td>'+
            ' <select name="states'+k+'[]" class="select2 m-b-10 form-control select2-multiple clearFields" style="width: 100%" multiple="multiple" data-placeholder="Choose">'+
            '@foreach($result as $value)'+
            '<option value="{{$value->ref_code}}">{{$value->desc_en}}</option>'+
            '@endforeach'+
            ' </select>'+
            ' </td>'+ 

            ' <td>'+
            ' <select name="status" class="form-control">'+
            '  <option selected disabled hidden></option>'+
            ' <option value="1">Active</option>'+
            ' <option value="0">Inactive</option>'+
            '  </select>'+
            ' </td>'+

            '<td>'+
            // '<input type="hidden" name=no_holiday[] value="'+k+'">'+
            // '<a id="updatedraft" data-toggle="modal" data-id="" data-case="" data-target="#edit_modal" href="#!"><i class="fas fa-edit"></i></a> | &nbsp;<a href="#!"><i class="fas fa-trash-alt deleteholiday" id="delete'+k+'"></i></a>'+
            '</td>'+
            '</tr>';

            $('#bebeh_1 tbody > tr:last').after(bebeh);

            modal_delete_holiday();
            multi_select();

        });

  $('#edit_modal').on('show.bs.modal', function (e){

    var desc = $(e.relatedTarget).data('desc');


    $('#edit_modal').prop('value', desc);

});

  $('#delete_holiday_1').on('show.bs.modal',function(e){

    var id=$(e.relatedTarget).data('id');
    $('#idDelete').prop("value",id);


});

});

    function modal_delete_holiday(){

        // Delete work
        $('.deleteholiday').on('click',function(){

            var del_id = $(this).attr('id');
            console.log('del_id: '+del_id);

            // alert();
            $("#delete_public_holiday").modal('show');
            $("#delete_public_holiday .modal-footer button").on('click', function(e) {
                var btn_id = event.target.id;
                if(btn_id == 'btn_delete'){
                    // alert('hai');
                    e.preventDefault();

                    var jumlah = $("i[id^=delete]").length;
                    console.log('del_id: '+jumlah);

                    if(jumlah !== 1){
                        $('#'+del_id).closest("tr").remove();

                    }
                    
                }
            });
        });
    }

    $(function () {
                // Switchery
                var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
                $('.js-switch').each(function () {
                    new Switchery($(this)[0], $(this).data());
                });
                // For select 2
                $(".select2").select2();
                $('.selectpicker').selectpicker();
                //Bootstrap-TouchSpin
                $(".vertical-spin").TouchSpin({
                    verticalbuttons: true
                });
                var vspinTrue = $(".vertical-spin").TouchSpin({
                    verticalbuttons: true
                });
                if (vspinTrue) {
                    $('.vertical-spin').prev('.bootstrap-touchspin-prefix').remove();
                }
                $("input[name='tch1']").TouchSpin({
                    min: 0,
                    max: 100,
                    step: 0.1,
                    decimals: 2,
                    boostat: 5,
                    maxboostedstep: 10,
                    postfix: '%'
                });
                $("input[name='tch2']").TouchSpin({
                    min: -1000000000,
                    max: 1000000000,
                    stepinterval: 50,
                    maxboostedstep: 10000000,
                    prefix: '$'
                });
                $("input[name='tch3']").TouchSpin();
                $("input[name='tch3_22']").TouchSpin({
                    initval: 40
                });
                $("input[name='tch5']").TouchSpin({
                    prefix: "pre",
                    postfix: "post"
                });
                // For multiselect
                $('#pre-selected-options').multiSelect();
                $('#optgroup').multiSelect({
                    selectableOptgroup: true
                });
                $('#public-methods').multiSelect();
                $('#select-all').click(function () {
                    $('#public-methods').multiSelect('select_all');
                    return false;
                });
                $('#deselect-all').click(function () {
                    $('#public-methods').multiSelect('deselect_all');
                    return false;
                });
                $('#refresh').on('click', function () {
                    $('#public-methods').multiSelect('refresh');
                    return false;
                });
                $('#add-option').on('click', function () {
                    $('#public-methods').multiSelect('addOption', {
                        value: 42,
                        text: 'test 42',
                        index: 0
                    });
                    return false;
                });
                $(".ajax").select2({
                    ajax: {
                        url: "https://api.github.com/search/repositories",
                        dataType: 'json',
                        delay: 250,
                        data: function (params) {
                            return {
                                q: params.term, // search term
                                page: params.page
                            };
                        },
                        processResults: function (data, params) {
                            // parse the results into the format expected by Select2
                            // since we are using custom formatting functions we do not need to
                            // alter the remote JSON data, except to indicate that infinite
                            // scrolling can be used
                            params.page = params.page || 1;
                            return {
                                results: data.items,
                                pagination: {
                                    more: (params.page * 30) < data.total_count
                                }
                            };
                        },
                        cache: true
                    },
                    escapeMarkup: function (markup) {
                        return markup;
                    }, // let our custom formatter work
                    minimumInputLength: 1,
                    //templateResult: formatRepo, // omitted for brevity, see the source of this page
                    //templateSelection: formatRepoSelection // omitted for brevity, see the source of this page
                });
            });

    // function datatable_holiday()
    //     {
    //         $year = $('#year_holiday').val();


    //     $('#bebeh_1').DataTable().destroy();
    //     $('#bebeh_1').DataTable( {
    //         "ajax": {
    //             "url": "",
    //             // "contentType": "application/json",
    //             "type": "GET",
    //             "data": {
    //                 "year":year,
    //             }

    //         },
    //         "columns": [
    //         {data:'date'},{data:'time'}, {data:'operid'}, {data:'brcode'}, {data:'category'}, {data:'attype'}, {data:'idno'}, {data:'caserefno'}, {data:'medrefno'}, {data:'rtwrefno'}, {data:'atdesc'}, {data:'success'},]
    //     } );
    // }

    

    // $('#year_holiday').on('change',function(){
    //     // datatable_holiday();
    // });


</script>
@endsection

