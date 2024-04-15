<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\DistrictRepositoryInterface as DistricRepository;
use App\Repositories\Interfaces\WardRepositoryInterface as WardRepository;

class LocationController extends Controller
{
    protected $districtRepository;
    protected $wardRepository;

    public function __construct(
        DistricRepository $districtRepository,
        WardRepository $wardRepository
    )
    {
        $this->districtRepository = $districtRepository;
        $this->wardRepository = $wardRepository;
    }

    public function getLocation(Request $request) {
        $province_id = (int) $request->input('province_id');
        $districts = $this->districtRepository->findDistrictsByProvinceId($province_id);

        $district_id = (int) $request->input('district_id');
        $wards = [];
        if ($district_id) {
            $wards = $this->wardRepository->findWardsByDistrictId($district_id);
        }

        $response = [
            'html' => $this->renderHtml($districts, $wards) 
        ];
        return response()->json($response);
    }

    public function renderHtml($districts, $wards) {
        $html = '<option value="0">[Chọn Quận/Huyện]</option>';
        foreach ($districts as $district) {
            $html .= '<option value="'.$district->code.'">'.$district->name.'</option>';
        };
        if (!empty($wards)) {
            $html = '<option value="0">[Chọn Phường/Xã]</option>';
            foreach ($wards as $ward) {
                $html .= '<option value="'.$ward->code.'">'.$ward->name.'</option>';
            }
        }
        return $html;
    }
}
