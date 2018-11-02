
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<button onclick="comando('on')">On</button><button onclick="comando('off')">Off</button><br>
<button onclick="comando('onall')">On All</button><button onclick="comando('offall')">Off All</button>
<script type="text/javascript">
function comando(v){
	$.ajax({
	  method: "POST",
	  url: "http://192.168.100.5/led.php",
	  data: {comando: v}
	})
	  .done(function( msg ) {
	   // alert( "Data Saved: " + msg );
	  });
}

</script>