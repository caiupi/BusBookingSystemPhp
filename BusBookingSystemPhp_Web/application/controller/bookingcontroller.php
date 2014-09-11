<?php

require 'application/viewmodels/BookingViewModel.php';

/**
 * Class Home
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class BookingController extends Controller 
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/home/index (which is the default page btw)
     */
    public function index()
    {
        // debug message to show where you are, just for the demo
        echo 'Message from Controller: You are in the controller booking, using the method index()';
        // load views. within the views we can echo out $songs and $amount_of_songs easily
        
        date_default_timezone_set('Europe/London');
        $booking1 = new BookingViewModel();
        $booking1->id = com_create_guid();
        $booking1->startDate = mktime(0, 0, 0, 1, 11, 2030);
        $booking1->endDate = mktime(0, 0, 0, 7, 1, 2030);
        $booking1->destination = 'Wales';
        $booking2 = new BookingViewModel();
        $booking2->id = com_create_guid();
        $booking2->startDate = mktime(0, 0, 0, 1, 12, 2030);
        $booking2->endDate = mktime(0, 0, 0, 7, 12, 2030);
        $booking2->destination = 'Germany';
        
        $bookings = array($booking1, $booking2);
        
        
        require 'application/views/_templates/header.php';
        require 'application/views/booking/index.php';
        require 'application/views/_templates/footer.php';
    }

    /**
     * PAGE: exampleone
     * This method handles what happens when you move to http://yourproject/home/exampleone
     * The camelCase writing is just for better readability. The method name is case insensitive.
     */
    public function exampleOne()
    {
        // debug message to show where you are, just for the demo
        echo 'acascsa Message from Controller: You are in the controller home, using the method exampleOne()';
        // load views. within the views we can echo out $songs and $amount_of_songs easily
        require 'application/views/_templates/header.php';
        require 'application/views/home/example_one.php';
        require 'application/views/_templates/footer.php';
    }

    /**
     * PAGE: exampletwo
     * This method handles what happens when you move to http://yourproject/home/exampletwo
     * The camelCase writing is just for better readability. The method name is case insensitive.
     */
    public function exampleTwo()
    {
        // debug message to show where you are, just for the demo
        echo 'Message from Controller: You are in the controller home, using the method exampleTwo()';
        // load views. within the views we can echo out $songs and $amount_of_songs easily
        require 'application/views/_templates/header.php';
        require 'application/views/home/example_two.php';
        require 'application/views/_templates/footer.php';
    }
}
