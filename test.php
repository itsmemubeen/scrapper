<!-- <?php 

// echo file_get_contents("filename")

?> -->

<iframe id="myFrame" src="https://oload.monster/stream/Nutmxsmy3hE~1572344655~175.107.0.0~wk-p_U-z?mime=true" style="height:380px;width:100%"></iframe>

<p>Click the "Tryit" button to hide the first H1 element in the iframe (another document).</p>

<button onclick="myFunction()">Try it</button>

<script>
function myFunction() {
 var a = $('#myFrame').contents().find('video');
  console.log(a);
}
</script>