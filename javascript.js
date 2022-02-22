
function loadMenu()
{
    document.body.innerHTML =

     `
     <button id = "close" onclick = "closeMenu()" ><i class="fas fa-window-close fa-2x" ></i></button>
    <ul id = "barMenu">
    <li><a href="index.html">HOME</a></li>
    <hr>
    <li><a href="resume.html">RESUME</a></li>
    <hr>
    <li><a href="#">PROJECTS</a></li>
    <hr>
    <li><a href="contact.html">CONTACT</a></li>
    <hr>
    </ul>`;
    document.getElementById("close").style.display = "block"
    document.body.style.backgroundColor = "#4D4C4C";
    document.body.style.height = "101vh"

    for(let i = 0;i<document.getElementsByTagName("a").length;i++)
        {
        
        document.getElementsByTagName("li")[i].style.margin = "20px auto 20px auto";
        document.getElementsByTagName("a")[i].style.textDecoration= "none"


        };
};


function closeMenu()
{
    window.location.href=window.location.href
}






    