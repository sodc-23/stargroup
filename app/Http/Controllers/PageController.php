<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\View\View;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.index', [
            'posts' => Post::search('')
                             ->with('author', 'likes')
                             ->withCount('comments', 'thumbnail', 'likes')
                             ->latest()
                             ->paginate(4)
        ]);
    }
    
    
    public function sendMail(Request $request){
        
        $subject = "Contact Name " . $request->input('ct_name');
        $name = $request->input('ct_name');
        $emailAddress = $request->input('ct_email');
        $phone = $request->input('ct_phone');
        $message = $request->input('ct_message');
        $mail = new PHPMailer(true);
        
        try {

            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'ssl://smtp.gmail.com';                  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'miroslavpap40@gmail.com';                 // SMTP username
            $mail->Password = 'rhdqorgksk@123';                           // SMTP password
            $mail->Port = 465;                                    // TCP port to connect to
            // Sender
            $mail->setFrom("miroslavpap40@gmail.com", "MiroSlave");

            $mail->addAddress('miroslavpap40@gmail.com', 'MiroSlave');
            
            $mail->addReplyTo($emailAddress, $name);
        
            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body    = 'phone' . $phone . '<br>' . $message;
            $mail->AltBody = $message;
            $mail->send();
            $request->session()->flash('status', 'Terima kasih, kami sudah menerima email anda.');
            
            return view('pages.index', [
                'posts' => Post::search('')
                             ->with('author', 'likes')
                             ->withCount('comments', 'thumbnail', 'likes')
                             ->latest()
                             ->paginate(4)
            ]);
        } catch (Exception $e) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
