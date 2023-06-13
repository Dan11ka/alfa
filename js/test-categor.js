$('.filter-button').click(function(){
    let filter = $(this).data('filter');
    if(filter == 'all') {
        $('.card').show();
    } else {
        $('.card').hide();
        $('.'+filter).show();
    }

});

//Search button click
document.getElementById("search").addEventListener("click", () => {
  //initializations
  let searchInput = document.getElementById("search-input").value;
  let elements = document.querySelectorAll(".product-name");
  let cards = document.querySelectorAll(".card");

  //loop through all elements
  elements.forEach((element, index) => {
    //check if text includes the search value
    if (element.innerText.includes(searchInput.toUpperCase())) {
      //display matching card
      $(cards[index]).show();
    } else {
      //hide others
      $(cards[index]).hide();
    }
  });
});