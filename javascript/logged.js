if(document.title === "How to do")
    if(sessionStorage.getItem("id") === null)
        location.href = "login.php"
    else{
        window.onload = () => {
            const user = document.getElementById("user")
            const value = "id=" + sessionStorage.getItem("id")
            http("POST", "./php/getUser.php", value).then(response => {
                if(response.readyState === 4){
                    console.log(response.response)
                    if(response.status === 200){
                        user.innerHTML = response.response
                    }else{
                        user.innerHTML = "IDK WHAT YOU DID BUT FU"
                    }
                }
            })
        }
    }
else
    if(sessionStorage.getItem("id") !== null)
        location.href = "index.php"