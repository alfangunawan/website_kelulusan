<?php

namespace App\Imports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class StudentImport implements ToModel, WithStartRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */

    public function startRow(): int
    {
        return 2;
    }

    public function model(array $row)
    {
        // Debugging: dump and die to see the contents of $row
        // dd($row);

        // Ensure that 'nim' is not null or empty
        if (empty($row[1])) {
            // Handle the case where 'nim' is null or empty
            // You can skip this row or throw an exception
            return null;
        }

        return new Student([
            'nim' => $row[1],  // Adjusted index
            'nama' => $row[2], // Adjusted index
            'kelas' => $row[3], // Adjusted index
            'gen' => $row[4], // Adjusted index
            'status' => $row[5], // Adjusted index
            'pra_opening' => $row[6], // Adjusted index
            'week1' => $row[7], // Adjusted index
            'week2' => $row[8], // Adjusted index
            'nilai_keaktifan' => $row[9], // Adjusted index
        ]);
    }
}
