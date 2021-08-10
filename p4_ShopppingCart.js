class Banana{

    constructor(){
        this.price = 0.5;
        this.number = 1;
        this.name = "banana"
    }
}

class Apple{

    constructor(){
        this.price = 0.4;
        this.number = 1;
        this.name = "apple"
    }
}

class Orange{

    constructor(){
        this.price = 0.6;
        this.number = 1;
        this.name = "orange"
    }
}

class Peach{
    constructor(){
        this.price = 0.8;
        this.number = 1;
        this.name = "peach"
    }
}

 let totalItems = 0;
 let subTotal = 0;
 let gsTax = 0;
 let qsTax = 0;
 let total = 0;

 const arrayFruits = [];

 function calculateSubtotal(){
     let subtotals = 0;
     for (let i = 0; i < arrayFruits.length; i ++){
        subtotals += arrayFruits[i].price;
     }
     return subtotals;
 }

 function calculateGst(){
     let taxGst = 0;
     let tempSub = calculateSubtotal();
     taxGst = tempSub * 0.05;
     return taxGst;
 }

 function calculateQst(){
     let taxQst = 0;
     let tempSub = calculateSubtotal();
     taxQst = tempSub * 0.09975;
     return taxQst;
 }

 function calculateTotal(){
     let finalTotal = calculateSubtotal() + calculateGst() + calculateQst();
     return finalTotal;
 }
 
 function incrementQuantityBanana() {

    let valueCount = document.getElementById("qty-one").value;
    let price = document.getElementById("price-one").value;
    let priceEach = document.getElementById("each-one").value;
    
    arrayFruits.push(new Banana());
    valueCount++;
    price = valueCount * priceEach;
    totalItems++;
    
    console.log(arrayFruits.length);
    document.getElementById("qty-one").value = valueCount;
    document.getElementById("price-one").value = price+"$";
    document.getElementById("items").innerHTML = totalItems;

    // subtotal (you will have to fetch price of other button fuctions and add them here docume. get by id...) 

    subTotal = calculateSubtotal();
    document.getElementById("subtotal").innerHTML = subTotal.toFixed(3);

    // gst and qst (same concept as subtotal)
    gsTax = calculateGst();
    qsTax = calculateQst();

    document.getElementById("gst").innerHTML = gsTax.toFixed(3);
    document.getElementById("qst").innerHTML = qsTax.toFixed(3);

    // total (same concept as subtotal)
    total = calculateTotal();
    document.getElementById("total").innerHTML = total.toFixed(3);
    
 }

 function decrementQuantityBanana() {

    let valueCount = document.getElementById("qty-one").value;
    let price = document.getElementById("price-one").value;
    let priceEach = document.getElementById("each-one").value;

    if (valueCount == 0){
        valueCount = 0;
        alert("Whoops, cannot have a negative value")
    }
    else{
        let index = arrayFruits.findIndex(Banana => Banana.name === "banana");
        arrayFruits.splice(index,1);
        valueCount--;
        price = valueCount * priceEach;
        totalItems--;
    }
    console.log(arrayFruits.length);
    document.getElementById("qty-one").value = valueCount;
    document.getElementById("price-one").value = price+"$";
    document.getElementById("items").innerHTML = totalItems;

     // subtotal (you will have to fetch price of other button fuctions and add them here docume. get by id...) 

    subTotal = calculateSubtotal();
    document.getElementById("subtotal").innerHTML = subTotal.toFixed(3);

    // gst and qst (same concept as subtotal)
    gsTax = calculateGst();
    qsTax = calculateQst();

    document.getElementById("gst").innerHTML = gsTax.toFixed(3);
    document.getElementById("qst").innerHTML = qsTax.toFixed(3);

    // total (same concept as subtotal)
    total = calculateTotal();
    document.getElementById("total").innerHTML = total.toFixed(3);
 }


 function incrementQuantityApple() {

    let valueCount = document.getElementById("qty-two").value;
    let price = document.getElementById("price-two").value;
    let priceEach = document.getElementById("each-two").value;
    
    arrayFruits.push(new Apple());
    valueCount++;
    price = valueCount * priceEach;
    totalItems++;
    
    console.log(arrayFruits.length);
    document.getElementById("qty-two").value = valueCount;
    document.getElementById("price-two").value = price+"$";
    document.getElementById("items").innerHTML = totalItems;

    // subtotal (you will have to fetch price of other button fuctions and add them here docume. get by id...) 

    subTotal = calculateSubtotal();
    document.getElementById("subtotal").innerHTML = subTotal.toFixed(3);

    // gst and qst (same concept as subtotal)
    gsTax = calculateGst();
    qsTax = calculateQst();

    document.getElementById("gst").innerHTML = gsTax.toFixed(3);
    document.getElementById("qst").innerHTML = qsTax.toFixed(3);

    // total (same concept as subtotal)
    total = calculateTotal();
    document.getElementById("total").innerHTML = total.toFixed(3);
    
 }

 function decrementQuantityApple() {

    let valueCount = document.getElementById("qty-two").value;
    let price = document.getElementById("price-two").value;
    let priceEach = document.getElementById("each-two").value;

    if (valueCount == 0){
        valueCount = 0;
        alert("Whoops, cannot have a negative value")
    }
    else{
        let index = arrayFruits.findIndex(Apple => Apple.name === "apple");
        arrayFruits.splice(index,1);
        valueCount--;
        price = valueCount * priceEach;
        totalItems--;
    }
    console.log(arrayFruits.length);
    document.getElementById("qty-two").value = valueCount;
    document.getElementById("price-two").value = price+"$";
    document.getElementById("items").innerHTML = totalItems;

     // subtotal (you will have to fetch price of other button fuctions and add them here docume. get by id...) 

    subTotal = calculateSubtotal();
    document.getElementById("subtotal").innerHTML = subTotal.toFixed(3);

    // gst and qst (same concept as subtotal)
    gsTax = calculateGst();
    qsTax = calculateQst();

    document.getElementById("gst").innerHTML = gsTax.toFixed(3);
    document.getElementById("qst").innerHTML = qsTax.toFixed(3);

    // total (same concept as subtotal)
    total = calculateTotal();
    document.getElementById("total").innerHTML = total.toFixed(3);
 }

 function incrementQuantityOrange() {

    let valueCount = document.getElementById("qty-three").value;
    let price = document.getElementById("price-three").value;
    let priceEach = document.getElementById("each-three").value;
    
    arrayFruits.push(new Orange());
    valueCount++;
    price = valueCount * priceEach;
    totalItems++;
    
    console.log(arrayFruits.length);
    document.getElementById("qty-three").value = valueCount;
    document.getElementById("price-three").value = price+"$";
    document.getElementById("items").innerHTML = totalItems;

    // subtotal (you will have to fetch price of other button fuctions and add them here docume. get by id...) 

    subTotal = calculateSubtotal();
    document.getElementById("subtotal").innerHTML = subTotal.toFixed(3);

    // gst and qst (same concept as subtotal)
    gsTax = calculateGst();
    qsTax = calculateQst();

    document.getElementById("gst").innerHTML = gsTax.toFixed(3);
    document.getElementById("qst").innerHTML = qsTax.toFixed(3);

    // total (same concept as subtotal)
    total = calculateTotal();
    document.getElementById("total").innerHTML = total.toFixed(3);
    
 }

 function decrementQuantityOrange() {

    let valueCount = document.getElementById("qty-three").value;
    let price = document.getElementById("price-three").value;
    let priceEach = document.getElementById("each-three").value;

    if (valueCount == 0){
        valueCount = 0;
        alert("Whoops, cannot have a negative value")
    }
    else{
        let index = arrayFruits.findIndex(Orange => Orange.name === "orange");
        arrayFruits.splice(index,1);
        valueCount--;
        price = valueCount * priceEach;
        totalItems--;
    }
    console.log(arrayFruits.length);
    document.getElementById("qty-three").value = valueCount;
    document.getElementById("price-three").value = price+"$";
    document.getElementById("items").innerHTML = totalItems;

     // subtotal (you will have to fetch price of other button fuctions and add them here docume. get by id...) 

    subTotal = calculateSubtotal();
    document.getElementById("subtotal").innerHTML = subTotal.toFixed(3);

    // gst and qst (same concept as subtotal)
    gsTax = calculateGst();
    qsTax = calculateQst();

    document.getElementById("gst").innerHTML = gsTax.toFixed(3);
    document.getElementById("qst").innerHTML = qsTax.toFixed(3);

    // total (same concept as subtotal)
    total = calculateTotal();
    document.getElementById("total").innerHTML = total.toFixed(3);
 }

  function incrementQuantityPeach() {

    let valueCount = document.getElementById("qty-four").value;
    let price = document.getElementById("price-four").value;
    let priceEach = document.getElementById("each-four").value;
    
    arrayFruits.push(new Peach());
    valueCount++;
    price = valueCount * priceEach;
    totalItems++;
    
    console.log(arrayFruits.length);
    document.getElementById("qty-four").value = valueCount;
    document.getElementById("price-four").value = price+"$";
    document.getElementById("items").innerHTML = totalItems;

    // subtotal (you will have to fetch price of other button fuctions and add them here docume. get by id...) 

    subTotal = calculateSubtotal();
    document.getElementById("subtotal").innerHTML = subTotal.toFixed(3);

    // gst and qst (same concept as subtotal)
    gsTax = calculateGst();
    qsTax = calculateQst();

    document.getElementById("gst").innerHTML = gsTax.toFixed(3);
    document.getElementById("qst").innerHTML = qsTax.toFixed(3);

    // total (same concept as subtotal)
    total = calculateTotal();
    document.getElementById("total").innerHTML = total.toFixed(3);
    
 }

 function decrementQuantityPeach() {

    let valueCount = document.getElementById("qty-four").value;
    let price = document.getElementById("price-four").value;
    let priceEach = document.getElementById("each-four").value;

    if (valueCount == 0){
        valueCount = 0;
        alert("Whoops, cannot have a negative value")
    }
    else{
        let index = arrayFruits.findIndex(Peach => Peach.name === "peach");
        arrayFruits.splice(index,1);
        valueCount--;
        price = valueCount * priceEach;
        totalItems--;
    }
    console.log(arrayFruits.length);
    document.getElementById("qty-four").value = valueCount;
    document.getElementById("price-four").value = price+"$";
    document.getElementById("items").innerHTML = totalItems;

     // subtotal (you will have to fetch price of other button fuctions and add them here docume. get by id...) 

    subTotal = calculateSubtotal();
    document.getElementById("subtotal").innerHTML = subTotal.toFixed(3);

    // gst and qst (same concept as subtotal)
    gsTax = calculateGst();
    qsTax = calculateQst();

    document.getElementById("gst").innerHTML = gsTax.toFixed(3);
    document.getElementById("qst").innerHTML = qsTax.toFixed(3);

    // total (same concept as subtotal)
    total = calculateTotal();
    document.getElementById("total").innerHTML = total.toFixed(3);
 }
 
