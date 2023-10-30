function validate()
{
    var firstpwd = document.getElementById("firstpwd").value;
    var secondpwd = document.getElementById("secondpwd").value;
    if (firstpwd.length < 8 || secondpwd.length < 8) 
    {
        alert("Password must be 8 characters or longer!");
        return;
    }
    if (!(firstpwd == secondpwd)) 
    {
        alert("The two passwords must be the same!");
        return;
    }
    alert("Validation success! Passwords match and are of proper length.");
}