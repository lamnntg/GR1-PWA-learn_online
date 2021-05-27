<?php

namespace App\Http\Controllers;

use App\Services\TabServiceInterface;
use Illuminate\Http\Request;

class TabController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|Response|View
     */
    protected $tabService;

    public function __construct(TabServiceInterface $tabService)
    {
        $this->tabService = $tabService;
    }
    public function course()
    {
        $courses = $this->tabService->courseGetAll();
        return view('pwa.tab.course', compact('courses'));
    }

    public function home()
    {
        return view('pwa.tab.home');
    }
}
