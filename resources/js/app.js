import "./bootstrap";

document.addEventListener("DOMContentLoaded", () => {
    const toast = document.getElementById("toast-simple");
    if (toast) {
        setTimeout(() => {
            toast.classList.add("hide");
            setTimeout(() => {
                toast.style.display = "none";
            }, 500);
        }, 3000);
    }
});
