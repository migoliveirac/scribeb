<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\Http\Requests\ContactRequest;
use \App\User;
use \App\Article;

class PagesController extends Controller
{
    public function home()
    {
        $articles = Article::where('status', 'published')                
        ->orderBy('published_at', 'desc')
        ->take(4)
        ->get();

        // foreach($articles as $article)
        //     echo $article->title;

        // return dd($articles);

        return view('home.home')
        ->with('headTitle','The Scribe Blog - Homepage')
        ->with('articles', $articles);
    }

    public function articlesGuest()
    {
        $articles = Article::where('status', 'published')
        ->orderBy('published_at', 'desc')
        ->get();


        return view('articles.index-guest')
        ->with('articles',$articles)
        ->with('headTitle','Article List');
    }

    public function articlesGuestShow($id)
    {
        $article = Article::findOrFail($id);

        if(strcmp($article->status,'published')==0)
        {
            return view('articles.show-guest')
                ->with('article', $article)
                ->with('headTitle', 'Article '.$article->title);
        }
        else
            return view('errors.403');
    }

    public function contact()
    {
        return view('home.contact',['headTitle' => 'The Scribe Blog - Contact Page']);
    }

    public function contactPost(ContactRequest $request)
    {
            Mail::raw($request->message, function ($message) use ($request) {
            $message->from($request->email, 'Scribe Blog: Contact Form');
            $message->subject('The Scribe blog: Contact Form');
            $message->to('ee09071@gmail.com');
        });

        return redirect('/')->with('msg', 'Your email was sent successfully!');
    }

}
