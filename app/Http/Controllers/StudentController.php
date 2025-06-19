<?php
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class StudentController extends Controller
{
    public function index()
    {
        return response()->json([
            ['id' => 1, 'name' => 'Senn Lopes'],
            ['id' => 2, 'name' => 'Wale Aki']
        ]);
    }
}