//whats left is to figure out how you are gonna make the buttons work for each item (solutions right now: if statement where we fetch id to get correct each value, second is to make a different function for each item (basically copy))

//also, gotta figure out how the subtotal will fetch info form all other buttons

// class Banana{

//     constructor(){
//         this.price = 0.5;
//         this.number = 1;
//         this.name = "banana"
//     }
// }

// const arrayFruits = [];

// function incrementTry(){

//     var numOfBananas = document.getElementById("qty-one").value;

//     arrayFruits.push(new Banana());
//     numOfBananas++;

//     document.getElementById("qty-one").value = numOfBananas;

//     console.log(arrayFruits.length);
//     // document.getElementById("price-one").value = price+"$";
//     // document.getElementById("items").innerHTML = totalItems;
// }

// let one = new Banana();
// let two = new Banana();

// const arrayFruits = ["hey", one, two];
// console.log(arrayFruits.findIndex(Banana => Banana.name === "banana"));
// console.log(arrayFruits.toString());

// let index = arrayFruits.findIndex(Banana => Banana.name === "banana");
// arrayFruits.splice(index,1);
// console.log(arrayFruits.toString());



// let totalArray = 0;
// let numbOfBanana = 0;

// arrayFruits.push(new Banana());

// let size = arrayFruits.length;
// console.log(size);
// for (let y = 0; y < size; y++){
//     totalArray += arrayFruits[y].price;
//     numbOfBanana += arrayFruits[y].number;

