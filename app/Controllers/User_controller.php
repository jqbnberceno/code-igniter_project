<?php namespace App\Controllers;

use App\Models\User_model;

class User_controller extends BaseController {    

    

    public function registeruser()
{
    $data = [];
    helper(['form']);

    if ($this->request->getMethod() == 'post') {
        $rules = [
            'username' => 'required|min_length[5]|max_length[20]',
            'email' => 'required|min_length[5]|max_length[30]|valid_email',
            'password' => 'required|min_length[8]|max_length[50]',
            'confirm_password' => 'matches[password]',
        ];

        if (!$this->validate($rules)) {
            $data['validation'] = $this->validator;
            return view('register_user', $data);
        } else {
            
            $model = new User_model();

            $newData = [

                'username'=> $this->request->getVar('username'),
                'email'=> $this->request->getVar('email'),
                'password'=> $this->request->getVar('password'),


            ];

            $model ->save($newData);
            $session = session();
            $session->setFlashdata('success','Successfuly Registered');
            return redirect()->to('/');

        
        }
    } else {
        // If the request method is not POST, you might want to handle it accordingly
        // For example, display the initial registration form
        return view('register_user', $data);
    }
}



// Your controller method for sending verification link
public function sendVerificationLink()
{
    // Get the logged-in username from the session
    $loggedInUsername = session()->get('username');

    // Retrieve the user's data based on the username
    $userModel = new User_model();
    $userData = $userModel->where('username', $loggedInUsername)->first();

    if (!$userData) {
        // Handle the case where the user data is not found
        // (e.g., redirect with an error message)
        return redirect()->to('/dashboard')->with('error', 'User not found');
    }

    // Function to generate verification code
    function generateVerificationCode()
    {
        $length = 8; // Set the desired length of the verification code
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $verificationCode = '';

        for ($i = 0; $i < $length; $i++) {
            $verificationCode .= $characters[rand(0, strlen($characters) - 1)];
        }

        return $verificationCode;
    }

    // Generate a verification code
    $verificationCode = generateVerificationCode();

    // Save the verification code in the database against the user's data
    $username = $userData['username'];
    $userModel->where('username', $username)
              ->set(['code' => $verificationCode])
              ->update();

    // Get the user's email from the retrieved data
    $userEmail = $userData['email'];

    // Send the email with the verification code
    $email = \Config\Services::email();
    $email->setTo($userEmail);
    $email->setSubject('Email Verification');
    $email->setMessage('Your verification code is: ' . $verificationCode);
    $email->send();

    return redirect()->to('/verify');

    // Redirect or handle the response as needed
}

public function verify_user()
{
    $verificationToken = $this->request->getPost('verification_token');

    // Get the user data based on the verification token
    $userModel = new User_model();
    $userData = $userModel->where('code', $verificationToken)->first();

    if (!$userData) {
        // Handle case where verification token is invalid
        // Redirect with an error message or show an error page
        return redirect()->to('/verify')->with('error', 'Invalid verification token');
    }

    // Check if the user is already active
    if ($userData['active'] == 1) {
        // Handle case where user is already active
        // Redirect with a message or show an appropriate view
        return redirect()->to('/verify')->with('message', 'User is already verified');
    }

    // Update the user's active status to 1 (verified)
    $userModel->where('code', $verificationToken)->set('active', 1)->update();

    // Redirect or show a success message to indicate successful verification
    return redirect()->to('/dashboard')->with('success', 'User verified successfully');
}





public function login()
{
    $username = $this->request->getPost('username');
    $password = $this->request->getPost('password');

    $model = new User_model();
    $user = $model->where('username', $username)->first();

    // Check if the user exists and compare the passwords
    if ($user && $password === $user['password']) {
        // Start a session and set user data
        $session = session();
        $userData = [
            'username' => $user['username'],
            'active' => $user['active'],
            // Any other user data you want to store in the session
        ];
        $session->set($userData);

        // Redirect to dashboard on successful login
        return redirect()->to('/dashboard');
    } else {
        // Set an error message in session data
        $session = session();
        $session->setFlashdata('login_error', 'Invalid username or password');

        // Redirect back to the page with the login modal
        return redirect()->to('/');
    }
}


public function logout()
{
    // Destroy the session to log the user out
    $session = session();
    $session->destroy();

    // Set a success message in session data
    $session->setFlashdata('logout_success', 'Successfully logged out');

    // Redirect to the login page or any other desired page after logout
    return redirect()->to('/');
}


public function insertTestData() {
    $model = new User_model();

    $data = [
        'username' => 'test_user',
        'email'    => 'test@example.com',
        'password' => password_hash('testpassword', PASSWORD_DEFAULT)
        // Add more fields as needed
    ];

    // Insert data into the database using the model
    $model->insert($data);

    return 'Data inserted successfully!'; // Return a message or view indicating success
}



}

