<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
$(document).ready(function(){
    fetchMessages();
    setInterval(fetchMessages, 1000);  
      $('#messageForm').on('submit', function(event){
        event.preventDefault();
        $.ajax({
            url: 'send_message.php',
            method: 'POST',
            data: $(this).serialize(),
            success: function(){
                $('#message').val('');
            }
        });
    });
});
function fetchMessages(){
    $.ajax({
        url: 'fetch_messages.php',
        method: 'GET',
        success: function(data){
            $('.chat-box-area').html(data);
        }
    });
}