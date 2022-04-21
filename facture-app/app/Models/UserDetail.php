<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class UserDetail extends Model
{
    protected $fillable = ['full_name','street_address','zip_code','city'];
}
