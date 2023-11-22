<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Attack on Cell</title>
    <link href="css/style.css/" rel="stylesheet">
    <?php include 'style.php'; ?>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">
    
    
</head>
<body>
<style>
        /* Your custom CSS */
        header {
            background-color: #343a40;
            color: #fff;
            padding: 2px 0; /* Reduced top and bottom padding */
        }

        .logo {
            display: flex;
            align-items: center;
            margin-left: 20px; /* Increase margin to move the logo further to the left */
            margin-right: auto; /* Pushes the logo to the left */
        }

        .logo-img {
            width: 200px; /* Smaller logo width */
            height: auto; /* Let the height adjust proportionally */
        }

        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between; /* Adjust content alignment */
            height: 70px;
            padding: 0 20px; /* Add padding for the navbar */
            background-color: black;
            color: white; /* Text color */
            font-family: 'Orbitron', sans-serif;
        }

        .navbar .navbar-nav .nav-link {
            color: white !important; /* Set text color for navbar links */
            transition: color 0.3s ease; /* Add transition for color change */
            margin-right:20px;

        }

        .navbar .navbar-nav .nav-link:hover {
            color: yellow; /* Change color on hover */
        }

        @media (max-width: 768px) {
            .navbar {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            .nav-links {
                flex-direction: column;
                gap: 10px; /* Reduce gap for smaller screens */
            }
        }

        .navbar-nav {
            margin-left: 30px;
        }

        .account-link {
            margin-left: auto; /* Move the link to the right */
            margin-right: 50px;
        }

        .navbar .navbar-nav .nav-link,
        .account-link .nav-link {
            /* Other styles */
            font-family: 'Orbitron', sans-serif; /* Apply Orbitron font to navbar links */
            transition: transform 0.3s ease; /* Add transition for smooth hover effect */
        }

        /* Animation effect on hover */
        .navbar .navbar-nav .nav-link:hover,
        .account-link .nav-link:hover {
            transform: scale(1.1); /* Scale up the element on hover */
        }

        /* Adjust modal styles as needed */

.modal-content {
  border-radius: 8px;
}

.modal-header {
  border-bottom: none; /* Remove border on header */
}

.modal-title {
  font-weight: bold;
}

.modal-body {
  padding: 20px;
}

.form-group {
  margin-bottom: 20px;
}

.form-control {
  border-radius: 4px;
  border: 1px solid #ced4da;
  padding: 8px;
}

.btn-primary {
  border-radius: 4px;
  padding: 8px 20px;
  background-color: #007bff;
  border: none;
}

.btn-primary:hover {
  background-color: #0056b3;
}

#registerLink {
  color: #007bff;
  text-decoration: none;
}

#registerLink:hover {
  text-decoration: underline;
}

    </style>


<body>

<!-- Your header section -->

<nav class="navbar navbar-expand-lg">
<img src="<?= base_url('images/logo1.png') ?>" alt="Logo" class="logo-img" href="<?= base_url('/') ?>">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('/') ?>">Overview</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('/') ?>/#comments">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('/') ?>/#developers">Developers</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('reviews') ?>">Reviews</a>
      </li>
    </ul>
    <span class="account-link">
    <a href="#" class="nav-link" id="accountLink">Account</a>
        </span>
  </div>
</nav>
    </head>



<!-- Modal -->
<div class="modal fade" id="accountModal" tabindex="-1" role="dialog" aria-labelledby="accountModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <!-- Your modal content here -->
            <div class="modal-header">
                <h5 class="modal-title" id="accountModalLabel">Sign In</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Form for email and password -->
                <form id="accountForm" method="post" action="<?= base_url('login') ?>"> <!-- Adjust the action to your login route -->
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
                <div class="mt-3">
                    <p>Don't have an account? <a href="#" id="registerLink">Register here</a></p>
                </div>

            </div>
        </div>
    </div>
</div>


<!-- Your JavaScript section -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    // JavaScript to handle modal opening on click
    $(document).ready(function() {
    // JavaScript to handle modal closing on 'X' click
    $('.modal-header .close').click(function() {
        $('#accountModal').modal('hide');
    });

    // JavaScript to handle modal opening on click
    $('#accountLink').click(function(event) {
        event.preventDefault(); // Prevent default link behavior
        $('#accountModal').modal('show');
    });

    // JavaScript to handle "Register here" link click
   $('#registerLink').click(function(event) {
    event.preventDefault();
    // Redirect to the registration page
    window.location.href = '<?php echo base_url("register"); ?>';
});

});

document.addEventListener("DOMContentLoaded", function() {
        <?php if (session()->getFlashdata('login_error')): ?>
            // Display an alert for login error
            alert("<?php echo session()->getFlashdata('login_error'); ?>");
        <?php endif; ?>
    });

    document.addEventListener("DOMContentLoaded", function() {
        <?php if (session()->getFlashdata('logout_success')): ?>
            // Display an alert for successful logout
            alert("<?php echo session()->getFlashdata('logout_success'); ?>");
        <?php endif; ?>
    });

</script>







