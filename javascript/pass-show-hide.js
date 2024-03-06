const passWord = document.querySelector('.form .field input[type="password"]'),
toggleBtn = document.querySelector('.form .field i');

toggleBtn.onclick = ()=>{
    // alert('PRESSED')
    if(passWord.type == "password"){
        passWord.type = "text";
        toggleBtn.classList.add('active');
    }else if(passWord.type == 'text'){
        passWord.type = 'password';
        toggleBtn.classList.remove('active');
    }
}