<?php

Route::set('home', function() {
  Home::CreateView();
});

Route::set('about', function() {
  About::CreateView();
});

Route::set('contact', function() {
  Contact::CreateView();
});
