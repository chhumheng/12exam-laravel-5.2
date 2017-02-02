<?php

// Home
Breadcrumbs::register('home', function($breadcrumbs)
{
    $breadcrumbs->push(trans('text_lang.home'), url(\Lang::getLocale() . '/'));
});

// Account
Breadcrumbs::register('account', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push(trans('text_lang.account'), url( \Lang::getLocale() . '/account'));
});

// Role
Breadcrumbs::register('role', function($breadcrumbs) {
    $breadcrumbs->parent('account');
    $breadcrumbs->push(trans('text_lang.role'), url( \Lang::getLocale() . '/account/role'));
});
// Role Create
Breadcrumbs::register('roleCreate', function($breadcrumbs) {
    $breadcrumbs->parent('role');
    $breadcrumbs->push(trans('text_lang.create'));
});
// Role Update
Breadcrumbs::register('roleUpdate', function($breadcrumbs) {
    $breadcrumbs->parent('role');
    $breadcrumbs->push(trans('text_lang.update'));
});

// User
Breadcrumbs::register('user', function($breadcrumbs) {
    $breadcrumbs->parent('account');
    $breadcrumbs->push(trans('text_lang.user'), url( \Lang::getLocale() . '/account/user'));
});
// User Create
Breadcrumbs::register('userCreate', function($breadcrumbs) {
    $breadcrumbs->parent('user');
    $breadcrumbs->push(trans('text_lang.create'));
});
// User Update
Breadcrumbs::register('userUpdate', function($breadcrumbs) {
    $breadcrumbs->parent('user');
    $breadcrumbs->push(trans('text_lang.update'));
});