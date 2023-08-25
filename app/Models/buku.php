<?php

namespace App\Models;

<<<<<<< HEAD
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Carbon;
=======
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
>>>>>>> d26556bb9c0e02a6aa372ac2b44b92d28baf54db

class buku extends Model
{
    use HasFactory;
<<<<<<< HEAD
    protected $fillable = ['nama_buku', 'user_id'];
    public function getCreatedAttribute(){
        return Carbon::parse($this->attributes['created_at'])
        ->translatedFormat('l,d F Y');
    }

    /**
     * Get the user that owns the buku
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    /**
     * Get all of the kas for the buku
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function kas()
    {
        return $this->hasMany(Kas::class, 'buku_id', 'id');
    }
=======
    protected $guarded = [];
>>>>>>> d26556bb9c0e02a6aa372ac2b44b92d28baf54db
}
