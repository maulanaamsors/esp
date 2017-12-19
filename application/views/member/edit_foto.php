
<body>

<h3 class="text-center" >Ubah Profile</h3>
<form action="">
<div class="row">
	<div class="col-sm-4">
	</div>
	<div class="col-sm-4 border"><br>
		<label>Foto Profile</label>
    	<span class="btn btn-default btn-file">
    		Pilih Foto <input type="file" name="upfoto" onchange="readURL1(this);">
    	</span> 
    	<div class="panel-body"><img id="prv_profile" src="" class="img-responsive" style="width:100%;" alt="Image"></div>

		<label>Foto Banner</label>
    	<span class="btn btn-default btn-file">
    		Pilih Foto <input type="file" name="upfoto" onchange="readURL2(this);">
    	</span> 
    	<div class="panel-body"><img id="prv_banner" src="" class="img-responsive" style="width:100%;" alt="Image"></div>
		<input type="submit" class="btn btn-info pull-right" value="Simpan" name="simpan">
	</div>
	<div class="col-sm-4">
	</div>
</div>
</form>
<div class="row">
	<div class="col-sm-4">
	</div>
	<div class="col-sm-4"><br>
		<a href="<?=base_url('member/fitur/profil');?>"><button class="btn btn-success"><i class="glyphicon glyphicon-arrow-left"></i> Profile</button></a>
	<div>
	<div class="col-sm-4">
	</div>
</div>

<script type="text/javascript">
    function readURL1(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#prv_profile').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
    function readURL2(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#prv_banner').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>