// Function show and hide password
function hideAndShow() {
    let x = document.getElementById("password");
    let y = document.getElementById("lock-icon")
    if (x.type === "password") {
        x.type = "text";
        y.className = "fas fa-eye"
    } else {
        x.type = "password";
        y.className = "fas fa-eye-slash"
    }
}