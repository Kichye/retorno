$(document).on('ready',function(){
	$('#sucursal').on('change','#lkpsucursal',function(){
		var sTpoRes = 'html';
		var sMetodo = 'POST';		
		var sUrl = 'accsucursales.php';
        var sConRes = '#areas';	
        var nSucursal = $(this).val();
        var oDatos = 'nAccion=1&nSucursal='+nSucursal;
        aPeticion(sTpoRes, sMetodo, oDatos, sUrl, sConRes);
        $('#catsucursal').hide();
        $('#catsucursal').next().hide();
        $('#encabezadosuc').hide();        
        $('#agregarsuc').hide();
        $('#destipo').html('<h3>Areas</h3>');
        $('#frmsucursal').remove();
	});
	
	$('#agregarsuc').on('click',function(e){
		e.preventDefault();
		var sTpoRes = 'html';
		var sMetodo = 'POST';
		var oDatos = 'nAccion=2&sTipo=sucursal';
		var sUrl = 'accsucursales.php';
        var sConRes = '#nvasuc';
        $('#catsucursal .fila').removeClass('marcar');
		aPeticion(sTpoRes, sMetodo, oDatos, sUrl, sConRes);
	});
	
	$('#areas').on('click','#agregarare',function(e){
		e.preventDefault();
		var sTpoRes = 'html';
		var sMetodo = 'POST';
		var oDatos = 'nAccion=2&sTipo=area';
		var sUrl = 'accsucursales.php';
        var sConRes = '#nvasuc';
        $('#catarea .fila').removeClass('marcar');
		aPeticion(sTpoRes, sMetodo, oDatos, sUrl, sConRes);
	});
	
	$('#nvasuc').on('click','#cancel',function(e){
		e.preventDefault();
		$('#frmsucursal').remove();
	});
	
	$('#areas').on('click','#regsuc',function(e){
		e.preventDefault();	
		$('#areas').children().remove();
		$('#encabezadosuc').show(); 
		$('#catsucursal').show();
		$('#catsucursal').next().show();
		$('#lkpsucursal').val(-1);
		$('#frmsucursal').remove();
		$('#agregarare').parent().remove();
		$('#agregarsuc').show();
		$('#destipo').html('<h3>Sucursal</h3>');
	});

	
	$('#catalogos').on('click','#catsucursal .fila div a,#catarea .fila div a',function (e){
		e.preventDefault();
		$('#catsucursal .fila').removeClass('marcar');
		$('#catarea .fila').removeClass('marcar');
		$(this).parent().parent().addClass('marcar');
		var nTipo= $(this).parent().attr('id').split('_');
		var sTipo = $(this).parent().attr('name');
		var sTpoRes = '';
		var nAccion = 0;
		var sConRes = '';
		var nNum = nTipo[1];
		if($(this).attr('href') == 'editar'){
			sTpoRes = 'html';
			nAccion = 3;
			sConRes = '#nvasuc';
		}
		else if($(this).attr('href') == 'borrar'){
			sTpoRes = 'script';
			nAccion = 6;
			sConRes = '';
		}
		var sMetodo = 'POST';
		var oDatos = 'nAccion='+nAccion+'&nNum='+nNum+'&sTipo='+sTipo;
		var sUrl = 'accsucursales.php';
		if($(this).attr('href') == 'borrar'){
			if(confirm("Est\u00e1 a punto de eliminar el registro. \n¿Desea Continuar?")){
				$(this).parent().html('<imge src=\'images/loadersmall.gif\' alt=\'cargando...\' height=\'16\' width=\'16\' />');
				aPeticion(sTpoRes, sMetodo, oDatos, sUrl, sConRes);
			}
		}
		else{aPeticion(sTpoRes, sMetodo, oDatos, sUrl, sConRes);}
	});
	
	$('#nvasuc').on('submit','#frmsucursal',function(e){
		e.preventDefault();
		valalfanumerico($('#nombre'),'S');        
        if($(".error").length <= 0){
        	var sTpoRes = 'script';
			var sMetodo = 'POST';
			var sUrl = 'accsucursales.php';
			var sConRes = '';
			var nSuc = $('#lkpsucursal').val();
			var sTipo = $('#sTipo').val();			
			if (sTipo =='sucursal'){sTipo='suc_';}
			else{sTipo='are_';}			
			if($('#nAccion').val() == 4){$('#nvasuc').html('<div class=\'loader\'><img src=\'images/loaderbar.gif\'></div>');}
			else if($('#nAccion').val() == 5){
				var nNum = $("#nNum").val();
				$('#frmsucursal').remove();				
				$('#'+sTipo+nNum).html('<imge src=\'images/loadersmall.gif\' alt=\'cargando...\' height=\'16\' width=\'16\' />');}			
			var oDatos = $(this).serialize();
			oDatos = oDatos + '&nSuc='+nSuc;
			aPeticion(sTpoRes, sMetodo, oDatos, sUrl, sConRes);
        }
        else{message(3);}
	});
	
	
});