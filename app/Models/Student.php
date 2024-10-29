<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

    use HasFactory;
    protected $table = 'students';
    protected $fillable = ['nim', 'nama', 'kelas', 'gen', 'status', 'pra_opening', 'week1', 'week2', 'nilai_keaktifan', 'total_nilai', 'created_at', 'updated_at'];

    public function calculateTotalNilai() {
        $this->total_nilai = ($this->pra_opening + $this->week1 + $this->week2 + $this->nilai_keaktifan) / 4;
    }
}
