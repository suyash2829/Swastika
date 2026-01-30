<?php
include 'include_db.php';

if (isset($_POST['submit'])) {
  

    $name  = $_POST['name'];
    $phone = $_POST['phone'];
    $cloth = $_POST['cloth'];
    $text  = $_POST['text'];
    $qty   = $_POST['qty'];

    // Image upload
    $design = $_FILES['design']['name'];
    $tmp    = $_FILES['design']['tmp_name'];

    if (!empty($design)) {
        move_uploaded_file($tmp, "uploads/" . $design);
    }

    // Insert query
    $sql = "INSERT INTO `orders` ( `name`, `phone`, `cloth`, `text`, `qty`, `desing`) VALUES ('$name', '$phone', '$cloth', '$text', '$qty', '$design')";

    if (mysqli_query($conn, $sql)) {
        echo "<div class='alert alert-success mt-3'>
                ✅ Order placed successfully! We will contact you soon.
              </div>";
    } else {
        echo "<div class='alert alert-danger mt-3'>
                ❌ Something went wrong. Please try again.
              </div>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Swastikaa</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

  <!-- AOS Animation -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <!-- Custom CSS -->
   <link rel="stylesheet" href="css/style.css">
</head>

<body>
     <?php include 'include/navbar.php'; ?>

<div class="hero">
    <h2>Custom Embroidery on Cloth & Handkerchiefs</h2>
</div>

<div class="section" id="services">
    <h2>Our Services</h2>
    <div class="services">
        <div class="card">
            <h3>Handkerchief Embroidery</h3>
            <p>Name & floral embroidery for gifting & daily use.</p>
        </div>
        <div class="card">
            <h3>Cloth & Saree Work</h3>
            <p>Beautiful embroidery for saree, dupatta & dress.</p>
        </div>
        <div class="card">
            <h3>Logo & Uniform</h3>
            <p>Bulk embroidery for schools & offices.</p>
        </div>
        <div class="card">
            <h3>Wedding & Gifts</h3>
            <p>Special embroidery for wedding return gifts.</p>
        </div>
    </div>
</div>

<div class="section" id="order">
    <h2>Place Custom Embroidery Order</h2>
<!--from strat-->
      <form id="orderForm" enctype="multipart/form-data" onsubmit="sendToWhatsApp(); return false;">
        <input type="text" id="name" name="name" placeholder="Your Name" required>
        <input type="text"  id="phone" name="phone" placeholder="Mobile / WhatsApp" required>

        <select id="cloth" name="cloth">
            <option>Handkerchief</option>
            <option>Saree</option>
            <option>Dupatta</option>
            <option>Uniform</option>
        </select>

        <input type="text" id="text" name="text" placeholder="Embroidery Text / Name">
        <input type="number" id="qty" name="qty" placeholder="Quantity" required>
        <input type="file" id="design" name="design">

        <button type="submit" name="submit">Submit Order</button>
    </form>

    <?php
    if(isset($_POST['submit'])){
        echo "<p style='color:green;font-weight:bold;'>Order received! We will contact you soon.</p>";
    }
    ?>
</div>

 
<!--from end-->

<!--Advanced Feature start-->
<!-- FEATURES SECTION -->
<section class="py-5 swastika-features">
  <div class="container text-center">
    <h2 class="section-title mb-5" data-aos="fade-up">
      Why Choose Swastika Embroidery
    </h2>

    <div class="row g-4">

      <div class="col-md-4" data-aos="zoom-in">
        <div class="feature-box">
          <i class="bi bi-scissors"></i>
          <h5>Custom Embroidery</h5>
          <p>Name, logo & design embroidery on cloths & handkerchiefs.</p>
        </div>
      </div>

      <div class="col-md-4" data-aos="zoom-in" data-aos-delay="100">
        <div class="feature-box">
          <i class="bi bi-gem"></i>
          <h5>Premium Quality</h5>
          <p>High-quality threads & finishing for elegant results.</p>
        </div>
      </div>

      <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200">
        <div class="feature-box">
          <i class="bi bi-palette"></i>
          <h5>Unique Designs</h5>
          <p>Traditional & modern embroidery patterns available.</p>
        </div>
      </div>

      <div class="col-md-4" data-aos="fade-up">
        <div class="feature-box">
          <i class="bi bi-truck"></i>
          <h5>Fast Delivery</h5>
          <p>Quick stitching & safe doorstep delivery.</p>
        </div>
      </div>

      <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
        <div class="feature-box">
          <i class="bi bi-heart-fill"></i>
          <h5>Handcrafted Love</h5>
          <p>Every piece is stitched with care & perfection.</p>
        </div>
      </div>

      <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
        <div class="feature-box">
          <i class="bi bi-cash-coin"></i>
          <h5>Affordable Pricing</h5>
          <p>Best embroidery services at reasonable prices.</p>
        </div>
      </div>

    </div>
  </div>
</section>

<!--new sellecter-->
<section class="swastika-newsletter text-center">
  <div class="container">
    <h2 data-aos="fade-up">Get Exclusive Designs</h2>
    <p data-aos="fade-up" data-aos-delay="100">
      Subscribe to receive new embroidery designs & offers
    </p>

    <form class="newsletter-form" data-aos="zoom-in">
      <input type="email" placeholder="Enter your email" required>
      <button type="submit">Subscribe</button>
    </form>
  </div>
</section>



<?php include 'include/footer.php'; ?>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init({ duration: 1000, once: true });
</script>
<script>
function sendToWhatsApp() {
    var name = document.getElementById('name').value;
    var phone = document.getElementById('phone').value;
    var cloth = document.getElementById('cloth').value;
    var text = document.getElementById('text').value;
    var qty = document.getElementById('qty').value;
    var design = document.getElementById('design').value.split('\\').pop(); // file name only

    var whatsappNumber = "919022044520"; // तुझा WhatsApp नंबर

    var message = 
        "Hello Swastika Embroidery,%0A%0A" +
        "Name: " + name + "%0A" +
        "Phone: " + phone + "%0A" +
        "Cloth: " + cloth + "%0A" +
        "Text / Name: " + text + "%0A" +
        "Quantity: " + qty;

    if(design) {
        message += "%0ADesign File: " + design;
    }

    var whatsappURL = "https://wa.me/" + whatsappNumber + "?text=" + message;

    // Open WhatsApp in new tab
    window.open(whatsappURL, "_blank");
}
</script>

</body>
</html>