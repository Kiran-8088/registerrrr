function validateForm() {
  const form = document.getElementById("registrationForm");
  const name = form["text_field"].value.trim();
  const email = form["email_field"].value.trim();
  const phone = form["phone_field"].value.trim();
  const terms = form["checkbox_field"].checked;

  if (name === "" || email === "" || phone === "") {
    alert("Please fill all required fields!");
    return false;
  }

  if (!terms) {
    alert("You must accept the Terms & Conditions to proceed.");
    return false;
  }

  return true;
}
