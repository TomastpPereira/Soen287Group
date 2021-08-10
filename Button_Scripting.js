  var price = 0.99; // set price of item
    var max = 12; // set max of item

    var count = 0;
    var remove = document.getElementById("remove");
    var add = document.getElementById("add");
    var counterDiv = document.getElementById("qty");
    var subtotal = document.getElementById("subtotal");
    var addToCartBtn = document.getElementById("addToCart");

    addToCartBtn.addEventListener('click', function() {
        alert("Item added to cart!");
    });

    add.addEventListener('click', function () {
        if(count < max) {
            count += 1;
            counterDiv.innerHTML = count;
            updateSubtotal();
        }
    });

    remove.addEventListener('click', function () {
        if (count > 0) {
            count -= 1;
            counterDiv.innerHTML = count;
            updateSubtotal();
        }
    });

    function updateSubtotal() {
        subtotal.innerHTML = "$" + (Math.round(count * price * 100) / 100).toFixed(2);
    }


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