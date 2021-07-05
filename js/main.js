// ============= NAVIGATION SCROLL ===============
let navBar = document.querySelector("#navigation");
let lastScrollValue = 0;

document.addEventListener('scroll',() => {
	let top  = document.documentElement.scrollTop;
    if(lastScrollValue < top) {
        navBar.classList.add("hidden");
    } else {
        navBar.classList.remove("hidden");
    }
    lastScrollValue = top;
});


// ============== BURGER ICON ================
const burger = document.querySelector(".burger");

const navigation = document.querySelector(" .navigation");

burger.addEventListener('click', () => {
    burger.classList.toggle('active');
    navigation.classList.toggle('navigation-show');
});



// ================ SCROLL FADE IN AND SLIDE IN ==================
const faders = document.querySelectorAll(" .fade-in");
const sliders = document.querySelectorAll(".slide-in");

const appearOptions = {
    threshold: 0,
    rootMargin: "0px 0px -200px 0px",
};

const appearOnScroll = new IntersectionObserver
(function(
    entries,
    appearOnScroll
) {
    entries.forEach(entry => {
        if (!entry.isIntersecting) {
            return;
        } else {
            entry.target.classList.add("appear");
            appearOnScroll.unobserve(entry.target);
        }
    });
},
appearOptions);

faders.forEach(fader => {
    appearOnScroll.observe(fader);
});


sliders.forEach(slider => {
    appearOnScroll.observe(slider);
})



// ============= HIDE EMAIL ADDRESS ===============
document.addEventListener("DOMContentLoaded", function() {
    // Loop for email
    let oC = document.getElementsByClassName("email");
    let i;
    for (i = 0; i < oC.length; i++) {
        // Take the coded email address
        let sC = oC[i].getAttribute("data-email");
        // Replace "dot" by "." 
        sC = sC.replace("dot", ".");
        sC = sC.replace("dot", ".");
        // Replace "at" by "@"
        sC = sC.replace("at", "@");
        // Add « href »
        oC[i].setAttribute("href", "mailto:" + sC);
        // Add the address
        oC[i].innerHTML = sC;
    } 
})


// ============ STYLE JQUERY ===============
$(document).ready(function() {
    // EMAIL STYLE
    $(" .email").css({
        "text-decoration": "none"
    })

    // PHONE NUMBER STYLE
    $(" .phone").css({
        "text-decoration": "none",
    })

}); // Close ready(function)


