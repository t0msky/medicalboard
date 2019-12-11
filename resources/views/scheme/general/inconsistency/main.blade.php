<div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    {{-- <form method="POST" action="{{route('postInconsistentInfo')}}">  --}}
                    @csrf
                        <div class="form-body">
                            {{-- <h3 class="card-title">@lang('form/scheme.general.collapse.inconsistency.title')</h3>
                            <hr> --}}
                            <div class="col-md-12">
                                <div class="table-responsive">{{-- <label class="control-label">@lang('inconsistency.attr.medicalleave')</label> --}}
                                    <table class="table table-sm table-bordered" data-toggle-column="first" id="table_inconsistent">
                                        <thead>
                                            <tr>
                                                <th style='width:5%'>No.</th> 
                                                <th style='width:15%'>@lang('Section')</th> 
                                                <th style='width:15%'>@lang('Item')</th> 
                                                <th style='width:15%'>@lang('Notice Details')</th> 
                                                <th style='width:10%'>@lang('Supporting Document')</th>
                                                <th style='width:10%'>@lang('Corrected Data')</th>
                                                <th style='width:5%'>Justification</th>
                                                    {{-- <th style='width:15%'>@lang('form/scheme.general.collapse.inconsistency.justification')</th> --}}
                                                <th style='width:5%'>@lang('Findings')</th>
                                                <th style='width:15%'>@lang('Consistent')</th>
                                                <th style='width:5%'>@lang('Action')</th>
                                            </tr>
                                        </thead>
                                        @if(!empty($inconsistency))
                                        <tbody>
                                            @foreach($inconsistency as $key => $incon)
    
                                            <tr data-expanded="true" class="inconsistencyrow" id="ic{{$key}}">
                                                <td>
                                                    <div class="col-md-0">
                                                    {{$key+1}}
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="col-md-12">
                                                        <select class="form-control section" name="section[]" id="section{{$key}}" disabled>
                                                            <option value="" selected>Please select</option>
                                                            @if(!empty($section) && isset($section))
                                                            @foreach($section as $sec)
                                                                @if($sec->refcode == $incon->ic_inconsectionid)
                                                                <option value="{{$sec->refcode}}" selected>{{$sec->descen}}</option>
                                                                @else
                                                                <option value="{{$sec->refcode}}" >{{$sec->descen}}</option>
                                                                @endif
                                                            @endforeach
                                                            @endif
                                                        </select>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="col-md-12">
                                                        <select class="form-control" name="item[]" id="item{{$key}}" disabled>
                                                        <option value="" selected>Please select</option>
                                                        </select>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="col-md-12">
                                                        <input id="noticedetails{{$key}}" name="noticedetails[]" type="text" value="{{$incon->ic_olddata}}" class="form-control" disabled>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="col-md-12">
                                                        <input type="text" id="supportDoc{{$key}}" name="supportDoc[]" value="{{$incon->ic_docdesc}}" class="form-control " disabled>
                                                    </div>
                                                </td>
                                                <td>
                                                    <input type="text" id="correctdata{{$key}}" name="correctdata[]" value="{{$incon->ic_newdata}}" class="form-control" disabled>
                                                </td>
                                                <td>
                                                    <input type="hidden" id="justification{{$key}}" name="justification[]" value="{{$incon->ic_justification}}" disabled>
                                                    <div class="col-md-0" id="view_just{{$key}}" >
                                                        <button type="button" name="action" id="view_just{{$key}}" class="btn btn-facebook waves-effect waves-light" data-id="{{$key}}" data-toggle="modal" data-target="#modalJustification" data-whatever="@fat">View</button>
                                                    </div> 
                                                </td> 
                                                <td>
                                                    <div class="custom-control custom-checkbox mr-sm-2 mb-3">
                                                        <input type="checkbox" class="custom-control-input" id="inconsistent_yes{{$key}}" name="findings" disabled>
                                                        <label class="custom-control-label" for="inconsistent_yes{{$key}}"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <input type="text" id="consistent{{$key}}" name="consistent[]" value="{{$incon->ic_consistent}}" class="form-control" disabled>
                                                </td>
                                                <td>
                                                    <input type="hidden" name="action[]" value="update" disabled>
                                                </td>
                                            </tr>
    
                                            <script>
    
                                                $(document).ready(function() {
    
                                                    var key = {!! $key !!};
                                                    var ic_inconsectionitem = {!! $incon->ic_inconsectionitem !!};
                                                    var ic_inconsectionid = {!! $incon->ic_inconsectionid !!};
                                                    var ic_consistent = '{!! $incon->ic_consistent !!}';
    
                                                    section_get(key,ic_inconsectionitem,ic_inconsectionid);
                                                    checkbox_get(key,ic_consistent);
    
                                                });
                                            </script>
                                            @endforeach
                                        </tbody>
                                        @else
                                        <tbody>
                                            <tr data-expanded="true" class="inconsistencyrow" id="ic1">
                                                <td>
                                                    <div class="col-md-0">
                                                        1.
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="col-md-12">
                                                        <select class="form-control section" name="section[]" id="section1">
                                                            <option value="" selected>Please select</option>
                                                            @if(!empty($section) && isset($section))
                                                            @foreach($section as $sec)
                                                                <option value="{{$sec->refcode}}" >{{$sec->descen}}</option>
                                                            @endforeach
                                                            @endif
                                                            <!-- <option value="1">Accident Info</option>
                                                            <option value="2">MC Info</option>
                                                            <option value="3">Wages Info</option>
                                                            <option value="6">Death Info</option> -->
                                                        </select>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="col-md-12">
                                                        <select class="form-control" name="item[]" id="item1">
                                                        <option value="" selected>Please select</option>
                                                        <!-- <option value="1_1">Accident Date</option>
                                                        <option value="1_2">Accident Time</option>
                                                        <option value="1_3">Place Of Accident </option>
                                                        <option value="1_4">When</option>
                                                        <option value="1_5">How</option>
                                                        <option value="1_6">Reason for Travelling</option>
                                                        <option value="1_7">Injury Description</option>
                                                        <option value="1_8">Accident Date a Working Day</option>
                                                        <option value="1_9">Start Working Time</option>
                                                        <option value="1_10">Recess Time</option>
                                                        <option value="1_11">End Working Time</option>
                                                        <option value="1_12">Name of Witness</option>
                                                        <option value="1_13">Witness Phone No</option>
                                                        <option value="1_14">Clinic Info</option>
                                                        <option value="2_1">Type of HUS</option>
                                                        <option value="2_2">Start Date</option>
                                                        <option value="2_3">End Date</option>
                                                        <option value="2_4">Clinic Info</option>
                                                        <option value="3_1">Employment Start Date</option>
                                                        <option value="3_2">Employment End Date</option>
                                                        <option value="6_1">Date of Death</option>
                                                        <option value="6_2">Cause of Death</option> -->
                                                        </select>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="col-md-12">
                                                        <input id="noticedetails1" name="noticedetails[]" type="text" value="" class="form-control" >
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="col-md-12">
                                                        <input type="text" id="supportDoc1" name="supportDoc[]" value="" class="form-control " >
                                                    </div>
                                                </td>
                                                <td>
                                                    <input type="text" id="correctdata1" name="correctdata[]" value="" class="form-control" >
                                                </td>
                                                {{-- <td>
                                                    <input type="text" id="investigation" name="investigation" value="" class="form-control" >
                                                </td>--}}
                                                <td>
                                                    <input type="hidden" id="justification1" name="justification[]">
                                                    <div class="col-md-0" id="add_jus1">
                                                        <button type="button" name="action" id="add_just1" class="btn btn-facebook waves-effect waves-light" data-id="1" data-toggle="modal" data-target="#modalJustification" data-whatever="@fat">Add</button>
                                                    </div>
                                                    <div class="col-md-0" id="view_jus1" style="display: none">
                                                        <button type="button" name="action" id="view_just1" class="btn btn-facebook waves-effect waves-light" data-id="1" data-toggle="modal" data-target="#modalJustification" data-whatever="@fat">View</button>
                                                    </div> 
                                                </td> 
                                                <td>
                                                    <div class="custom-control custom-checkbox mr-sm-2 mb-3">
                                                        <input type="checkbox" class="custom-control-input" id="inconsistent_yes1" name="findings">
                                                        <label class="custom-control-label" for="inconsistent_yes1"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <input type="text" id="consistent1" name="consistent[]" value="No" class="form-control" readonly>
                                                </td>
                                                <td>
                                                    <a id='deletedraft' class="del_consistency1"><i class="fas fa-trash-alt btn_del_inconsistency1"></i></a>
                                                    <input type="hidden" name="action[]" value="add">
                                                </td>
                                            </tr>
                                        </tbody>
                                        @endif
                                    </table> 
                                    <div class="form-actions">
                                        <button type="button" id="btn_add_inconsistency" value='' class="btn btn-sm waves-effect waves-light btn-info">@lang('Add Item')</button>
                                    </div>    
                                    <label class="control-label" id='lblinconsistencyerror1' style='color:red'></label>
                                </div>
                            </div>
                            <br>
                            <div class='row'>
                                <div class="col-md-12">
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn waves-effect waves-light btn-success">@lang('SAVE')</button>
                                        <button type="button" class="btn btn waves-effect waves-light btn-info" onclick="submitform()">@lang('RESET')</button>
                                        <button type="button" class="btn waves-effect waves-light btn-secondary" id='btncancelacc' onclick="window.location='/noticetype'">@lang('CANCEL')</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                     {{-- </form>  --}}
                </div>
            </div>
        </div>
    </div>
      
    {{-- Confirm modal --}}
    <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Confirmation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
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
    
    <div class="modal fade" id="modalJustification" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header  card-title">
                    <h4 class="modal-title" id="exampleModalLabel3">@lang('Investigation Justification')</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    @include('scheme.general.inconsistency.popup') 
                </div>
    
                <div class="modal-footer">
                    <button type="button" id="close_just" class="btn btn waves-effect waves-light btn-info" data-dismiss="modal">@lang('button.close')</button>
                    <button type="submit" id="save_just" data-dismiss="modal" class="btn btn-primary save_just" value="">@lang('button.save')</button>
                </div>
            </div>
        </div>
    </div> 
      
    @php($no_app = 0)
    {{-- @php($inconsistency == null ? $no_app = 0 : $no_app = count($inconsistency)) --}}
    <script>
    
        $(document).ready(function() {
    
            
    
            checkbox ();
            section ();
    
            $('#modalJustification').on('show.bs.modal', function (e) {
    
                var id = $(e.relatedTarget).data('id');
                var justification = $('#justification'+id).val();
                // alert(id);
    
                if(justification == '')
                {
                    $('#save_just').show();
                    $('#justification_finding').prop('value','');
                }
                else 
                {
                    $('#save_just').hide();
                    $('#justification_finding').prop('value',justification);
                }
    
                var modal = $(this);
                modal.find('.save_just').val(id);
                $('.save_just').attr('id','save_just' + id);
    
                $('.save_just').click(function() {
                    if($('.save_just').val() == id){
    
                        var finding = $('#justification_finding').val();
    
                        $('#justification'+id).prop('value',finding);
                        $('#add_jus'+id).hide();
                        $('#view_jus'+id).show();
                        $('#modalJustification').hide();
                       
                    }else{
                        $('#modalJustification').hide();
                    }
                });
    
    
        });
    
    
    
        var no_app = {!! $no_app !!};
    
        if(no_app > 0){
            var no = no_app-1;
            var count = no_app;
        }else{
            var no=1;
            var count = 1;
        }
        
    
            
            $('#btn_add_inconsistency').click(function(){
                // alert('masuk');
                no++;
                count++;
                $('#table_inconsistent > tbody:last-child').append('<tr data-expanded="true" class="inconsistencyrow" id="ic'+no+'">'+
                    '<td>'+
                    '<div class="col-md-0">'+
                        +count+
                    '</div>'+
                '</td>'+
                '<td>'+
                    '<div class="col-md-12">'+
                        '<select class="form-control section" name="section[]" id="section'+no+'">'+
                            '<option value="" selected>Please select</option>'+
                            '@if(!empty($section) && isset($section))'+
                            '@foreach($section as $sec)'+
                                '<option value="{{$sec->refcode}}" >{{$sec->descen}}</option>'+
                            '@endforeach'+
                            '@endif'+               
                        '</select>'+
                    '</div>'+
                '</td>'+
                '<td>'+
                    '<div class="col-md-12">'+
                        '<select class="form-control" name="item[]" id="item'+no+'">'+
                            '<option value="" selected>Please select</option>'+
                        '</select>'+
                    '</div>'+
                '</td>'+
                '<td>'+
                    '<div class="col-md-12">'+
                        '<input id="noticedetails'+no+'" name="noticedetails[]" type="text" value="" class="form-control" >'+
                    '</div>'+
                '</td>'+
                '<td>'+
                    '<div class="col-md-12">'+
                        '<input type="text" id="supportDoc'+no+'" name="supportDoc[]" value="" class="form-control " >'+
                    '</div>'+
                '</td>'+
                '<td>'+
                    '<input type="text" id="correctdata'+no+'" name="correctdata[]" value="" class="form-control" >'+
                ' </td>'+
                '<td>'+
                    '<input type="hidden" id="justification'+no+'" name="justification[]">'+
                    '<div class="col-md-0" id="add_jus'+no+'">'+
                        '<button type="button" name="action" id="add_just'+no+'" class="btn btn-facebook waves-effect waves-light add_just" data-id="'+no+'" data-toggle="modal" data-target="#modalJustification" data-whatever="@fat">Add</button>'+
                    '</div>'+
                    '<div class="col-md-0" id="view_jus'+no+'" style="display:none">'+
                        '<button type="button" name="action" id="view_just'+no+'" class="btn btn-facebook waves-effect waves-light view_just" data-id="'+no+'" data-toggle="modal" data-target="#modalJustification" data-whatever="@fat">View</button>'+
                    '</div>'+
                '</td>'+ 
                '<td>'+
                    '<div class="custom-control custom-checkbox mr-sm-2 mb-3">'+
                        '<input type="checkbox" class="custom-control-input" id="inconsistent_yes'+no+'" name="findings">'+
                        '<label class="custom-control-label" for="inconsistent_yes'+no+'"></label>'+
                    '</div>'+
                '</td>'+
                '<td>'+
                    '<input type="text" id="consistent'+no+'" name="consistent[]" value="No" class="form-control" readonly>'+
                '</td>'+
                '<td>'+
                    '<button type="button" class="btn btn-sm btn-danger btn_del_workinconsistency" id="del_consistency'+no+'"><i class="fas fa-trash-alt fa-sm"></i></button>'+
                    '<input type="hidden" name="action[]" value="add">'+
                '</td>'+
            '</tr>');
    
            checkbox ();
            section ();
    
          });
    
    
        function modal_delete(){
    
            // Delete work
            $('.btn_del_inconsistency').on('click',function(){
                // alert("hehehe");
                var delete_id = $(this).attr('id');
                console.log(delete_id);
                $("#deletemodal").modal('show');
                $("#deletemodal .modal-footer button").on('click', function(e) {
                    var btn_id = event.target.id;
                    if(btn_id == 'btn_delete'){
                        e.preventDefault();
                        $("#"+delete_id).closest("tr").remove();
                        
                    }
                });
            });
        }
    
        // function incon_yes() {
       

       checkbox ();
       section ();

       $('#modalJustification').on('show.bs.modal', function (e) {

           var id = $(e.relatedTarget).data('id');
           var justification = $('#justification'+id).val();
           // alert(id);

           if(justification == '')
           {
               $('#save_just').show();
               $('#justification_finding').prop('value','');
           }
           else 
           {
               $('#save_just').hide();
               $('#justification_finding').prop('value',justification);
           }

           var modal = $(this);
           modal.find('.save_just').val(id);
           $('.save_just').attr('id','save_just' + id);

           $('.save_just').click(function() {
               if($('.save_just').val() == id){

                   var finding = $('#justification_finding').val();

                   $('#justification'+id).prop('value',finding);
                   $('#add_jus'+id).hide();
                   $('#view_jus'+id).show();
                   $('#modalJustification').hide();
                  
               }else{
                   $('#modalJustification').hide();
               }
           });


   });



   var no_app = {!! $no_app !!};

   if(no_app > 0){
       var no = no_app-1;
       var count = no_app;
   }else{
       var no=1;
       var count = 1;
   }
   

       
       $('#btn_add_inconsistency').click(function(){
           // alert('masuk');
           no++;
           count++;
           $('#table_inconsistent > tbody:last-child').append('<tr data-expanded="true" class="inconsistencyrow" id="ic'+no+'">'+
               '<td>'+
               '<div class="col-md-0">'+
                   +count+
               '</div>'+
           '</td>'+
           '<td>'+
               '<div class="col-md-12">'+
                   '<select class="form-control section" name="section[]" id="section'+no+'">'+
                       '<option value="" selected>Please select</option>'+
                       '@if(!empty($section) && isset($section))'+
                       '@foreach($section as $sec)'+
                           '<option value="{{$sec->refcode}}" >{{$sec->descen}}</option>'+
                       '@endforeach'+
                       '@endif'+               
                   '</select>'+
               '</div>'+
           '</td>'+
           '<td>'+
               '<div class="col-md-12">'+
                   '<select class="form-control" name="item[]" id="item'+no+'">'+
                       '<option value="" selected>Please select</option>'+
                   '</select>'+
               '</div>'+
           '</td>'+
           '<td>'+
               '<div class="col-md-12">'+
                   '<input id="noticedetails'+no+'" name="noticedetails[]" type="text" value="" class="form-control" >'+
               '</div>'+
           '</td>'+
           '<td>'+
               '<div class="col-md-12">'+
                   '<input type="text" id="supportDoc'+no+'" name="supportDoc[]" value="" class="form-control " >'+
               '</div>'+
           '</td>'+
           '<td>'+
               '<input type="text" id="correctdata'+no+'" name="correctdata[]" value="" class="form-control" >'+
           ' </td>'+
           '<td>'+
               '<input type="hidden" id="justification'+no+'" name="justification[]">'+
               '<div class="col-md-0" id="add_jus'+no+'">'+
                   '<button type="button" name="action" id="add_just'+no+'" class="btn btn-facebook waves-effect waves-light add_just" data-id="'+no+'" data-toggle="modal" data-target="#modalJustification" data-whatever="@fat">Add</button>'+
               '</div>'+
               '<div class="col-md-0" id="view_jus'+no+'" style="display:none">'+
                   '<button type="button" name="action" id="view_just'+no+'" class="btn btn-facebook waves-effect waves-light view_just" data-id="'+no+'" data-toggle="modal" data-target="#modalJustification" data-whatever="@fat">View</button>'+
               '</div>'+
           '</td>'+ 
           '<td>'+
               '<div class="custom-control custom-checkbox mr-sm-2 mb-3">'+
                   '<input type="checkbox" class="custom-control-input" id="inconsistent_yes'+no+'" name="findings">'+
                   '<label class="custom-control-label" for="inconsistent_yes'+no+'"></label>'+
               '</div>'+
           '</td>'+
           '<td>'+
               '<input type="text" id="consistent'+no+'" name="consistent[]" value="No" class="form-control" readonly>'+
           '</td>'+
           '<td>'+
               '<button type="button" class="btn btn-sm btn-danger btn_del_workinconsistency" id="del_consistency'+no+'"><i class="fas fa-trash-alt fa-sm"></i></button>'+
               '<input type="hidden" name="action[]" value="add">'+
           '</td>'+
       '</tr>');

       checkbox ();
       section ();

     });


   function modal_delete(){

       // Delete work
       $('.btn_del_inconsistency').on('click',function(){
           // alert("hehehe");
           var delete_id = $(this).attr('id');
           console.log(delete_id);
           $("#deletemodal").modal('show');
           $("#deletemodal .modal-footer button").on('click', function(e) {
               var btn_id = event.target.id;
               if(btn_id == 'btn_delete'){
                   e.preventDefault();
                   $("#"+delete_id).closest("tr").remove();
                   
               }
           });
       });
   }

   // function incon_yes() {
  
   //     // Get the checkbox
   //     var checkBox = document.getElementById("inconsistent_yes");
   //     // Get the output text
   //     var consistent = document.getElementById("consistent");

   //     // If the checkbox is checked, display the output text
   //     if (checkBox.checked == true){
   //         consistent.value = "Yes";
   //     } else {
   //         consistent.value = "";
   //     }
   // }


   
});

