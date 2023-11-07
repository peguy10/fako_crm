<?php
use Maatwebsite\Excel\Concerns\FromCollection;
use App\Models\Policy;

class PoliciesExport implements FromCollection
{
    public function collection()
    {
        return Policy::all();
    }
}
