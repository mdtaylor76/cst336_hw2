<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title> Homework 2 </title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" type="text/css" />
        <link rel="stylesheet" href="css/style.css" type="text/css" />
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	</head>
	
	<body class="text-center">
	    <div id="top">
		    <div id="header" style="background:transparent !important" class="jumbotron"><h1>Shopping Cart</h1></div>
        </div>
    
        <div id="workspace">
    
        <div id="available">
            <h2>Available Items</h2>

            <table class="table table-sm table-hover table-bordered" id="itemTable">
                <tr>
                    <th>Item ID</th>
                    <th>Item Description</th>
                    <th>Cost</th>
                    <th>Actions</th>
                </tr>
            </table>
        </div>

        <div id="addItem">
            <h2>Add Items</h2>
            <label for"addItemName">Create Item: </label>
            <input type="text" id="addItemName" class="addItemName" value="New Item">
            <label for"addItemCost">Cost: </label>
            <input type="text" id="addItemCost" class="addItemCost" value="Cost">
            <input type="submit" value="Submit" class="addItemSubmit">
        </div>

        <br>
        <div id="itemResult"></div>
        <br>
        
        <h2><span id="shoppingCart"></span>Shopping Cart</h2>
        <div id="cart">
            <ol class="list-group" id="shoppingCartList"></ol>
            <h4 id="totalSpent"></h4>
        </div>
        <br><br>

        </div>
        <footer id="foot">
        <br>Matt Taylor<br>
        CST 336<br>
        November 10, 2020<br><br>
        </footer>
        <script src="js/app.js"></script>
	</body>
</html>