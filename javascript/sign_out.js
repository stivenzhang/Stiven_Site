const sign_out_button = document.getElementById("sign_out")
sign_out_button.addEventListener("click", () => {
    sessionStorage.removeItem("id")
    location.href = "./login.php"
})


