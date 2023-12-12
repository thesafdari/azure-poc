<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POC</title>
    <style>
        body {
            background-color: #ffffff; /* White background */
            color: #000000; /* Black text color */
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            font-family: 'Helvetica', sans-serif;
        }

        #centerText {
            font-size: 72px;
            font-weight: bold;
            margin-bottom: 20px;
            white-space: nowrap;
            overflow: hidden;
        }

        #poweredBy {
            font-size: 14px;
            opacity: 0.7;
            color: #808080; /* Gray text color */
            position: absolute;
            bottom: 10px;
        }

        .color-change {
            animation: colorChange 4s infinite;
        }

        @keyframes colorChange {
            0% {
                color: #3498db;
            }
            25% {
                color: #e74c3c;
            }
            50% {
                color: #2ecc71;
            }
            75% {
                color: #f39c12;
            }
            100% {
                color: #3498db;
            }
        }
    </style>
</head>
<body>
    <div id="centerText"></div>
    <div id="poweredBy">Powered by Milad Safdari</div>

    <script>
        const textElement = document.getElementById('centerText');
        const text = "Subdomain takeover By TheSafdari";
        let index = 0;

        function updateText() {
            const char = text.charAt(index);
            const span = document.createElement('span');
            span.textContent = char;
            span.classList.add('color-change');
            textElement.appendChild(span);

            index++;

            if (index < text.length) {
                setTimeout(updateText, 200);
            }
        }

        updateText();
    </script>
</body>
</html>
