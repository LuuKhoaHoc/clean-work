<?php
include('site/model/Content_Model.php');
include('site/view/Guest_View.php');
class Guest_Display_Content_Controller {
    public function showHomeAction() {
        $model = new Content_Model();
        $view = new Guest_View();
        $view->HomeView();
    }
    public function showAboutUsAction() {
        $model = new Content_Model();
        $view = new Guest_View();
        $view->AboutUsView();
    }
    public function showOurServiceAction() {
        $model = new Content_Model();
        $view = new Guest_View();
        $view->OurServiceView();
    }
    public function showServiceDetailAction() {
        $service = $_GET['s'] ?? '';
        $model = new Content_Model();
        $view = new Guest_View();
        $view->ServiceDetailView($service);
    }
    public function showError404Action() {
        $model = new Content_Model();
        $view = new Guest_View();
        $view->Error404View();
    }
    public function showLoginAction() {
        $model = new Content_Model();
        $view = new Guest_View();
        $view->LoginView();
    }
    public function showSignUpAction() {
        $model = new Content_Model();
        $view = new Guest_View();
        $view->SignUpView();
    }
}