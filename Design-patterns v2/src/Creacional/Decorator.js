function productPaella(name){
	this.name=name;
}
function decoratorNameProduct(product, description){
	this.product=product;
	this.description=description;
	var fullName = this.product.name + " " + this.description;
	return fullName;

}
function execDecorator(item){
	var itemDecorate =[]
	console.log(item)
	for (var i = 0; i < item.length; i++) {
        var productName = new productPaella(item[i])
        var decorated = new decoratorNameProduct(productName, "la mejor paella de la universidad")
        itemDecorate.push(decorated)
    }

    console.log(productPaella)
}