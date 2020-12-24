
// // function updateCartTotal(){
// //     var cartItemContainer = document.getElementsByClassName('side-cart-items')[0]
// //     var cartRows =  cartItemContainer.getElementsByClassName('cart-items')
// //     var total = 0 ;
// //     for(var i =0;i<cartRows.length; i++)   {
// //         var cartRow = cartRows[0] 
// //         var priceElement = cartRow.getElementsByClassName('cart-item-price')[0]
// //         var quatityElement = cartRow.getElementsByClassName('input-text')
// //         [0]
// //         var price = parseFloat(priceElement.innerText.replace('$',''))
// //         var quantity = quatityElement.value
// //         total = total + (price*quantity)
// //         // console.log(price)

// //     }
// //     document.getElementsByClassName('main-total-cart')[0].innerText = '$' + total     

// // }
// console.log("hello world")
// // function updateCartTotal(){
//     // var cartItemContainer = document.getElementsByClassName('side-cart-items')[0]
//     // var cartRows =  cartItemContainer.getElementsByClassName('cart-items')
//     // var total = 0 ;
//     //  for(var i =0;i<cartRows.length; i++)   {
//     //     var cartRow = cartRows[0] 
//     //     var priceElement = cartRow.getElementsByClassName('cart-item-price')[0]
//     //     var quatityElement = cartRow.getElementsByClassName('input-text')
//     //     [0]
//          var price = document.getElementById("price").innerText;
//     //     var quantity = quatityElement.value
//     //     total = total + (price*quantity)
//         console.log(price)

//     //  }
//     // document.getElementsByClassName('main-total-cart')[0].innerText = '$' + total     
// // }

// if(document.readyState =='loading'){
//     document.addEventListener('DOMContentLoaded',ready)
// }
// else{
//     ready();
// }
// function ready() {
//     var removeCartItemButtons = document.getElementsByClassName('cart-close-btn')
//     console.log(removeCartItemButtons) 
//     for(var i = 0;i<removeCartItemButtons.length;i++){
//         var button = removeCartItemButtons[i];
//         button.addEventListener("click", removeCartItem)
//     }
// }

// var quantityInputs = document.getElementsByClassName('input-text')
// for(var i = 0; i<quantityInputs;i++){
//     var input = quantityInput[i]
//     input.addEventListener('change', quantityChanged)
// }

// function removeCartItem(event){
//     var buttonClicked = event.target;
//     buttonClicked.parentElement.parentElement.remove()
//     updateCartTotal();
// }


// function quatityChanged(event){
//     var input = event.target;
//     if(isNaN(input.value)|| (input.value<=0)){
//         input.value = 1 
//     }
//     updateCartTotal()
// }





// function updateCartTotal(){
//     console.log('helo world ')
//     var cartItemContainer  = document.getElementsByClassName('cart-item')[0];
//     console.log("cartItemContainer")
//     var cartRows = cartItemContainer.getElementsByClassName('cart-text');
//     console.log(cartRows)
//     var total = 0;
//     for (var i = 0 ; i < cartRows.length;i++){
//         console.log(i)
//         var cartRow = cartRows[i];
//         var priceElement = cartRow.getElementsByClassName('cart-item-price')[0];
//         var quantityElement = cartRow.getElementsByClassName('input-text')[0];
//         var price = parseFloat(priceElement.innerText.replace('$',''));
//         var quatity = quantityElement.value;
//         total = total+(price*quantity);
        
//     }  
//     total = Math.round(total*100)/100
//     document.getElementById("total")[0].innerText = total;
    
// }

var cartItemContainer = document.getElementsByClassName('right-cart-dt-body')[0];
var cartRows = cartItemContainer.getElementsByClassName("cart-text");
var quantityRows = cartItemContainer.getElementsByClassName("quantity");
var total = 0;
// console.log(cartRows.length)
for (var i = 0 ; i < cartRows.length;i++){
            var cartRow = cartRows[i];
            var quantityRow = quantityRows[i]
            var priceElement = cartRow.getElementsByClassName('cart-item-price')[0];
            var quantityElement = quantityRow.getElementsByClassName('qty')[0];
            var price = parseFloat(priceElement.innerText.replace('$',''));
            // console.log(price)
            var quantity = parseInt(quantityElement.value);
            // console.log(quantity)
           total = total+(price*quantity);
    }

var deliveryCharge = parseInt(document.getElementById("dc").innerText.replace('$',''));
total = total+ deliveryCharge
document.getElementById("total").innerText ='$'+ total;
