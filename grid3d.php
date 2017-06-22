<script src="assets/js/classie.js"></script>
<script src="assets/js/helper.js"></script>
<script src="assets/js/grid3d.js"></script>
<script src="assets/js/jquery.shorten.js"></script>
<?php include_once 'customplayer.php';?>
<script language="javascript">
$(document).ready(function() {
        $('thumb').click(function() {
            alert('ho ho ho');
        });
    });
$(document).ready(function() {
	
	$(".comment").shorten({showChars: 250});

 });
</script>
<script>
	new grid3D( document.getElementById( 'grid3d' ) );
</script>