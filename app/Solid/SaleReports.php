<?php

namespace App\Solid;

use Illuminate\Support\Facades\DB;

class SaleReports
{

    public $sales;
    public function between($startDate, $endDate)
    {

        $this->sales = DB::table('sales')
            ->whereBetween('created_at', [$startDate, $endDate])
            ->latest()
            ->get();

            return $this;
    }

    public function export(SaleReportFormatInterface $format)
    {
        return $format->export($this->sales);
    }
}
