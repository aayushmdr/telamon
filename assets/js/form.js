const form = document.getElementById("contact-form");
  const alertBox = document.getElementById("form-alert");
  const spinner = document.getElementById("form-spinner");
  const submitBtn = document.getElementById("submit-btn");

  form.addEventListener("submit", function (e) {
    e.preventDefault(); // Stop form from reloading page

    spinner.classList.remove("d-none");      // Show spinner
    submitBtn.disabled = true;               // Disable button

    const formData = new FormData(form);

    fetch(form.action, {
      method: "POST",
      body: formData,
      headers: {
        'Accept': 'application/json'
      }
    })
    .then(response => {
      spinner.classList.add("d-none");       // Hide spinner
      submitBtn.disabled = false;            // Enable button

      if (response.ok) {
        alertBox.classList.remove("d-none");
        alertBox.classList.add("show");
        form.reset();
      } else {
        alert("Error: Something went wrong.");
      }
    })
    .catch(error => {
      spinner.classList.add("d-none");
      submitBtn.disabled = false;
      alert("Failed to send message.");
      console.error("Form error:", error);
    });
  });