<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

# Models are the representations of a table in Laravel (Book.php -> books table)
# Eloquent model
# Eloquent as ORM, allows you to interact with the database using PHP syntax instead of SQL

class Book extends Model
{
    protected $fillable = ['title', 'author'];
    // Laravel protect model from mass assignment vulnerabilities
    // list fields that are okay for writing via $fillable
}
