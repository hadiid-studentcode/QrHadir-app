<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/assets/qrscanner/css/index.css" />
    <link rel="icon" type="image/png" href="/assets/img/favicon.png">

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;700&display=swap" rel="stylesheet" />

    <title>GassAbsen | QR Scan</title>



    <style>
        .attribution {
            font-size: 11px;
            text-align: center;
        }

        .attribution a {
            color: hsl(228, 45%, 44%);
        }
    </style>
</head>

<body>
    <div class="qr-container">
        <div class="qr-img-container">

            <div id="qr-reader" style="width: 480px; height: 480px; border-radius: 10px;"></div>

        </div>
        <div class="qr-content-container">
            {{-- <h3>Improve your front-end skills by building projects</h3>
            <p>
                Scan the QR code to visit Frontend Mentor and take your coding skills
                to the next level
            </p> --}}

             {{-- <div id="qr-reader-results"></div> --}}
        </div>
    </div>


    <script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
    <script>
        function docReady(fn) {
            // see if DOM is already available
            if (document.readyState === "complete" || document.readyState === "interactive") {
                // call on next available tick
                setTimeout(fn, 1);
            } else {
                document.addEventListener("DOMContentLoaded", fn);
            }
        }

        docReady(function() {
            // var resultContainer = document.getElementById('qr-reader-results');
            var lastResult, countResults = 0;

            function onScanSuccess(decodedText, decodedResult) {
                if (decodedText !== lastResult) {
                    ++countResults;
                    lastResult = decodedText;
                    // Handle on success condition with the decoded message.

                    console.log('sukses');

                    var form = document.createElement('form');
                    form.method = 'post';
                    form.action = '/save';
                    var token = document.createElement('input');
                    token.type = 'hidden';
                    token.name = '_token';
                    token.value = '{{ csrf_token() }}';
                    form.appendChild(token);
                    var input = document.createElement('input');
                    input.type = 'hidden';
                    input.name = 'data';
                    input.value = decodedText;
                    form.appendChild(input);
                    document.body.appendChild(form);
                    form.submit();
                    // resultContainer.innerHTML += `<div>[${countResults}] - ${decodedText}</div>`;
                }
            }

            var html5QrcodeScanner = new Html5QrcodeScanner(
                "qr-reader", {
                    fps: 10,
                    qrbox: 250,
                });

            html5QrcodeScanner.render(onScanSuccess);
        });
    </script>


</body>

</html>

<!-- <div class="attribution">
    Challenge by <a href="https://www.frontendmentor.io?ref=challenge" target="_blank">Frontend Mentor</a>.
    Coded by <a href="#">Your Name Here</a>.
  </div> -->
