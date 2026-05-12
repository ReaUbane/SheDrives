function validateForm() {
    let title = document.forms["carForm"]["title"].value;
    if (title == "") {
        alert("Title must be filled out");
        return false;
    }
}
