<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'employees';
    protected $fillable = [
        'first_name',
        'last_name',
        'employee_id',
        'job_title',
        'date_of_birth',
        'marital_status',
        'religion',
        'email',
        'mobile_no',
        'salary',
        'hire_date'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function address(): HasMany
    {
        return $this->hasMany(Address::class);
    }

    protected $casts = [
        'date_of_birth' => 'date',
        'hire_date' => 'date',
    ];
}
