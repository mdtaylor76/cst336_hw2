<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title> Homework 2 </title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" type="text/css" />
        <link rel="stylesheet" href="css/style.css" type="text/css" />
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        
        <script>
            $(document).ready(function(){
            
            let newItemName = "";
            let newItemCost = 0;
            
                $(".addItemName").on("click", function() {
                    $(this).val("");
                });
                
                $(".addItemCost").on("click", function() {
                    $(this).val("");
                });
                
                $(".addItemSubmit").on("click", function() {
                    console.log($(this));

                    if(!isNaN($(".addItemCost").val())) {
                        newItemName = $(".addItemName").val();
                        newItemCost = $(".addItemCost").val();
                        $("#itemResult").html("<h5 class='text-success'>Item Added</h5>");
                        addItem(newItemName, newItemCost); 
                    }
                    else
                    {
                        console.log("NaN"); 
                        $("#itemResult").html("<h5 class='text-danger'>Error!</h5>");
                    }
                });
                
                function addItem(itemName, itemCost) {
                    
                    var addItemStraing = `<tr class="table-row"><td> <label for"item">${newItemName}</label></td>
                    <td><label for"cost">${newItemCost}</label></td><td><input type="button" value="Delete" id="delete" class="delete"></td></tr>`
                    console.log(addItemStraing);
                    $("#itemTable").append(addItemStraing);
                    
                }
                
                $(document).on("click", "#delete", function(e) {
                    console.log("Delete a row");
                    console.log($(this).parent());
                    $(this).parent().parent().remove();
                    $("#itemResult").html("<h5 class='text-warning'>Item Deleted</h5>");
                });
                
            })
            
        </script>
	</head>
	
	<body class="text-center">
	    <div id="top">
		    <div id="header" style="background:transparent !important" class="jumbotron"><h1>Shopping Cart</h1></div>
        </div>
    
        <div id="available">
            <h2>Available Items</h2>

            <table class="table table-sm table-hover" id="itemTable">
                <tr class="table-row">
                    <td>
                        <label for"item">Item: 1</label>
                    </td>
                    <td>
                        <label for"cost">Cost: 1</label>
                    </td>
                    <td>
                        <input type="button" value="Delete" id="delete" class="delete">    
                    </td>
                </tr>
                <tr class="table-row">
                    <td>
                        <label for"item">Item: 2</label>
                    </td>
                    <td>
                        <label for"cost">Cost: 2</label>
                    </td>
                    <td>
                        <input type="button" value="Delete" id="delete" class="delete">    
                    </td>
                </tr>
                <tr class="table-row">
                    <td>
                        <label for"item">Item: 3</label>
                    </td>
                    <td>
                        <label for"cost">Cost: 3
                        </label>
                    </td>
                    <td>
                        <input type="button" value="Delete" id="delete" class="delete">    
                    </td>
                </tr>
            </table>
        </div>

        <h2>Add Items</h2>        
        <div id="addItem">
            <label for"addItemName">Add Item: </label>
            <input type="text" id="addItemName" class="addItemName" value="New Item">
            <label for"addItemCost">Cost: </label>
            <input type="text" id="addItemCost" class="addItemCost" value="Cost">
            <input type="submit" value="Submit" class="addItemSubmit">
        </div>

        <br>
        <div id="itemResult"></div>
        <br>
        
        <h2>Shopping Cart</h2>
        <div id="cart">
            <textarea id="cart"></textarea>
        </div>

	</body>
</html>