function checkvalidation() {
    var temp;
    if (document.forms["add_user_form"]["username"].value == "") {
        alert("Please Enter A User Name!!!");
        return false;
    }
    if (document.forms["add_user_form"]["id"].value == "") {
        alert("Please Enter A User ID!!!");
        return false;
    }
    if (document.forms["add_user_form"]["password"].value == "") {
        alert("Please Enter A Password!!!");
        return false;
    }
    temp = document.forms["add_user_form"]["level"].value;
    if (temp == "" || isNaN(temp) || temp < 1 || temp > 3) {
        alert("Please Enter A Valid Integer Between 1 to 3");
        return false;
    }

}