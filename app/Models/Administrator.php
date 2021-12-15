<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrator extends Model implements Authenticatable
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'Administrator';
    protected $guard = 'admin';

    /**
     * Mengambil data admin berdasarkan ID
     *
     * @param string $email
     * @return Administrator
     */
    public function ambilDataAdmin(string $email)
    {
        return Administrator::where('Email_Admin', $email)->first();
    }

    /**
     * Menghapus data admin
     *
     * @return bool|null
     */
    public function hapusDataAdmin()
    {
        return $this->delete();
    }

    /**
     * Menyimpan data admin
     *
     * @return bool
     */
    public function simpanDataAdmin()
    {
        return $this->save();
    }

    /**
     * Get the name of the unique identifier for the user.
     *
     * @return string
     */
    public function getAuthIdentifierName()
    {
        return 'Email_Admin';
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
        return $this->Password_Admin;
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
