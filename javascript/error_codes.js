function error(code){
    const error = document.getElementById("error")
    error.classList.remove("invisible")
    if(code === 400)
        error.innerHTML = "Error 400 username/password length is less than 8"
    else if(code === 404)
        error.innerHTML = "Error 404 password/username wrong"
    else if(code === 406)
        error.innerHTML = "Error 406 user already exists"
}