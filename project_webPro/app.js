function validateForm() {
    var username = document.forms["loginform"]["username"].value;
    var password = document.forms["loginform"]["password"].value;
    if (username == "" || username == null) {
      alert("โปรดป้อน username");
      return false;
    }
    if (password == "" || password == null) {
      alert("โปรดป้อน password");
      return false;
    }
}