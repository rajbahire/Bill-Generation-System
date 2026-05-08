// ============================
// ROLE SELECTION (index.html)
// ============================
function selectRole(card) {
    const role = card.querySelector("h2")?.innerText;

    if (role === "Teacher") {
        window.location.href = "teacher/teacher.php";
    } 
    else if (role === "HOD") {
        window.location.href = "hod/hod.php";
    } 
    else if (role && role.includes("Earn")) {
        window.location.href = "student/student.php"; // Earn & Learn
    }
}

// ============================
// BACK BUTTON
// ============================
function goBack() {
    window.location.href = "index.html";
}

// ============================
// PAGE LOAD (TOGGLE + VALIDATION)
// ============================
document.addEventListener("DOMContentLoaded", function () {

    // Toggle Elements
    const loginBtn = document.getElementById("loginBtn");
    const signupBtn = document.getElementById("signupBtn");

    const loginForm = document.getElementById("loginForm");
    const signupForm = document.getElementById("signupForm");

    // ============================
    // TOGGLE FUNCTIONALITY
    // ============================
    if (loginBtn && signupBtn && loginForm && signupForm) {

        // Sign In Click
        loginBtn.addEventListener("click", function () {
            loginForm.classList.add("active");
            signupForm.classList.remove("active");

            loginBtn.classList.add("active");
            signupBtn.classList.remove("active");
        });

        // Sign Up Click
        signupBtn.addEventListener("click", function () {
            signupForm.classList.add("active");
            loginForm.classList.remove("active");

            signupBtn.classList.add("active");
            loginBtn.classList.remove("active");
        });
    }

    // ============================
    // SIGNUP VALIDATION
    // ============================
    if (signupForm) {
        signupForm.addEventListener("submit", function (e) {

            const password = document.getElementById("password")?.value;
            const confirmPassword = document.getElementById("confirmPassword")?.value;

            if (password !== confirmPassword) {
                e.preventDefault();
                alert("Passwords do not match!");
            }
        });
    }

});