<?php               
include "php/transposition.php";
if(isset($_POST['submit'])){
    $key = $_POST['key'];
    $msg = $_POST['msg'];
    $cipherText = Encipher($msg, $key, '-');
    // $plainText = Decipher($cipherText, $key);
}
?> 
<html>
    <head>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.11/clipboard.min.js" integrity="sha512-7O5pXpc0oCRrxk8RUfDYFgn0nO1t+jLuIOQdOMRp4APB7uZ4vSjspzp5y6YDtDs4VzUSTbWzBFZ/LKJhnyFOKw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <link rel="icon" href="img/logo.jpg" type="image/x-icon" />
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/style.css">
        <title>encrypt your message!</title>
    </head>
    <body class="bg-dark">
        <div class="container relative mx-auto">
            <header>
                <h2 class="text-3xl text-center text-green mt-28 ">Encryption By Transposition</h2>
            </header>
            <form class="text-center text-white mt-28 form-anticlear" method="post" action="">
                <p class="text-xl">Enter your message : </p>
                <textarea name="msg" cols="50" rows="5" class="p-6 mt-6 text-lg text-dark" required></textarea><br>
                <p class="my-6 text-xl">Enter the key : </p>
                <input type="text" name="key" class="text-lg text-center text-dark"><br>
                <button type="submit" name="submit" class="px-5 py-3 mb-3 mt-9">ENCRYPT</button>
            </form>

            <?php
            if(isset($cipherText)){ 
                echo '<div class="w-3/4 mx-auto text-white">
                <p class="text-xl text-center txt">Your encrypted message is :</p>
                <div class="flex mt-10 message py-11 px-7">
                    <p class="flex-1 text-2xl encrypted" >
                    '.$cipherText.'
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
        <script src="https://cdn.jsdelivr.net/gh/akjpro/form-anticlear/base.js"></script>

    </body>
</html>