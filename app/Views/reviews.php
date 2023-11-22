<?php include 'header.php'; ?>
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
    </div>
</body>

<?php include 'footer.php'; ?>