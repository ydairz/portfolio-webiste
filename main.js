/* ===================================================== PAGE TRANSITIONS ===================================================== */

function loadFunction() {
    let transition = document.getElementById("page-transition");
    setTimeout(function(){
        transition.className = "transition-inactive";
    }, 250);
    if (document.getElementById("notification") != null) {
        let element = document.getElementById("notification");
        element.style.top = "20%";
        element.style.transition = "1s ease";
        setTimeout(function(){
            element.style.top = 0;
            element.style.transition = "1s ease-out";
        }, 3000);
        setTimeout(function(){
            element.style.display = "none";
        }, 5000);
    }
}

function nextFunction(link) {
    let transition = document.getElementById("page-transition");
    transition.className = "transition-active";
    setTimeout(function(){
        window.location.href = link;
    }, 250);
}

/* ======================================================== INDEX PAGE ======================================================== */

function displayList() {
    // Clicking on the bars icon will display the contents of the list and changes the bars icon into a X icon.
    // Clicking on the X icon will hide the contents of the list and changes the X icon back into the bars icon.
    let button = document.getElementById("dropdown-button")
    let item = [
        document.getElementById("about-me-item"),
        document.getElementById("skills-item"),
        document.getElementById("education-item"),
        document.getElementById("experiences-item"),
        document.getElementById("projects-item"),
        document.getElementById("blog-item"),
        document.getElementById("sign-in-item")];
    for (i = 0; i < item.length; i++) {
        if (item[i].className == "secondary-li-active"){
            item[i].className = "secondary-li-inactive";
        }
        else {
            item[i].className = "secondary-li-active";
        }
    }
    if (button.className == "fas fa-bars fa-2x") {
        button.className = "fas fa-times fa-2x";
    }
    else {
        button.className = "fas fa-bars fa-2x";
    }
}

function loginFunction() {
    window.location.href = "./login.php";
}

function logoutFunction() {
    window.location.href = "./logout.php";
}

function notification() {
    let element = document.getElementById("notification");
    setTimeout(function(){
        element.style.top = 0;
        element.style.transition = "2s";
    }, 3000);
}

function openForm() {
    let element = document.getElementById("blog-form");
    // While logged on, clicking on the add button (the plus button in the blog section) will reveal the form below it.
    // Clicking on the button again will hide the form.
    if (element.style.display == "none" || element.style.display == "") {
        element.style.display = "block";
    }
    else {
        element.style.display = "none";
    }
}

function expandParagraph(id) {
    let element = document.getElementById("blog-paragraph-"+id);
    // Clicking on a blogpost will display its full text. Clicking on it again will revert the change.
    if (element.style.maxHeight == "3em" || element.style.maxHeight == "") {
        element.style.maxHeight = "none";
    }
    else {
        element.style.maxHeight = "3em";
    }
}