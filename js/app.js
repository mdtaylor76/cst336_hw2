$(document).ready(function(){

    let arrayCart = [];
    let totalItems = 0;

    function addToArray(cost) {
        arrayCart.push(Number(cost));
        console.log(arrayCart);
        groceryBag();
    }
    
    function subFromArray(cost) {

        num = Number(cost);
        
        console.log(arrayCart);
        var index = arrayCart.indexOf(num);
        if (index > -1) {
            console.log("Deleted Row " + index);
            arrayCart.splice(index, 1);
        }
        else {
            console.log("Couldn't find: " + num + " index: " + index);
        }
        
        console.log(arrayCart);
        groceryBag();
    }

    let newItemName = "";
    let newItemCost = 0;
    let totalCost = 0;

    $(".addItemName").on("click", function() {
        $(this).val("");
    });
    
    $(".addItemCost").on("click", function() {
        $(this).val("");
    });
    
    $(".addItemSubmit").on("click", function() {
        console.log($(this));

        if(!isNaN($(".addItemCost").val()) && $(".addItemCost").val() > 0) {
            newItemName = $(".addItemName").val();
            newItemCost = $(".addItemCost").val();
            $("#itemResult").html("<h5 class='text-success'>Item Added</h5>");
            totalItems += 1;
            addItem(totalItems, newItemName, newItemCost); 
        }
        else
        {
            console.log("NaN"); 
            $("#itemResult").html("<h5 class='text-danger'>Error!</h5>");
        }
    });
    
    function addItem(itemID, itemName, itemCost) {
        
        var addItemStraing = `<tr class="table-row">
        <td> <label id="newItemID" for"item">${itemID}</label></td>
        <td> <label id="newItemName" for"item">${newItemName}</label></td>
        <td><label id="newItemCost" for"cost">${newItemCost}</label></td><td>
        <input type="button" value="Add" id="tAddItem" class="tAddItem">
        <input type="button" value="Subtract" id="tSubItem" class="tSubItem">
        <input type="button" value="Delete" id="delete" class="delete"></td></tr>`
        console.log(addItemStraing);
        $("#itemTable").append(addItemStraing);
        
    }
    
    $(document).on("click", "#delete", function(e) {
        console.log("Delete Item");
        console.log($(this).parent());
        $(this).parent().parent().remove();
        $("#itemResult").html("<h5 class='warning'>Item Deleted</h5>");
    });
    
    $(document).on("click", "#tAddItem", function(e) {
        var itemId = ($(this).parent().parent().find("#newItemID").text());
        var itemCost = ($(this).parent().parent().find("#newItemCost").text());
        var itemName = ($(this).parent().parent().find("#newItemName").text());
        console.log("ID: " + itemId + " Name: " + itemName + " Cost: " + itemCost);
        addToArray(itemCost);
    });
    
    $(document).on("click", "#tSubItem", function(e) {
        console.log("Subtract an Item");
        var itemCost = ($(this).parent().parent().find("#newItemCost").text());
        subFromArray(itemCost);
    });
    
    //Populate Grocery List Area
    function groceryBag() {
        
        let bill = 0;
        $("#shoppingCartList").empty();
        $("#totalSpent").empty();
    
        if (arrayCart.length > 0) {
            $("#shoppingCart").html("<img src='img/checkmark.png' alt='checkmark'>");
            
            for (var i = 0; i < arrayCart.length; i++) {
                bill += arrayCart[i];
                
                $("#shoppingCartList").append(`<li class="list-group-item">${arrayCart[i]}</li>`);
            }
            $("#totalSpent").append(`<li class="list-group-item">Items: ${arrayCart.length} Total:$ ${bill}</li>`);
            console.log("Items: " + arrayCart.length + " Total: " + bill);
        }
        else {
            $("#shoppingCart").html("<img src='img/xmark.png' alt='checkmark'>");
        }
    }
})