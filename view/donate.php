<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Angkulam - Donate</title>
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
            <h2>Donate to Angkulam</h2>
            <p>Select a donation method:</p>
            <div class="card-deck">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">UPI</h5>
                        <p class="card-text">Enter UPI details for donation.</p>
                        <button class <button class="btn btn-primary" data-toggle="modal" data-target="#upiModal">Donate via UPI</button>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Credit Card</h5>
                        <p class="card-text">Enter credit card details for donation.</p>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#creditCardModal">Donate via Credit Card</button>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Net Banking</h5>
                        <p class="card-text">Enter net banking details for donation.</p>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#netBankingModal">Donate via Net Banking</button>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- UPI Modal -->
    <div class="modal fade" id="upiModal" tabindex="-1" aria-labelledby="upiModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="upiModalLabel">Donate via UPI</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="upiId">UPI ID</label>
                            <input type="text" class="form-control" id="upiId" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Donate</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Credit Card Modal -->
    <div class="modal fade" id="creditCardModal" tabindex="-1" aria-labelledby="creditCardModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="creditCardModalLabel">Donate via Credit Card</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="cardNumber">Card Number</label>
                            <input type="text" class="form-control" id="cardNumber" required>
                        </div>
                        <div class="form-group">
                            <label for="cardExpiry">Expiry Date</label>
                            <input type="text" class="form-control" id="cardExpiry" required>
                        </div>
                        <div class="form-group">
                            <label for="cardCVC">CVC</label>
                            <input type="text" class="form-control" id="cardCVC" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Donate</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Net Banking Modal -->
    <div class="modal fade" id="netBankingModal" tabindex="-1" aria-labelledby="netBankingModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="netBankingModalLabel">Donate via Net Banking</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
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
                        <button type="submit" class="btn btn-primary">Donate</button>
                    </form>
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