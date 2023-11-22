<?php include 'header2.php'; ?>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@400;700&display=swap" rel="stylesheet">
    <style>
        h1.text-center
         {
            font-family: 'Orbitron', sans-serif;
        }

        h2
         {
            font-family: 'Orbitron', sans-serif;
        }

        textarea.form-control,
        table.table td {
            font-family: 'Exo 2', sans-serif;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">User Reviews</h2>

        <table class="table table-striped mt-3">
            <!-- Table headers -->
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Reviews</th>
                    <th>Date Posted</th>
                </tr>
            </thead>
            <tbody id="reviewTable">
                <?php foreach ($reviews as $review): ?>
                    <tr>
                        <td><?php echo $review['username']; ?></td>
                        <td><?php echo $review['review']; ?></td>
                        <td><?php echo $review['date']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <!-- Add a Review form -->
        <h1 class="text-center">Add a Review!</h1>
<form class="mt-4" action="<?php echo base_url('add-review'); ?>" method="post" id="reviewForm">
    <div id="reviewTextContainer" class="col-md-12 mb-4">
        <textarea id="reviewText" name="reviewText" class="form-control" rows="5" placeholder="What are your thoughts?"></textarea>
    </div>
    <button type="submit" class="btn btn-primary btn-lg mt-3 mb-4" id="postReviewBtn" disabled>Post Review</button>
</form>

    </div>

    <?php include 'footer.php'; ?>

    <script>
    document.addEventListener("DOMContentLoaded", function () {
        const reviewTextarea = document.getElementById('reviewText');
        const postReviewBtn = document.getElementById('postReviewBtn');

        reviewTextarea.addEventListener('input', function () {
            if (reviewTextarea.value.trim() !== '') {
                postReviewBtn.disabled = false;
            } else {
                postReviewBtn.disabled = true;
            }
        });
    });
</script>

