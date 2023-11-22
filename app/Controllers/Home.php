<?php

namespace App\Controllers;


use App\Models\Review_model;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function register(): string
    {
        return view('register_user');
    }

    public function dashboard(): string
{
    return view('dashboard');
}


    public function review(): string
    {
        $reviewModel = new Review_model();
    $data['reviews'] = $reviewModel->findAll(); // Fetch all reviews from the database

    // Pass the data to the view
    return view('review_game', $data);
    }

    public function review2(): string
    {
        $reviewModel = new Review_model();
    $data['reviews'] = $reviewModel->findAll(); // Fetch all reviews from the database

    // Pass the data to the view
    return view('reviews', $data);
    }

    public function user_reviews(): string
    {
        return view('review_game');
    }

    public function userReviews(): string
{
    // Retrieve the username from the session
    $username = session()->get('username'); // Replace 'username' with your session key name

    // Create an instance of the Review_model
    $reviewModel = new Review_model();

    // Fetch reviews for the current user from the database
    $data['userReviews'] = $reviewModel->where('username', $username)->findAll();

    // Pass the data to the view
    return view('user_profile', $data);
}

public function verify_user(): string
    {
        return view('verify_user');
    }

    public function sendEmail()
    {
        // Load the email library
        $email = \Config\Services::email();

        // Set email parameters
        $email->setTo('juaquin.berceno@gmail.com.com'); // Replace with recipient's email
        $email->setFrom('juaquin.bercenoo@gmail.com', 'Nigga san!'); // Replace with your email and name
        $email->setSubject('Test Email');
        $email->setMessage('This is a test email.');

        // Attempt to send email
        if ($email->send()) {
            echo 'Email sent successfully!';
        } else {
            echo 'Failed to send email.';
            echo $email->printDebugger(['headers']);
        }
    }

}
