<?php include 'header2.php'; ?>
<link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@400;700&display=swap" rel="stylesheet">
<style>
    /* Your existing styles */
    body {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
        margin: 0;
        font-family: Arial, sans-serif;
    }

    .container {
        flex: 1;
        padding: 20px;
    }

    .footer {
        background-color: #f5f5f5;
        padding: 10px 0;
        text-align: center;
    }

   

    h2 {
        font-family: 'Orbitron', sans-serif;
    }

label {
    font-family: 'Exo 2', sans-serif;
        }

        .btn-primary {
            font-family: 'Exo 2', sans-serif;
            font-size: 18px;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            color: #fff;
            background-color: #007bff;
        }

</style>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="my-4"> <!-- Added margin -->
                <h2>Email Verification</h2>
            </div>
            <?php if (session()->get('error')): ?>
                <div class="alert alert-danger my-3" role="alert"> <!-- Added margin -->
                    <?= session()->get('error') ?>
                </div>
            <?php endif; ?>
            <?php if (session()->get('success')): ?>
                <div class="alert alert-success my-3" role="alert"> <!-- Added margin -->
                    <?= session()->get('success') ?>
                </div>
            <?php endif; ?>
            <form id="verificationForm" method="post" action="<?php echo base_url('/verify-user'); ?>">
                <div class="form-group my-3"> <!-- Added margin -->
                    <label for="verification_token">Enter Verification Token</label>
                    <input type="text" class="form-control" id="verification_token" name="verification_token" placeholder="Enter verification token">
                </div>
                <?php if (isset($validation)): ?>
                    <div class="alert alert-danger my-3" role="alert"> <!-- Added margin -->
                        <?php echo $validation->listErrors() ?>
                    </div>
                <?php endif; ?>
                <button type="submit" class="btn btn-primary my-3">Verify</button> <!-- Added margin -->
            </form>
        </div>
    </div>
</div>

<div class="footer">
    <?php include 'footer.php'; ?>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
