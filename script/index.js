/* ----Theme JOUR NUIT PAS ACTIF---- */

function toggleTheme() {
    const checkbox = document.getElementById("themeCheckbox");
    const newTheme = checkbox.checked ? "dark" : "light";
    document.documentElement.setAttribute("data-theme", newTheme);
}

/* ----Animation sur scroll---- */

const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            entry.target.classList.add("show");
        } else {
        }
    });
});

const hiddenElements = document.querySelectorAll(".carte");
hiddenElements.forEach((el) => observer.observe(el));

/* ----Close button newsletter---- */

var closebtn = document.getElementById("close");
var newsLetter = document.getElementById("newsLetter");

closebtn.addEventListener("click", function () {
    newsLetter.style.display = "none";
});

/* ----Newsletter apparait après un temps---- */

setTimeout(function () {
    document.getElementById("newsLetter").classList.remove("hide");
}, 3000);

function redirection(){
    window.location.href="/GourmetBox/Deconnexion"
}
