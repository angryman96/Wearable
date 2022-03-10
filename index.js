function validation() {
    var name = document.forms['form']['fullName'];
    var email = document.forms['form']['email'];
    var country = document.forms['form']['Country'];
    var ask_us = document.forms['form']['ask_us'];


if (name.value == "")
{
    alert("Please enter your Full Name");
    name.focus;
    return false;
}
if (email.value == "")
{
    alert("Please enter your E-mail Address");
    email.focus;
    return false;
}
if (Country.value == "")
{
    alert("Please enter your Country");
    Country.focus;
    return false;
}
if (ask_us.value == "")
{
    alert("Please leave a review");
    ask_us.focus;
    return false;
}
return true;
}
function sub() {
    window.location.href="home.php";
}