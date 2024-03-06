const form = document.querySelector('.signup form');
continueBtn = form.querySelector('.button input');

form.onsubmit = (e) =>{
    e.preventDefault();
}

continueBtn.onclick = () => {
    // Ajax
    let xhr = new XMLHttpRequest(); // creating XML object 
    
    xhr.open("POST", "php/signup.php", true);
    xhr.onload = () => {
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                console.log(data);
            }
        }
    }
    // Send form data through ajax to php file
    let formData = new FormData(form); // creating new formData object and passing the form as argument
    xhr.send(formData);
}


// const nameInput = document.getElementById("name");
// const emailInput = document.getElementById("email");
// const messageTextarea = document.getElementById("message");

