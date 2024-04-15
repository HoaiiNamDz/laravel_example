<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Services\Interfaces\UserServiceInterface as UserService;
use App\Repositories\Interfaces\ProvinceRepositoryInterface as ProvinceRepository;
class UserController extends Controller
{
    protected $userService;
    public function __construct(
        UserService $userService,
        ProvinceRepository $provinceRepository
    )
    {
        $this->userService = $userService;
        $this->provinceRepository = $provinceRepository;
    }
    public function index() {
        $users = $this->userService->paginate();
        $config = $this -> config();
        $config['seo'] = config('apps.user');
        $template = 'backend.user.index';
        return view('backend.dashboard.layout', compact(
            'template',
            'config',
            'users'
        ));
    }
    public function create() {
        $location = [
            'provinces' => $this->provinceRepository->all(),
        ];
        $template = 'backend.user.create';
        $config['seo'] = config('apps.user');
        return view('backend.dashboard.layout', compact(
            'template',
            'config',
            'location'
        ));
    }
    private function config() {
        return [
            'js' => [
                'backend/js/plugins/switchery/switchery.js'
            ],
            'css' => [
                'backend/css/plugins/switchery/switchery.css'
            ]
        ];
    }
}
