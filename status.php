<?php

include "koneksi.php";
if(isset($_POST['submit'])){
    $simpan = mysqli_query($koneksi, "UPDATE transaksi SET 
                                                        status = '$_POST[status]'
                                                    WHERE urut = '$_POST[urut]'
                                                    ");

if($simpan){
    echo "<script>alert('Email Berhasil Terkirim!');
    document.location='tiket.php';
    </script>";
} else{
    echo "<script>alert('Gagal terkirim!');
    document.location='tiket.php';
    </script>";
}

}
// $template_file = "email-1.php";
$headers ="From : KallaBus Project\r\n";
$headers ="MIME-Version\r\n";
$headers ="Content-Type: text/html; charset=ISO-8859-1\r\n";

$q = mysqli_query($koneksi, "SELECT max(urut) as maxURUT from transaksi");
$l = mysqli_fetch_array($q);

$tiket = $l['maxURUT'];
$tiket++;
$j = "TKTBUS";
$tiketauto = $j . sprintf("%01s", $tiket);

$q = mysqli_query($koneksi, "SELECT * FROM transaksi WHERE urut = '$_POST[urut]'");
$data = mysqli_fetch_array($q);   

    $name = $data['nama_lengkap'];
    $email = $data['email'];
    $subject = $data['kelas'];
    $asal = $data['kota_asal'];
    $tujuan = $data['kota_tujuan'];
    $tanggal = $data['tanggal'];
    $jam = $data['jam_keberangkatan'];
    $tiket = $tiketauto++;

use PHPMailer\PHPMailer\PHPMailer;  //gausah dirubah
use PHPMailer\PHPMailer\Exception;  //gausah dirubah

	    require 'phpmailer/src/Exception.php';	//arahkan ke folder phpmailer
		require 'phpmailer/src/PHPMailer.php';	//arahkan ke folder phpmailer
		require 'phpmailer/src/SMTP.php';	//arahkan ke folder phpmailer
		require 'phpmailer/class.phpmailer.php';	//arahkan ke folder phpmailer
		require 'phpmailer/PHPMailerAutoload.php';	//arahkan ke folder phpmailer

$mail = new PHPMailer(true);

if(isset($_POST['submit'])){
    $mail = new PHPMailer;
	$mail->isSMTP();
	$mail->SMTPDebug = SMTP::DEBUG_SERVER; 
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 587;
	$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->SMTPAuth = true;
    $mail->Username = 'projectwebfinal@gmail.com';
	$mail->Password = 'jwzmzyirutlrubdn';
				
	//Recipients
	$mail->setFrom('projectwebfinal@gmail.com', 'E-tiket');
	$mail->addAddress($email, $name);     // Add a recipient


    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = '<!DOCTYPE html>
    <html lang="en" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:v="urn:schemas-microsoft-com:vml">
    <head>
    <title></title>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <!--[if mso]><xml><o:OfficeDocumentSettings><o:PixelsPerInch>96</o:PixelsPerInch><o:AllowPNG/></o:OfficeDocumentSettings></xml><![endif]-->
    <!--[if !mso]><!-->
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet" type="text/css"/>
    <!--<![endif]-->
    <style>
            * {
                box-sizing: border-box;
            }
    
            body {
                margin: 0;
                padding: 0;
            }
    
            a[x-apple-data-detectors] {
                color: inherit !important;
                text-decoration: inherit !important;
            }
    
            #MessageViewBody a {
                color: inherit;
                text-decoration: none;
            }
    
            p {
                line-height: inherit
            }
    
            .desktop_hide,
            .desktop_hide table {
                mso-hide: all;
                display: none;
                max-height: 0px;
                overflow: hidden;
            }
    
            @media (max-width:660px) {
    
                .desktop_hide table.icons-inner,
                .social_block.desktop_hide .social-table {
                    display: inline-block !important;
                }
    
                .icons-inner {
                    text-align: center;
                }
    
                .icons-inner td {
                    margin: 0 auto;
                }
    
                .image_block img.big,
                .row-content {
                    width: 100% !important;
                }
    
                .mobile_hide {
                    display: none;
                }
    
                .video_block .sizer {
                    max-width: none !important;
                }
    
                .stack .column {
                    width: 100%;
                    display: block;
                }
    
                .mobile_hide {
                    min-height: 0;
                    max-height: 0;
                    max-width: 0;
                    overflow: hidden;
                    font-size: 0px;
                }
    
                .desktop_hide,
                .desktop_hide table {
                    display: table !important;
                    max-height: none !important;
                }
            }
        </style>
    </head>
    <body style="margin: 0; background-color: #000000; padding: 0; -webkit-text-size-adjust: none; text-size-adjust: none;">
    <table border="0" cellpadding="0" cellspacing="0" class="nl-container" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #000000;" width="100%">
    <tbody>
    <tr>
    <td>
    <table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-1" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
    <tbody>
    <tr>
    <td>
    <table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #000000; color: #000000; width: 640px;" width="640">
    <tbody>
    <tr>
    <td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="100%">
    <table border="0" cellpadding="0" cellspacing="0" class="image_block block-1" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
    <tr>
    <td class="pad" style="padding-bottom:25px;padding-top:25px;width:100%;padding-right:0px;padding-left:0px;">
    <div align="center" class="alignment" style="line-height:10px"><a href="http://www.example.com/" style="outline:none" tabindex="-1" target="_blank"><img alt="Logo" src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgTzoLLVa1bo2UWm1QJ20vo4Z8T6GjVy_ZFh_H4PyoMr3QSTQBhkJ1sAbzigIy_IAU8kZcvMJcJf4Og3-dVsofniURnl6kdIncm8yYwPEuCDWnSF-Crpdrcgyjjgi0vpOXpQJE9VdevwvIa2ZFm4M2VDJUiCSNf2Y_GAve5VjJanhfJIWLbgcMxnq8f/w546-h141/Logo_6.png" style="display: block; height: auto; border: 0; width: 126px; max-width: 100%;" title="Logo" width="126"/></a></div>
    </td>
    </tr>
    </table>
    </td>
    </tr>
    </tbody>
    </table>
    </td>
    </tr>
    </tbody>
    </table>
    <table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-2" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #000000;" width="100%">
    <tbody>
    <tr>
    <td>
    <table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #03315f; color: #000000; width: 640px;" width="640">
    <tbody>
    <tr>
    <td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; border-bottom: 5px solid #EE1E34; border-left: 5px solid #EE1E34; border-right: 5px solid #EE1E34; border-top: 5px solid #EE1E34; vertical-align: top; padding-top: 0px; padding-bottom: 0px;" width="100%">
    <table border="0" cellpadding="0" cellspacing="0" class="text_block block-1" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;" width="100%">
    <tr>
    <td class="pad" style="padding-bottom:20px;padding-top:10px;">
    <div style="font-family: sans-serif">
    <div class="" style="font-size: 14px; font-family: Oswald, Arial, Helvetica Neue, Helvetica, sans-serif; mso-line-height-alt: 21px; color: #555555; line-height: 1.5;">
    <p style="margin: 0; font-size: 14px; text-align: center; font-family: inherit; mso-line-height-alt: 63px;"><span style="color:#ffffff;font-size:42px;">'.$tanggal.'| '.$jam.'</span></p>
    <p style="margin: 0; font-size: 14px; text-align: center; font-family: inherit; mso-line-height-alt: 33px;"><span style="font-size:22px;"><span style="color:#ffffff;">'.$asal.' - '.$subject.' - '.$tujuan.'</span></span></p>
    </div>
    </div>
    </td>
    </tr>
    </table>
    <table border="0" cellpadding="0" cellspacing="0" class="image_block block-2" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
    <tr>
    <td class="pad" style="width:100%;padding-right:0px;padding-left:0px;">
    <div align="center" class="alignment" style="line-height:10px"><a href="http://www.example.com/" style="outline:none" tabindex="-1" target="_blank"><img alt="Image" class="big" src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjGcp1F0LcXAAWMbKKwekLUPhJIRpc1FuQnOx3QAfJ-5OaeI8LsHu2eFCOfsHeYwevki39JJoK_ELJ1R9H4o1BrHJ0t0OSg7_YLk_O6zKMqEDZUVltL9BORnChg3kTlcPyu2wzXc2POIj6zkNckgFwkslPmm8M_rgvdU163j9ZucJP6erRd8wmeX1Gz/s729/Featured_Area_1.png" style="display: block; height: auto; border: 0; width: 628px; max-width: 100%;" title="Image" width="628"/></a></div>
    </td>
    </tr>
    </table>
    <table border="0" cellpadding="0" cellspacing="0" class="button_block block-3" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
    <tr>
    <td class="pad" style="padding-bottom:15px;padding-left:10px;padding-right:10px;padding-top:15px;text-align:center;">
    <div align="center" class="alignment">
    <!--[if mso]><v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="http://www.example.com/" style="height:67px;width:216px;v-text-anchor:middle;" arcsize="0%" stroke="false" fillcolor="#ee1e34"><w:anchorlock/><v:textbox inset="0px,0px,0px,0px"><center style="color:#ffffff; font-family:Arial, sans-serif; font-size:26px"><![endif]--><a href="http://www.example.com/" style="text-decoration:none;display:inline-block;color:#ffffff;background-color:#ee1e34;border-radius:0px;width:auto;border-top:0px solid transparent;font-weight:undefined;border-right:0px solid transparent;border-bottom:5px solid #B41616;border-left:0px solid transparent;padding-top:5px;padding-bottom:5px;font-family:Oswald, Arial, Helvetica Neue, Helvetica, sans-serif;font-size:26px;text-align:center;mso-border-alt:none;word-break:keep-all;" target="_blank"><span style="padding-left:25px;padding-right:25px;font-size:26px;display:inline-block;letter-spacing:normal;"><span dir="ltr" style="word-break: break-word;"><span data-mce-style="" dir="ltr" style="line-height: 52px;">KODE TIKET : '.$tiketauto.' </span></span></span></a>
    <!--[if mso]></center></v:textbox></v:roundrect><![endif]-->
    </div>
    </td>
    </tr>
    </table>
    </td>
    </tr>
    </tbody>
    </table>
    </td>
    </tr>
    </tbody>
    </table>
    <table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-3" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
    <tbody>
    <tr>
    <td>
    <table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #000000; color: #000000; width: 640px;" width="640">
    <tbody>
    <tr>
    <td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 35px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="100%">
    <table border="0" cellpadding="0" cellspacing="0" class="text_block block-1" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;" width="100%">
    <tr>
    <td class="pad">
    <div style="font-family: sans-serif">
    
    <
    </table>
    <table border="0" cellpadding="10" cellspacing="0" class="text_block block-17" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;" width="100%">
    <tr>
    <td class="pad">
    
    </tbody>
    </table><!-- End -->
    </body>
    </html>';
    $mail->AltBody = "This is the body in plain text for non-HTML mail clients";

    $mail->send();
    echo 'Message has been sent';
} else {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

// $id = $_GET['urut'];
// $status = $_GET['status'];

// $q = "update transaksi set status=$status where urut=$id";
// mysqli_query($koneksi, $q);

echo  $data['email'];
echo  $data['kelas'];
echo  $data['Bank'];
echo  $data['nama_lengkap'];

?>


