 <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>üye kayıt sistemi</title>
    <style type="text/css">
    body{margin:0;padding: 0;}
    #mete {padding: 10px;width: 500px; margin: 50px auto;background: #ddd; border-radius: 5px;}
    input {padding: 10px;border: 1px solid #ccc;border-radius: 3px;}
    #button {background-color: #fa3636; cursor: pointer; color: #fff}

    </style>
  </head>
  <body>
    <div id="mete">
      <form action="?"method="POST">
        <table>
          <tr>
            <td> Kullanıcı adı :</td><td><input type="text"name="kadi"></td>
          </tr>
          <tr>
            <td> Şifre :</td><td><input type="password"name="pass"></td>
          </tr>
          <tr>
            <td> Mail adresi :</td><td><input type="text"name="mail"></td>
          </tr>
          <tr>
            <td></td><td><input type="submit" id="button"value="Kayıt ol"></td>
          </tr>
        </table>

      </form>
      <?php
      if ($_POST){
        $kadi = $_POST['kadi'];
        $sifre = $_POST['pass'];
        $mail = $_POST['mail'];

        if ($kadi == "" || $sifre == "" || $mail == "" ) {
          echo "Lütfen boş alan bırakmayınız.";
        }
          else {
          }
          error_reporting(0);
         $baglan =  mysql_connect("localhost","root");
          mysql_select_db("ders",$baglan) or die ("Mysql e bağlanamadı!");
          $kayıt = Mysql_query(" INSERT INTO  girişler (kadi,pass,mail) VALUES ('$kadi','$pass','$mail')");
          if ($kayıt){
            echo "Kayıt başarılı";
          }
            else {
              echo "bir hata oluştu";
            }
        }


        //echo "Kullanıcı adı: ".$kadi."<br> Şifre: ".$sifre."<br> Mail adresi: ".$mail;


       ?>

    </div>

  </body>
</html>
