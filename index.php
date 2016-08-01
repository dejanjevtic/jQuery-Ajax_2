<!DOCTYPE html>
<html>
<head>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("input").click(function(){
	var data=$("#drzava").val(); 
        $.ajax({type:"POST",data:{action:data}, url: "ajax.php", success: function(response){
            $("#lokacija").html(response);
        }});
    });
});
        
</script>

</head>
<body>

<div style="text-align:center; background-color: green; color:white; margin-bottom:20px;padding:20px;font-size: 25px;">jQuery + Ajax</div>
Select country:<br><br>
<select id="drzava" name="drzava">
<option></option>
<option value="1">Serbia</option>
<option value="2">Greece</option>
<option value="3">England</option>
<option value="4">Italy</option>
<option value="5">France</option>
</select>
<input type='submit' value='Press'>

<br><br><br>
<select id="lokacija" name="lokacija"></select>
</body>
</html>
