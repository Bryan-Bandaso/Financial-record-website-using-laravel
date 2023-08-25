<?php

namespace App\Models;

<<<<<<< HEAD
use App\Models\User;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
=======
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
>>>>>>> d26556bb9c0e02a6aa372ac2b44b92d28baf54db
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kas extends Model
{
    use HasFactory;
<<<<<<< HEAD
    protected $fillable = ['tanggal', 'transaksi', 'pemasukan', 'pengeluaran', 'buku_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
   
    /**
     * Get the buku that owns the Kas
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function buku()
    {
        return $this->belongsTo(Buku::class, 'buku_id', 'id');
    }
=======
    protected $guarded = []; 
>>>>>>> d26556bb9c0e02a6aa372ac2b44b92d28baf54db
}
