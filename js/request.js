// ================ HANDLIN AGENCY REQUEST

window.addEventListener('DOMContentLoaded', function (event) {
    

let form_1 = document.querySelector('#agency');
form_1.addEventListener('submit', function (e) 
{
    // e.preventDefault();
    
    let fullname = document.querySelector('.fullname').value;
    let email = document.querySelector('.email').value;
    let company = document.querySelector('.company').value;
    let phone = document.querySelector('.phone').value;
    let message = document.querySelector('.message').value;
    // let error = document.querySelectorAll('#ag_err');

    if (fullname == "") 
    {
        document.querySelector('.f_er').innerHTML = "This field is required";
        document.querySelector('.f_er').style.color = "red";
        document.querySelector('.f_er').style.display = "block";
        document.querySelector('.fullname').style.border = "1px solid red";
        return false;
    }
    else
    {
        document.querySelector('.f_er').innerHTML = "";
        document.querySelector('.f_er').style.color = "none";
        document.querySelector('.f_er').style.display = "none";
        document.querySelector('.fullname').style.border = "2px solid #ddd";
    }
    if (email == "") 
    {
        document.querySelector('.e_er').innerHTML = "This field is required";
        document.querySelector('.e_er').style.color = "red";
        document.querySelector('.e_er').style.display = "block";
        document.querySelector('.email').style.border = "1px solid red";
        return false;
    }
    else
    {
        document.querySelector('.e_er').innerHTML = "";
        document.querySelector('.e_er').style.color = "none";
        document.querySelector('.e_er').style.display = "none";
        document.querySelector('.email').style.border = "2px solid #ddd";
    }
    if (company == "") 
    {
        document.querySelector('.c_er').innerHTML = "This field is required";
        document.querySelector('.c_er').style.color = "red";
        document.querySelector('.c_er').style.display = "block";
        document.querySelector('.company').style.border = "1px solid red";
        return false;
    }
    else
    {
        document.querySelector('.c_er').innerHTML = "";
        document.querySelector('.c_er').style.color = "none";
        document.querySelector('.c_er').style.display = "none";
        document.querySelector('.company').style.border = "2px solid #ddd";
    }
    if (phone == "") 
    {
        document.querySelector('.p_er').innerHTML = "This field is required";
        document.querySelector('.p_er').style.color = "red";
        document.querySelector('.p_er').style.display = "block";
        document.querySelector('.phone').style.border = "1px solid red";
        return false;
    }
    else
    {
        document.querySelector('.p_er').innerHTML = "";
        document.querySelector('.p_er').style.color = "none";
        document.querySelector('.p_er').style.display = "none";
        document.querySelector('.phone').style.border = "2px solid #ddd";
    }
    if (message == "") 
    {
        document.querySelector('.m_er').innerHTML = "This field is required";
        document.querySelector('.m_er').style.color = "red";
        document.querySelector('.m_er').style.display = "block";
        document.querySelector('.message').style.border = "1px solid red";
        return false;
    }
    else
    {
        document.querySelector('.m_er').innerHTML = "";
        document.querySelector('.m_er').style.color = "none";
        document.querySelector('.m_er').style.display = "none";
        document.querySelector('.message').style.border = "2px solid #ddd";
    }
    // === validate inputs

    if (fullname !== "" && email !== "" && message !== "" && company !== "" && phone !== "") 
    {

        return true;
    //     let xml = new XMLHttpRequest();
    //     let form_data = new FormData();
		
	// form_data.append('fullname', fullname);
	// form_data.append('email', email);
	// form_data.append('company', company);
	// form_data.append('phone', phone);
	// form_data.append('message', message);

    //     // items = 'fullname='+fullname+'&email='+email+'&company='+company+'&phone='+phone+'&message='+message;

    //     alert(form_data);
    //     xml.onreadystatechange = function () {
    //         if (this.readyState == 4 && this.status == 200) {
    //             document.querySelector('#respond').innerHTML = this.responseText;
    //             document.querySelector('#respond').style.display = "block";
    //             alert(this.responseText);
    //         }
    //     }
    //     xml.open('POST', 'inc/manage_booking.php', true);
    //     xml.setRequestHeader("Content-Type", "x-www-form-urlencoded");
    //     xml.send(form_data);

    //     setTimeout(() => {
    //         document.querySelector('#respond').style.display = 'none';
    //         }, 5000);
    // }

    }

})

})

    
// ============ This function should execute when the windows
// ============ is fully loaded

