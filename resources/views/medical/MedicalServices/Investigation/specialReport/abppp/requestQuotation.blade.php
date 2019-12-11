<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form action="{{route('quotation')}}" method="POST">
                    @csrf
                    <div class="form-body">
                        <div class="modal-body">
                            <div class="card-body">
                                <div class="row p-t-20">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">MO Ref. No. </label>
                                            <input type="text" value="{{$quotation->ms_quo_morefno}}" name="" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Type of Investigation </label>
                                            <input type="text" value="" name="invtype" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Date </label>
                                            <input type="text" value="{{$quotation->ms_quo_currdate}}" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Insured Person Name </label>
                                            <input type="text" value="" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">@lang('ID No. ')</label>
                                            <input type="text" value="{{$quotation->ms_quo_idno}}" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">@lang('Tel. No. ')</label>
                                            <input type="text" value="" name="telno" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">@lang('Place of Investigation ')</label>
                                            <input type="text" value="" name="place1" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" value="" name="place2" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" value="" name="place3" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group has-success">
                                            <label class="control-label">State</label>
                                            <select name="state" class="form-control">
                                            <option>--Select Your Sate  --</option>
                                            <option value="Selangor">Selangor</option>
                                            <option value="Perak">Perak</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('City ')</label>
                                            <input type="text" value="" name="city" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('Postcode ')</label>
                                            <input type="text" name="postcode" value="" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="control-label">@lang('Request Due Date ')</label>
                                            <input type="date" name="postcode" value="" class="form-control">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="col-md-6 offset-6">
                                        <button type="button" class="btn btn waves-effect waves-light btn-success a1" id="btn_add_sp" data-toggle="modal" data-target="#quotationModal"
                                            data-whatever="@getbootstrap" aria-expanded="true">
                                            Add Service Provider 
                                    </button>
                                    </div>
                                    <div class="table-responsive m-t-40">
                                        <table id="myTable_services" class="table table-bordered table-striped">
                                            <thead style="background-color:skyblue;">
                                                <tr>
                                                    <!-- <th>No.</th> -->
                                                    <th>Service Provider</th>
                                                    <th>Email</th>
                                                    <th>Action</th>
                                                </tr>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr id="clari1">
                                                    <td style="display:none;"><input type="hidden" value="1"></td>
                                                    
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">@lang('Remark ')</label>
                                            <input type="text" name="remark" value="" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="col-md-6 offset-6">
                                            <button type="submit" class=" pull-center btn btn waves-effect waves-light btn-success a1">Submit</button>
                                    </div>
                                    {{-- @endforeach
                                    @endif --}}
                                </div> 
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>
<!----==================MODAL QUOTATION ========================-->

<div class="modal fade" id="quotationModal" tabindex="-1" role="dialog" aria-labelledby="quotationModal">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
        <h5 class="card-title" id="quotationModal">New message
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></h5>
            <div class="modal-body">
                <form>
                <div class="row p-t-20">
                    <div class="col-md-12">
                        <div class="form-group">
                        <label class="control-label">Service Provider :</label>
                        <select name="select_opt" id="select_opt" class="form-control" onchange="showRequest(this.options[this.selectedIndex].value)" required>
                        <option value="" hidden selected readonly>Please Select</option>
                        <option value="one">one</option>
                        <option value="two">two</option>
                        <option value="three">Three</option>
                        <option value="other">Other</option>
                    </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                
                    <div class="form-group" id="divspecify123" style="display:none;">
                    <label class="control-label">if choose Other, please specify</label>
                    <input type="text" id="display_others" value="" class="form-control">
                    
                    </div>
                    </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">@lang('Email :')</label>
                                    <input type="text" id="email" value="" class="form-control">
                                </div>
                            </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" id="btn_add_messsage" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
        function showRequest(name){
            if(name == 'other') {
                $('#divspecify123').show();
            }
            else {
                $('#divspecify123').hide();
            }   
        }



        $("#btn_add_messsage").click(function () {

            if($('#select_opt').val() == 'other') {
                var option = $('#display_others').val();
            
            }
            else {
                var option = $('#select_opt').val();
            }   

        var email = $('#email').val();
        
        var no = $('#myTable_services tr:last td:first').find("input").val();
        no++;
        // var no_index = no++
        $('#myTable_services > tbody:last-child').append('<tr id="clari1'+no+'" >'+
                                    '<td>'+option+'</td>'+
                                    '<td>'+email+'</td>'+
                                    '<td><div class="input-group-append">'+
                                    '<a id="selectdraft" data-toggle="modal" data-target="#modal_document" data-id="1" data-whatever="@getbootstrap"'+
                                        'href="#tt1" aria-expanded="true"><i class="fas fa-file-alt" title="View" data-toggle="tooltip"></i></a>'+
                                    '&nbsp;'+
                                    '<a id="deletedraft" name="deletedraft" class="'+no+'" data-toggle="modal" data-target="#modal_document" data-id="1" data-whatever="@getbootstrap"'+
                                        'href="#tt1" aria-expanded="true"><i class="fas fa-trash-alt fa-sm" title="Delete" data-toggle="tooltip"></i></a>'+
                                    '&nbsp;'+
                                    '<a id="selectdraft" class="get-code" data-toggle="modal" data-target="#modal_document" data-id="1" data-whatever="@getbootstrap"'+
                                        'href="#tt1" aria-expanded="true"><i class="fas fa-edit" title="Edit" data-toggle="tooltip"></i></a>'+
                                        '</div></td>'+
        '</tr>');

        $('#email').val("");

        $('.test'+no+'').click(function(){
            alert('Are you sure want to delete the draft? ');

            $('#myTable_services').each(function(){
            $('#clari1'+no+'').remove();
        });
        });
    });

</script>