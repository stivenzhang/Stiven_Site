function requests(path, redirect){
    const username = document.getElementById("username").value
    const password = document.getElementById("password").value
    let value = "username=" + username + "&password=" + password
    if(username.length < 8 || password.length < 8)
        error(400)
    else{
        http("POST", path, value).then((response) => {
            if(response.status === 200 && response.readyState === 4)
                window.location.href = redirect
            else if(response.status === 404 && response.readyState === 4)
                error(404)
            else if(response.status === 406 && response.readyState === 4)
                error(406)
        })
    }
}