 <!-- Footer -->
 <footer class="bg-dark text-light py-5">
 <img src="<?= base_url('images/logo1.png') ?>" alt="Left Image" class="left-image">
    <div class="container text-center">
        &copy; 2023 Tus Brothers. All Rights Reserved.
    </div>
    
    <img src="<?= base_url('images/eserb.png') ?>" alt="Right Image" class="right-image">
</footer>




    <style>
footer {
  background-color: #343a40;
  color: white;
  height: 200px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  position: relative;
}

.left-image {
  height: 200px; /* Set explicit height for the left image */
  width: 200px; /* Maintain aspect ratio */
  margin-right: auto;
  margin-left: 20px;
}

.right-image {
  height: 100px; /* Set explicit height for the right image */
  width: 100px; /* Maintain aspect ratio */
  margin-left: auto;
  margin-right: 20px;
}

/* Media query for responsiveness */
@media (max-width: 768px) {
  footer {
    justify-content: center;
    text-align: center;
    flex-wrap: wrap;
  }

  .left-image,
  .right-image {
    margin: 10px 0;
  }
}



</style>

   