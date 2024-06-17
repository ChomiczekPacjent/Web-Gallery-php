<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\ParamUtils;
use core\SessionUtils;
use core\RoleUtils;

class UsersCtrl {

    public function __construct() {
        // Konstruktor może być pusty lub inicjować dane potrzebne w kontrolerze
    }

    private function checkRoles() {
        return \core\RoleUtils::inRole("user") && \core\RoleUtils::inRole("moderator");
    }

    public function action_users() {
        if (!$this->checkRoles()) {
            App::getMessages()->addMessage(new Message("Unauthorized access", Message::ERROR));
            App::getRouter()->redirectTo('mainpage');
            return;
        }

        $users = App::getDB()->select("users", [
            "idUser",
            "firstName",
            "lastName",
            "email",
            "login",
            "password"
        ]);

        $loggedUser = SessionUtils::load("logged_user", true);
        App::getSmarty()->assign('logged_user', $loggedUser);
        App::getSmarty()->assign("users", $users);
        App::getSmarty()->assign('page_title', 'Users');
        App::getSmarty()->display("properties.tpl");
    }

    public function action_edit_user() {
        App::getMessages()->addMessage(new Message("Debug: Entered action_edit_user method", Message::INFO));
        
        if (!$this->checkRoles()) {
            App::getMessages()->addMessage(new Message("Unauthorized access", Message::ERROR));
            App::getRouter()->redirectTo('mainpage');
            return;
        }
    
        $id = ParamUtils::getFromRequest('user_id');
        App::getMessages()->addMessage(new Message("Debug: user_id = " . $id, Message::INFO));
    
        if (!$id) {
            App::getMessages()->addMessage(new Message("No user ID provided", Message::ERROR));
            App::getRouter()->redirectTo('users');
            return;
        }
    
        $user = App::getDB()->get("users", "*", ["idUser" => $id]);
        App::getMessages()->addMessage(new Message("Debug: user data = " . json_encode($user), Message::INFO));
    
        if (!$user) {
            App::getMessages()->addMessage(new Message("User not found", Message::ERROR));
            App::getRouter()->redirectTo('users');
            return;
        }
    
        // Simulate editing user (since we are not using a separate template)
        $user['firstName'] = ParamUtils::getFromRequest('firstName', false);
        $user['lastName'] = ParamUtils::getFromRequest('lastName', false);
        $user['email'] = ParamUtils::getFromRequest('email', false);
    
        App::getDB()->update("users", [
            "firstName" => $user['firstName'],
            "lastName" => $user['lastName'],
            "email" => $user['email']
        ], ["idUser" => $id]);
    
        App::getMessages()->addMessage(new Message("User updated successfully", Message::INFO));
        App::getRouter()->redirectTo('users');
    }
    
    

    public function action_user_update() {
        if (!$this->checkRoles()) {
            App::getMessages()->addMessage(new Message("Unauthorized access", Message::ERROR));
            App::getRouter()->redirectTo('mainpage');
            return;
        }

        $id = ParamUtils::getFromPost('idUser');
        $data = [
            "firstName" => ParamUtils::getFromPost('firstName'),
            "lastName" => ParamUtils::getFromPost('lastName'),
            "email" => ParamUtils::getFromPost('email'),
            "login" => ParamUtils::getFromPost('login')
        ];
        
        if (App::getDB()->update("users", $data, ["idUser" => $id])) {
            App::getMessages()->addMessage(new Message("User updated successfully", Message::SUCCESS));
        } else {
            App::getMessages()->addMessage(new Message("Error updating user", Message::ERROR));
        }

        App::getRouter()->redirectTo('users');
    }

    public function action_user_delete() {
        if (!$this->checkRoles()) {
            App::getMessages()->addMessage(new Message("Unauthorized access", Message::ERROR));
            App::getRouter()->redirectTo('mainpage');
            return;
        }
    
        $id = ParamUtils::getFromRequest('user_id');
        if (!$id) {
            App::getMessages()->addMessage(new Message("No user ID provided", Message::ERROR));
            App::getRouter()->redirectTo('users');
            return;
        }
    
        App::getDB()->delete("users", ["idUser" => $id]);
        App::getMessages()->addMessage(new Message("User deleted successfully", Message::INFO));
        App::getRouter()->redirectTo('users');
    }
    
}
