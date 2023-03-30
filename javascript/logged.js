if(document.title === "How to do")
    if(sessionStorage.getItem("id") === null)
        location.href = "login.php"
    else{
        window.onload = () => {
            const user = document.getElementById("user")
            const value = "id=" + sessionStorage.getItem("id")
            http("POST", "./php/getUser.php", value).then(response => {
                if(response.readyState === 4){
                    if(response.status === 200){
                        user.innerHTML = response.response
                        if(response.response === "Ruben1=2" || response.response === "Daniele7")
                            body_information.innerHTML += "a=b   a^2=b^2   b^2-a^2=b^2-ab   (b-a)(b+a)= b(b-a)   b+a=b   2b=b   2=1"
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