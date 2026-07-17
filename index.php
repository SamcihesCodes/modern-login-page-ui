<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Giriş Tasarımı</title>
    <!-- Google Fonts - Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- FontAwesome İkonları -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Özel CSS Dosyamız -->
    <link rel="stylesheet" href="stil.css">
</head>
<body>
<center>
    <div class="dekor-daire-1"></div>
    <div class="dekor-daire-2"></div>


        <div class="giris-kapsayici">
            <div class="giris-kart">
                <div class="giris-baslik">
                    <div class="profil-icon">
                        <i class="fa-solid fa-lock"></i>
                    </div>
                    <h2>Hoş Geldiniz</h2>
                    <p>Hesabınıza erişebilmek için bilgilerinizi giriniz.</p>
                </div>


                <form class="giris-formu" onsubmit="event.preventDefault();">
                    <div class="veri-grubu">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" placeholder="E-Posta Adresi" required>
                    </div>

                    <div class="veri-grubu">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" placeholder="Şifre" required>
                    </div>

                    <div class="form-secenekler">
                        <label class="beni-hatirla">
                            <input type="checkbox"> Beni Hatırla
                        </label>
                        <a href="#" class="sifre-unuttum">Şifremi Unuttum?</a>
                    </div>


                    <button type="submit" class="giris-buton">Giriş Yap</button>

                    <div class="kayit-yönlendir">
                        Hesabınız yok mu? <a href="#">Kayıt Ol</a>
                    </div>


                </form>




            </div>
        </div>


</center>
</body>
</html>