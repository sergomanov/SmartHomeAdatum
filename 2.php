<script src="js/jquery-1.8.3.min.js" type="text/javascript"></script> 


<input type="text" name="mydata" id="mydata" />
<input name="name" value="topEQOX293JBEEP77-170">
<input name="name" value="leftEQOX293JBEEP77-546">
<input name="name" value="top78EQOX293J-368">
<input name="name" value="left78EQOX293J-368">
<input name="name" value="top78EQOX293J-368">
<input name="name" value="left78EQOX293J-368">
<input name="name" value="top78EtQOX293J-368">
<input name="name" value="left78EtQOX293J-368">
<input name="name6y" value="5">
<input type="button" onclick="send();" value="Отправить" />

<div id="result"></div>



<script>
function send()
{
values = $("input[name=name]").map(function(){return $(this).val();}).get();
var data = $("input[name=name]").map(function(){return $(this).val();}).get();
       $.ajax({
                type: "POST",
                url: "/SendData.php",
                data: "data="+data,
                success: function(html) {
                        $("#result").empty();
                        $("#result").append(html);
                }
        });
}

</script>
