<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- bootstrap only css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <!-- bootstrap JavaScript Bundle with Popper for masonry -->
  <script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>
  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
</head>
<body>

  <?php
    $divCardColumnBreakpoints = "col-sm-6 col-lg-4 mb-4";
    $blockquoteFooterProperties = "blockquote-footer mb-0 text-muted";
    $timesToPrintUsingLoop = 4;
  ?>

  <main class="container py-5">
    <div class="row" data-masonry='{"percentPosition": true }'>
      <?php for($i = 0; $i < $timesToPrintUsingLoop; $i++) { ?>       
      <?php } ?> 
    </div>
  </main>

  <?php for($i = 0; $i < $timesToPrintUsingLoop; $i++) { ?>
  <?php } ?>

  <?php for($i = 0; $i < $timesToPrintUsingLoop; $i++) { ?>
  <?php } ?>
  
</body>
</html>