window.addEventListener('DOMContentLoaded', function (event) {

// contact request submit
let form = document.querySelector('#form');
form.addEventListener('submit', function (e) {
    
    
    // e.preventDefault();

    let fname = document.querySelector('.fullname').value;
    let email = document.querySelector('.email').value;
    let message = document.querySelector('.message').value;
    // ======== validate inputs
    if (fname == "") 
    {
        document.querySelector('.f_er').innerHTML = "This field is required";
        document.querySelector('.f_er').style.color = "red";
        document.querySelector('.f_er').style.display = "block";
        document.querySelector('.fullname').style.border = "1px solid red";
        return false;
    }
    else
    {
        document.querySelector('.f_er').innerHTML = "";
        document.querySelector('.f_er').style.color = "none";
        document.querySelector('.f_er').style.display = "none";
        document.querySelector('.fullname').style.border = "2px solid #ddd";
    }
    if (email == "") 
    {
        document.querySelector('.e_er').innerHTML = "This field is required";
        document.querySelector('.e_er').style.color = "red";
        document.querySelector('.e_er').style.display = "block";
        document.querySelector('.email').style.border = "1px solid red";
        return false;
    }
    else
    {
        document.querySelector('.e_er').innerHTML = "";
        document.querySelector('.e_er').style.color = "none";
        document.querySelector('.e_er').style.display = "none";
        document.querySelector('.email').style.border = "2px solid #ddd";
    }
    if (message == "") 
    {
        document.querySelector('.m_er').innerHTML = "This field is required";
        document.querySelector('.m_er').style.color = "red";
        document.querySelector('.m_er').style.display = "block";
        document.querySelector('.message').style.border = "1px solid red";
        return false;
    }
    else
    {
        document.querySelector('.m_er').innerHTML = "";
        document.querySelector('.m_er').style.color = "none";
        document.querySelector('.m_er').style.display = "none";
        document.querySelector('.message').style.border = "2px solid #ddd";
    }
    
    // === validate inputs

    if(fname !== "" && email !== "" && message !== "")
    {
        
        document.querySelector('.fullname').style.border = "2px solid #ddd";
        document.querySelector('.email').style.border = "2px solid #ddd";
        document.querySelector('.message').style.border = "2px solid #ddd";
        // return true;
      
        // let data = new FormData(form)
        // let data = new FormData(form).entries();
        // AJAX
        // var  value = {
        //     'fullname': fname,
        //     'mail': email,
        //     'messages': message
        // };
       
        // let xhttp =  new XMLHttpRequest();
        
        // xhttp.onreadystatechange = function () {
        // if (this.readyState == 4 && this.status == 200) {
        //     document.querySelector('#respond').innerHTML = this.responseText;
        //     // document.querySelector('#respond').style.display = "block";
        //     alert(this.responseText);
        // }
        // alert(send(JSON.stringify(value))); 
        // }
        // xhttp.open('POST', 'inc/manage_contact', true);
        // // xhttp.setRequestHeader("Content-Type", "application/json");
        // xhttp.send(value);

        // setTimeout(() => {
        // document.querySelector('#respond').style.display = 'none';
        // }, 5000);
    }

  
   




})

})
// =========MAIL ICON MESSAGE
window.addEventListener('DOMContentLoaded', function (event) {

// contact request submit
let mail_msg = document.querySelector('#mail_msg');
mail_msg.addEventListener('submit', function (e) 
{
    
    
    // e.preventDefault();

    let e_mail = document.querySelector('.email_1').value;
    let p_phone = document.querySelector('.phone_1').value;
    let m_message = document.querySelector('.message_1').value;
    
    // ======== validate inputs
    if (e_mail == "") 
    {
        document.querySelector('.mail_er').innerHTML = "This field is required";
        document.querySelector('.mail_er').style.color = "red";
        document.querySelector('.mail_er').style.display = "block";
        document.querySelector('.email_1').style.border = "1px solid red";
    }
    else
    {
        document.querySelector('.mail_er').innerHTML = "";
        document.querySelector('.mail_er').style.color = "none";
        document.querySelector('.mail_er').style.display = "none";
        document.querySelector('.email_1').style.border = "2px solid #ddd";
    }
    if (p_phone == "") 
    {
        document.querySelector('.phone_er').innerHTML = "This field is required";
        document.querySelector('.phone_er').style.color = "red";
        document.querySelector('.phone_er').style.display = "block";
        document.querySelector('.phone_1').style.border = "1px solid red";
    }
    else
    {
        document.querySelector('.phone_er').innerHTML = "";
        document.querySelector('.phone_er').style.color = "none";
        document.querySelector('.phone_er').style.display = "none";
        document.querySelector('.phone_1').style.border = "2px solid #ddd";
    }
    if (m_message == "") 
    {
        document.querySelector('.msg_er').innerHTML = "This field is required";
        document.querySelector('.msg_er').style.color = "red";
        document.querySelector('.msg_er').style.display = "block";
        document.querySelector('.message_1').style.border = "1px solid red";
    }
    else
    {
        document.querySelector('.msg_er').innerHTML = "";
        document.querySelector('.msg_er').style.color = "none";
        document.querySelector('.msg_er').style.display = "none";
        document.querySelector('.message_1').style.border = "2px solid #ddd";
    }
    
    // === validate inputs

    if(e_mail !== "" && p_phone !== "" && m_message !== "")
    {
      return true;
        // AJAX
        // var  data = {
        //     'mail': e_mail,
        //     'phone': p_phone,
        //     'messages': m_message
        // };
       
        // let xhtp =  new XMLHttpRequest();
        // 
        // xhtp.onreadystatechange = function () 
        // {
        //     if (this.readyState == 4 && this.status == 200) {
        //         document.querySelector('.response').innerHTML = this.responseText;
        //         document.querySelector('.response').style.display = "block";
        //         alert(this.responseText);
        //     }

        //     alert(send(JSON.stringify(data))); 

        // }
        // xhtp.open('POST', 'inc/manage_mail.php', true);
        // xhtp.setRequestHeader("Content-Type", "application/json");
        // xhtp.send(JSON.stringify(data));

        // setTimeout(() => {
        //     document.querySelector('.response').style.display = 'none';
        // }, 5000);
        // })
    }

})

})



