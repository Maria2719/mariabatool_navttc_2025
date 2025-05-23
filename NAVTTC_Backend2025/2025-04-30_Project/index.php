<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Landing Page</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/footers/">

    

    <!-- Bootstrap core CSS -->
<link href="/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  
</head>
<body>
  <!--Navbar starts here-->

    <?php
    require "Includes/navbar.php";
    ?>

  <!-- <nav ends> -->

<!--main starts-->

<div class="card-group">
  <div class="card">
    <img src="images/intro.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">INTRODUCTION</h5>
      <p class="card-text">The University of ICT is a premier institution dedicated to excellence in Information and Communication Technology education and research. It empowers students with cutting-edge knowledge, innovative skills, and industry-focused training. Committed to academic excellence and technological advancement, the university nurtures future leaders in the ever-evolving digital and technological landscape.
</p>
    </div>
    <div class="card-footer">
      <small class="text-body-secondary">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img src="images/vision.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">OUR VISION</h5>
      <p class="card-text">The vision of the University of ICT is to be a global leader in Information and Communication Technology education, research, and innovation. It aspires to empower individuals through transformative learning, foster technological advancements, and contribute to societal progress by producing skilled professionals who shape the future of the digital world.
</p>
    </div>
    <div class="card-footer">
      <small class="text-body-secondary">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img src="images/outreach.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">OUTREACH</h5>
      <p class="card-text">The University of ICT actively extends its impact beyond academia through strategic industry partnerships, community engagement, and global collaborations. By promoting digital literacy, offering training programs, and supporting innovation hubs, the university fosters inclusive technological growth, empowering communities and contributing to national and international ICT development initiatives.
</p>
    </div>
    <div class="card-footer">
      <small class="text-body-secondary">Last updated 3 mins ago</small>
    </div>
  </div>
</div><!-- main ends -->

<!--footer starts -->

<?php
    require "Includes/footer.php";
    ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
   
</body>
</html>

