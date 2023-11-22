<?php namespace App\Controllers;

use App\Models\Review_model;

class Crud_controller extends BaseController {    


    public function addReview() {
        // Retrieve the review data from the POST request
        $reviewText = $this->request->getPost('reviewText');
        $username = session()->get('username');
        
        // Create an instance of the Review model
        $reviewModel = new Review_model();

        if (empty($reviewText)) {
            $reviewText = 'No review provided';
        }
        
        // Prepare the data to be inserted
        $data = [
            'username' => $username,
            'review' => $reviewText, // Assuming 'review' is the actual column name in your database
        ];
        
        
        // Save the review to the database
        if ($reviewModel->insert($data)) {
            // Review saved successfully
            return redirect()->to('/review');
        } else {
            // Error in saving the review
            return redirect()->back()->with('error', 'Failed to add review');
        }
    }

    public function deleteReview()
{
    $reviewId = $this->request->getPost('review_id');

    if (!empty($reviewId)) {
        $reviewModel = new Review_model();
        $reviewModel->where('id', $reviewId)->delete();

        return redirect()->to('/user-profile');
        // Redirect or handle success message
    } else {
        return redirect()->to('/user-profile');
    }
}


    
    
    
}