<?php



use App\Models\news;
use App\Models\course;
use App\Models\Contact;





function getNews()
{
    $news = news::orderby('id', 'desc')->where('news_status', 1)->limit(5)->get();

    return $news;
}

function getCourse()
{
    $news = course::orderby('id', 'desc')->where('status', 1)->paginate(9);

    return $news;
}


function getContact()
{
    $news = Contact::get();

    return $news;
}