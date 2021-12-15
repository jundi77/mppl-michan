<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model implements Authenticatable
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'Pembeli';

    /** Laravel relationship models  */
    public function review()
    {
        return $this->hasMany(Review::class, 'ID_Pembeli', 'ID_Pembeli');
    }

    public function keranjang()
    {
        return $this->hasMany(Keranjang::class, 'ID_Pembeli', 'ID_Pembeli');
    }

    public function barangThroughKeranjang()
    {
        return $this->hasManyThrough(Barang::class, Keranjang::class, 'ID_Pembeli', 'ID_Barang', 'ID_Pembeli', 'ID_Barang');
    }

    public function barangThroughReview()
    {
        return $this->hasManyThrough(Barang::class, Review::class, 'ID_Pembeli', 'ID_Barang', 'ID_Pembeli', 'ID_Barang');
    }
    /** Laravel relationship models  */


    /**
     * Mengambil data akun berdasarkan ID Pembeli
     *
     * @var int $id ID Pembeli
     * @return Pembeli
     */
    public function ambilDataAkun(int $id)
    {
        return Pembeli::where(['ID_Pembeli' => $id])->first();
    }

    /**
     * Menyimpan data akun
     *
     * @return bool Status perubahan
     */
    public function simpanDataAkun()
    {
        return $this->save();
    }

    /**
     * Menghapus data akun
     *
     * @return bool|null
     */
    public function hapusDataAkun()
    {
        return $this->delete();
    }

    /**
     * Get the name of the unique identifier for the user.
     *
     * @return string
     */
    public function getAuthIdentifierName()
    {
        return 'Email_Pembeli';
    }

    /**
     * Get the unique identifier for the user.
     *
     * @return mixed
     */
    public function getAuthIdentifier()
    {
        return $this->{$this->getAuthIdentifierName()};
    }

    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->Password_Pembeli;
    }

    /**
     * Get the token value for the "remember me" session.
     * ! Not Implemented
     * @return string
     */
    public function getRememberToken()
    {
        return 'None';
    }

    /**
     * Set the token value for the "remember me" session.
     *
     * @param  string  $value
     * @return void
     */
    public function setRememberToken($value)
    {
        // No remember token
    }

    /**
     * Get the column name for the "remember me" token.
     * ! Not Implemented
     * 
     * @return string
     */
    public function getRememberTokenName()
    {
        return 'None';
    }
}
