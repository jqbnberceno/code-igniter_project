<?php include 'header.php'; ?>
<link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@400;700&display=swap" rel="stylesheet">
<style>
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

    h1.text-center
         {
            font-family: 'Orbitron', sans-serif;
        }

        h2
         {
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
            <h2 class="mb-4">Create an Account</h2>
            <?php if (session()->get('success')): ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->get('success')?>
            </div>
            <?php endif;; ?>
            <form id="registrationForm" method="post" action="registeruser">
            <div class="form-group">
                <label for="name">Username</label>
                <input type="text" class="form-control" id="name" name="username" placeholder="Enter your Username">
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="confirm_password">Confirm Password</label>
                <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm Password">
            </div>

            <?php if (isset($validation)): ?>
            <div class="col-12">
                <div class="alert alert-danger" role="alert">
                    <?php echo $validation->listErrors() ?>
                </div>
            </div>
            <?php endif; ?>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<?php include 'footer.php'; ?>
