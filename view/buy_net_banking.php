<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Angkulam - Buy Book via Net Banking</title>
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
            <h2>Buy Book via Net Banking</h2>
            <form>
                <div class="form-group">
                    <label for="bankName">Bank Name</label>
                    <input type="text" class="form-control" id="bankName" required>
                </div>
                <div class="form-group">
                    <label for="accountNumber">Account Number</label>
                    <input type="text" class="form-control" id="accountNumber" required>
                </div>
                <div class="form-group">
                    <label for="ifscCode">IFSC Code</label>
                    <input type="text" class="form-control" id="ifscCode" required>
                </div>
                <button type="submit" class="btn btn-primary">Pay</button>
            </form>
        </section>
    </main>

    <!-- Bootstrap JS and custom scripts -->
    <script src="
https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>