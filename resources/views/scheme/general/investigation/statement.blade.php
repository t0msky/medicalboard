@extends("general.layouts.app")
@section("content")
<style>
.col-10-applicant {
	flex: 0 0 83.33333%;
	max-width: 100%;
}

.btn-add-statement {
	text-align: center;
	vertical-align: middle;
	user-select: none;
	border: 1px solid transparent;
	padding: .375rem .75rem;
	font-size: .875rem;
	line-height: 1.5;
	border-radius: .25rem;
	transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
	float: right !important;
	color: #fff !important;
	font-weight: 100 !important;
	background-color: #375aa0 !important;
}

.row-claimant {
	display: flex;
	flex-wrap: wrap;
	margin-right: -10px;
	margin-left: -10px;
	float: right !important;
}

.modal-header {
	display: flex;
	align-items: flex-start;
	justify-content: space-between;
	padding: 1rem;
	border-bottom: 5px solid #98cb5b;
	border-top-left-radius: .3rem;
	border-top-right-radius: .3rem;
	background: #284682;
	color: #fff;
}

.modal-header .close {
	padding: 1rem;
	margin: -1rem -1rem -1rem auto;
	color: #fff;
}

.col-md-2-add {
	margin-top: 5px;
}

.card .card-title-sub {
	font-weight: 600;
	background-color: #98cb5b !important;
	padding: 14px 15px !important;
	font-style: italic !important;
	color: #000 !important;
	border-bottom: 5px solid #74ad30;
	box-shadow: #737375 2px 3px 4px 2px !important;
}
</style>
<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-body">
				<div class="form-body">
                    <h6 class="card-title-sub">Download Document</h6>
                    <hr>
					<form action="{{Route('statement_download')}}">
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label class="control-label">Document Type <span class="required">*</span></label>
                            <select name="document_type" class="form-control">
                                <option value="">Please Select</option>
                                <option value="12c">Statement (12c)</option>
                                <option value="doubtful">Doubtful Contract of Service</option>
                                <option value="qbank">Question Bank</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4" id="download_doubtful" style="display:none;">
                            <label class="control-label">Type of Doubtful Contract of Service<span class="required">*</span></label>
                            <select name="doubtful_type" class="form-control">
								<option>Please Select</option>
								@if ($ref_table !== null)
								@foreach($ref_table->doubtfultype as $doubtfultype)
									<option value="{{$doubtfultype->ref_code}}">{{$doubtfultype->desc_en}}</option>
								@endforeach
								@endif
                            </select>
                        </div>
                        <div class="form-group col-md-4" id="download_qbank" style="display:none;">
                            <label class="control-label">Type of Question Bank<span class="required">*</span></label>
                            <select name="qbank_category" class="form-control">
                                <option value="">Please Select</option>
								@if ($questionbank->data !== null)
								@foreach($questionbank->data as $questionbanks)
									<option value="{{$questionbanks->qc_category}}">{{$questionbanks->qc_catdesc}}</option>
								@endforeach
								@endif
                            </select>
                        </div>
                        <div class="col-md-2 offset-md-2 pt-3">
                        	<button type="submit" class="btn btn-block waves-effect waves-light btn-success" id="download_template">DOWNLOAD TEMPLATE</button>
                        </div>
                    </div>
					</form>
                    <br>

                    <h6 class="card-title-sub">Upload Document</h6>
                    <hr>

                    <div class="row">
                        <div class='form-group col-md-4'>
                            <label class="control-label">Upload<span class="required">*</span></label>
                            <select name="upload" class="form-control">
                                <option value="">Please Select</option>
                                <option value="12c">Statement (12c)</option>
                                <option value="doubtful">Doubtful Contract of Service</option>
                            </select>
                        </div>
                        <div class='form-group col-md-4' id="upload_doubtful">
                            <label class="control-label">Type of Doubtful Contract of Service<span class="required">*</span></label>
                            <select name="upload" class="form-control">
								<option>Please Select</option>
								@if ($ref_table !== null)
								@foreach($ref_table->doubtfultype as $doubtfultype)
									<option value="{{$doubtfultype->ref_code}}">{{$doubtfultype->desc_en}}</option>
								@endforeach
								@endif
                            </select>
                        </div>
                        <div class="col-md-2 offset-md-2 pt-3">
                        	<button type="button" class="btn btn-block waves-effect waves-light btn-success" data-toggle="modal" data-target="#uploadStatement">UPLOAD TEMPLATE</button>
                        </div>
                    </div>
                    <br>

					<h6 class="card-title-sub">Statement (Section 12c)</h6>
					<hr>
					<div class="col-md-12" id="container">
						<div class="table-responsive" id="table-medical">
							<table class="table table-sm table-bordered" data-toggle-column="first">
							<thead>
							<tr>
								<th>No</th>
								<th>Date</th>
								<th>Interviewer Name</th>
								<th>Interviewee Name</th>
								<th>Action</th>
							</tr>
							</thead>
							<tbody>
							@if ($statement !== null)
							@foreach ($statement->data as $statements)
							<tr data-expanded="true" class="workrow" id="tr0_0">
								<td>{{ $statements->invdate }}</td>
								<td>{{ $statements->invdate }}</td>
								<td>{{ $statements->iooperid }}</td>
								<td>{{ $statements->intvname }}</td>
								<td><a id="selectdraft" href="#" data-toggle="modal" data-target="#addStatement" data-caserefno="{{ $statements->caserefno }}" data-id="{{ $statements->id }}"><i class="fas fa-edit"></i></a></td>
							</tr>
							@endforeach
							@endif
							</tbody>
							</table>
							<button type="button" class="btn btn waves-effect waves-light btn-success text-right" data-toggle="modal" data-target="#addStatement">ADD STATEMENT</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal" id="addStatement" role="dialog">
	<div class="modal-dialog  modal-xl" role="document">
		<div class="modal-content">
			<form class="form-body" id="statement-12c" method="POST" action="/scheme/statement/create">
			<div class="modal-header">
				<h4 class="modal-title" id="exampleModalLabel1">Add Statement</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body" style="margin-bottom: 15px;overflow:hidden;">

				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<div class="row">
					<div class="form-group col-md-4">
						<label class="control-label">Case Ref No <span class="required">*</span></label>
						<input type="text" class="form-control" name="caserefno" value="{{ $caserefno }}">
					</div>
					<div class="form-group col-md-4">
						<label class="control-label">ID <span class="required">*</span></label>
						<input type="text" class="form-control" name="id" value="">
					</div>
				</div>

				<h6 class="card-title-sub">Interview Information</h6>
				<hr>
				<div class="row">
					<div class="form-group col-md-4">
						<label class="control-label">Statement Date <span class="required">*</span></label>
						<input type="date" class="form-control" name="invdate" value="">
					</div>
					<div class="form-group col-md-4">
						<label>Statement Time <span class="required">*</span></label>
						<input type="text" class="form-control clock-picker" name="invtime" value="" autocomplete="none">
					</div>
				</div>

				<h6 class="card-title-sub">Interview Information</h6>
				<hr>
				<div class="row p-t-20">
					<div class="form-group col-md-4">
						<label class="control-label">Interviewer Name</label><span class="required">*</span>
						<input type="text" class="form-control" name="iooperid" value="" required>
					</div>
					<div class="form-group col-md-4">
						<label class="control-label">Others</label>
						<input type="text" class="form-control" name="ioothers" value="" required>
					</div>
					<div class="form-group col-md-4">
						<label class="control-label">Identification No</label><span class="required">*</span>
						<input type="text" class="form-control" name="interviewer_idno" value="" required >
					</div>
				</div>

				<h6 class="card-title-sub">Interview Information</h6>
				<hr>
				<div class="row p-t-20">
					<div class="form-group col-md-4">
						<label class="control-label">Interviewer Type</label><span class="required">*</span>
						<select class="form-control" name="invtype">
							<option>Please Select</option>
							@if ($ref_table !== null)
							@foreach($ref_table->inv_type as $inv_type)
								<option value="{{$inv_type->ref_code}}">{{$inv_type->desc_en}}</option>
							@endforeach
							@endif
						</select>
					</div>
					<div class="form-group col-md-4">
						<label class="control-label">@lang("scheme/ob.attr.name")</label><span class="required">*</span>
						<input type="text" class="form-control" name="intvname" value="" required>
					</div>
				</div>
				<div class="row p-t-20">
					<div class="form-group col-md-4">
						<label class="control-label">Identification Type</label> <span class="required">*</span>
						<select class="form-control" name="intvidtype" required>
							<option>Please Select</option>
							@if ($ref_table !== null)
							@foreach($ref_table->id_type as $id_type)
								<option value="{{$id_type->ref_code}}">{{$id_type->desc_en}}</option>
							@endforeach
							@endif
						</select>
					</div>
					<div class="form-group col-md-4">
                         <label class="control-label">Identification No</label><span class="required">*</span>
                         <input type="text" class="form-control" name="intvidno" value="" required >
					</div>
				</div>
				<div class="row p-t-20">
					<div class="form-group col-md-12">
						<label>@lang("scheme/ob.attr.postal_address")</label>
						<input type="text" class="form-control" name="intvadd1" value="">
					</div>
				</div>
				<div class="row p-t-20">
					<div class="form-group col-md-12">
						<input type="text" class="form-control" name="intvadd2" value="" >
					</div>
				</div>
				<div class="row p-t-20">
					<div class="form-group col-md-12">
						<input type="text" class="form-control" name="intvadd3" value="" >
					</div>
				</div>
				<div class="row p-t-20">
					<div class="form-group col-md-4">
						<label class="control-label">@lang("scheme/ob.attr.state")<span class="required">*</span></label>
						<select class="form-control" name="intvstatecode">
							<option>Please Select</option>
							@if ($ref_table !== null)
							@foreach($ref_table->state as $state)
								<option value="{{$state->ref_code}}">{{$state->desc_en}}</option>
							@endforeach
							@endif
						</select>
					</div>
					<div class="form-group col-md-4">
						<label>@lang("scheme/ob.attr.city")  <span class="required">*</span></label>
						<input type="text" class="form-control" name="intvcity"  value="">
					</div>
					<div class="form-group col-md-4">
						<label>@lang("scheme/ob.attr.postcode")  <span class="required">*</span></label>
						<input type="text" class="form-control" name="intvpostcode" value="">
					</div>
				</div>
				<div class="row p-t-20">
					<div class="form-group col-md-4">
						<label>@lang("scheme/ob.attr.telNo")</label>
						<input type="text" class="form-control" name="invtelno" value="">
					</div>
					<div class="form-group col-md-4">
						<label>Age</label>
						<input type="text" class="form-control" name="intvage" value="">
					</div>
				</div>
				<div class="row p-t-20">
					<div class="form-group col-md-4">
						<label class="control-label">Language</label>
						<select class="form-control" name="language">
							<option value="">Please Select</option>
							<option value="malay">Malay</option>
							<option value="english">English</option>
							<option value="others">Others</option>
						</select>
					</div>
					<div class="form-group col-md-4">
						<label class="control-label">Please Specify</label>
						<input type="text" class="form-control" name="langothers" value="" required>
					</div>
					<div class="form-group col-md-4">
						<label>Translator Name</label>
						<input type="text" class="form-control" name="translator" value="">
					</div>
				</div>
				<div class="row p-t-20">
					<div class="form-group col-md-12">
						<label class="control-label">Add Statement?</label>
						<input type="checkbox" name="interview_havestatement" id="interview_havestatement">
					</div>
					<div class="form-group col-md-12" id="interview_havestatementform" style="display:none">
						<h6 class="card-title-sub">Statement</h6>
						<hr>
						<div class="row p-t-20">
							<div class="form-group col-md-6">
								<label class="control-label">Statement</label>
								<textarea class="form-control" name="statement" rows="6"></textarea>
							</div>
						</div>
						<div class="row p-t-20">
							<div class="form-group col-md-6">
								<label class="control-label">Question Bank Type</label>
								<select class="form-control"name="qbanktype" >
								<option value="">Please Select</option>
								<option value="50">@lang('form/scheme.notice_accident.SCO.investigation_doc.appendix50')</option>
								<option value="51">@lang('form/scheme.notice_accident.SCO.investigation_doc.appendix51')</option>
								<option value="52">@lang('form/scheme.notice_accident.SCO.investigation_doc.appendix52')</option>
								<option value="53">@lang('form/scheme.notice_accident.SCO.investigation_doc.appendix53')</option>
								<option value="54">@lang('form/scheme.notice_accident.SCO.investigation_doc.appendix54')</option>
								<option value="55">@lang('form/scheme.notice_accident.SCO.investigation_doc.appendix55')</option>
								</select>
							</div>
						</div>
						<div class="row p-t-20" style="display: none;" id="interview_questionbanklist">
							<div class="form-group col-md-12">
								<div class="table-responsive">
                                    <table id="tablePeriodical" class="table table-hover table-striped table-bordered" cellspacing="10">
                                    <thead>
                                        <tr>
                                        	<th width="6%">No</th>
                                        	<th>Question</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                    </table>
                                </div>
							</div>
						</div>
					</div>
				</div>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn waves-effect waves-light btn-info" data-dismiss="modal">Close</button>
				<button type="reset" class="btn btn waves-effect waves-light btn-info" id="reset">@lang("button.reset")</button>
				<button type="button" class="btn btn waves-effect waves-light btn-info">PRINT</button>
				<button type="submit" class="btn btn waves-effect waves-light btn-success">SAVE</button>
			</div>

			</form>
		</div>
	</div>
