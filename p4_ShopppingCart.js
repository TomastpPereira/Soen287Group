var addButton = document.getElementsByClassName("add");
 console.log(addButton);
 for (let y = 0; y < addButton.length; y++){
     let button = addButton[y];
     button.addEventListener("click", addQuantity);
 }

 var lessButton = document.getElementsByClassName("remove");
 console.log(lessButton);
 for (let z = 0; z < lessButton.length; z++){
     let button = lessButton[z];
     button.addEventListener("click", removeQuantity);
 }


 var removeCartItem = document.getElementsByClassName("delete");
 console.log(removeCartItem);
 for (let i = 0; i < removeCartItem.length; i++){
    let button = removeCartItem[i];
    button.addEventListener("click", removeCartItems)
 }

   
 function addQuantity(event){
     let buttonAdd = event.target;
     let quantity = buttonAdd.parentElement.parentElement.getElementsByClassName("qty")[0].value;
     let getAltADD = buttonAdd.parentElement.parentElement.parentElement.getElementsByClassName("images")[0].getAttribute("alt");
     quantity++;
     localStorage.setItem(getAltADD,quantity);
     buttonAdd.parentElement.parentElement.getElementsByClassName("qty")[0].value = localStorage.getItem(getAltADD);
     updateCartTotal();
 }

 function removeQuantity(event){
     let buttonLess = event.target;
     let quantity = buttonLess.parentElement.parentElement.getElementsByClassName("qty")[0].value;
     let getAltRemove = buttonLess.parentElement.parentElement.parentElement.getElementsByClassName("images")[0].getAttribute("alt");
     if (quantity == 1) return;
     quantity--;
     localStorage.setItem(getAltRemove, quantity);
     buttonLess.parentElement.parentElement.getElementsByClassName("qty")[0].value = localStorage.getItem(getAltRemove);
     updateCartTotal();    
 }

 function removeCartItems(event){
     let buttonClicked = event.target;
     buttonClicked.parentElement.parentElement.parentElement.remove();
     let getAlt = buttonClicked.parentElement.parentElement.parentElement.getElementsByClassName("images")[0].getAttribute("alt");
     let findRemovableItem;
     for (let x = 0; x < JSON.parse(localStorage.getItem("data")).length; x++){
        if (JSON.parse(localStorage.getItem("data"))[x].item == getAlt){
            findRemovableItem = x;
            break;
        } 
     }
     const data = JSON.parse(localStorage.getItem("data"));
     data.splice(findRemovableItem,1);
     localStorage.setItem('data', JSON.stringify(data));
     updateCartTotal();
 }

 function updateCartTotal(){
    let totalItemQuantity = 0;
    let cartSubTotal = 0;
    let cartItems = document.getElementsByClassName("outer-rec")[0];
    let cartRows = cartItems.getElementsByClassName("row");
    for (let i = 0; i < cartRows.length; i++){
        let currentRow = cartRows[i];
        let priceEach = currentRow.getElementsByClassName("price-each")[0].value;
        let quantityElement = currentRow.getElementsByClassName("qty")[0].value;
        itemTotal = priceEach * quantityElement;
        currentRow.getElementsByClassName("price-in")[0].value = itemTotal.toFixed(2);
        cartSubTotal += itemTotal;
        totalItemQuantity += parseInt(quantityElement);
    }
    document.getElementById("items").innerHTML = totalItemQuantity;
    document.getElementById("subtotal").innerHTML = cartSubTotal.toFixed(2) + "$";
    document.getElementById("gst").innerHTML = (cartSubTotal * 0.05).toFixed(2) + "$";
    document.getElementById("qst").innerHTML = (cartSubTotal*0.09975).toFixed(2) + "$"
    document.getElementById("total").innerHTML = (cartSubTotal * 1.14975).toFixed(2)+ "$";
 }

    if(localStorage.getItem("data") != null) {
        for (let x = 0; x < JSON.parse(localStorage.getItem("data")).length; x++){

        let name = JSON.parse(localStorage.getItem("data"))[x].item;
        let price = JSON.parse(localStorage.getItem("data"))[x].price;
        let quantity = JSON.parse(localStorage.getItem("data"))[x].quantity;
        let srcImg = JSON.parse(localStorage.getItem("data"))[x].image;
        
        addItemToCart(name, price, quantity, srcImg);
    }
    }
    
    function addItemToCart(name, price, quantity, imageSource){
        let cartRow = document.createElement("div");
        let cartItems = document.getElementsByClassName("outer-rec")[0];
        
        let cartRowContents = `
        <div class="row" style="margin-top: 15px; width: 100%; height: 200px; box-sizing: border-box; border-radius: 50px; box-shadow: 0px 3px 8px 3px rgb(221, 221, 221); ">

            <div class="inner-text">

                <h2 class="price-heading">Price: <input type="text" readonly="readonly" value="0" class="price-in"> </h2>
                <h2 class="price-heading">$/each: <input type="text" readonly="readonly" value="${(price/quantity).toFixed(2)}" class="price-each"></h2>
                <h2 class="price-heading">Qty: <input type="text" readonly="readonly" value="${localStorage.getItem(name)}" class="qty"></h2>

                <button class="add"><strong>+ Add</strong></button>
                <button class="remove"><strong>- Less</strong></button>
                <br><br>
                <button class="delete"><strong>X Delete Item</strong></button>

            </div>

            <img class="images" src="${imageSource}" alt="${name}" style="width: 120px; height: 120px; margin-top: 25px; margin-left: 50px;">
        `
        cartRow.innerHTML = cartRowContents;
        cartItems.append(cartRow);
        cartRow.getElementsByClassName("delete")[0].addEventListener('click', removeCartItems);
        cartRow.getElementsByClassName("add")[0].addEventListener('click', addQuantity);
        cartRow.getElementsByClassName("remove")[0].addEventListener('click', removeQuantity);
        updateCartTotal();
        
    }

    function getLocalStorage(){
        if(localStorage.getItem("data") === null){return;}
        let cookieCount = 0;
        let cartItems = document.getElementsByClassName("outer-rec")[0];
        let cartRows = cartItems.getElementsByClassName("row");
        if(cartRows.length == 0){
            alert("Whoops, the cart is empty");
            return;
        }
        for (let x = 0; x < JSON.parse(localStorage.getItem("data")).length; x++){
        let currentRow = cartRows[x];
        let name = JSON.parse(localStorage.getItem("data"))[x].item;
        let quantity = currentRow.getElementsByClassName("qty")[0].value;
        createCookie(x, name+","+quantity, 1);
        cookieCount++;
    
        }
        createCookie('cookieCount', cookieCount,1);
        alert("Your purchase was recorded successfully! Thank you for your purchase.");    
        localStorage.clear();
        location.reload();
    }

    function createCookie(name, value, days) {
    var expires;
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toGMTString();
    }
    else {
        expires = "";
    }
    document.cookie = name + "=" + value + expires + "; path=/";
}


