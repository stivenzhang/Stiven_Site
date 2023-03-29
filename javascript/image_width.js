window.addEventListener("resize", () => {
    const images = document.getElementsByClassName("image")
    for (const image of images) {
        image.width = window.innerWidth * 0.7 - 96
    }
})