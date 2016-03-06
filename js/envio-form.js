<script>  
  $(document).ready(function(){
	//Se verifica si es contacto o afiliacion
	var var_url = $(document).URL;
		if (var_url == "http://www.orizorca.com.ve/contacto.php"){
			$.ajax({
				type: "POST",
				url: "from-contac.php",
				data: dataString,
				cache: false,
				success: function(result){
					$('#envio').html(result);
					$('#envio').hide('slow');
				}
			});
		} else if (var_url == "http://www.orizorca.com.ve/afiliacion.php"){
			$.ajax({
				type: "POST",
				url: "from-afili.php",
				data: dataString,
				cache: false,
				success: function(result){
					$('#envio').html(result);
					$('#envio').hide('slow');
				}
			});
		}
});
</script>

