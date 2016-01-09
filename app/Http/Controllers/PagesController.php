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
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addProperty('locale', 'en-gb');

        Twitter::setTitle('Homepage');
        Twitter::setSite('@robbiepaulco');

        return view('main');
    }


    public function docs()
    {

        SEOMeta::setTitle('Documentation v1.0');

        OpenGraph::setTitle('Documentation');

        OpenGraph::addProperty('type', 'website');
        OpenGraph::addProperty('locale', 'en-gb');

        Twitter::setTitle('Homepage');
        Twitter::setSite('@robbiepaulco');

        return view('docs');
    }
}
