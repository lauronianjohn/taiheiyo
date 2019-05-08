
<?php 
    if ($message = Session::get('success')) {
        $info = $message;
        $color = "success";
    }
    elseif ($message = Session::get('error')) {
        $info = $message;
        $color = "danger";
    }
    elseif ($message = Session::get('warning')) {
        $info = $message;
        $color = "warning";
    }
    elseif ($message = Session::get('info')) {
        $info = $message;
        $color = "info";
    }
    elseif($errors->any()) {
        foreach($errors->all() as $error) {
            $info = $error;
            $color = "danger";
        }
    }
    else{
        $info = "Welcome";
        $color = "info";
    }
?>
<script type="text/javascript">
    	$(document).ready(function(){
            var infos = "<?php echo $info;?>";
            var colors = "<?php echo $color;?>"
            console.log(infos);
        	demo.initChartist();

        	$.notify({
            	icon: 'pe-7s-gift',
            	message: infos

            },{
                type: colors,
                timer: 2000
            });

    	});
</script>