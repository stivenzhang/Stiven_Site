const used_for_s = document.getElementsByClassName("Used-for")
const commands = document.getElementsByClassName("Commands")
const technologies = ["apache", "mysql", "php", "html", "javascript", "bootstrap", "aws", "vim"]
const body_information = document.getElementById("information-body")
const title_information = document.getElementById("title-information")
let selected


for (const used_for of used_for_s) {
    const id_used_for = used_for.parentElement.parentElement.id
    const title = id_used_for.slice(0, 1).toUpperCase() + id_used_for.slice(1, id_used_for.length)
    const body = outputs_used_for[id_used_for]
    change_information(used_for, title, body)
}


for (const command of commands) {
    const id_used_for = command.parentElement.parentElement.id
    const title = "Used commands"
    const body = outputs_command[id_used_for]
    change_information(command, title, body)
}


for (const technology of technologies){
    const technology_html = document.getElementById(technology)
    const id_used_for = technology_html.id
    const title = id_used_for.slice(0, 1).toUpperCase() + id_used_for.slice(1, id_used_for.length)
    const body = outputs_used_for[id_used_for]
    change_information(technology_html, title, body)
}

function change_information(html, title, body){
    html.addEventListener("click", () => {
        change_selected(html)
        title_information.innerHTML = title
        body_information.innerHTML = body
        const images = document.getElementsByClassName("image")
        for (const image of images)
            image.width = window.innerWidth * 0.7 - 96
    })

}

function change_selected(new_selected){
    if(selected)
        selected.classList.remove("selected")
    selected = new_selected
    selected.classList.add("selected")
}