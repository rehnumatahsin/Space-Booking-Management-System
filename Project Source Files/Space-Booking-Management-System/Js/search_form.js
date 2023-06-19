function validation() {
  if (document.forms["form_search"]["staffID"].value == "") {
    alert("Please enter a Staff ID!!!");
    return false;
  }
}
