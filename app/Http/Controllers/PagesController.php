<?php

namespace PageMeta\Http\Controllers;

use Illuminate\Http\Request;

use PageMeta\Http\Requests;
use PageMeta\Http\Controllers\Controller;
use SEOMeta;
use OpenGraph;
use Twitter;

class PagesController extends Controller
{

    public function home()
    {

//        SEOMeta::setTitle('Home');
//        SEOMeta::setDescription('This is my page description');
//
//        OpenGraph::setDescription('This is my page description');
//        OpenGraph::setTitle('Home');
//        OpenGraph::setUrl(url());
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addProperty('locale', 'en-gb');

        Twitter::setTitle('Homepage');
        Twitter::setSite('@robbiepaulco');

        return view('main');
    }
}
