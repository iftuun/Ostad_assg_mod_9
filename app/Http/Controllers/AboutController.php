<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        
        $name = 'Ifthakhar Ahmed';
        $description = 'A passionate web developer with a focus on Laravel.';
        $education = 'Graduate from East West University';
        $workExperience = 'One year hand on experience in bista Solution';
        $certifications = 'I will add later';

        return view('about.index', compact('name', 'description', 'education', 'workExperience', 'certifications'));
    }
}
