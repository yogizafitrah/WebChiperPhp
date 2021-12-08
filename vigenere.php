<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vigenere Chiper</title>
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
                    <h2 class="form-title">Vigenere Chiper</h2>
                    <form action="vigenere.php" method="POST">
                        <div class="form-textbox" style="margin-bottom: 10px">
                            <label>Plainteks :</label>
                            <input type="text" required="" id="input" name="plainteks" oninvalid="this.setCustomValidity('Wajib Diisi')"oninput="setCustomValidity('')" >
                        </div>
                        <div class="form-textbox" style="margin-bottom: 20px">
                            <label>key :</label>
                            <input type="text" required="" name="key" oninvalid="this.setCustomValidity('Wajib Diisi')"oninput="setCustomValidity('')" >
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



</body>


<?php
if (isset($_POST['submit'])) {
    $plainteks = $_POST['plainteks'];
    $key = $_POST['key'];

    $jumlah_plainteks = strlen($plainteks);
    $jumlah_key = strlen($key);


    function Mod($a, $b)
    {
        return ($a % $b + $b) % $b;
    }

    function Cipher($plainteks, $key, $encipher)
    {
        $keyLen = strlen($key);

        for ($i = 0; $i < $keyLen; ++$i)
            if (!ctype_alpha($key[$i]))
            return ""; // Error

        $output = "";
        $nonAlphaCharCount = 0;
        $inputLen = strlen($plainteks);

        for ($i = 0; $i < $inputLen; ++$i)
        {
            if (ctype_alpha($plainteks[$i]))
            {
                $cIsUpper = ctype_upper($plainteks[$i]);
                $offset = ord($cIsUpper ? 'A' : 'a');
                $keyIndex = ($i - $nonAlphaCharCount) % $keyLen;
                $k = ord($cIsUpper ? strtoupper($key[$keyIndex]) : strtolower($key[$keyIndex])) - $offset;
                $k = $encipher ? $k : -$k;
                $ch = chr((Mod(((ord($plainteks[$i]) + $k) - $offset), 26)) + $offset);
                $output .= $ch;
            }
            else
            {
                $output .= $plainteks[$i];
                ++$nonAlphaCharCount;
            }
        }

        return $output;
    }

    if (empty($_POST['eksekusi'])) {
            $data_alert = "Jenis Proses Tidak Boleh Kosong";
    }else{
        switch ($_POST['eksekusi']) {

            case 'enkripsi':
            $proses = 0;
            $cipherText = Cipher($plainteks, $key, true);

            break;

            case 'deskripsi':
            $proses = 1;
            $plainText = Cipher($plainteks, $key, false);

            break;
        }
    }
} else {
    $data_alert = "Tolong Isikan Form dengan lengkap";
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
            <?php if ($proses == 0): ?>
              Vigenere Enkripsi
              <?php else: ?>
                Vigenere Deskripsi
              <?php endif ?>
          </h1>
            <div style="margin-bottom: 30px">
                <table class="container_conntent sign-up-content" style="margin: 0 auto;">
                    <?php if ($proses == 0): ?>
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
                    <?php if ($proses == 0): ?>
                      <tr>
                        <td>Chiper Text</td>
                      </tr>
                    <?php else: ?>
                      <tr>
                        <td>Plain Text</td>
                      </tr>
                    <?php endif ?>
                     <?php if ($proses == 0): ?>
                      <tr>
                        <td>Hasil Enkripsi</td>
                        <td>:</td>
                        <td><b><?= $cipherText ?></b></td>
                    </tr>
                    <?php else: ?>
                      <tr>
                        <td>Hasil Deskripsi</td>
                        <td>:</td>
                        <td><b><?= $plainText ?></b></td>
                      </tr>
                    <?php endif ?>
                </table>
            </div>
        <?php endif ?>
    </div>

            <div class="main">

            <div class="">
                <div class="sign-up-content">
                    <h2 class="form-title">Vigenere Chiper</h2>
                   <p> Vigenère cipher adalah salah satu algoritma kriptografi klasik yang diperkenalkan pada abad 16 atau kira-kira pada tahun 1986. Algoritma kriptografi ini dipublikasikan oleh seorang diplomat dan juga kriptologis yang berasal dari Prancis, yaitu Blaise de Vigenère, namun sebenarnya algoritma ini telah digambarkan sebelumnya pada buku La Cifra del Sig. Giovan Batista Belaso, sebuah buku yang ditulis oleh Giovan Batista Belaso, pada tahun 1553 [3]. Cara kerja dari Vigenère cipher ini mirip dengan Caesar cipher, yaitu mengenkripsi plainteks pada pesan dengan cara menggeser huruf pada pesan tersebut sejauh nilai kunci pada deret alphabet. Vigenère cipher adalah salah satu algoritma kriptografi klasik yang menggunakan metode substitusi abjad majemuk.</p>
                    <p>Substitusi abjad-majemuk mengenkripsi setiap huruf yang ada menggunakan kunci yang berbeda, tidak seperti Caesar cipher yang menerapkan metode substitusi abjad-tunggal yang semua huruf disuatu pesan dienkripsi menggunakan kunci yang sama. Sebagai contoh Caesar cipher jika terdapat plainteks: MAKALAH KRIPTOGRAFI Maka jika dienkripsi dengan dengan nilai kunci 2 akan didapat cipherteks: OCMCNCJ MTKRVQITCHK Dari cipherteks yang didapat dapat kita lihat bahwa huruf M dienkripsi menjadi O, huruf A dienkripsi menjadi huruf C, dan seterusnya dimana huruf pada pesan digeser sejauh nilai kunci. Algoritma Caesar cipher sangat sederhana sehingga sanga berisiko untuk dipecahkan karena hanya dibutuhkan pengetahuan satu huruf dari plainteks untuk mengetahui kunci yang digunakan. Vigenère cipher yang menerapkan metode substitusi abjad-majemuk tidak memiliki permasalahan tersebut karena setiap huruf pada pesan yang dienkripsi dengan Vigenère cipher ini akan digeser dengan nilai yang berbeda tergantung dengan kunci yang diberikan. Kunci yang digunakan pada Vigenère cipher berbeda denganyang digunakan pada Caesar cipher.</p>
                    <center>
                      <a href="youtube.com"> Video </a> | <a href="pdf"> PDF </a> 
                    </center>
                </div>
            </div>

    </div>
</html>