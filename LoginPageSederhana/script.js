function login() {
  const username = document.getElementById("username").value.trim();
  const password = document.getElementById("password").value.trim();

  if (username === "" || password === "") {
    alert("Username dan password harus diisi!");
  } else if (username === "safrin" && password === "12345") {
    alert("Login sukses! Selamat datang, " + username);
  } else {
    alert("Username atau password salah! Tolong isi dengan teliti");
  }
}
