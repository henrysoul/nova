document.addEventListener("DOMContentLoaded", function () {
    const individualBtn = document.getElementById("individual");
    const type = document.getElementById("type");
    const groupBtn = document.getElementById("group");
    const numberOfAthletesLabel = document.getElementById("numberofath");
    const athletesInput = document.getElementById("athletes");

    const contactButton = document.getElementById("contact");
    const infoDiv = document.querySelector(".info");
    const containerDiv = document.querySelector(".container");

    // Initially hide the 'Number of Athletes' field and the container
    numberOfAthletesLabel.style.display = "none";
    athletesInput.style.display = "none";
    containerDiv.style.display = "none";

    // Event listener for the 'Individual' button
    individualBtn.addEventListener("click", function () {
        // Hide the 'Number of Athletes' field when 'Individual' is selected
        numberOfAthletesLabel.style.display = "none";
        athletesInput.style.display = "none";
        type.value = 0;
    });

    // Event listener for the 'Group' button
    groupBtn.addEventListener("click", function () {
        // Show the 'Number of Athletes' field when 'Group' is selected
        numberOfAthletesLabel.style.display = "block";
        athletesInput.style.display = "block";
        type.value = 1;
    });

    // Event listener for the 'Contact today' button
    contactButton.addEventListener("click", function () {
        // Hide the info section and show the container
        infoDiv.style.display = "none";
        containerDiv.style.display = "block";
    });

    // Select relevant elements for the popup functionality
    const submitButton = document.getElementById("submit");
    const cancelButton = document.getElementById("cancel");
    const popup = document.querySelector(".popup");
    const overlay = document.querySelector(".popup-overlay");
    const form = document.querySelector('#form');

    // Show the popup when the submit button is clicked
    submitButton.addEventListener("click", (e) => {
        e.preventDefault();
        if(form.checkValidity()){
            $.ajax({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                },
                data: $('#form').serialize(),
                method: "post",
                url: "/schedule-assessment",
                success: function (data) {
                    console.log(data,"here");
                    popup.style.display = "block";
                    overlay.style.display = "block";
                },
                error: function (data) {
                    console.log(data);
                }
            });
        }else{
            form.reportValidity()
        }
        
    });

    // Hide the popup when the cancel button is clicked
    cancelButton.addEventListener("click", () => {
        popup.style.display = "none";
        overlay.style.display = "none";
        window.location.reload();
    });

    // Optional: Hide the popup if the overlay is clicked
    overlay.addEventListener("click", () => {
        popup.style.display = "none";
        overlay.style.display = "none";
        window.location.reload();
    });
});
