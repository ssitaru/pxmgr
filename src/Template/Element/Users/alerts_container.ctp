<style type="text/css">
	#containerAlerts {
		margin-top: 25px;
	}
	
	#containerAlerts div {
		display: none;
	}
</style>

<div id="containerAlerts">
	<div id="alertSuccess" class="alert alert-success" role="alert"></div>
	<div id="alertError" class="alert alert-error" role="alert"></div>	
</div>

<script type="text/javascript">
	function displayAlert(type, text)
	{
		if(type == 'success')
		{
			$('#alertSuccess').css('display', 'block').html(text);
			setTimeout(function(){
				$('#alertSuccess').hide();
			}, 1500);
		}
		else
		{
			$('#alertError').css('display', 'block').html(text);
		}
	}
	
	/*$(document).ready(function(){
		$('#containerAlerts .alert').alert();
	});*/	
</script>