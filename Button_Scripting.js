// var price = 0.99; // set price of item
var max = 12; // set max of item

var count;
var remove = document.getElementById("remove");
var add = document.getElementById("add");
var counterDiv = document.getElementById("qty");
var subtotal = document.getElementById("subtotal");
var addToCartBtn = document.getElementById("addToCart");
var element = document.getElementById("item");
var itemName = element.innerText;

// This is to keep count after refresh

if(localStorage.getItem(itemName) == null) {
    count = 0;
    updateHtml();
}
else {
    count = parseInt(localStorage.getItem(itemName));
    updateHtml();
}

// Alert on add to cart button

addToCartBtn.addEventListener('click', function () {
    alert("Item added to cart!");
});

// Add and remove function

add.addEventListener('click', function () {
    if (count < max) {
        count += 1;
        updateHtml();
    }
});

remove.addEventListener('click', function () {
    if (count > 0) {
        count -= 1;
        updateHtml();
    }
});

// Update html to update the text and the count in local storage

function updateHtml() {
    counterDiv.innerHTML = count;
    subtotal.innerHTML = "$" + (Math.round(count * price * 100) / 100).toFixed(2);
    localStorage.setItem(itemName, count);
}

// Hide and unhide description

function unHideDescription() {
    var showBtn = document.getElementById("moreDescriptionBtn");
    var description = document.getElementById("description");

    if (description.style.visibility == "hidden") {
        description.style.visibility = "visible";
        showBtn.innerText = "Collapse";

    } else {
        description.style.visibility = "hidden";
        showBtn.innerText = "Show Detailed Description";
    }

}