</div>
<div class="modal" id="uploadStatement" role="dialog">
	<div class="modal-dialog  modal-xl" role="document">
		<div class="modal-content">
			<form class="form-body" id="statement-12c-2" method="POST" action="/scheme/statement/upload" enctype="multipart/form-data">
			<div class="modal-header">
				<h4 class="modal-title" id="exampleModalLabel1">Add Statement</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body" style="margin-bottom: 15px;overflow:hidden;">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<input type="file" class="form-control" name="filenames[]" id="filenames" multiple>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn waves-effect waves-light btn-info" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn waves-effect waves-light btn-success" id="upload">UPLOAD</button>
			</div>
			</form>
		</div>
	</div>
</div>
<script>

$(document).ready(function() {
	$('select[name="document_type"]').change(function () {
		if (this.value == 'doubtful') {
			$("#download_doubtful").show();
			$("#download_qbank").hide();
		} else if (this.value == 'qbank') {
			$("#download_qbank").show();
			$("#download_doubtful").hide();
		} else {
			$("#download_doubtful").hide();
			$("#download_qbank").hide();
		}
	});

	$('select[name=upload]').change(function () {
		if (this.value == 'doubtful') {
			$("#upload_doubtful").show();
		} else {
			$("#upload_doubtful").hide();
		}
	});

	$('#download_template').click(function(){

	})

	$('#addStatement').on('change', '[name="interview_havestatement"]', function(){
		if(this.checked == true){
			$('#interview_havestatementform').show();
		} else {
			$('#interview_havestatementform').hide();
		}
	});
	$('#addStatement').on('change', '[name="interview_questionbank"]', function(){
		if(this.value != ""){
			$('#interview_questionbanklist').show();
		} else {
			$('#interview_questionbanklist').hide();
		}
	});
	$('#addStatement').on('show.bs.modal', function(ev){
		if($(ev.relatedTarget).data('caserefno') != undefined && $(ev.relatedTarget).data('id') != undefined){

	        $.ajax({
			    headers: {
			        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			    },
	            type: "GET",
	            url: '/scheme/statement/view/'+$(ev.relatedTarget).data('caserefno')+'/'+$(ev.relatedTarget).data('id'),
	            success: function(response){
	            	$.each(response, function(k, v) {
					    if($('#'+k).is('select')){
					    	$('[name="'+k+'"]').find('option[value="'+v+'"]').attr('selected','selected');
					    } else {
					    	$('[name="'+k+'"]').val(v);
					    }
					});
	            }
	        });
		} else {
			$('#statement-12c').trigger("reset");
		}
	});

	/*
	$('#statement-12c-2').on('click', '#upload', function(e){
        e.preventDefault();
        var formData = new FormData($(this).parents('form')[0]);

        $.ajax({
		    headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    },
            type: $('#statement-12c-2').attr('method'),
            url: $('#statement-12c-2').attr('action'),
            xhr: function() {
                var myXhr = $.ajaxSettings.xhr();
                return myXhr;
            },
            success: function (data) {
                alert("Data Uploaded: "+data);
            },
            data: formData,
            cache: false,
            contentType: false,
            processData: false
        });
        return false;
	});
	*/
});
</script>
@endsection