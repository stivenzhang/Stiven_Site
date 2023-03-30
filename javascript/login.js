const login_button = document.getElementById("login")
const path = "php/login.php"
const redirect = "index.php"
login_button.addEventListener("click", () => {
    requests(path, redirect, true)
})
window.addEventListener("keypress", (event) => {
    console.log(event.key)
    if(event.key === "Enter")
        requests(path, redirect, true)
})



