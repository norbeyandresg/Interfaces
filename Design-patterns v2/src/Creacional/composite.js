function shoppingCar(typePaella){ 
    this.typePaella = typePaella;
    this.arrayElements = [];
}

shoppingCar.prototype = {
    add: function(product) {
        this.arrayElements.push(product);
        cnosole.log(product);
    },
    
    remove: function(product) {
        this.arrayElements.split(0, this.arrayElements.length);
        this.arrayElements.add(product);
    }
}

function buildShoppingCar(list){//tipo de producto, producto){

    var car = new shoppingCar("paella");
    for (var i = 0; i < list.length; i++) {
        car.add(list[i]);
    }
    return car;
}

