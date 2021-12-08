<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAESAR CHIPER</title>

     <style>
    .button-anon-pen .sign-up-content{
        padding: 20px 30px;
        font-size: 1.1rem;
        align-items: center;
        background: #fff;
        border-radius: 3px;
        display: block;
        justify-content: center;
        margin: 3px;
        box-sizing: border-box;
        height: 100%;
        transition: background .5s ease;
    }
    .button-anon-pen{
    padding: 2px;
    text-align: center;
    position: relative;
    background-image: linear-gradient(115deg,#4fcf70,#fad648,#a767e5,#12bcfe,#44ce7b);
    border-radius: 6px;
    box-sizing: border-box;
    color: #fff;
    display: block;
    z-index: 2;
    -webkit-animation: Sidebar_rainbowBorder-dkMw3 .5s linear infinite;
    animation: Sidebar_rainbowBorder-dkMw3 .5s linear infinite;
    }
    .button-anon-pen:hover{
        transition: .2s ease;
    
    }

             /* @extend display-flex; */
    display-flex {
      display: flex;
      display: -webkit-flex; }

    /* @extend list-type-ulli; */
    list-type-ulli {
      list-style-type: none;
      margin: 0;
      padding: 0; }

    a:focus, a:active {
      text-decoration: none;
      outline: none;
      transition: all 300ms ease 0s;
      -moz-transition: all 300ms ease 0s;
      -webkit-transition: all 300ms ease 0s;
      -o-transition: all 300ms ease 0s;
      -ms-transition: all 300ms ease 0s; }

    input, select, textarea {
      outline: none;
      appearance: unset !important;
      -moz-appearance: unset !important;
      -webkit-appearance: unset !important;
      -o-appearance: unset !important;
      -ms-appearance: unset !important; }

    input::-webkit-outer-spin-button, input::-webkit-inner-spin-button {
      appearance: none !important;
      -moz-appearance: none !important;
      -webkit-appearance: none !important;
      -o-appearance: none !important;
      -ms-appearance: none !important;
      margin: 0; }

    input:focus, select:focus, textarea:focus {
      outline: none;
      box-shadow: none !important;
      -moz-box-shadow: none !important;
      -webkit-box-shadow: none !important;
      -o-box-shadow: none !important;
      -ms-box-shadow: none !important; }

    img {
      max-width: 100%;
      height: auto; }

    figure {
      margin: 0; }

    p {
      margin-bottom: 0px; }

    h2, h1, h3, h4, h5, h6{
      line-height: 2.5;
      margin: 0;
      padding: 0;
      font-weight: bold;
      color: #222;
      font-family: 'Open Sans', sans-serif;
      font-size: 24px;
      text-align: center; }

    .clear {
      clear: both; }

    body {
      font-size: 14px;
      line-height: 1.8;
      color: #222;
      background: #f2f2f2;
      font-weight: 600;
      font-family: Poppins;
      margin: 0px; 
      font-family: 'Open Sans', sans-serif;}

    .main {
      padding: 20px 0;
      position: relative; }


    .container {
      width: 520px;
      background: #fff;
      margin: 0 auto;
      box-shadow: 0px 10px 9.9px 0.1px rgba(0, 0, 0, 0.05);
      -moz-box-shadow: 0px 10px 9.9px 0.1px rgba(0, 0, 0, 0.05);
      -webkit-box-shadow: 0px 10px 9.9px 0.1px rgba(0, 0, 0, 0.05);
      -o-box-shadow: 0px 10px 9.9px 0.1px rgba(0, 0, 0, 0.05);
      -ms-box-shadow: 0px 10px 9.9px 0.1px rgba(0, 0, 0, 0.05);
      border-radius: 10px;
      -moz-border-radius: 10px;
      -webkit-border-radius: 10px;
      -o-border-radius: 10px;
      -ms-border-radius: 10px; }

    .container_conntent {
      background: #fff;
      margin: 0 auto;
      box-shadow: 0px 10px 9.9px 0.1px rgba(0, 0, 0, 0.05);
      -moz-box-shadow: 0px 10px 9.9px 0.1px rgba(0, 0, 0, 0.05);
      -webkit-box-shadow: 0px 10px 9.9px 0.1px rgba(0, 0, 0, 0.05);
      -o-box-shadow: 0px 10px 9.9px 0.1px rgba(0, 0, 0, 0.05);
      -ms-box-shadow: 0px 10px 9.9px 0.1px rgba(0, 0, 0, 0.05);
      border-radius: 10px;
      -moz-border-radius: 10px;
      -webkit-border-radius: 10px;
      -o-border-radius: 10px;
      -ms-border-radius: 10px; }

    .sign-up-content {
      padding: 40px 60px 32px 60px;
      position: relative;
      background-color: #fff;
      z-index: 99; }

    input {
      border: solid 2px #ebebeb;
      box-sizing: border-box;
      width: 100%;
      font-weight: 700;
      font-size: 14px;
      border-radius: .25em;
      font-family: 'Open Sans', sans-serif;
      padding: 16px 30px 16px 90px; }

    .form-textbox {
      position: relative; }
      .form-textbox label {
        position: absolute;
        left: 28px;
        top: 50%;
        transform: translateY(-50%);
        -moz-transform: translateY(-50%);
        -webkit-transform: translateY(-50%);
        -o-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        font-weight: 600;
        color: #888;
        font-size: 14px; }


    .label-agree-term {
      color: #888; }

    .term-service {
      color: #1da0f2;
      text-decoration: none; }
      .term-service:hover {
        text-decoration: underline; }

    .submit {
      background: #1da0f2;
      color: #FFF;
      border: none;
      padding: 15px 20px;
      font-size: 13px;
      font-weight: 600;
      font-family: Poppins;
      border-radius: 5px;
      -moz-border-radius: 5px;
      -webkit-border-radius: 5px;
      -o-border-radius: 5px;
      -ms-border-radius: 5px; }
      .submit:hover {
        background: #0c85d0; }

    .loginhere {
      text-align: center;
      color: #888;
      margin-top: 63px; }

      #input{
        padding-left: 102px;
      }

    .loginhere-link {
      color: #1da0f2;
      text-decoration: none; }
      .loginhere-link:hover {
        text-decoration: underline; }

    input:-webkit-autofill {
      -webkit-box-shadow: 0 0 0 30px white inset; }

    @media screen and (max-width: 768px) {
      .container {
        width: calc( 100% - 30px);
        max-width: 100%; } }
    @media screen and (max-width: 575px) {
      .sign-up-content {
        padding: 40px 1px 32px 1px; }
      }
    @media screen and (max-width: 400px) {
      .form-textbox label {
        left: 3px; }

      #input{
        padding: 14px 2px 13px 181px;
      }
      input {
        padding: 16px 1px 14px 60px; } }

        .form-control{
          padding: 10px !important;
          width: 30%;
        }
        @keyframes Sidebar_rainbowBorder-dkMw3 {
          0%, 100% {
            background-image: linear-gradient(115deg,#4fcf70,#fad648,#a767e5,#12bcfe);
        }
        25% {
            background-image: linear-gradient(115deg,#fad648,#a767e5,#12bcfe,#4fcf70);
        }
        50% {
            background-image: linear-gradient(115deg,#a767e5,#12bcfe,#4fcf70,#fad648);
        }
        75% {
            background-image: linear-gradient(115deg,#12bcfe,#4fcf70,#fad648,#a767e5);
            }      
        }
        select {
          -webkit-appearance: none;
          -moz-appearance: none;
          -ms-appearance: none;
          appearance: none;
          outline: 0;
          box-shadow: none;
          border: 0 !important;
          background: #efefef;
          background-image: none;
        }
        /* Remove IE arrow */
        select::-ms-expand {
          display: none;
        }
        /* Custom Select */
        .select {
          position: relative;
          display: flex;
          height: 3em;
          line-height: 3;
          background: #efefef;
          overflow: hidden;
          border-radius: .25em;
        }
        select {
          flex: 1;
          padding: 0 .5em;
          color: #333;
          cursor: pointer;
        }
        /* Arrow */
        .select::after {
          content: '\25BC';
          position: absolute;
          top: 0;
          right: 0;
          padding: 0 1em;
          background: #d3d3d3;
          cursor: pointer;
          pointer-events: none;
          -webkit-transition: .25s all ease;
          -o-transition: .25s all ease;
          transition: .25s all ease;
        }
        /* Transition */
        .select:hover::after {
          color: #665353;
        }
    </style>
     <style type="text/css">
    a{text-decoration: none; font-size: 20px;font-family: sans-serif;padding: 14px 10px}
    ul{padding: 14px}
    li{list-style: none; display: inline;}
    li a{background: #222; color:#d4d4d4;}
    li a:hover{background: #4da4ff; color:#fff;}
    .navi{background: #222; height: 50px}
    </style>

    <nav class="navi">
    <ul>
        <li><a href="index.php">Vernam Cipher</a></li>
        <li><a href="vigenere.php">Vigenere Cipher</a></li>
        <li><a href="caesar.php">Caesar Cipher</a></li>
        <li><a href="DES.html">DES/3DES</a></li>
        <li><a href="RSA/index.html">RSA</a></li>
    </ul>
</nav>
</head>

<body>
    <div class="main">
        <div class="container">
            <div class="">
                <div class="sign-up-content">
                    <h2 class="form-title">CAESAR CHIPER</h2>
                    <form action="caesar.php" method="POST">
                        <div class="form-textbox" style="margin-bottom: 10px">
                            <label>Text :</label>
                            <input type="text" required="" id="input" name="plainteks" oninvalid="this.setCustomValidity('Wajib Diisi')"oninput="setCustomValidity('')" >
                        </div>
                        <div class="form-textbox" style="margin-bottom: 20px">
                            <label>key :</label>
                            <input type="number" required="" name="key" oninvalid="this.setCustomValidity('Wajib Diisi')"oninput="setCustomValidity('')" >
                        </div>
                        <label style="padding-left: 5px">Jenis Proses :</label>
                        <div class="select">
                          <select name="eksekusi" id="slct">
                            <option value="" selected disabled>-- Select Method --</option>
                            <option value="enkripsi">Enkripsi</option>
                            <option value="deskripsi">Dekripsi</option>
                          </select>
                        </div>
                        <div class="form-textbox button-anon-pen" style="margin-top: 27px;margin-bottom: 45px;">
                            <input type="submit" name="submit" value="Submit" style="padding: 15px 30px 16px 17px;">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php
function batasAscii($dec, $fungsi, $key)
{
    //Enkripsi
    if ($fungsi == 0) {
        // Jika angka
        if ($dec >= 48 && $dec <= 57) {
            $key = fmod($key, 10);
            $dec = $dec + $key;
            if ($dec > 57) {
                $dec = $dec - 57 + 47;
            }
        }
        // Jika huruf besar
        elseif ($dec >= 65 && $dec <= 90) {
            $key = fmod($key, 26);
            $dec = $dec + $key;
            if ($dec > 90) {
                $dec = $dec - 90 + 64;
            }
        }
        // Jika huruf besar
        elseif ($dec >= 97 && $dec <= 122) {
            $key = fmod($key, 26);
            $dec = $dec + $key;
            if ($dec > 122) {
                $dec = $dec - 122 + 96;
            }
        }
    }
    //Dekripsi
    elseif ($fungsi == 1) {
        // Jika angka
        if ($dec >= 48 && $dec <= 57) {
            $key = fmod($key, 10);
            $dec = $dec - $key;
            if ($dec < 48) {
                $dec = 58 - (48 - $dec);
            }
        }
        // Jika huruf besar
        elseif ($dec >= 65 && $dec <= 90) {
            $key = fmod($key, 26);
            $dec = $dec - $key;
            if ($dec < 65) {
                $dec = 91 - (65 - $dec);
            }
        }
        // Jika huruf besar
        elseif ($dec >= 97 && $dec <= 122) {
            $key = fmod($key, 26);
            $dec = $dec - $key;
            if ($dec < 97) {
                $dec = 123 - (97 - $dec);
            }
        }
    }
    //hasil
    return $dec;
}
  if (empty($_POST['eksekusi'])) {
    $data_alert = "Jenis Proses Tidak Boleh Kosong";
  }else{
    if (isset($_POST['submit'])) {
      if (!empty($_POST['plainteks']) && !empty($_POST['key'])) {
        $plainteks = $_POST['plainteks'];
        $key = $_POST['key'];

        switch ($_POST['eksekusi']) {
          case 'enkripsi':

            // enkripsi
          $enkripsi = null;
          $fungsi = 0;
          $text_array = str_split($plainteks);
          for ($i = 0; $i < count($text_array); $i++) {
            $dec = ord($text_array[$i]);
            $enkripsi .= chr(batasAscii($dec, $fungsi, $key));

          }
          break;

          case 'deskripsi':

            // deskripsi
          $denkripsi = null;
          $fungsi = 1;
          $text_array = str_split($plainteks);
          for ($i = 0; $i < count($text_array); $i++) {
            $dec = ord($text_array[$i]);
            $denkripsi .= chr(batasAscii($dec, $fungsi, $key));
          }

          break;

        }
      }

    }else{
        $data_alert = "Tolong Isikan Form dengan lengkap";
    }
    
}

?>

<div class="main">
    <?php if (empty($plainteks)): ?>
        <div style="text-align: center;">
            <caption><?= $data_alert ?></caption>
        </div>
    
    <?php elseif (empty($_POST['eksekusi'])):  ?>
        <div style="text-align: center;">
            <caption><?= $data_alert ?></caption>
        </div>

    <?php else: ?>
          <h1>
            <?php if ($fungsi == 0): ?>
                 Caesar Enkripsi
              <?php else: ?>
                 Caesar Deskripsi
              <?php endif ?>
          </h1>
             <div style="margin-bottom: 30px">
                <table class="container_conntent sign-up-content" style="margin: 0 auto;">
                  <?php if ($fungsi == 0): ?>
                    <tr>
                        <td>Plain Text</td>
                        <td>:</td>
                        <td><b><?= $plainteks ?></b></td>
                    </tr>
                  <?php else: ?>
                    <tr>
                        <td>Chiper Text</td>
                        <td>:</td>
                        <td><b><?= $plainteks ?></b></td>
                    </tr>
                  <?php endif ?>
                    <tr>
                        <td>Key</td>
                        <td>:</td>
                        <td><b><?= $key ?></b></td>
                    </tr>
                    <?php if ($fungsi == 0): ?>
                      <tr>
                        <td>Chiper Text</td>
                      </tr>
                    <?php else: ?>
                      <tr>
                        <td>Plain Text</td>
                      </tr>
                    <?php endif ?>
                    <?php if ($fungsi == 0): ?>
                      <tr>
                        <td>Hasil Enkripsi</td>
                        <td>:</td>
                        <td><b><?= $enkripsi ?></b></td>
                    </tr>
                    <?php else: ?>
                      <tr>
                        <td>Hasil Deskripsi</td>
                        <td>:</td>
                        <td><b><?= $denkripsi ?></b></td>
                      </tr>
                    <?php endif ?>
                </table>
            </div>

        <?php endif ?>
</div>

</body>
<div class="main">

            <div class="">
                <div class="sign-up-content">
                    <h2 class="form-title">Caesar Chiper</h2>
                   <p> Sandi Caesar diambil dari nama kaisar romawi Julius Caesar, dalam mengirimkan pesan Julius Caesar mengamankannya dengan cara isi pesan yang ada disandikan dengan mengganti posisi setiap huruf yang ada pada pesan dengan huruf lain yang memiliki posisi selisih huruf yang lain dari urutan alfabet[4]. Adapun langkah – langkah yang dilakukan adalah sebagai berikut :</p>
                    <p>a. Menentukan besarnya jumlah pergeseran huruf yang akan diganti 
b. Mengganti setiap huruf yang ada pada pesan sesuai dengan jumlah pergeseran huruf yang ditentukan. 
c. Merangkai kembali jumlah huruf sesuai dengan susunan pesan awal
Untuk menyandikan suatu pesan cukup mengganti huruf yang ada pada pesan dengan huruf sandi sesuai dengan jumlah pergeseran huruf yang diinginkan. Contoh Enkripsi Caesar : Teks Awal : PESAN INI SANGAT RAHASIA Jumlah geser (Key) : 12 Teks Sandi : BQEMZ UZU EMZSMF DMTMEUM
</p>
                    <center>
                      <a href="youtube.com"> Video </a> | <a href="pdf"> PDF </a> 
                    </center>
                </div>
            </div>

    </div>
</html>