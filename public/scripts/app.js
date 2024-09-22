const toggleThemeBtns = document.querySelectorAll(".toggle-theme");
const submenuOpenBtn = document.querySelector(".submenu_btn");
const submenu = document.querySelector(".submenu");
const navOpen = document.querySelector(".nav-icon");
const navClose = document.querySelector(".nav-close");
const nav = document.querySelector(".nav");
const overlay = document.querySelector(".overlay");

toggleThemeBtns.forEach(btn => {
    btn.addEventListener("click",function (){
        if (localStorage.theme === "dark"){
            document.documentElement.classList.remove("dark");
            localStorage.theme = "light";
        } else {
            document.documentElement.classList.add("dark");
            localStorage.setItem("theme" , "dark");
        }
    })
})

submenuOpenBtn.addEventListener("click" , (e) => {
    e.currentTarget.parentElement.classList.toggle("text-orange-300");
    submenu.classList.toggle("open");
})

navOpen.addEventListener("click" , () => {
    overlay.classList.add("overlayVisible");
    nav.classList.remove("-right-64");
    nav.classList.add("right-0");
})

navClose.addEventListener("click", () => {
    overlay.classList.remove("overlayVisible");
    nav.classList.remove("right-0");
    nav.classList.add("-right-64");
})

overlay.addEventListener("click" , () => {
    overlay.classList.remove("overlayVisible");
    nav.classList.remove("right-0");
    nav.classList.add("-right-64");
})