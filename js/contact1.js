function validateForm(form) {

   

    var firstname = document.form.firstname.value;
    var lastname = document.form.lastname.value;
    var email = document.form.email.value;
    var phonenumber = document.form.phonenumber.value;



    if (firstname == "") {
        alert("Firstname is empty");
        return false;
    }
    if (lastname == "") {
        alert("Lastname is empty");
        return false;
    }

    if (!email.includes("@", ".")) {
        alert("Invalid email!");
        return false;
    }


    if (isNaN(phonenumber) || phonenumber.length = 0) {
        alert("Enter a valid phone number");
        return false;
    }







}