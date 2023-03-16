<?php

class Guest_View {
    public function HomeView() {
        require('site/view/public_guest/home.php');
    }
    public function AboutUsView() {
        require('site/view/public_guest/about.php');
    }
    public function OurServiceView() {
        require('site/view/public_guest/services.php');
    }
    public function ServiceDetailView(string $serivce) {
        require('site/view/public_guest/services-detail.php');
    }
    public function Error404View() {
        require('site/view/public_guest/page-404.php');
    }
    public function LoginView() {
        require('site/view/public_guest/login.php');
    }
    public function SignUpView() {
        require('site/view/public_guest/sign_up.php');
    }
}