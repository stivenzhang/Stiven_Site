const registration_button = document.getElementById("registration")
const path = "php/registration.php"
const redirect = "login.php"
registration_button.addEventListener("click", () => {
    requests(path, redirect, false)
})


window.addEventListener("keypress", (event) => {
    if(event.key === "Enter")
        requests(path, redirect, false)
})