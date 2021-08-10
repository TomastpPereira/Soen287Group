 function incrementQuantity() {

    let valueCount = document.getElementById("qty-one").value;
    let price = document.getElementById("price-one").value;
    let priceEach = document.getElementById("each-one").value;

    valueCount++;
    price = valueCount * priceEach;
    
    document.getElementById("qty-one").value = valueCount;
    document.getElementById("price-one").value = price+"$";
 }

 function decrementQuantity() {

    let valueCount = document.getElementById("qty-one").value;
    let price = document.getElementById("price-one").value;
    let priceEach = document.getElementById("each-one").value;

    if (valueCount == 0){
        valueCount = 0;
        alert("Whoops, cannot have a negative value")
    }
    else{
        valueCount--;
        price = valueCount * priceEach;
    }
    
    document.getElementById("qty-one").value = valueCount;
    document.getElementById("price-one").value = price+"$";
     
 }
//whats left is to figure out how you are gonna make the buttons work for each item (solutions right now: if statement where we fetch id to get correct each value, second is to make a different function for each item (basically copy))

//also, gotta figure out how the subtotal will fetch info form all other buttons