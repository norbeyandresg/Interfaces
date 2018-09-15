/*Esta funcion permite obtener el valor del select de html(onchange)*/
var list = [];
var menuItems = ["Andres", "Caliche", "Lina"];

function getValueType (paellaType) {
    this.paellaType = paellaType;
    list.push( this.paellaType );
}

var temp = [];
var res;

function getValuePrice(paellaPrice) {
    this.paellaPrice = paellaPrice;
    console.log( paellaPrice.value );
    
    var org = paellaPrice.value;
    var iva = ( org * 0.19);
    
    console.log( "Original >> ", org - iva);
    console.log( "Iva >> ", iva);
    
    res = paellaPrice.value;
}

function getValueCoin( money ) {
    this.money = money;
    if ( money.value == "dolar" ) {
        var ans = CalculatePriceDolar(res);
        console.log(ans);
    }
    
    if ( money.value == "euro" ) {
        var ans = CalculatePriceEuro(res);
        console.log(ans);
    }
}

function buildPaella() {
    for ( var i = 0; i < list.length; i++) {
        var factory = executeFactory( list[i].value );
        var paellaProduct = generatePaella( factory.type );
        temp.psuh( paellaProduct );
    }
    
    var car = new buildShoppingCar( temp );
    console.log( car );
    
    var decorator = new execDecorator( menuItems );
    console.log( decorator );
}