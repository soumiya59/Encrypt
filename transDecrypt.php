<?php               
include "php/transposition.php";
if(isset($_POST['submit'])){
    $key = $_POST['key'];
    $msg = $_POST['msg'];
    $plainText = Decipher($msg, $key);
}
?> 
<html>
    <head>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.11/clipboard.min.js" integrity="sha512-7O5pXpc0oCRrxk8RUfDYFgn0nO1t+jLuIOQdOMRp4APB7uZ4vSjspzp5y6YDtDs4VzUSTbWzBFZ/LKJhnyFOKw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <link rel="icon" href="img/logo.jpg" type="image/x-icon" />
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/style.css">
        <title>Decrypt your message!</title>
    </head>
    <body class="bg-dark">
        <div class="relative container mx-auto">
            <header>
                <h2 class="text-3xl text-center text-green mt-28">Decryption By Transposition</h2>
            </header>
            <form class="text-center mt-28 text-white" method="post" action="">
                <p class="text-xl">Enter your message : </p>
                <textarea name="msg" cols="50" rows="5" class="p-6 mt-6 text-lg text-dark" required></textarea><br>
                <p class="text-xl my-6">Enter the key : </p>
                <input type="text" name="key" class="text-center text-lg text-dark"><br>
                <button type="submit" name="submit" class="mt-9 mb-3 py-3 px-5">DECRYPT</button>
            </form>

            <?php
            if(isset($plainText)){ 
                echo '<div class="mx-auto text-white w-3/4">
                <p class="text-center text-xl txt">Your Decrypted message is :</p>
                <div class="flex message py-11 px-7 mt-10">
                    <p class="flex-1 text-2xl encrypted" >
                    '.$plainText.'
                    </p>
                    <button type="button" id="copy">
                        <p class="text-green">Copy</p>
                    </button>
                </div>';
            }
            ?>
                
            </div>
        </div>

        <script>
            const textToCopy = document.querySelector('.encrypted').innerText
            document.querySelector('#copy').addEventListener('click' , ()=> {
                navigator.clipboard.writeText(textToCopy).then(
                  function() {
                    $('button p').text("Copied!")
                  }, 
                  function() {
                    window.alert('Opps! Your browser does not support the Clipboard API')
                  }
                )
            })
        </script>

    </body>
</html>