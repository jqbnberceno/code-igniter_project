<?php include 'header2.php'; ?>
<link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@400;700&display=swap" rel="stylesheet">
<style>
    /* Your existing styles */
    h1.text-center {
        font-family: 'Orbitron', sans-serif;
    }

    textarea.form-control,
    table.table td {
        font-family: 'Exo 2', sans-serif;
    }

    h2 {
        font-family: 'Orbitron', sans-serif;
    }

    /* New styles for container, body, and footer */
    html, body {
        height: 100%;
        margin: 0;
    }

    .wrapper {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }

    .container {
        flex: 1;
    }

    .user-status {
        font-size: 18px;
        margin-top: 20px;
    }

    .verify-btn {
        margin-top: 10px;
    }

    #row{
        margin-top: 30px;
    }
</style>

<div class="row" id="row">
    <div class="col text-center">
        <?php if (session()->get('active') == 1): ?>
            <span class="user-status text-success"><?php echo session()->get('username'); ?> - Verified User</span>
        <?php else: ?>
            <span class="user-status text-danger"><?php echo session()->get('username'); ?> - Not Verified</span>
            <br>
            <a href="<?php echo base_url("send-verification-link"); ?>" class="btn btn-primary verify-btn mt-2">Verify Account</a>
        <?php endif; ?>
    </div>
</div>



<div class="wrapper">
    <div class="container mt-3">
        <div class="row">
            <div class="col">
                <h2 class="text-center mb-4">Your Reviews</h2>
                <table class="table table-striped mt-3">
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>Review Text</th>
                            <th>Date Posted</th>
                        </tr>
                    </thead>
                    <tbody id="reviewTable">
                        <?php foreach ($userReviews as $review): ?>
                            <tr>
                                <td><?php echo $review['username']; ?></td>
                                <td><?php echo $review['review']; ?></td>
                                <td><?php echo $review['date']; ?></td>
                                <td>
                                    <form action="<?php echo base_url('delete-review'); ?>" method="post">
                                        <input type="hidden" name="review_id" value="<?php echo $review['id']; ?>">
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>

    <?php include 'footer.php'; ?>
</div>
