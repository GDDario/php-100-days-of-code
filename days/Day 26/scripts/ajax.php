<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax with PHP</title>
</head>

<body>

    <h1>Generating a randdom number with AJAX.</h1>

    <form method="post" action="#" onsubmit="sendAjaxRequest(event)">
        <button type="submit">Send request</button>
    </form>

    <b>
        <p id="result"></p>
    </b>

    <script>
        function sendAjaxRequest(event) {
            event.preventDefault();
            const resultElement = document.getElementById('result');
            const xhttp = new XMLHttpRequest();

            xhttp.onreadystatechange = function() {
                if (this.readyState === 4) {
                    resultElement.innerHTML = `The result was ${this.responseText}.`;
                }
            }

            xhttp.open('POST', 'generate-random-number.php')
            xhttp.send()
        }
    </script>
</body>

</html>