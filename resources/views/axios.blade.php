<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Message</title>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>
<body>
    <h1>Send Message</h1>
    <form id="sendMessageForm">
        <label for="phone_number">Phone Number:</label>
        <input type="text" id="phone_number" name="phone_number" required>
        <br>
        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>
        <br>
        <button type="submit">Send</button>
    </form>

    <script>
        document.getElementById('sendMessageForm').addEventListener('submit', function(event) {
            event.preventDefault();

            const phoneNumber = document.getElementById('phone_number').value;
            const message = document.getElementById('message').value;

            axios.post('https://dev.onsend.io/api/v1/send', {
                phone_number: phoneNumber,
                message: message
            }, {
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json',
                    'Authorization': 'Bearer a9d31a4ae00b15cf04450949946f56fa78580a8ae856260a95f5828e5be75c73'
                }
            })
            .then(function (response) {
                console.log(response.data);
                alert('Message sent successfully!');
            })
            .catch(function (error) {
                console.error(error);
                alert('Failed to send message.');
            });
        });
    </script>
</body>
</html>
