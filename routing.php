<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('mainpage');
App::getRouter()->setLoginRoute('show_login');


//Logowanie
Utils::addRoute('show_login', 'LoginCtrl');
Utils::addRoute('login', 'LoginCtrl');
Utils::addRoute('logout', 'LoginCtrl');
//Tworzenie konta
Utils::addRoute('show_register', 'RegisterCtrl');
Utils::addRoute('register', 'RegisterCtrl');

//Użytkownik edit
Utils::addRoute('user_edit', 'UserEditCtrl', ['user','moderator']);
Utils::addRoute('update_user', 'UserEditCtrl', ['user','moderator']);

//Tam gdzie są listy
Utils::addRoute('mainpage', 'PropertyListCtrl');
Utils::addRoute('property_list', 'PropertyListCtrl');
Utils::addRoute('find_properties', 'PropertyListCtrl');
Utils::addRoute('find_properties', 'PropertyListCtrl');

//Detale własności
Utils::addRoute('property_details', 'PropertyDetailsCtrl');

//Usuwanie zdjęć
Utils::addRoute('remove_all_images', 'ImageManageCtrl', ['user','moderator']);

//Zarządzanie
Utils::addRoute('property_insert', 'PropertyManageCtrl', ['user','moderator']);
Utils::addRoute('delete_property', 'PropertyManageCtrl', ['user','moderator']);
Utils::addRoute('property_edit', 'PropertyManageCtrl', ['user','moderator']);
Utils::addRoute('update_property', 'PropertyManageCtrl', ['user','moderator']);
Utils::addRoute('add_property', 'PropertyManageCtrl', ['user']);

//Ulubione
Utils::addRoute('add_to_favorites', 'FavoritesCtrl', ['user','moderator']);
Utils::addRoute('remove_from_favorites', 'FavoritesCtrl', ['user','moderator']);
Utils::addRoute('favorites', 'FavoritesCtrl', ['user','moderator']);


Utils::addRoute('users', 'UsersCtrl', ['user', 'moderator']);
Utils::addRoute('user_edit', 'UserEditCtrl', ['user', 'moderator']);
Utils::addRoute('user_update', 'UserEditCtrl', ['user', 'moderator']);
Utils::addRoute('user_delete', 'UsersCtrl', ['user', 'moderator']);

Utils::addRoute('edit_user', 'UsersCtrl', ['user', 'moderator']);


