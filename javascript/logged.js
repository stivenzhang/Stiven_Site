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
                            body_information.innerHTML +=
                                "<p>a=b</p>" +
                                "<p>a^2=b^2</p>" +
                                "<p>b^2-a^2=b^2-ab</p>" +
                                "<p>(b-a)(b+a)= b(b-a)</p>" +
                                "<p>b+a=b</p>" +
                                "<p>2b=b</p>" +
                                "<p>2=1</p>" +
                                "<p class='text-primary fw-bold'>Quindi prof da questo si può dire palesemente che 1=2 quindi la matematica è tutto fake</p>"
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