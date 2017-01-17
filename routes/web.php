<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('arabic-home',function(){


    return view('arhome');
});






// Route::get('arabic-our-customers', function () {
//     return view('arourcustomer');
// });
// Route::get('arabic-languages', function () {
//     return view('arlanguages');
// });
// Route::get('arabic-translation-service-document-transcription', function () {
//     return view('artranscription');
// });

// Route::get('arabic-translation-service-video-audio-interpretation', function () {
//     return view('arvideoandaudio');
// });


Route::get('arabic-translation-service-simultaneous-interpretation', function () {
    return view('arsimultaneous');
});
Route::get('arabic-translation-service-website-translation', function () {
    return view('arwebtranslation');
});

Route::get('arabic-translation-service-document-translation', function () {
    return view('artranslation');
});


Route::get('arabic-translator-jobs', function () {
    return view('artranslatorjobs');
});


Route::get('arabic-translation-service-document-proofreading-editing', function () {
    return view('arproofreading');
});



Route::get('arabic-about-our-advantages', function () {
    return view('aradvantages');
});


Route::get('arabic-certifications', function () {
    return view('arcertificates');
});
Route::get('arabic-about-contact-us', function () {
    return view('arcontactus');
});
Route::get('arabic-about-our-team', function () {
    return view('arourteam');
});

Route::get('arabic-translation-service-content-development', function () {
    return view('arcontentdevelopment');
});
Route::get('arabic-online-translation', function () {
    return view('aronlinetranslation');
});
Route::get('arabic-about-who-is-Alboraq', function () {
    return view('arwhoisalboraq');
});
Route::get('arabic-document-type-we-translate', function () {
    return view('ardocumenttype');
});
Route::get('arabic-translation-service-localization', function () {
    return view('arlocalization');
});
Route::get('arabic-our-customers', function () {
    return view('arourcustomer');
});

Route::get('arabic-translation-service-video-audio-interpretation', function () {
    return view('arvideoandaudio');
});
Route::get('arabic-translation-service-document-transcription', function () {
    return view('artranscription');
});
// Route::get('arabic-translation-service-website-translation', function () {
//     return view('arwebtranslation');
// });
Route::get('arabic-languages', function () {
    return view('arlanguages');
});

Route::get('translation-service-document-translation', function () {
    return view('artranslation');
});
Route::get('home', function () {
    return view('home');
});
Route::get('our-customers', function () {
    return view('ourcustomer');
});

Route::get('translator-jobs', function () {
    return view('translatorjobs');
});

Route::get('online-translation', function () {
    return view('onlinetranslation');
});
Route::get('about/our-advantages', function () {
    return view('advantages');
});

Route::get('about/site-map', function () {
    return view('sitemap');
});
Route::get('about/contact-us', function () {
    return view('contactus');
});

Route::get('translation-service/video-audio-interpretation', function () {
    return view('videoandaudio');
});


Route::get('translation-service/document-transcription', function () {
    return view('transcription');
});


Route::get('translation-service/website-translation', function () {
    return view('webtranslation');
});



Route::get('document-type-we-translate', function () {
    return view('documenttype');
});


Route::get('certifications', function () {
    return view('certifications');
});

Route::get('translation-service/simultaneous-interpretation', function () {
    return view('simultaneous');
});
Route::get('translation-service/document-translation', function () {
    return view('translation');
});



Route::get('translation-service/document-proofreading-editing', function () {
    return view('proofreading');
});


Route::get('translation-service/localization', function () {
    return view('localization');
});

Route::get('languages', function () {
    return view('languages');
});


Route::get('translation-service/content-development', function () {
    return view('contentdevelopment');
});


Route::get('about/who-is-Alboraq', function () {
    return view('whoisalboraq');
});

Route::get('about/our-team', function () {
    return view('ourteam');
});
//mails



Route::post('online-job','MailController@onlineJob');

Route::post('online-translation','MailController@onlinetranslation');