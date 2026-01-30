<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>About Us | Swastika Embroidery</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

   <!-- Custom CSS -->
   <link rel="stylesheet" href="css/style.css">

 <body>
     <?php include 'include/navbar.php'; ?>

<link rel="stylesheet" href="assets/css/style.css">

<div class="container py-5">

    <!-- ABOUT HEADER -->
    <div class="section-title">
        <h2>About Swastika Embroidery</h2>
        <p>Crafting beauty with thread, tradition, and trust</p>
    </div>

    <!-- ABOUT CONTENT -->
    <div class="row align-items-center g-5">
        
        <!-- IMAGE -->
        <div class="col-md-6">
            <img src="img/About.jpg" 
                 class="img-fluid rounded-4 shadow"
                 alt="Swastika Embroidery Work">
        </div>

        <!-- TEXT -->
        <div class="col-md-6">
            <h3 style="color:#7b1e3a;font-weight:600;">
                Handcrafted Embroidery with Love ❤️
            </h3>

            <p class="mt-3">
                <strong>Swastika Embroidery</strong> is a dedicated embroidery and
                handkerchief sealing service that blends traditional craftsmanship
                with modern designs. Every stitch we create reflects patience,
                precision, and passion.
            </p>

            <p>
                From elegant saree embroidery to customized handkerchief name
                sealing, we ensure premium quality work that makes your fabric
                truly special.
            </p>

            <ul class="mt-3">
                <li>✨ Custom embroidery designs</li>
                <li>🧵 Hand & machine embroidery</li>
                <li>🎁 Personal & gifting solutions</li>
                <li>📦 Bulk & individual orders</li>
            </ul>
        </div>
    </div>

    <!-- WHY CHOOSE US -->
    <div class="mt-5">
        <div class="section-title">
            <h2>Why Choose Us</h2>
        </div>

        <div class="row g-4 text-center">
            <div class="col-md-4">
                <div class="service-card p-4">
                    <h4>Quality Work</h4>
                    <p>Every piece is carefully embroidered with attention to detail.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="service-card p-4">
                    <h4>Custom Designs</h4>
                    <p>Your idea, your style – we create exactly what you imagine.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="service-card p-4">
                    <h4>Trusted Service</h4>
                    <p>Timely delivery, fair pricing, and customer satisfaction.</p>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="container py-5">
    <div class="section-title">
        <h2>Our Embroidery Services</h2>
        <p>Handcrafted embroidery with love & perfection</p>
    </div>

    <div class="row g-4">
        <!-- Service 1 -->
        <div class="col-md-6 col-lg-3">
            <div class="service-card">
                <img src="img/a1.jpg" alt="Embroidery Saree">
                <div class="service-content">
                    <h4>Custom Saree Embroidery</h4>
                    <p>Beautiful hand embroidery designs for sarees & dupattas.</p>
                    <a href="index.php#order" class="order-btn">Order Now</a>
                </div>
            </div>
        </div>

        <!-- Service 2 -->
        <div class="col-md-6 col-lg-3">
            <div class="service-card">
                <img src="img/a2.jpg" alt="Handkerchief Embroidery">
                <div class="service-content">
                    <h4>Handkerchief Sealing</h4>
                    <p>Name & logo embroidery for personal & gifting needs.</p>
                    <a href="index.php#order" class="order-btn">Order Now</a>
                </div>
            </div>
        </div>

        <!-- Service 3 -->
        <div class="col-md-6 col-lg-3">
            <div class="service-card">
                <img src="img/a3.jpg" alt="Blouse Embroidery">
                <div class="service-content">
                    <h4>Blouse Embroidery</h4>
                    <p>Traditional & modern blouse embroidery designs.</p>
                    <a href="index.php#order" class="order-btn">Order Now</a>
                </div>
            </div>
        </div>

        <!-- Service 4 -->
        <div class="col-md-6 col-lg-3">
            <div class="service-card">
                <img src="img/a4.jpg" alt="Dress Embroidery">
                <div class="service-content">
                    <h4>Dress & Kurti Work</h4>
                    <p>Elegant embroidery for dresses, kurtis & suits.</p>
                    <a href="index.php#order" class="order-btn">Order Now</a>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include 'include/footer.php'; ?>

<!-- JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>AOS.init({duration:1000,once:true});</script>

</body>
</html>