function checkbox (){
   $("input[name=findings]").change(function() {

   var id  = $(this).attr('id');

   var values = id.split('yes');
   var i = values[1];
   // alert(i);
   if ($(this).is(":checked")) {
       $('#consistent'+i).prop('value','Yes');
   }else{
       $('#consistent'+i).prop('value','No');
   }


   });
}
function checkbox_get (i,ic_consistent){


   if (ic_consistent == 'Y') {
       $('#consistent'+i).prop('value','Yes');
       $('#inconsistent_yes'+i).prop('checked',true);
   }else{
       $('#consistent'+i).prop('value','No');
       $('#inconsistent_yes'+i).prop('checked',false);
   }

}

function section () {
   $('.section').on('change',function(){

       var isi_sectionid  = $(this).val();
       var id  = $(this).attr('id');

       var values = id.split('n');
       var i = values[1];

       $.ajax({
           headers: {
                       'X-CSRF-Token': '{{ csrf_token() }}',
                   },
           type: 'GET',
           data: {
               isi_sectionid: isi_sectionid
               },
           url: "{{ route('getInconsistenItem') }}",
           // global: false,
           success: function (data) {

               // alert(data);

               var data = JSON.parse(data);

               $("#item"+i).empty();
               $("#item"+i).append('<option value="">Please Select</option>');

               var select = document.getElementById("item"+i);
               for(index in data) {
                   $("#item"+i).append('<option value="'+data[index]['isi_sectionitem']+'">'+data[index]['isi_sectionitemdesc']+'</option>');
               }

           },
           error: function(XMLHttpRequest, textStatus, errorThrown) { 
               alert("Status: " + textStatus); alert("Error: " + errorThrown); 
           }  
           });

       });
}

function section_get (i,ic_inconsectionitem,isi_sectionid) {

       $.ajax({
           headers: {
                       'X-CSRF-Token': '{{ csrf_token() }}',
                   },
           type: 'GET',
           data: {
               isi_sectionid: isi_sectionid
               },
           url: "{{ route('getInconsistenItem') }}",
           // global: false,
           success: function (data) {

               // alert(data);

               var data = JSON.parse(data);

               $("#item"+i).empty();
               $("#item"+i).append('<option value="">Please Select</option>');

               var select = document.getElementById("item"+i);
               for(index in data) {

                   if(ic_inconsectionitem == data[index]['isi_sectionitem']){

                       $("#item"+i).append('<option value="'+data[index]['isi_sectionitem']+'"selected>'+data[index]['isi_sectionitemdesc']+'</option>');


                   }else{

                      $("#item"+i).append('<option value="'+data[index]['isi_sectionitem']+'">'+data[index]['isi_sectionitemdesc']+'</option>');

                   }
               }

           },
           error: function(XMLHttpRequest, textStatus, errorThrown) { 
               alert("Status: " + textStatus); alert("Error: " + errorThrown); 
           }  
           });

}

</script>