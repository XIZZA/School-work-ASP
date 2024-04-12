// Wait for the DOM content to be fully loaded
document.addEventListener("DOMContentLoaded", function() {
    // Get the form element
    const form = document.getElementById("");

    // Add a submit event listener to the form
    form.addEventListener("submit", function(event) {
        // Prevent the default form submission
        event.preventDefault();

        // Reload the page after form submission
        window.location.reload();
    });
});
