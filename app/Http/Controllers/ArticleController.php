<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Articlecategory;

class ArticleController extends Controller
{
    public function index(){
        return view('dashboard.article.data-article', [
            'title' => 'All Article',
            'articles' => Article::latest()->filter(request(['search', 'articlecategory']))->paginate(2),
            'recentarticles' => Article::latest('created_at')->paginate(3),
            'articlecategories' => Articlecategory::all()
        ]);
    }

    public function show(Article $article){
        return view('dashboard.article.show-article', [
            'articles' => $article,
            'recentarticles' => Article::latest('created_at')->paginate(3),
            'articlecategories' => Articlecategory::all()
        ]);
    }

    public function showCategories(Articlecategory $articlecategory){
        return view('dashboard.article.data-article', [
            'title' => "Article by : $articlecategory->name",
            'articles' => $articlecategory->articles,
            'recentarticles' => Article::latest('created_at')->paginate(3),
            'articlecategories' => Articlecategory::all()
        ]);
    }
}