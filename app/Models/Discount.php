<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WishList extends Model
{
    use HasFactory;
    protected $table = "discounts";
    protected $fillable = [
        'discount_id',
        'cloth_id',
        'percentage'
    ];
    
    public function cloth()
    {
        return $this->hasOne(Cloth::class,'cloth_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WishList extends Model
{
    use HasFactory;
    protected $table = "discounts";
    protected $fillable = [
        'discount_id',
        'cloth_id',
        'expire_date',
        'percentage'
    ];
    
    public function cloth()
    {
        return $this->hasOne(Cloth::class,'cloth_id');
    }
}

