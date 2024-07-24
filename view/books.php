<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Angkulam - Books</title>
  <!-- Bootstrap CSS, Custom CSS, Fonts -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Angkulam</a>
      <!-- Navigation links as needed -->
    </nav>
  </header>

  <main class="container mt-5">
    <section>
      <h2>Books</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img src="book1.jpg" class="card-img-top" alt="Book 1">
            <div class="card-body">
              <h5 class="card-title">Book Title 1</h5>
              <h6 class="card-subtitle mb-2 text-muted">Book Subtitle 1</h6>
              <p class="card-text">Price: ₹500</p>
              <button class="btn btn-primary" data-toggle="modal" data-target="#buyBookModal">Buy Now</button>
            </div>
          </div>
        </div>
        <!-- More book cards -->
      </div>
    </section>
  </main>

  <!-- Buy Book Modal -->
  <div class="modal fade" id="buyBookModal" tabindex="-1" aria-labelledby="buyBookModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="buyBookModalLabel">Buy Book</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Select a payment method:</p>
          <div class="list-group">
            <a href="buy_upi.html" class="list-group-item list-group-item-action">UPI</a>
            <a href="buy_credit_card.html" class="list-group-item list-group-item-action">Credit Card</a>
            <a href="buy_net_banking.html" class="list-group-item list-group-item-action">Net Banking</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS and custom scripts -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
