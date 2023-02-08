
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.3.2/css/simple-line-icons.css">
</head>

<body>
    <div class="container">

        <div class="left">
            <div class="info-box">
                <div class="receipt">
                    Tanda Terima <br> <span>Mandan Koding</span>
                </div>
                <div class="entry">
                    <i class="icon-wallet" aria-hidden></i>
                    <p>Jumlah: <br> <span>Rp. 200.000</span></p>
                </div>
                <div class="entry">
                    <i class="icon-calendar" aria-hidden></i>
                    <p>Tanggal: <br> <span>05 Nov</span></p>
                </div>
                <div class="entry">
                    <i class="icon-star" aria-hidden></i>
                    <p>Penerbit: <br> <span>Mandan Koding</span></p>
                </div>
                <div class="entry">
                    <i class="icon-notebook" aria-hidden></i>
                    <p>Konfirmasi: <br> <span>0YXNSBD8876</span></p>
                </div>

            </div>
        </div>

        <div class="right">
            <div class="content">
                <div class="header">
                    <img src="rupiah.png">
                    <h4>29 Nov 2022 08:30:00 WIB PADANG</h4>
                </div>
                <div class="main">
                    <h3>Pembelian Program (1 Produk)</h3>
                    <h5>Total: Rp. 200.000</h5>
                </div>
                <div class="message">
                    <p>Hello PT. Sanjai Padang, <br> Anda telah mengirimkan pembayaran sebesar</p>
                    <h6>Mungkin perlu beberapa saat agar <br> transaksi ini muncul di akun anda</h6>
                </div>
                <div class="footer">
                    <h6>Invoice ID: 238723</h6>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<style>
    body {
    /* background: linear-gradient(to right, #f4b661, #f16160); */
    font-family: 'Roboto', sans-serif;
}

.container {
    width: 50%;
    height: 40%;
    min-width: 636px;
    min-height: 456;
    margin: auto;
    margin-top: 5%;
    overflow: hidden;
    border-radius: 5px 5px 5px 5px;
    -webkit-box-shadow: 0px 5px 21px 0px rgba(128, 128, 128, 0.2);
    -moz-box-shadow: 0px 5px 21px 0px rgba(128, 128, 128, 0.2);
    box-shadow: 0px 5px 21px 0px rgba(128, 128, 128, 128, 0.2);
}

.left {
    background-color: #f4b661;
    width: 39%;
    height: 457px;
    border-radius: 5px 0 0 5px;
    float: left;
    color: #ffffff;
}

.info-box {
    margin-top: 35px;
    margin-left: 35px;
    margin-right: 35px;
}

.receipt {
    font-weight: 300;
    font-size: 15px;
    line-height: 26px;
    padding-top: 10px;
    padding-bottom: 15px;
    border-bottom: 1px solid #facc8c;
}

.receipt span {
    font-weight: 500;
    font-size: 21px;
}

.entry {
    border-bottom: 1px solid #facc8c;
    height: 15%;
    overflow: hidden;
    padding-top: 15px;
}

.entry i {
    margin-top: 4px;
    margin-right: 13px;
    float: left;
    color: #b4d8fc;
}

.entry p {
    font-weight: 300;
    font-size: 13px;
    line-height: 26px;
    margin-top: 0px !important;
    float: left;
}

span {
    font-weight: 500;
    font-size: 16px;
}

.entry:last-child {
    border-bottom: none;
}

/* right */

.right {
    background-color: #fefefe;
    width: 61%;
    height: 100%;
    float: left;
    border-radius: 0 5px 5px 0;
}

.content {
    margin-top: 50px;
    margin-left: 40px;
    margin-right: 40px;
}

.header {
    overflow: hidden;
    border-bottom: 1px solid #d7e2e7;
    height: 50px;
}

.header img {
    width: 40px;
    float: left;
}

h4 {
    font-weight: 300;
    font-size: 13px;
    color: #96a2ad;
}

.header h4 {
    text-align: right;
    margin-top: 10px;
}

.main {
    margin-top: 35px;
}

h3 {
    color: #58636a;
}

h5 {
    color: #99a1aa;
    font-weight: 300;
}

h6 {
    color: #9aa3ab;
    font-weight: 300;
    line-height: 15px;
}

.message {
    margin-top: 40px;
}

.message p {
    font-weight: 300;
    font-size: 15px;
    color: #7a838d;
    line-height: 30px;
}

.message h6 {
    margin-top: 10px;
}

.footer {
    overflow: hidden;
    border-top: 1px solid #d7e2e7;
    margin-top: 40px;
    padding-top: 33px;
}

.footer h6 {
    color: #7a838d;
    text-align: right;
    margin-top: 0px !important;
}
</style>