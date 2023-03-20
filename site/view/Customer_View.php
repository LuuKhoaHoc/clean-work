<?php

class Customer_View {
    public function LogedInHomeView($customerInfo) {
        require('site/view/public/home.php');
    }
    public function LogedInAboutUsView($customerInfo) {
        require('site/view/public/about.php');
    }
    public function LogedInOurServiceView($customerInfo) {
        require('site/view/public/services.php');
    }
    public function LogedInServiceDetailView( array $service,$customerInfo) {
        require('site/view/public/services-detail.php');
    }
    public function LogedInError404View($customerInfo) {
        require('site/view/public/page-404.php');
    }
    public function LogOutView($customerInfo) {
        require('site/view/public/login.php');
    }
    public function ProfileView($customerInfo) {
        require('site/view/public/customer_profile.php');
    }
    public function ChangePasswordView($customerInfo) {
        require('site/view/public/customer_change_password.php');
    }
}