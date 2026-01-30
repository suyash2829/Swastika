<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- ANIMATED FOOTER : SWASTIKAA EMBROIDERY -->
<style>
  footer {
    background: linear-gradient(135deg, #5a3522, #8b5e3c);
    color: #fff;
    padding: 60px 0 30px;
    position: relative;
    overflow: hidden;
  }

  footer::before {
    content: "";
    position: absolute;
    top: -50px;
    left: -50px;
    width: 200px;
    height: 200px;
    background: rgba(255, 215, 160, 0.15);
    border-radius: 50%;
    animation: float 6s ease-in-out infinite;
  }

  footer::after {
    content: "";
    position: absolute;
    bottom: -60px;
    right: -60px;
    width: 250px;
    height: 250px;
    background: rgba(255, 215, 160, 0.12);
    border-radius: 50%;
    animation: float 8s ease-in-out infinite reverse;
  }

  @keyframes float {
    0% { transform: translateY(0); }
    50% { transform: translateY(20px); }
    100% { transform: translateY(0); }
  }

  .footer-title {
    color: #ffd7a0;
    font-weight: bold;
    margin-bottom: 15px;
  }

  .footer-link a {
    color: #f5f5f5;
    text-decoration: none;
    transition: all 0.3s ease;
  }

  .footer-link a:hover {
    color: #ffd7a0;
    padding-left: 6px;
  }

  .social-icons a {
    color: #fff;
    margin-right: 12px;
    font-size: 22px;
    transition: transform 0.3s ease, color 0.3s ease;
  }

  .social-icons a:hover {
    color: #ffd7a0;
    transform: translateY(-5px) scale(1.1);
  }

  .footer-bottom {
    border-top: 1px solid rgba(255,255,255,0.2);
    margin-top: 30px;
    padding-top: 15px;
    font-size: 14px;
  }
</style>

<footer>
  <div class="container">
    <div class="row text-center text-md-start g-4">

      <!-- BRAND -->
      <div class="col-md-4">
        <h5 class="footer-title">🧵 Swastikaa Embroidery</h5>
        <p>
          Handmade embroidery on cloth & handkerchiefs.<br>
          Custom name, logo & wedding embroidery with love and perfection.
        </p>
      </div>

      <!-- SERVICES -->
      <div class="col-md-4 footer-link">
        <h5 class="footer-title">Our Services</h5>
        <p><a href="services.php">Handkerchief Embroidery</a></p>
        <p><a href="services.php">Cloth & Saree Work</a></p>
        <p><a href="services.php">Wedding & Gift Embroidery</a></p>
        <p><a href="services.php">Uniform & Logo Stitching</a></p>
      </div>

      <!-- CONTACT -->
      <div class="col-md-4">
        <h5 class="footer-title">Contact Us</h5>
        <p>📍 Maharashtra, India</p>
        <p>📧 mrunalipatil2244@gmail.com</p>
        <p>📞 +91 9022044520</p>

        <div class="social-icons mt-3">
          <a href="https://www.facebook.com/MrunalPatil"><i class="bi bi-facebook"></i></a>
          <a href="https://www.instagram.com/swastikaa_brand"><i class="bi bi-instagram"></i></a>
          <a href="https://wa.me/919022044520?text=Hello%20I%20want%20details%20about%20embroidery%20work" ><i class="bi bi-whatsapp"></i></a>
        </div>
      </div>

    </div>

    <!-- FOOTER BOTTOM -->
    <div class="footer-bottom text-center mt-4">
      © 2026 <strong style="color:#ffd7a0;">Swastikaa Embroidery</strong>. Handmade with Love 🪡
    </div>
  </div>
</footer>

</body>
</html>