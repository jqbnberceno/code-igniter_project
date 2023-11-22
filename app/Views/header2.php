<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kellog's play</title>
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

        
       
    </style>


<body>

<!-- Your header section -->

<nav class="navbar navbar-expand-lg">
<img src="<?= base_url('images/logo1.png') ?>" alt="Logo" class="logo-img">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('/dashboard') ?>">Overview</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('/dashboard') ?>/#comments">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('/dashboard') ?>/#developers">Developers</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('review') ?>">Reviews</a>
      </li>
    </ul>
    
    <span class="account-link">
    <div class="col-md-6 d-flex justify-content-end" style="margin-left:250px;">
        <?php
        $session = session();
        $username = $session->get('username');
        ?>
        <a href="<?= base_url('user-profile') ?>" class="nav-link text-light" style="margin-right: 20px;"><?= $username ?></a>
        <a href="<?= base_url('logout') ?>" class="btn btn-danger btn-sm rounded-2" id="logout">Logout</a>

        
    </div>
</span>
</nav>
</head>






<!-- Your JavaScript section -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    // JavaScript to handle modal opening on click
    document.getElementById('accountLink').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent default link behavior
        $('#accountModal').modal('show'); // jQuery for Bootstrap modal
    });

    // JavaScript to handle "Register here" link click
    $('#registerLink').click(function(event) {
        event.preventDefault();
        // Handle the action for registering here, e.g., open another modal for registration
        // For demonstration purposes, let's log a message
        window.location.href = '<?php echo base_url("register"); ?>';
    });
</script>







