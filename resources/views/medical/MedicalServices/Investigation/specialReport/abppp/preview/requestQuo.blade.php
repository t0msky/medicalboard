<div class="row p-t-20">
    <div class="col-md-12 col-lg-9">
        <div class="form-group-preview row">
            <div class="col-sm-9 label-preview">
                <span class="no_bold">Type of Investigation</span>
            </div>
            <div class="col-sm-9">
                <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
            </div>
        </div>
    </div>
</div>
<div class="row p-t-20">
    <div class="col-md-12 col-lg-9">
        <div class="form-group-preview row">
            <div class="col-sm-9 label-preview"> Insured Person Name </div>
            <div class="col-sm-9">
                    <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
            </div>
        </div>
    </div>
</div>
<div class="row p-t-20">
    <div class="col-md-12 col-lg-4">
        <div class="form-group-preview row">
            <div class="col-sm-9 label-preview">
                <span class="no_bold">MO Ref. No.</span>
            </div>
            <div class="col-sm-9">
                <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
            </div>
        </div>
    </div>
    <div class="col-md-12 col-lg-4">
        <div class="form-group-preview row">
            <div class="col-sm-9 label-preview"> Date </div>
            <div class="col-sm-9">
                    <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
            </div>
        </div>
    </div>
</div>
<div class="row p-t-20">
    <div class="col-md-12 col-lg-4">
        <div class="form-group-preview row">
            <div class="col-sm-9 label-preview"> ID No. </div>
            <div class="col-sm-9">
                    <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
            </div>
        </div>
    </div>
    <div class="col-md-12 col-lg-4">
        <div class="form-group-preview row">
            <div class="col-sm-9 label-preview"> Tel. No. </div>
            <div class="col-sm-9">
                    <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
            </div>
        </div>
    </div>
</div>
<div class="row p-t-20">
    <div class="col-md-12 col-lg-4">
        <div class="form-group-preview row">
            <div class="col-sm-9 label-preview">
                Place Of Investigation
            </div>
            <div class="col-sm-9">
                <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
            </div>
            <div class="col-sm-9">
                <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
            </div>
            <div class="col-sm-9">
                <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
            </div>
        </div>
    </div>
</div>
<div class="row p-t-20">
    <div class="col-md-12 col-lg-4">
        <div class="form-group-preview row">
            <div class="col-sm-9 label-preview">State</div>
            <div class="col-sm-9">
                    <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
            </div>
        </div>
    </div>
    <div class="col-md-12 col-lg-4">
        <div class="form-group-preview row">
            <div class="col-sm-9 label-preview"> City </div>
            <div class="col-sm-9">
                    <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
            </div>
        </div>
    </div>
</div>
<div class="row p-t-20">
    <div class="col-md-12 col-lg-4">
        <div class="form-group-preview row">
            <div class="col-sm-9 label-preview"> Postcode </div>
            <div class="col-sm-9">
                    <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
            </div>
        </div>
    </div>
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
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
</div>

<div class="row p-t-20">
    <div class="col-md-12 col-lg-9">
        <div class="form-group-preview row">
            <div class="col-sm-9 label-preview">
                <span class="no_bold">Recommendation</span>
            </div>
            <div class="col-sm-9">
                <input type="text" class="form-control-preview" value=""  disabled style="background-color:transparent">
            </div>
        </div>
    </div>
</div>

<script>
    //redirect to specific tab
    $(document).ready(function () {
    //$('#tabMenu a[href="#{{ old('tab') }}"]').tab('show')
    });

    $(document).ready(function(){
        // Add minus icon for collapse element which is open by default
        $(".collapse.show").each(function(){
        $(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus");
        });

        // Toggle plus minus icon on show hide of collapse element
        $(".collapse").on('show.bs.collapse', function(){
        $(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus");
        }).on('hide.bs.collapse', function(){
        $(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus");
        });
    });
    
</script>