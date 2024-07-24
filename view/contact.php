<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Angkulam - Contact</title>
  <!-- Bootstrap CSS, Custom CSS, Fonts -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="style/styles.css">
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
      <h2>Contact Information</h2>
      <p>Phone: +91 XXXXXXXXXX</p>
      <p>Email: contact@angkulam.com</p>
    </section>
    <section>
      <h2>Contact Form</h2>
      <form>
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name" required>
        </div>
        <div class="form-group">
          <label for="address">Address</label>
          <!-- Add fields for Country, State, City, Street -->
        </div>
        <div class="form-group">
          <label for="phone">Phone</label>
          <input type="tel" class="form-control" id="phone" required>
        </div>
        <div class="form-group">
          <label for="email">Email address</label>
          <input type="email" class="form-control" id="email" required>
        </div>
        <div class="form-group">
          <label for="dob">Date of Birth</label>
          <input type="date" class="form-control" id="dob">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </section>
  </main>

  <!-- Bootstrap JS and custom scripts -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
