<?php

Route::set('index.php', function() {
  Index::CreateView('Index');
});

Route::set('home', function() {
  Home::CreateView('Home');
});

Route::set('about', function() {
  About::CreateView('About');
});

Route::set('contact', function() {
  Contact::CreateView('Contact');
});
