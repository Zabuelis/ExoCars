// Function for filtering displayed cars
function searchCars() {
    var input, filter, col, cardTitle, card, a, i, txtValue;
    input = document.getElementById("carSearch")
    filter = input.value.toUpperCase();
    col = document.getElementsByClassName("col");

    for(i = 0; i < col.length; i++){
        card = col[i].getElementsByClassName("card")[0];
        cardTitle = card.getElementsByClassName("card-body")[0].getElementsByClassName("card-title")[0];

        txtValue = cardTitle.textContent || cardTitle.innerText;
        if(txtValue.toUpperCase().indexOf(filter) > -1){
            col[i].style.display = "";
        } else{
            col[i].style.display = "none";
        }
    }
}