function shoppingCar(typePaella){ 
    this.typePaella = typePaella;
    var arrayElements = [];


    this.compositePrototype = function() {
        var objectComposite = {
            add: function(product){
                arrayElements.push(product);
            },

            remove: function (product){

                arrayElements.split(0, arrayElements.length);
                arrayElements.add(product);
            }
        }

        return objectComposite;
    }
}


function buildShoppingCar(typeProduct, product){//tipo de producto, producto){

    var car = new shoppingCar(typeProduct);
    var resultCar = car.compositePrototype().add(product);

    return car;
}

