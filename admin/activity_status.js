<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    $(document).ready(function() {

        function updateUserActivityStatus() {
            $.ajax({
                url: 'fetch_messages.php',
                method: 'POST',
                success: function(response) {
                    console.log('User activity status updated successfully');
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error('Error updating user activity status:', textStatus, errorThrown);
                }
            });
        }

        // Add event listeners to detect user interaction
        $(document).on('mousemove keydown', function() {
            updateUserActivityStatus();
        });
    });
