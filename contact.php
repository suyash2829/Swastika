
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


<link rel="stylesheet" href="css/style.css">

<div class="container py-5">

  <!-- PAGE TITLE -->
  <div class="section-title text-center mb-5">
    <h2>Contact Us</h2>
    <p>We’d love to stitch your ideas into reality</p>
  </div>

  <div class="row g-5 align-items-center">

    <!-- CONTACT INFO -->
    <div class="col-md-5">
      <div class="contact-box p-4 shadow rounded-4">
        <h4 class="mb-3" style="color:#7b1e3a;">Swastika Embroidery</h4>

        <p>
          <i class="bi bi-geo-alt-fill me-2"></i>
          Pune, Maharashtra, India
        </p>

        <p>
          <i class="bi bi-telephone-fill me-2"></i>
          +91 90220 44520
        </p>

        <p>
          <i class="bi bi-whatsapp me-2"></i>
          WhatsApp Available
        </p>

        <p>
          <i class="bi bi-envelope-fill me-2"></i>
          swastikaembroidery@gmail.com
        </p>

        <hr>

        <p class="mb-2 fw-semibold">Working Hours</p>
        <p>Mon – Sat : 10 AM – 6 PM</p>

        <!-- SOCIAL ICONS -->
        <div class="mt-3">
          <a href="https://www.instagram.com/swastikaa_brand" class="me-3 text-dark"><i class="bi bi-instagram fs-4"></i></a>
          <a href="https://www.facebook.com/MrunalPatil" class="me-3 text-dark"><i class="bi bi-facebook fs-4"></i></a>
          <a href="https://wa.me/919022044520?text=Hello%20I%20want%20details%20about%20embroidery%20work" class="text-dark"><i class="bi bi-whatsapp fs-4"></i></a>
          
        </div>
      </div>
    </div>
   

    <!-- CONTACT FORM -->
    <div class="col-md-7">
      <div class="contact-form p-4 shadow rounded-4">
        <h4 class="mb-4" style="color:#7b1e3a;">Send Us a Message</h4>

        <form onsubmit="sendToWhatsApp(); return false;">

          <div class="mb-3">
            <input type="text" name="name" class="form-control"
                   placeholder="Your Name" required>
          </div>

          <div class="mb-3">
            <input type="tel" name="phone" class="form-control"
                   placeholder="Mobile / WhatsApp Number" required>
          </div>

          <div class="mb-3">
            <input type="email" name="email" class="form-control"
                   placeholder="Email Address">
          </div>

          <div class="mb-3">
            <textarea name="message" rows="4" class="form-control"
                      placeholder="Your Message / Order Details" required></textarea>
          </div>

          <button type="submit" name="submit" class="btn swastika-btn w-100">
            Send Message
          </button>
        </form>

        <?php
        if(isset($_POST['submit'])){
          echo "<p class='mt-3 text-success fw-semibold'>
                Thank you! We will contact you shortly.
                </p>";
        }
        ?>
      </div>
    </div>

  </div>
</div>

<?php include 'include/footer.php'; ?>

<!-- JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>AOS.init({duration:1000,once:true});</script>

<script>
function sendToWhatsApp(){

  var name = document.querySelector('input[name="name"]').value;
  var phone = document.querySelector('input[name="phone"]').value;
  var email = document.querySelector('input[name="email"]').value;
  var message = document.querySelector('textarea[name="message"]').value;

  var whatsappNumber = "919022044520"; // country code + number

  var whatsappMessage =
    "Hello Swastika Embroidery,%0A%0A" +
    "Name: " + name + "%0A" +
    "Phone: " + phone + "%0A" +
    "Email: " + email + "%0A%0A" +
    "Message:%0A" + message;

  var whatsappURL = "https://wa.me/" + whatsappNumber + "?text=" + whatsappMessage;

  window.open(whatsappURL, "_blank");
}
</script>


</body>
</html>
