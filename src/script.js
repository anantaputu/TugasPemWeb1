document.getElementById("loginForm").addEventListener("submit", function(event) {
    event.preventDefault();

    // Mengambil nilai input
    var n4nt4 = document.getElementById("qwerty").value;

    // Cek username dan password
    if (n4nt4 === "Ananta") {
        alert("Benarrr!!!");
        window.location.href = "nextpage.html";
    } else {
        alert("Salah!!!")
    }
});
