<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

</head>

<form method="post" action="ajax_conto/insertproduct">
    <input type="checkbox" name="checkbox[]" value="Bike">bike<br>
    <input type="checkbox" name="checkbox[]" value="Car">car<br>
    <input id="txt" type="text" name="userid" placeholder="User ID">
    <button onclick="ajaxcall()">submit</button>
</form>

<script>

    function ajaxcall() {


       // var x = document.getElementById("txt").value;

        $.ajax({
            type:'POST',
            url:"ajax_conto/insertproduct",

            success:function(){
               alert("data send");
            }
        });
    }

</script>

</html>