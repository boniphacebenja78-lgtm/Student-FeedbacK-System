$(document).ready(function () {

    $("#feedbackForm").submit(function (event) {

        let name = $("#name").val().trim();
        let email = $("#email").val().trim();
        let message = $("#message").val().trim();

        if (name === "" || email === "" || message === "") {

            event.preventDefault();

            $("#messageBox")
                .text("Please fill in all fields.")
                .show();

        }

    });

});