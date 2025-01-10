document.addEventListener("DOMContentLoaded", function() {
    // Select tabs and content
    const generalInfoTab = document.getElementById("general-info-tab");
    const mediaTab = document.getElementById("media-tab");
    const generalInfoContent = document.getElementById("general-info");
    const mediaContent = document.getElementById("media");

    // Add event listeners for the tabs
    generalInfoTab.addEventListener("click", function() {
        // Hide the media content and show general info content
        mediaContent.classList.remove("active");
        generalInfoContent.classList.add("active");

        // Activate the clicked tab and deactivate the other
        generalInfoTab.classList.add("active");
        mediaTab.classList.remove("active");
    });

    mediaTab.addEventListener("click", function() {
        // Hide the general info content and show media content
        generalInfoContent.classList.remove("active");
        mediaContent.classList.add("active");

        // Activate the clicked tab and deactivate the other
        mediaTab.classList.add("active");
        generalInfoTab.classList.remove("active");
    });

    // Initialize the visibility on page load
    mediaContent.classList.remove("active"); // Hide media content by default
});
