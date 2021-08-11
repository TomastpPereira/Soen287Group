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
    
    document.getElementById("qty-one").value = valueCount;
    document.getElementById("price-one").value = price.toFixed(2)+"$";
    document.getElementById("items").innerHTML = totalItems;

    // subtotal (you will have to fetch price of other button fuctions and add them here docume. get by id...) 

    subTotal = calculateSubtotal();
    document.getElementById("subtotal").innerHTML = subTotal.toFixed(3)+"$";

    // gst and qst (same concept as subtotal)
    gsTax = calculateGst();
    qsTax = calculateQst();

    document.getElementById("gst").innerHTML = gsTax.toFixed(3)+"$";
    document.getElementById("qst").innerHTML = qsTax.toFixed(3)+"$";

    // total (same concept as subtotal)
    total = calculateTotal();
    document.getElementById("total").innerHTML = total.toFixed(3)+"$";
    
 }

 function decrementQuantityBanana() {

    let valueCount = document.getElementById("qty-one").value;
    let price = document.getElementById("price-one").value;
    let priceEach = document.getElementById("each-one").value;

    if (valueCount == 0){
        valueCount = 0;
        alert("Whoops, cannot have a negative value")
        return;
    }
    else{
        let index = arrayFruits.findIndex(Banana => Banana.name === "banana");
        arrayFruits.splice(index,1);
        valueCount--;
        price = valueCount * priceEach;
        totalItems--;
    }

    document.getElementById("qty-one").value = valueCount;
    document.getElementById("price-one").value = price.toFixed(2)+"$";
    document.getElementById("items").innerHTML = totalItems;

     // subtotal (you will have to fetch price of other button fuctions and add them here docume. get by id...) 

    subTotal = calculateSubtotal();
    document.getElementById("subtotal").innerHTML = subTotal.toFixed(3)+"$";

    // gst and qst (same concept as subtotal)
    gsTax = calculateGst();
    qsTax = calculateQst();

    document.getElementById("gst").innerHTML = gsTax.toFixed(3)+"$";
    document.getElementById("qst").innerHTML = qsTax.toFixed(3)+"$";

    // total (same concept as subtotal)
    total = calculateTotal();
    document.getElementById("total").innerHTML = total.toFixed(3)+"$";
 }


 function incrementQuantityApple() {

    let valueCount = document.getElementById("qty-two").value;
    let price = document.getElementById("price-two").value;
    let priceEach = document.getElementById("each-two").value;
    
    arrayFruits.push(new Apple());
    valueCount++;
    price = valueCount * priceEach;
    totalItems++;
    
    document.getElementById("qty-two").value = valueCount;
    document.getElementById("price-two").value = price.toFixed(2)+"$";
    document.getElementById("items").innerHTML = totalItems;

    // subtotal (you will have to fetch price of other button fuctions and add them here docume. get by id...) 

    subTotal = calculateSubtotal();
    document.getElementById("subtotal").innerHTML = subTotal.toFixed(3)+"$";

    // gst and qst (same concept as subtotal)
    gsTax = calculateGst();
    qsTax = calculateQst();

    document.getElementById("gst").innerHTML = gsTax.toFixed(3)+"$";
    document.getElementById("qst").innerHTML = qsTax.toFixed(3)+"$";

    // total (same concept as subtotal)
    total = calculateTotal();
    document.getElementById("total").innerHTML = total.toFixed(3)+"$";
    
 }

 function decrementQuantityApple() {

    let valueCount = document.getElementById("qty-two").value;
    let price = document.getElementById("price-two").value;
    let priceEach = document.getElementById("each-two").value;

    if (valueCount == 0){
        valueCount = 0;
        alert("Whoops, cannot have a negative value");
        return;
    }
    else{
        let index = arrayFruits.findIndex(Apple => Apple.name === "apple");
        arrayFruits.splice(index,1);
        valueCount--;
        price = valueCount * priceEach;
        totalItems--;
    }

    document.getElementById("qty-two").value = valueCount;
    document.getElementById("price-two").value = price.toFixed(2)+"$";
    document.getElementById("items").innerHTML = totalItems;

     // subtotal (you will have to fetch price of other button fuctions and add them here docume. get by id...) 

    subTotal = calculateSubtotal();
    document.getElementById("subtotal").innerHTML = subTotal.toFixed(3)+"$";

    // gst and qst (same concept as subtotal)
    gsTax = calculateGst();
    qsTax = calculateQst();

    document.getElementById("gst").innerHTML = gsTax.toFixed(3)+"$";
    document.getElementById("qst").innerHTML = qsTax.toFixed(3)+"$";

    // total (same concept as subtotal)
    total = calculateTotal();
    document.getElementById("total").innerHTML = total.toFixed(3)+"$";
 }

 function incrementQuantityOrange() {

    let valueCount = document.getElementById("qty-three").value;
    let price = document.getElementById("price-three").value;
    let priceEach = document.getElementById("each-three").value;
    
    arrayFruits.push(new Orange());
    valueCount++;
    price = valueCount * priceEach;
    totalItems++;
    
    document.getElementById("qty-three").value = valueCount;
    document.getElementById("price-three").value = price.toFixed(2)+"$";
    document.getElementById("items").innerHTML = totalItems;

    // subtotal (you will have to fetch price of other button fuctions and add them here docume. get by id...) 

    subTotal = calculateSubtotal();
    document.getElementById("subtotal").innerHTML = subTotal.toFixed(3)+"$";

    // gst and qst (same concept as subtotal)
    gsTax = calculateGst();
    qsTax = calculateQst();

    document.getElementById("gst").innerHTML = gsTax.toFixed(3)+"$";
    document.getElementById("qst").innerHTML = qsTax.toFixed(3)+"$";

    // total (same concept as subtotal)
    total = calculateTotal();
    document.getElementById("total").innerHTML = total.toFixed(3)+"$";
    
 }

 function decrementQuantityOrange() {

    let valueCount = document.getElementById("qty-three").value;
    let price = document.getElementById("price-three").value;
    let priceEach = document.getElementById("each-three").value;

    if (valueCount == 0){
        valueCount = 0;
        alert("Whoops, cannot have a negative value");
        return;
    }
    else{
        let index = arrayFruits.findIndex(Orange => Orange.name === "orange");
        arrayFruits.splice(index,1);
        valueCount--;
        price = valueCount * priceEach;
        totalItems--;
    }

    document.getElementById("qty-three").value = valueCount;
    document.getElementById("price-three").value = price.toFixed(2)+"$";
    document.getElementById("items").innerHTML = totalItems;

     // subtotal (you will have to fetch price of other button fuctions and add them here docume. get by id...) 

    subTotal = calculateSubtotal();
    document.getElementById("subtotal").innerHTML = subTotal.toFixed(3)+"$";

    // gst and qst (same concept as subtotal)
    gsTax = calculateGst();
    qsTax = calculateQst();

    document.getElementById("gst").innerHTML = gsTax.toFixed(3)+"$";
    document.getElementById("qst").innerHTML = qsTax.toFixed(3)+"$";

    // total (same concept as subtotal)
    total = calculateTotal();
    document.getElementById("total").innerHTML = total.toFixed(3) +"$";
 }

  function incrementQuantityPeach() {

    let valueCount = document.getElementById("qty-four").value;
    let price = document.getElementById("price-four").value;
    let priceEach = document.getElementById("each-four").value;
    
    arrayFruits.push(new Peach());
    valueCount++;
    price = valueCount * priceEach;
    totalItems++;
    
    document.getElementById("qty-four").value = valueCount;
    document.getElementById("price-four").value = price.toFixed(2)+"$";
    document.getElementById("items").innerHTML = totalItems;

    // subtotal (you will have to fetch price of other button fuctions and add them here docume. get by id...) 

    subTotal = calculateSubtotal();
    document.getElementById("subtotal").innerHTML = subTotal.toFixed(3)+"$";

    // gst and qst (same concept as subtotal)
    gsTax = calculateGst();
    qsTax = calculateQst();

    document.getElementById("gst").innerHTML = gsTax.toFixed(3)+"$";
    document.getElementById("qst").innerHTML = qsTax.toFixed(3)+"$";

    // total (same concept as subtotal)
    total = calculateTotal();
    document.getElementById("total").innerHTML = total.toFixed(3)+"$";
    
 }

 function decrementQuantityPeach() {

    let valueCount = document.getElementById("qty-four").value;
    let price = document.getElementById("price-four").value;
    let priceEach = document.getElementById("each-four").value;

    if (valueCount == 0){
        valueCount = 0;
        alert("Whoops, cannot have a negative value");
        return;
    }
    else{
        let index = arrayFruits.findIndex(Peach => Peach.name === "peach");
        arrayFruits.splice(index,1);
        valueCount--;
        price = valueCount * priceEach;
        totalItems--;
    }
    
    document.getElementById("qty-four").value = valueCount;
    document.getElementById("price-four").value = price.toFixed(2)+"$";
    document.getElementById("items").innerHTML = totalItems;

     // subtotal (you will have to fetch price of other button fuctions and add them here docume. get by id...) 

    subTotal = calculateSubtotal();
    document.getElementById("subtotal").innerHTML = subTotal.toFixed(3)+"$";

    // gst and qst (same concept as subtotal)
    gsTax = calculateGst();
    qsTax = calculateQst();

    document.getElementById("gst").innerHTML = gsTax.toFixed(3)+"$";
    document.getElementById("qst").innerHTML = qsTax.toFixed(3)+"$";

    // total (same concept as subtotal)
    total = calculateTotal();
    document.getElementById("total").innerHTML = total.toFixed(3)+"$";
 }


 function deleteBanana(){

     if (confirm("Are you sure you wish to delete this item?") == true){
         document.getElementById('row-banana').style.display = 'none';
         let i =0;
         while (i < arrayFruits.length){
             if (arrayFruits[i].name == "banana"){
                 arrayFruits.splice(i, 1);
                 totalItems--;
             }
             else {
                 ++i;
             }
         }

        }
        subTotal = calculateSubtotal();
        document.getElementById("subtotal").innerHTML = subTotal.toFixed(3)+"$";
    
        gsTax = calculateGst();
        qsTax = calculateQst();
    
        document.getElementById("gst").innerHTML = gsTax.toFixed(3)+"$";
        document.getElementById("qst").innerHTML = qsTax.toFixed(3)+"$";
    
        total = calculateTotal();
        document.getElementById("total").innerHTML = total.toFixed(3)+"$";

        document.getElementById("items").innerHTML = totalItems;
    
 }

 function deleteApple(){

     if (confirm("Are you sure you wish to delete this item?") == true){
         document.getElementById('row-apple').style.display = 'none';
         let i =0;
         while (i < arrayFruits.length){
             if (arrayFruits[i].name == "apple"){
                 arrayFruits.splice(i, 1);
                 totalItems--;
             }
             else {
                 ++i;
             }
         }

        }
        subTotal = calculateSubtotal();
        document.getElementById("subtotal").innerHTML = subTotal.toFixed(3)+"$";
    
        gsTax = calculateGst();
        qsTax = calculateQst();
    
        document.getElementById("gst").innerHTML = gsTax.toFixed(3)+"$";
        document.getElementById("qst").innerHTML = qsTax.toFixed(3)+"$";
    
        total = calculateTotal();
        document.getElementById("total").innerHTML = total.toFixed(3)+"$";

        document.getElementById("items").innerHTML = totalItems;
    
 }

 function deleteOrange(){

     if (confirm("Are you sure you wish to delete this item?") == true){
         document.getElementById('row-orange').style.display = 'none';
         let i =0;
         while (i < arrayFruits.length){
             if (arrayFruits[i].name == "orange"){
                 arrayFruits.splice(i, 1);
                 totalItems--;
             }
             else {
                 ++i;
             }
         }

        }
        subTotal = calculateSubtotal();
        document.getElementById("subtotal").innerHTML = subTotal.toFixed(3)+"$";
    
        gsTax = calculateGst();
        qsTax = calculateQst();
    
        document.getElementById("gst").innerHTML = gsTax.toFixed(3)+"$";
        document.getElementById("qst").innerHTML = qsTax.toFixed(3)+"$";
    
        total = calculateTotal();
        document.getElementById("total").innerHTML = total.toFixed(3)+"$";

        document.getElementById("items").innerHTML = totalItems;
    
 }

 function deletePeach(){

     if (confirm("Are you sure you wish to delete this item?") == true){
         document.getElementById('row-peach').style.display = 'none';
         let i =0;
         while (i < arrayFruits.length){
             if (arrayFruits[i].name == "peach"){
                 arrayFruits.splice(i, 1);
                 totalItems--;
             }
             else {
                 ++i;
             }
         }

        }
        subTotal = calculateSubtotal();
        document.getElementById("subtotal").innerHTML = subTotal.toFixed(3)+"$";
    
        gsTax = calculateGst();
        qsTax = calculateQst();
    
        document.getElementById("gst").innerHTML = gsTax.toFixed(3)+"$";
        document.getElementById("qst").innerHTML = qsTax.toFixed(3)+"$";
    
        total = calculateTotal();
        document.getElementById("total").innerHTML = total.toFixed(3)+"$";

        document.getElementById("items").innerHTML = totalItems;  
 }
 

