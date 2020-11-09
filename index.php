<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title> Homework 2 </title>

        <!-- Bootstrap -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        
        <!-- CSS -->
		<link rel="stylesheet" href="/css/style.css">
		
		<!-- jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		
		<!-- JavaScript -->
		<script src="/js/app.js"></script>
		
        <script>
            $(document).ready(function(){
            
            let newItemName = "";
            let newItemCost = 0;
            
                $(".delete").on("click", function() {
                    console.log($(this).parent().parent());
                    $(this).parent().parent().remove();
                });
                
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
                        $("#addSuccessful").html("<h5 class='text-success'>Item Added</h5>");
                        addItem(newItemName, newItemCost); 
                    }
                    else
                    {
                        console.log("NaN"); 
                        $("#addSuccessful").html("<h5 class='text-danger'>Error!</h5>");
                    }
                });
                
                function addItem(itemName, itemCost) {
                    
                    var addItemStraing = `<tr><td>${newItemName}</td><td>${newItemCost}</td><td><input type="button" value="Delete" class="delete"></td></tr>`
                    console.log(addItemStraing);
                    $("#itemTable").append(addItemStraing);
                    
                }
                
            })
            
        </script>
	</head>
	
	<body class="text-center">
		<div id="header" class="jumbotron"><h1>Shopping Cart</h1></div>

        <h2>Available Items</h2>
        <div id="available">
            
        </div>
        
        <div id="available">
            <table class="table table-sm" id="itemTable">
                <tr class="table-row">
                    <td>
                        <label for"item">Item: 1</label>
                    </td>
                    <td>
                        <label for"cost">Cost: 1</label>
                    </td>
                    <td>
                        <input type="button" value="Delete" class="delete">    
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
                        <input type="button" value="Delete" class="delete">    
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
                        <input type="button" value="Delete" class="delete">    
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
        <div id="addSuccessful"></div>
        <br>
        
        <h2>Shopping Cart</h2>
        <div id="cart">
            <textarea id="cart"></textarea>
        </div>

	</body>
</html>