// }
// console.log(totalArray);
// console.log(numbOfBanana);



// function incrementQuantity() {

//     let valueCount = document.getElementById("qty-one").value;
//     let price = document.getElementById("price-one").value;
//     let priceEach = document.getElementById("each-one").value;
    
//     arrayFruits.push(new Banana());
//     valueCount++;
//     price = valueCount * priceEach;
//     totalItems++;
    
//     console.log(arrayFruits.length);
//     document.getElementById("qty-one").value = valueCount;
//     document.getElementById("price-one").value = price+"$";
//     document.getElementById("items").innerHTML = totalItems;

//     // subtotal (you will have to fetch price of other button fuctions and add them here docume. get by id...) 

//     //subTotal = price; 
//     subTotal = calculateSubtotal();
//     document.getElementById("subtotal").innerHTML = subTotal;

//     // gst and qst (same concept as subtotal)
//     // gsTax = 0.05 * price;
//     gsTax = calculateGst();
//     // qsTax = .09975 * price;
//     qsTax = calculateQst();

//     document.getElementById("gst").innerHTML = gsTax.toFixed(3);
//     document.getElementById("qst").innerHTML = qsTax.toFixed(3);

//     // total (same concept as subtotal)
//     // total = subTotal + gsTax + qsTax;
//     total = calculateTotal();

