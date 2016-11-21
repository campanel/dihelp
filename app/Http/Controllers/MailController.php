<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send_email_ticket($ticket, $type){

        if(!$ticket->emails_to){
            return response()->json([
                'status' => 500,
                'title' => 'Falta argumento emails_to',
                'detail' => 'Não há email do cliente'
            ]);
        }
        $data['to'] = explode(';', $ticket->emails_to);

        if(!empty($ticket->emails_to_cc)){
            $data['to_cc'] = explode(';', $ticket->emails_to_cc);
        }else{
            $data['to_cc'] = null;
        }

        $data['contact_name'] = $ticket->contact_name;
        $data['subject'] = '[Ticket#'.$ticket->id.'] - '.$ticket->title;
        $data['ticket_id'] = $ticket->id;
        $data['ticket_description'] = $ticket->description;

        $data['from'] = 'dev.campanel@gmail.com';
        $data['name_from'] = 'Dihelp';
        $data['hello'] ='Olá';

        Mail::queue(['text'=>'emails.ticket_'.$type], $data, function($message) use ($data){
            $message->to($data['to'], $data['contact_name'])
                ->subject($data['subject']);
            $message->from($data['from'],$data['name_from']);

            if($data['to_cc']){
                $message->cc($data['to_cc']);
            }
        });

        return response()->json([
            'status' => 200,
            'title' => 'OK',
            'detail' => 'email enviado'
        ]);

    }

    public function send_email_array($arr, $type){

        if(!$arr['emails_to']){
            return response()->json([
                'status' => 500,
                'title' => 'Falta argumento emails_to',
                'detail' => 'Não há email do cliente'
            ]);
        }
        $data['to'] = explode(';', $arr['emails_to']);

        if(!empty($arr->emails_to_cc)){
            $data['to_cc'] = explode(';', $arr['emails_to_cc']);
        }else{
            $data['to_cc'] = null;
        }

        $data['contact_name'] = $arr['contact_name'];
        $data['subject'] = '[Ticket#'.$arr['ticket_id'].'] - '.$arr['title'];
        $data['ticket_id'] = $arr['ticket_id'];
        $data['description'] = $arr['description'];

        $data['from'] = 'dev.campanel@gmail.com';
        $data['name_from'] = 'Dihelp';
        $data['hello'] ='Olá';

        Mail::queue(['text'=>'emails.ticket_'.$type], $data, function($message) use ($data){
            $message->to($data['to'], $data['contact_name'])
                ->subject($data['subject']);
            $message->from($data['from'],$data['name_from']);

            if($data['to_cc']){
                $message->cc($data['to_cc']);
            }
        });

        return response()->json([
            'status' => 200,
            'title' => 'OK',
            'detail' => 'email enviado'
        ]);

    }

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
