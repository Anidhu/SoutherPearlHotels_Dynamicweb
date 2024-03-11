$(document).ready(function () {
    // Submit form using Ajax
    $('#search-form').submit(function (e) {
        e.preventDefault();
        $.ajax({
            type: 'GET',
            url: 'search.php', // Specify the backend script for search logic
            data: $('#search-form').serialize(),
            success: function (response) {
                // Display search results dynamically
                $('#search-results').html(response);
            },
            error: function (error) {
                console.log(error);
            }
        });
    });
});



