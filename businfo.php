
<?php



echo"<div id='businfo'>
<form action='book.php' method='get'>
<div id='bustype'>
<input type='text' name='bustype' value='".$row["bustype"]."'readonly>
</div>
<div id='from'>
<input type='text' name='source' value='".$row["source"]."'readonly>
</div>
<div id='to'>
<input type='text' name='destination' value='".$row["destination"]."'readonly>
</div>
<div id='departure'>
<input type='text' name='departuretime' value='".$row["departure"]."'readonly>
</div>
<div id='available'>
<input type='text' name='availableseat' value='".$row["available"]."'readonly>
</div>
<div id='fare'>
<input type='text' name='price' value='".$row["fare"]."'readonly>
</div>
<div id='datee'>
<input type='text' name='date' value='".$row["datee"]."'readonly>
</div>
<div id='bussnumber'>
<input type='text' name='busnumber' value='".$row["busnumber"]."'readonly>
</div>
<input type='hidden' name='hide' value='".$row["id"]."'>
<input type='hidden' name='row' value='".$row["row"]."'>
<input type='hidden' name='column' value='".$row["columns"]."'>
<div id='book'>
<input type='submit' name='bookbtn' value='Book' style='width:100%;height:100%;'>
</div>
</div>
";
echo"</form>";


?>