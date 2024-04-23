{/* <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    function fetchMessages(){
        $.ajax({
            url: 'fetch_messages.php',
            method: 'GET',
            success: function(data){
                $('.chat-box-area').html(data);
            }
        });
    }
    
    $('#messageForm').on('submit', function(e) {
        e.preventDefault();
        var formData = new FormData(this);
        $.ajax({
            url: $(this).attr('action'),
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                console.log(response);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
            }
        });
    });
    
     */}
// function fetchMessages(){
//     $.ajax({
//         url: 'fetch_messages.php',
//         method: 'GET',
//         success: function(data){
//             $('.chat-box-area').html(data);
//         }
//     });
// }
// $(document).ready(function(){
//     fetchMessages();
//     setInterval(fetchMessages, 1000);  
//       $('#messageForm').on('submit', function(event){
//         event.preventDefault();
//         $.ajax({
//             url: 'send_message.php',
//             method: 'POST',
//             data: $(this).serialize(),
//             success: function(){
//                 $('#message').val('');
//             }
//         });
//     });
// });
// $(document).ready(function () {
//     fetchMessages();
//     setInterval(fetchMessages, 1000);
//     $('#calculatorForm').on('submit', function (event) {
//         event.preventDefault();
//         $('#message').val('Your message content goes here');
//         $.ajax({
//             url: 'send_message.php',
//             method: 'POST',
//             data: $(this).serialize(),
//             success: function () {
//                 $('#message').val('');
//             }
//         });
//     });
// });

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
function fetchMessages(){
    $.ajax({
        url: 'fetch_messages.php',
        method: 'GET',
        success: function(data){
            $('.chat-box-area').html(data);
        }
    });
}
$(document).ready(function() {
    fetchMessages();
});
$('#messageForm').on('submit', function(e) {
    e.preventDefault();
    var formData = new FormData(this);
    $.ajax({
        url: $(this).attr('action'),
        type: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function(response) {
            console.log(response);
            fetchMessages();
        },
        error: function(jqXHR, textStatus, errorThrown) {
            console.log(textStatus, errorThrown);
        }
    });
});
=