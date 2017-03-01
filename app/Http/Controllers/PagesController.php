<?php

namespace App\Http\Controllers;
use App\Post;
use App\Http\Requests;


class PagesController extends Controller {

	public function getIndex() {
		$posts = Post::orderBy('created_at','desc')->paginate(6);

		return view('Pages.welcome')->withPosts($posts);
	}

	public function getAbout() {

		$first = 'Andriu';
		$last = 'Bond';

		$fullname = $first. ' '.$last;
		$email="and@o2.pl";
		$data['email']= $email;
		$data['fullname']= $fullname;

		return view('Pages/about')->withData($data);
	}


	public function getContact() {
		return view('Pages.contact');
	}

	// public function postContact() {
		
	// }
}