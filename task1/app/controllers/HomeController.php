<?php

class HomeController extends BaseController
{

    /*
    |--------------------------------------------------------------------------
    | Default Home Controller
    |--------------------------------------------------------------------------
    |
    | You may wish to use controllers instead of, or in addition to, Closure
    | based routes. That's great! Here is an example controller method to
    | get you started. To route to this controller, just add the route:
    |
    |	Route::get('/', 'HomeController@showWelcome');
    |
    */

    public function showWelcome()
    {
        $list = array(
            'About' => 'about',
            'Articles' => 'articles',
            'Contact us' => 'contact-us'
        );
        return View::make('home', array('urls' => $list));
    }

    public function showAbout()
    {

        return View::make('about');
    }

    public function showArticles($id = null)
    {
        $articles = array(
            1 => 'Топ 10 самых маленьких пород собак в мире',
            2 => 'Когда у собак меняются зубы? Какие есть типы зубов и для чего они существуют, какие выполняют функции.',
            3 => 'Некоторые породы собак склонны к ожирению. Какие и почему?',
            4 => 'Продолжительность жизни животных варьируется в зависимости не только от вида животного, но и от других факторов',
            5 => 'К вирусу чумы восприимчивы: семейство псовых (собаки, еноты, волки, лисы), семейство куньих (норки, соболя) и др. плотоядные звери.',
            6 => 'Чаще всего ботулизмом болеют норки, хорьки, несколько реже песцы, лисицы, собаки и кошки независимо от возраста',
            7 => 'Аденовироз собак – остро протекающая болезнь, характеризующаяся лихорадкой, поражением органов дыхания, пищеварения, конъюнктивы и лимфоидной ткани',
            8 => 'Фасциолез - гельминтозное, из группы трематодозов, заболевание многих видов млекопитающих.',
            9 => 'Эти ласковые кошки умные и интерактивные личности, которые любят быть с людьми',
            10 => 'Количество владельцев домашних животных в США увеличилось более чем в три раза в период с 1970 г. (67 миллионов) по 2012 г. (164 миллионов)'

        );
        return View::make('articles', array('articles' => $articles, 'id' => $id));
    }


    public function showContactUs()
    {
        $name = Input::old('name');
        $message = Input::old('message');
        if ($name || $message) {
            $worning = "You need to feel all the fields!";
        } else {
            $worning = "";
        }

        return View::make('contact_us', array('worn' => $worning));
    }

    public function postSubmit()
    {
        if (Input::get('name') && Input::get('message')) {
            return Redirect::action('HomeController@showThankYou')->withInput();
        }
        return Redirect::action('HomeController@showContactUs')->withInput();
    }

    public function showThankYou()
    {
        $name = Input::old('name');
        return View::make('thank_you', array('name' => $name));
    }

}
