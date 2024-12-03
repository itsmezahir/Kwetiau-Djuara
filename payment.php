<!DOCTYPE html> 
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Order Menu</title>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <header>
            <nav class="navbar">
                <div class="logo">
                    <a href="home.php">
                        <img src="https://i.imgur.com/uTgr4G3.jpeg" alt="Logo" class="logo-img">
                    </a>
                    <a href="home.php" class="brand"></a>
                </div>
                <div>
                    <H1>
                        PAYMENT
                    </H1>
                </div>
            </nav>
        </header>
        <section class="paymentsec">
            <fieldset class="paymentfieldset">
                <H1>My Order <hr></H1>
                <!-- Total Section -->
                <div class="totalpayment">
                    <p class="price"><b>Total Amount:</b> Rp<?= number_format($totalAmount, 2, ',', '.'); ?></p>
                </div>
                <div class="paymentmethode">
                    <label class="method">
                        <div class="method-content">
                            <Img src="https://pngimg.com/uploads/mastercard/mastercard_PNG23.png">
                            <p>Credit / Debit Card</p>
                        </div>
                        <input type="radio" name="payment" value="qrcode">
                    </label>
                    <label class="method">
                        <div class="method-content">
                            <img src="https://th.bing.com/th/id/R.dcf4b6e228aef80dd1a58f4c76f07128?rik=Qj2LybacmBALtA&riu=http%3a%2f%2fpngimg.com%2fuploads%2fqr_code%2fqr_code_PNG25.png&ehk=eKH2pdoegouCUxO1rt6BJXt4avVYywmyOS8biIPp5zc%3d&risl=&pid=ImgRaw&r=0">
                            <p>QR code</p>
                        </div>
                        <input type="radio" name="payment" value="qrcode">
                    </label>
                    <label class="method">
                        <div class="method-content">
                            <img src="https://th.bing.com/th/id/OIP.qbk7ot2JMAIvl7zA-C8PYQHaHa?rs=1&pid=ImgDetMain">
                            <p>Gopay</p>
                        </div>
                        <input type="radio" name="payment" value="gopay">
                    </label>
                </div>
                <div class="buttonpay-container">
                    <button class="paybutton">PAY</button>
                </div>
            </fieldset>
        </section>
    </body>
</html>