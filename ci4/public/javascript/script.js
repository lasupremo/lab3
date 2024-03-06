function toggleMenu () {
    const menu = document.querySelector(".menu-links");
    const icon = document.querySelector(".hamburger-icon");
    menu.classList.toggle("open")
    icon.classList.toggle("open")
}

function displayLocalTime() {
    var userLocalTime = new Date();
    var hours = userLocalTime.getHours();
    var minutes = userLocalTime.getMinutes();
}

function handleFormSubmission() {
    // Reset status to "Not Submitted"
    document.getElementById("status").innerHTML = "Status: Not Submitted";

    // Your existing validation logic here
    var firstnameErr = "<?php echo $firstnameErr; ?>";
    var lastnameErr = "<?php echo $lastnameErr; ?>";
    var emailErr = "<?php echo $emailErr; ?>";

    if (firstnameErr === "" && lastnameErr === "" && emailErr === "") {
        // If validation passes, update the status to "Submitted"
        document.getElementById("status").innerHTML = "Status: Submitted";

        // Use AJAX to submit the form data asynchronously
        var formData = new FormData(document.getElementById("myForm"));

        fetch("your_server_script.php", {
            method: "POST",
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            // Handle the response from the server as needed
            console.log(data);
        })
        .catch(error => {
            console.error("Error:", error);
        });

    } else {
        // If validation fails, display an error message
        alert("Form validation failed. Please check the fields.");
    }
}