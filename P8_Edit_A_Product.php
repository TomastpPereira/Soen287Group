<!DOCTYPE html>

<html lang="en">
    <head>
        <title> Edit A Product </title>
<!--        <link rel = "stylesheet type" type = "text/css" href= "Style_HomePageTemplate.css" >-->
        <link rel = "stylesheet type" type = "text/css" href= "Edit_User_Profile.css" >
    </head>

    <body>

        <?php include('admin_Check.php'); ?>
        <?php include('navbar.php'); ?>

        <div style="text-align: center">
        <h2> Editing A Product </h2>
        </div>
        <div class="edit-option-box" style="padding: 20px 70px 20px 20px">
            <h3> Input Fields to Be Edited: </h3>
            <form action="P8_Edit_Product_Function.php" method="POST">
                <div style="font-size: 14px">
                <label for="PName"> Product Name </label>
                <input type="text" id="PName" name="PName" value=""><br><br>
                <label for="PCost"> Product Cost </label>
                <input type="text" id="PCost" name="PCost" value=""><br><br>
                <label for="PWeight"> Product Weight </label>
                <input type="text" id="PWeight" name="PWeight" value=""><br><br> 
                <label for="PCalo"> Calories </label>
                <input type="text" id="PCalo" name="PCalo" value=""><br><br> 
                <label for="PAisle"> Aisle </label>
                <input type="text" id="PAisle" name="PAisle" value=""><br><br> 
                <label for="PDesc"> Description </label>
                <input type="text" id="PDesc" name="PDesc" value=""><br><br> 
                <label for="PImg"> Image Link <br>('amp;' must be placed after any '&')</label>
                <input type="text" id="PImg" name="PImg" value=""><br><br> 
                <label for="PId"> Product ID </label>
                <input type="text" id="PId" name="PId" value="" disabled><br><br> <hr style="width:111%"> <br>
                <input type="submit" style="width:112%" value="Save" name="Save"> <br><br>
                <input type="submit" style="width:112%" value="Add a New Product" name="Add"> <br><br>
                <!-- <input type="button" style="width:112%" value="Delete This Product"> <br><br> -->
                </div>
            </form>
            <p> Click Submit above to confirm the new Information and save it </p>
        </div>

        <div class="footer">
            <p style="text-align: center;"> Our Info </p>
            <p style="padding-left: 20px;"> We are dedicated to providing only the best service to our valued customers. </p>
            <p style="padding-left: 20px;"> Address: 123 Filler Street, H2K 4W9 </p>
        </div>
    </body> 

    <script> 
        var url = String(window.location.href); //replace with code to get url
        var name = url.substring(url.indexOf("=") + 1);  
        if (isNaN(name)==false){
            document.getElementById("PId").value = name;
            name = Number(name);
        }
        else{
            name = null;
        }


        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                myFunction(this, name);
            }
        };
        xhttp.open("GET", "product_data.xml", true);
        xhttp.send();

        function myFunction(xml, position) {
            if (position !== null){
                var xmlDoc = xml.responseXML;
                document.getElementById("PName").value = xmlDoc.getElementsByTagName("name")[position].childNodes[0].nodeValue;
                document.getElementById("PCost").value = xmlDoc.getElementsByTagName("price")[position].childNodes[0].nodeValue;
                document.getElementById("PWeight").value = xmlDoc.getElementsByTagName("weight")[position].childNodes[0].nodeValue;
                document.getElementById("PCalo").value = xmlDoc.getElementsByTagName("calories")[position].childNodes[0].nodeValue;
                document.getElementById("PAisle").value = xmlDoc.getElementsByTagName("aisle")[position].childNodes[0].nodeValue;
                document.getElementById("PDesc").value = xmlDoc.getElementsByTagName("description")[position].childNodes[0].nodeValue;
                document.getElementById("PImg").value = xmlDoc.getElementsByTagName("image")[position].childNodes[0].nodeValue;
            }
        }
    </script>
</html>