const button = document.querySelectorAll(".menu-toggle")
const menu = document.querySelectorAll(".menu")

for(let i = 0; i < button.length; i++)
{
    button[i].addEventListener(
        "click", function()
        {
            for(let i = 0; i < menu.length; i++)
            {
                menu[i].classList.remove("open")
            }
            menu[i].classList.toggle("open")
        }
    ) 
}