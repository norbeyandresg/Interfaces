/*Esta funcion permite obtener el valor del select de html(onchange)*/
let originalPrice;
let ivaCalculate;
var proType = [];
var prod = [];
function getValueType (paellaType){

	this.paellaType = paellaType;
}

function getValuePrice(paellaPrice){

	this.paellaPrice = paellaPrice;
	ivaCalculate = Math.round((this.paellaPrice.value * 19) / 100);
	originalPrice = this.paellaPrice.value - ivaCalculate;
}

function getValueCoin(typeCoin){
	this.typeCoin = typeCoin;
}

function buildPaella(){

	/*Construccion de paella*/
	for (let i = 0; i < proType.length; i+=1){
		var factory = executeFactory(proType[i]);
		var paellaProduct = generatePaella(factory.type);
		
	}
	console.log(paellaProduct);

	/*llamamdo a patrones de diseño prototype y singleton*/
	var buildBase = produceBase(); //prototype
	var executeSingle = executeSingleton();
	console.log(buildBase);
	console.log(executeSingle);

	/*validacion de tipo de moneda para llamado del adaptador*/
	if(this.typeCoin == "dolar"){
		console.log("Precio en dolares con iva " + new CalculatePriceDolar().newCalculateDolar(originalPrice));
	}else if(this.typeCoin == "euro"){
		console.log("Precio en dolares con iva " + new CalculatePriceEuro().newCalculateEuro(originalPrice));
	}

	var myCar =  new buildShoppingCar(proType, prod);
	console.log("Precio Original " + originalPrice);
	console.log("Precio Iva " + ivaCalculate);
	console.log(myCar);
}