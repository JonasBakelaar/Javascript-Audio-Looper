
<html>
<head>
<title>Pure Poetry</title>
<style>
div.footer{
	position:absolute;
	bottom:0;
}
</style>
</head>
<body>
<center>
<br>
<h2>Your Personalized Poem</h2>
<br>
<br>
<?php

$dontstop[0] = "And they dont stop comin<br>";
$x = $_GET['howMany'];
if(is_numeric($x) == FALSE){
	echo "THATS NOT A DAMNED NUMBER";
	$x = 0;
	echo $x;
} elseif($x > 630500) {
	echo "boot too big";
	$x = 0;
	echo $x;
}
$i = 1;

while ($i < $x && $x != 0){
  $dontstop[$i] = " and they don't stop comin<br>";
  $i++;
}

for($i = 0; $i<$x; $i++){
  echo $dontstop[$i];
}

?>
</center>
<audio id="myaudio" autoplay>
	<source src="dontstopcoming.wav" type="audio/wav">
</audio>
<center><img id="gif" src="dontstop.gif"></center>

<div class="footer" id="footer">
<p id="test"></p>
</div>
</body>

<script>
var count = 1;
var max = <?php echo $x; ?>;
document.getElementById('myaudio').addEventListener('ended', function(){
   if(count < max){
      count++;
      this.play();
	  document.getElementById("gif").style.visibility="visible";
   }
   document.getElementById("test").innerHTML = count;
}, false);

document.getElementById("gif").style.visibility="hidden"


</script>
</html>