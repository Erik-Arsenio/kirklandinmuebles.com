<?php

namespace App\Controllers;

use App\Controllers\BaseController;
// use CodeIgniter\Validation\Validation;
// use Config\Services;


class EmailController extends BaseController
{
    protected $helpers = ['form'];
	public function index()
	{

		$data = [
			'title' => 'Kirkland Inmobiliaria',
            'content' => view('templates/contactForm'),
			'js' => load_js(['js/app-home'])
		];

		// Output the view
		echo view('templates/public', $data);
	}

    public function __construct()
    {
        helper(['url','form']);
    }

    public function send(){
        // Validate form
        $validation = service('validation');
        $validation->setRules([
            'name'=>'required|min_length[4]',
            'last_name'=>'required|min_length[4]',
            'phone'=>'required|min_length[12]',
            'email'=>'required|valid_email'
        ]);
        $data = [
			'title' => 'Kirkland Inmobiliaria',
            'content' => view('templates/contactForm'),
			'js' => load_js(['js/app-home'])
		];
        if (!$validation->withRequest($this->request)->run()){
            // dd($validation->getErrors());
            return redirect()->to('templates/contactForm')->withInput()->with('errors',$validation->getErrors());
        } else {
            if($this->isOnline()){
                // echo 'Connected a internet';
                $to = "erikgonzalez55@gmail.com";
                $name = $this->request->getVar('name');
                $last_name = $this->request->getVar('last_name');
                $phone = $this->request->getVar('phone');
                $mail = $this->request->getVar('email');
                $subject = 'Quiero que me contacten';
                $message = '<b>Mi nombre:</b> '.$name. ' '.$last_name.'<br>'.'<b>Mi WhatsApp:</b> '.$phone.'<br>'.'<b>Mi correo:</b> '.$mail;
                $doubts = $this->request->getVar('message');
                if($doubts != ''){
                    $message = $message.'<br><br>'.'<b>Mis dudas e inquietudes son:</b> '.'<br>'.$doubts;
                }

                if (isset($_POST['projects']) && is_array($_POST['projects'])) {
                    $selected_projects = '';
                    $num_projects = count($_POST['projects']);
                    $current = 0;
                    foreach ($_POST['projects'] as $key => $value) {
                        if ($current != $num_projects-1)
                            $selected_projects .= $value.', ';
                        else
                            $selected_projects .= $value.'.';
                        $current++;
                    }
                    if($num_projects >= 1){
                        $message = $message.'<br><br>'."<b>Estoy interesado en recibir información de:</b> ".$selected_projects;
                    }
                }

                $email = \Config\Services::email();
                // $view = \Config\Services::renderer();

                // $new_message = $view->setVar('message', $message)->render('email/email_template');


                $email->setTo('contact@kirklandinmobiliaria.com');
                // $email->setCC('contact@kirklandinmobiliaria.com');
                $email->setCC('erikgonzalez55@kirklandinmobiliaria.com');
                $email->setFrom($this->request->getVar('email'), $this->request->getVar('name'));
                $email->setSubject($subject);
                $email->setMessage($message);
            
                // $email->setMessage($new_message);


                if($email->send()){
                    return redirect()->to('templates/contactForm')->with('success','Email send successfully');

                }else{
                    return redirect()->to('templates/contactForm')->with('error','Failed')->withInput();
                }

            }else{
                // echo 'Not Connected';
                return redirect()->to('templates/contactForm')->with('error', 'Revise su conexión a internet')->withInput();
            }
        }   
    }

    public function isOnLine($site = "https://youtube.com")
    {
        if(@fopen($site,"r")){
            return true;
        }else{
            return false;
        }
    }
}