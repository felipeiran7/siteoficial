<script>
	$(document).ready(function(){
		$("#cad-msg").on('click', function(){
				
				$.ajax({
					url:'insert-msg.php',
					type: 'POST',
					data:{nome:$("#nome").val(),
					mensagem:$("#mensagem").val()},
				success:function(data){
					document.getElementById('mensagem').value = '';
				},
				error:function(data){
					console.log("nao consegui encontrar a pagina insert");
				}

				});
		});
	});

</script>

<script type="text/javascript">
	window.onbeforeunload= function(){
		$.ajax({
			url:'setaoffline.php?stats=offline',
			method: 'GET'
		});
	}


</script>


<script language=javascript> document.addEventListener('contextmenu', event => event.preventDefault()); </script>

<script>

document.onkeydown = function(e) {
        if (e.ctrlKey && 
            (e.keyCode === 67 || 
             e.keyCode === 86 || 
             e.keyCode === 85 || 
             e.keyCode === 117)) {
            return false;
        } else {
            return true;
        }
};
$(document).keypress("u",function(e) {
  if(e.ctrlKey)
  {
return false;
}
else
{
return true;
}
});
</script>

