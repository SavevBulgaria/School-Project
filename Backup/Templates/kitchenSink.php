<!DOCTYPE html>
<html>
<head>
  <style>
    /* Additional styles for the cards */
    .card {
      margin-bottom: 20px;
      max-width: calc(9rem + 10%);
      width: calc(9rem + 10%);
    }

    /* New styles for the container */
    .container {
      display: flex;
      justify-content: center;
      overflow-x: auto;
      padding: 0 10px;
      gap: 20px;
    }
  </style>
</head>
<body>
  <div class="container">
    <!-- Card 1 -->
    <div class="card" style="width: calc(9rem + 10%);">
      <img src="../../Assets/menuitems/random.jpg" class="card-img-top" alt="Image 1">
      <div class="card-body">
        <h5 class="card-title">Card 1</h5>
        <p class="card-text">Some information about Card 1.</p>
      </div>
      <div class="card-body">
        <a href="#" class="card-link">Visit</a>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="card" style="width: calc(9rem + 10%);">
      <img src="../../Assets/menuitems/random.jpg" class="card-img-top" alt="Image 2">
      <div class="card-body">
        <h5 class="card-title">Card 2</h5>
        <p class="card-text">Some information about Card 2.</p>
      </div>
      <div class="card-body">
        <a href="#" class="card-link">Visit</a>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="card" style="width: calc(9rem + 10%);">
      <img src="../../Assets/menuitems/random.jpg" class="card-img-top" alt="Image 3">
      <div class="card-body">
        <h5 class="card-title">Card 3</h5>
        <p class="card-text">Some information about Card 3.</p>
      </div>
      <div class="card-body">
        <a href="#" class="card-link">Visit</a>
      </div>
    </div>
  </div>

  <!-- Include Bootstrap JS (jQuery and Popper.js dependencies are also required) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
