function validateForm() {
    let title = document.forms["carForm"]["title"].value;
    if (title == "") {
        alert("Title must be filled out");
        return false;
    }
}



document.addEventListener("DOMContentLoaded", function(){

    const dropdownBtn =
    document.querySelector(".dropdown-btn");

    const dropdown =
    document.querySelector(".dropdown");

    dropdownBtn.addEventListener("click", function(event){

        event.stopPropagation();

        dropdown.classList.toggle("active");

    });

    document.addEventListener("click", function(){

        dropdown.classList.remove("active");

    });

});
