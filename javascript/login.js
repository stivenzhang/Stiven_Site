const login_button = document.getElementById("login")
login_button.addEventListener("click", () => {
    const path = "php/login.php"
    const redirect = "index.php"
    requests(path, redirect, true)
})


