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
  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
  <script>
    // do this on site load
    $(document).ready(function(){

      // Fetch all elements with class 'link'

      var elems = document.querySelectorAll('.link');

      // Add clickListener to all elemnts with class 'link'
      // and when one of those elements are clicked, write out its 
      // index position and value of attribute "name" in the console

      elems.forEach(function (elem, i){
        elem.addEventListener("click", function(){

          // Details of the nodes

          console.log('This element has...');
          console.log(' attribute: name="'+this.name);
          console.log(' index position: ' + i);
          console.log(' tag text: ' + this.innerText);

          // Make different things happen depending on the link
          // clicked
          
          if ( this.name == 'link1' ) 
          {
            console.log(' inside if-statement of "link1"');
          }
          else if ( this.name == 'link2' ) 
          {
            console.log(' inside if-statement of "link2"');
          }
          else
          { 
            console.log(' This is NOT link1 or link2.');
          }

        });
      });    

    });
  </script>
</head>
<body>

  <a class="link" name="link1">Link 1</a>
  <a class="link" name="link2">Link 2</a>
  <a class="link" name="link3">Link 3</a>
  <a class="link" name="link3">Link 4</a>

  <?php
    $divCardColumnBreakpoints = "col-sm-6 col-lg-4 mb-4";
    $blockquoteFooterProperties = "blockquote-footer mb-0 text-muted";
    $timesToPrintUsingLoop = 4;
  ?>

  <?php for($i = 0; $i < $timesToPrintUsingLoop; $i++) { ?>
    <div class="modal fade" id="exampleModalToggle<?php echo $i?>" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalToggleTitleLabel">Modal 1.<?php echo $i?></h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            Show a second modal (1.<?php echo $i?>) and hide this one with the button below.
          </div>
          <div class="modal-footer">
            <button class="btn btn-primary" data-bs-target="#exampleModalToggle2<?php echo $i?>" data-bs-toggle="modal" data-bs-dismiss="modal">Open second modal (1.<?php echo $i?>)</button>
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
            <h5 class="modal-title" id="exampleModalTitleToggleLabel2">Modal 2 (1.<?php echo $i?>)</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            Hide this modal and show the first with the button below.
          </div>
          <div class="modal-footer">
            <button class="btn btn-primary" data-bs-target="#exampleModalToggle<?php echo $i?>" data-bs-toggle="modal" data-bs-dismiss="modal">Back to first (1.<?php echo $i?>)</button>
          </div>
        </div>
      </div>
    </div>
  <?php } ?>

  <main class="container py-5">
    <div class="row" data-masonry='{"percentPosition": true }'>
      <?php for($i = 0; $i < $timesToPrintUsingLoop; $i++) { ?> 
        <a class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle<?php echo $i?>" role="button">Open first modal <?php echo $i?></a>      
      <?php } ?> 
    </div>
  </main>
  
</body>
</html>