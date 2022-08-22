function  checkform() {
	var firstname = document.form.fname.value;
	var lastname = document.form.lname.value;
	var date = document.form.date.value;
	var month = document.form.month.value;
	var year = document.form.year.value;
	var gender = document.form.gender.value;
	var country = document.form.country.value;
	var email = document.form.email.value; 
	var phonenumber = document.form.PhoneNum.value;
	var password = document.form.pwd.value;
	var conpassword = document.form.cpwd.value;
	

	if (firstname=="")
	{
		alert("Firstname is empty");
		return false;
	}
	if (lastname=="")
	{
		alert("Lastname is empty");
		return false;
	}
	if (date=="date")
	{
		alert("Date is not selected");
		return false;
	}
	if (month=="month")
	{
		alert("Month is not selected");
		return false;
	}
	if (month=="year")
	{
		alert("Year is not selected");
		return false;
	}
	if (gender == "gender")
	{
		alert("Please select your gender please");
		return false;
	}
	if (country == "country")
	{
		alert("Please select your country of residency!");
		return false;
	}
	if (!email.includes("@","."))
	{
		alert("Invalid email!");
		return false;
	}

	
	if (isNaN(phonenumber) || phonenumber.length=0)
	{
		alert("Enter a valid phone number");
		return false;
	}
	if (password == "")
	{
		alert("Create a password please!");
		return false;
	}





	if (conpassword == "")
	{
		alert("Confirm your password please!");
		return false;
	}

	if (password != conpassword)
	{
		alert("Password are not matched coreectly")
	}




}

