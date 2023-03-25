if(document.title === "How to do")
    if(sessionStorage.getItem("id") === null)
        location.href = "login.php"
else
    if(sessionStorage.getItem("id") !== null)
        location.href = "index.php"