async function http(method, path, value){
    return new Promise(resolve => {
        const request = new XMLHttpRequest()
        request.open(method, path)
        request.setRequestHeader("content-type", "application/x-www-form-urlencoded")
        request.onloadend = () => {
            resolve(request)
        }
        request.send(value)
    })
}