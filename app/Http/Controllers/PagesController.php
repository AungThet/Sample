<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	public function welcome()
	{
		return view('welcome');
	}

	public function About()
	{
		return view('About');
	}

	public function EntryForm()
	{
		return view('EntryForm');
	}

	public function EntryFormError()
	{
		return view('EntryFormError');
	}

	public function ConfirmForm()
	{
		return view('ConfirmForm');
	}

	public function CompleteForm()
	{
		return view('CompleteForm');
	}
}