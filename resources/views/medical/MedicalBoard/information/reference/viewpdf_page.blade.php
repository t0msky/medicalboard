@extends('general.layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body m-10">

				<button type="button" class="btn btn waves-effect waves-light btn-success" id="btnviewpdf">@lang('button.pdf')</button>
			</div>
		</div>
	</div>
</div>

@endsection

@section('js')

<script>
	$('#btnviewpdf').click(function () {
		window.popup = window.open('/medical/viewPdf#toolbar=0','_blank', 'location=yes,height=570,width=520,sc**rollbars=yes,status=yes,toolbar=no');

		window.popup.onload = function(){
			alert("message one");
		};

		alert("message 1 maybe too soon\n"+window.popup.onload);
	});	

</script>

@endsection