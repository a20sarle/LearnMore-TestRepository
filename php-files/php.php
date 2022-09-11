<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CDNs (Content Delivery Networks) used -->
    <!-- bootstrap only css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- bootstrap JavaScript Bundle with Popper for masonry -->
    <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
    <!-- JavaScript Bundle with Popper for modal -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>
<body>

<?php
    $divCardColumnBreakpoints = "col-sm-6 col-lg-4 mb-4";
    $blockquoteFooterProperties = "blockquote-footer mb-0 text-muted";
    $timesToPrintUsingLoop = 3;
  ?>

  <?php for($i = 0; $i < $timesToPrintUsingLoop; $i++) { ?>
    <div class="modal fade" id="exampleModalToggle<?php echo $i?>" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalToggleLabel">Modal <?php echo $i?>.1</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            Show a second modal (1.<?php echo $i?>) and hide this one with the button below.
          </div>
          <div class="modal-footer">
            <button class="btn btn-primary" data-bs-target="#exampleModalToggle2<?php echo $i?>" data-bs-toggle="modal" data-bs-dismiss="modal">Open second modal (<?php echo $i?>.2)</button>
          </div>
        </div>
      </div>
    </div>
  <?php } ?>

  <?php for($i = 0; $i < $timesToPrintUsingLoop; $i++) { ?>
    <div class="modal fade" id="exampleModalToggle2<?php echo $i?>" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalToggleLabel2">Modal <?php echo $i?>.2</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            Hide this modal and show the first with the button below.
          </div>
          <div class="modal-footer">
            <button class="btn btn-primary" data-bs-target="#exampleModalToggle<?php echo $i?>" data-bs-toggle="modal" data-bs-dismiss="modal">Back to first (<?php echo $i?>.1)</button>
          </div>
        </div>
      </div>
    </div>
  <?php } ?>

  <main class="container py-5">
    <div class="row" data-masonry='{"percentPosition": true }'>
      <?php for($i = 0; $i < $timesToPrintUsingLoop; $i++) { ?> 
        <div class="col-sm-6 col-lg-4 mb-4">
            <div class="card">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="200" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#868e96"/>
                <text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text>
              </svg>
              <div class="card-body">
                <h5 class="card-title">Card title that wraps to a new line</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <!-- Button triggering modal to open -->
                <a class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle<?php echo $i?>" role="button">Open first modal <?php echo $i?>.1</a>
              </div>
            </div>
          </div>
      <?php } ?> 
    </div>
  </main>
    
</body>
</html>