const used_for_s = document.getElementsByClassName("Used-for")
const commands = document.getElementsByClassName("Commands")
const technologies = ["apache", "mysql", "php", "html", "javascript", "bootstrap", "aws"]
const information = document.getElementById("information")
let selected


for (const used_for of used_for_s) {
    used_for.addEventListener("click", () =>{
        const id_used_for = used_for.parentElement.parentElement.id
        change_selected(used_for)
        information.innerHTML = outputs_used_for[id_used_for]
    })
}


for (const command of commands) {
    command.addEventListener("click", () =>{
        const id_used_for = command.parentElement.parentElement.id
        change_selected(command)
        information.innerHTML = outputs_command[id_used_for]
    })
}


for (const technology of technologies){
    const technology_html = document.getElementById(technology)
    technology_html.addEventListener("click", () => {
        information.innerHTML = outputs[technology_html.id]
        change_selected(technology_html)
    })
}

function change_selected(new_selected){
    if(selected)
        selected.classList.remove("selected")
    selected = new_selected
    selected.classList.add("selected")
}