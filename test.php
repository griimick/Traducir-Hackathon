<html> 
<title>HTML with PHP</title>
<style>
body {
margin: 0px;
}
</style>
<body>
<?php

echo '<iframe align="center" width="100%" height="100%" src="browse.php" frameborder="yes" scrolling="yes" name="myIframe" id="myIframe"> </iframe>';
?>
</body>
<script type="text/javascript">
    var vid=document.getElementById("myVideo");
    function playvid(){
        vid.play();
    }
    function pausevid(){
        vid.pause();
    } 
</script>

<?php include_once 'grid3d.php';?>	
</html>