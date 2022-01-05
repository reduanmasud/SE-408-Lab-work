let form = document.getElementById("regForm");
let submitButton = document.getElementById("submitButton")
let g;
let showError = document.getElementById("showError");
form.addEventListener("submit", event=>{
    event.preventDefault();
})


submitButton.addEventListener("click", ()=>{
    let data = {
        name : document.getElementById("form3Example1c").value,
        email: document.getElementById("form3Example3c").value,
        pass: document.getElementById("form3Example4c").value,
        conpass: document.getElementById("form3Example4cd").value
    }
    let error = [];
    let i = 0;
    g = data;
    showError.innerHTML = "";
    // validation for name;
    console.log(typeof(data.name))
    if(parseInt(data.name) == "number"){
        error[i++] = "Name Cannot be a number"
    }

    if(data.name.length < 4 || data.name.length > 15)
        error[i++] = "Name langth should be in between 4 to 15 characters"

    if(!ValidateEmail(data.email))
        error[i++] = "Email is not Valid"

    
    if(data.pass.length < 8)
        error[i++] = "Password should be atleast 8 char."

    if(data.conpass.length == 0)
        error[i++]  = "Confirmation Password Field can not be empty";

    if(data.pass !== data.conpass)
        error[i++] = "Password Confirmation does not match;"
    
    if(error.length > 0)
    {
        error.forEach((data)=>{
            let elm = document.createElement('li');
            elm.classList.add("text-danger")
            let txt = document.createTextNode(data);
            elm.appendChild(txt);
            showError.appendChild(elm);
        })
    }

    if(error.length == 0)
    {
        alert("Registration Successfull")
    }
})


function ValidateEmail(mail) 
{
 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail))
  {
    return (true)
  }
    
    return (false)
}


