<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrator extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'Administrator';

    /**
     * Mengambil data admin berdasarkan ID
     *
     * @param integer $id_admin
     * @return Administrator
     */
    public function ambilDataAdmin(int $id_admin)
    {
        return Administrator::where('ID_Admin', $id_admin)->first();
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

}
