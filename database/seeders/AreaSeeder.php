<?php

namespace Database\Seeders;

use App\Repositories\AreaRepository;
use Illuminate\Database\Seeder;




class AreaSeeder extends Seeder
{
    protected $areas = [
        'حصاربوعلی',
        'رستم آباد- فرمانیه',
        'اوین',
        'درکه',
        'زعفرانیه',
        'محمودیه',
        'ولنجک',
        'امام زاده قاسم (ع)',
        'دربند',
        'گلابدره',
        'جماران',
        'دزاشیب',
        'نیاوران',
        'اراج',
        'کاشانک',
        'شهرک دانشگاه',
        'شهرک نفت',
        'دارآباد',
        'باغ فردوس',
        'تجریش',
        'قیطریه',
        'چیذر',
        'حکمت',
        'ازگل',
        'سوهانک',
        'شهید محلاتی',
        'اتوبان امام علی',
        'اتوبان صدر',
        'اقدسیه',
        'الهیه – فرشته',
        'اندرزگو',
        'بلوار ارتش',
        'پارک وی',
        'تجریش',
        'جمشیدیه',
        'دیباجی',
        'سعدآباد',
        'صاحبقرانیه',
        'فرمانیه',
        'قیطریه',
        'محمودیه',
        'مقدس اردبیلی',
        'مینی سیتی',
        'نوبنیاد',
        'ولیعصر',
        'کاشانک',
        'کامرانیه'
    ];

    function __construct(AreaRepository $area)
    {
        $this->area = $area;
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->areas as $area_name) {
            $this->area->create($area_name);
        }
    }
}