//     document.getElementById("total").innerHTML = total.toFixed(3);
    
//  }

//  function decrementQuantity() {

//     let valueCount = document.getElementById("qty-one").value;
//     let price = document.getElementById("price-one").value;
//     let priceEach = document.getElementById("each-one").value;



//     if (valueCount == 0){
//         valueCount = 0;
//         alert("Whoops, cannot have a negative value")
//     }
//     else{
//         let index = arrayFruits.findIndex(Banana => Banana.name === "banana");
//         arrayFruits.splice(index,1);
//         valueCount--;
//         price = valueCount * priceEach;
//         totalItems--;
//     }
//     console.log(arrayFruits.length);
//     document.getElementById("qty-one").value = valueCount;
//     document.getElementById("price-one").value = price+"$";
//     document.getElementById("items").innerHTML = totalItems;

//      // subtotal (you will have to fetch price of other button fuctions and add them here docume. get by id...) 

//     subTotal = price; 
//     document.getElementById("subtotal").innerHTML = subTotal;

//     // gst and qst (same concept as subtotal)
//     // gsTax = 0.05 * price;
//     // qsTax = .09975 * price;

//     gsTax = calculateGst();
//     qsTax = calculateQst();

//     document.getElementById("gst").innerHTML = gsTax.toFixed(3);
//     document.getElementById("qst").innerHTML = qsTax.toFixed(3);

//     // total (same concept as subtotal)

//     total = subTotal + gsTax + qsTax;

//     document.getElementById("total").innerHTML = total.toFixed(3);
     
//  }
