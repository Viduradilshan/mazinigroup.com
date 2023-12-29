<form action="#" method="post">

<input type="text" name="data">
<button type="submit" name="test" >
</form>


<?php
if(isset($_POST['test'])){
$data=$_POST['data'];

$datas=filter_var(htmlentities($data), FILTER_SANITIZE_STRING);


}








?>

<div>
<input type="text" value="<?= $datas?>" id="myInput">
<button onclick="myFunction()">Copy text</button> 
</div>



<script>
function myFunction() {
  // Get the text field
  var copyText = document.getElementById("myInput");

  // Select the text field
  copyText.select();
  copyText.setSelectionRange(0, 99999); // For mobile devices

  // Copy the text inside the text field
  navigator.clipboard.writeText(copyText.value);
  
  // Alert the copied text
  alert("Copied the text: " + copyText.value);
}
</script>