<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Message</title>
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

            const xhr = new XMLHttpRequest();
            xhr.open('POST', 'https://dev.onsend.io/api/v1/send', true);
            xhr.setRequestHeader('Accept', 'application/json');
            xhr.setRequestHeader('Content-Type', 'application/json');
            xhr.setRequestHeader('Authorization', 'Bearer a9d31a4ae00b15cf04450949946f56fa78580a8ae856260a95f5828e5be75c73');

            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4) {
                    if (xhr.status === 200) {
                        console.log(JSON.parse(xhr.responseText));
                        alert('Message sent successfully!');
                    } else {
                        console.error(xhr.responseText);
                        alert('Failed to send message.');
                    }
                }
            };

            const data = JSON.stringify({
                phone_number: phoneNumber,
                message: message
            });

            xhr.send(data);
        });
    </script>
</body>
</html>
