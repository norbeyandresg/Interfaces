function searchTupla(){
	var search = document.getElementById('search').value;
	var dataEn = 'search='+search;

	$.ajax({
		type:'GET',
		url : 'backend_revista.php',
		data: dataEn,
		success : function(resp){
			$('#res').html(resp)
		}//peticion al servidor http success = 200 ; error ; 
	});
}

function insertUser(){
	var identification = document.getElementById('identification').value;
	var first_name = document.getElementById('first_name').value;
	var last_name = document.getElementById('last_name').value;
	var age = document.getElementById('age').value;
	var city = document.getElementById('city').value;

	var dataEn = {
		'identification':identification,
		'first_name' : first_name,
		'last_name' : last_name,
		'age' : age,
		'city' : city
	};

	$.ajax({
		type:'POST',
		url : 'backend_revista.php',
		data: dataEn,
		success : function(resp){
			$('#res').html(resp)
		}
	});

}


function suscribeUser(){
	//capturar informacion el formulario de suscripcion
	var identification = document.getElementById('identification').value;
	//hacer la misma implementacion de post  basado en enlace GET del 'search'


}