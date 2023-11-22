<?php

namespace App\Models;

use CodeIgniter\Model;

class Review_model extends Model {
    protected $table = 'reviews';
    protected $primaryKey = 'id'; // Update the primary key to 'id'
    protected $allowedFields = ['id', 'username', 'review', 'date']; // Include 'id' in allowed fields

    protected $useTimestamps = false; // Disable automatic timestamp management

    public function insert($data = null, bool $returnID = true)
    {
        if (!is_array($data)) {
            $data = [];
        }

        $data['date'] = date('Y-m-d'); // Add the current date to the data

        return parent::insert($data, $returnID);
    }
}

