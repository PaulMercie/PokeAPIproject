const button = document.querySelectorAll(".menu-toggle")
const menuItems = document.querySelectorAll(".menuItems")

for(let i = 0; i < button.length; i++)
{
    button[i].addEventListener(
        "click", function()
        {
            for(let i = 0; i < menuItems.length; i++)
            {
                menuItems[i].classList.remove("open")
            }
            menuItems[i].classList.toggle("open")
        }
    ) 
}