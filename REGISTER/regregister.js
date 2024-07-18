function validateForm() { 
    var email = document.getElementById('email').value;
    var phone = document.getElementById('phone').value;


    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
        alert("Please enter a valid email address");
        return false;
    }

    
    var phonePattern = /^\+?\d{10,}$/; 
    if (!phonePattern.test(phone)) {
        alert("Please enter a valid phone number");
        return false;
    }
    
    return true;

}

