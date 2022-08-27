<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- bootstrap only css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <!-- bootstrap JavaScript Bundle with Popper -->
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
  ?>

 <main class="container py-5">
   <div class="row" data-masonry='{"percentPosition": true }'>
      <?php for($i = 0; $i < 4; $i++) { ?>
        <div class="<?php echo $divCardColumnBreakpoints ?>">
          <div class="card">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="200" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false">
              <title>Placeholder</title>
              <rect width="100%" height="100%" fill="#868e96"/>
              <text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text>
            </svg>
            <div class="card-body">
              <h5 class="card-title">Card title that wraps to a new line</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
        <div class="<?php echo $divCardColumnBreakpoints ?>">
          <div class="card p-3">
            <figure class="p-3 mb-0">
              <blockquote class="blockquote">
                <p>A well-known quote, contained in a blockquote element.</p>
              </blockquote>
              <figcaption class="<?php echo $blockquoteFooterProperties ?>">
                Someone famous in <cite title="Source Title">Source Title</cite>
              </figcaption>
            </figure>
          </div>
        </div>
        <div class="<?php echo $divCardColumnBreakpoints ?>">
          <div class="card bg-primary text-white text-center p-3">
            <figure class="mb-0">
              <blockquote class="blockquote">
                <p>A well-known quote, contained in a blockquote element.</p>
              </blockquote>
              <figcaption class="<?php echo $blockquoteFooterProperties ?>">
                Someone famous in <cite title="Source Title">Source Title</cite>
              </figcaption>
            </figure>
          </div>
        </div>
      <?php } ?> 
    </div>
  </main>
  
</body>
</html>