let listingPopup = document.getElementById ("listing_form");

function displayInsert(){
  var popup = document.getElementById("listing_form")
  popup.classList.add("display_insert_form");
}

function hideInsert(){
  var popup = document.getElementById("listing_form")
  popup.classList.remove("display_insert_form");
}