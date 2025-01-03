<?php



namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Enquiry extends Model
{
    use HasFactory, SoftDeletes;

    // Table name (optional if table name matches the plural form of the model name)
    protected $table = 'enquiry_details';

    // Primary key column (optional if it's named 'id')
    protected $primaryKey = 'id';

    // Mass assignable attributes
    protected $fillable = [
        'name',
        'email',
        'phone',
        'loan_amount',
        'assignee',
        'status',
    ];

    // Attributes that should be cast to native types
    protected $casts = [
        'loan_amount' => 'decimal:2',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'deleted_at' => 'datetime',
    ];
}

