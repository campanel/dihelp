<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
//use Mail;

class MailController extends Controller
{
    // first, we create function for send Basics email
    public function basic_email(){
        $data=['name'=>'Harison matondang'];
        Mail::send(['text'=>'mail'], $data, function($message){
            $message->to('cleber.campanel@gmail.com','Harison Matondang')->subject('Send Mail from Laravel with Basics Email');
            $message->from('dev.campanel@gmail.com','Dihelp');
        });
        echo 'Basics Email was sent!';
    }

    //create new function to send HTML email
    public function html_email(){

        $ticketId = rand(1,100);

        $data['to'] = 'cleber.campanel@gmail.com';
        $data['name'] = 'Cléber Campanel';
        $data['from'] = 'dev.campanel@gmail.com';
        $data['name_from'] = 'Dihelp';
        $data['subject'] = '[Ticket#'.$ticketId.'] -';


        $data['hello'] ='Olá';
        $data['ticketId'] = $ticketId;

        Mail::queue(['text'=>'emails.default'], $data, function($message) use ($data){
            $message->to($data['to'], $data['name'])->subject($data['subject']);
            $message->from($data['from'],$data['name_from']);
        });

        echo 'HTML Email was sent!';

    }

    //create new function to send mail with attachment Mail
    public function attachment_email(){
        $data=['name'=>'Harison matondang'];
        Mail::send(['text'=>'mail'], $data, function($message){
            $message->to('harisonmatondang@gmail.com','Harison Matondang')->subject('Send Mail from Laravel with HTML Email');
            // add attach here
            // i have a image file on Laravel project
            $message->attach('C:serverhtdocshckrcompublicuploadsharison.jpg');
            $message->attach('C:serverhtdocshckrcompublicuploadssector-code.jpg');
            $message->from('nabilaauliaputri29@gmail.com','Nabila');
        });
        echo 'HTML Email was sent!';
    }
}
