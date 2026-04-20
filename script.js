const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if(entry.isIntersecting){
            entry.target.classList.add("show");
        }
    });
});

document.querySelectorAll(".fade-in").forEach(el => observer.observe(el));



const faqs = document.querySelectorAll(".questions");

faqs.forEach(faq => {
    faq.querySelector(".question-header").addEventListener("click", () => {

        faqs.forEach(item => {
            if(item !== faq) item.classList.remove("active");
        });

        faq.classList.toggle("active");
    });
});



const signupForm = document.getElementById("signupForm");

if(signupForm){
signupForm.addEventListener("submit", function(e){
let p = document.getElementById("signupPassword").value;
let c = document.getElementById("confirmPassword").value;

if(p !== c){
alert("Passwords do not match");
e.preventDefault();
}
});
}

const loginForm = document.getElementById("loginForm");

if(loginForm){
loginForm.addEventListener("submit", function(e){
let email = document.getElementById("loginEmail").value;

if(email === ""){
alert("Fill all fields");
e.preventDefault();
}
});
}

// Dark / Light mode toggle

const toggleBtn = document.getElementById("theme-toggle");

toggleBtn.addEventListener("click", function () {

    document.documentElement.classList.toggle("dark-mode");

    if(document.documentElement.classList.contains("dark-mode")){
        toggleBtn.textContent = "☀️";
        localStorage.setItem("theme","dark");
    } else {
        toggleBtn.textContent = "🌙";
        localStorage.setItem("theme","light");
    }

});

if(localStorage.getItem("theme") === "dark"){
    document.documentElement.classList.add("dark-mode");
    toggleBtn.textContent = "☀️";
}

