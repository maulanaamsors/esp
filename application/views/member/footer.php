<script src="<?php echo base_url('assets/bootstrap/js/jquery-2.1.1.min.js');?>"></script>
    <script>
    $(document).ready(function(){
        $("#tingkat1").click(function(){
            $("#soal1").show(1000);
            $("#soal2").hide(1000);
            $("#soal3").hide(1000);
        });
        $("#tingkat2").click(function(){
            $("#soal1").hide(1000);
            $("#soal2").show(1000);
            $("#soal3").hide(1000);
        });
        $("#tingkat3").click(function(){
            $("#soal1").hide(1000);
            $("#soal2").hide(1000);
            $("#soal3").show(1000);
        });
    });
    </script>

    <script>
        $(document).ready(function(){
            $("#materi1").click(function(){
                $("#materi11").show(1000);
                $("#materi22").hide(1000);
                $("#materi33").hide(1000);
            });
            $("#materi2").click(function(){
                $("#materi11").hide(1000);
                $("#materi22").show(1000);
                $("#materi33").hide(1000);
            });
            $("#materi3").click(function(){
                $("#materi11").hide(1000);
                $("#materi22").hide(1000);
                $("#materi33").show(1000);
            });
    });
</script>

<script src="<?php echo base_url('assets/bootstrap/js/bootstrap-datepicker.js');?>"></script>
<script>
$(".input-group.date").datepicker({autoclose: true, todayHighlight: true});
</script>

</body>