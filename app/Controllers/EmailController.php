<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SettingsModel;
// use CodeIgniter\Validation\Validation;
// use Config\Services;


class EmailController extends BaseController
{
    protected $helpers = ['form'];
    protected $settings;

    public function __construct()
    {
        helper(['url','form']);
        $this->settings = new SettingsModel();
    }

	public function index()
	{
        $projects = array('Anthia', 'Lakuun', 'Marela Beach', 'Marela Celestun');
        // $getSort = 'country_phone_prefix ASC';
        // $builder = $this->settings->getCountries(null, true, 'country_phone_prefix ASC');
        // $phone_prefix = array_column($builder, 'country_phone_prefix');
        // $country_phone_prefix = array_unique($phone_prefix); // Filter unique values for phone_prefix
        // var_dump($builder);
        $dataContact = [
            'projects' => $projects,
            // 'country_phone_prefix' => $country_phone_prefix
        ];
        if ($this->request->getVar('lang')) {
			$lang = $this->request->getVar('lang');
			$this->request->setLocale($lang);
		} else {
			$lang = $this->request->getLocale();
		}
		// var_dump($lang);
		// $languaje = $lang ;
		
		// echo "Leguaje del select- " . $lang;
		$data = [
            'lang' => $lang,
			'title' => 'Contacto',
            'content' => view('templates/contactForm', $dataContact),
			'js' => load_js(['js/app-home']),
		];

		// Output the view
		echo view('templates/public', $data);
	}

    
    public function send(){
        // Validate form
        $validation = \Config\Services::validation();
        $validation->setRules([
            'name'=>'required|min_length[4]',
            'last_name'=>'required|min_length[4]',
            // 'country_phone_prefix' => 'required',
            'phone'=>'required|alpha_numeric_punct|min_length[8]|max_length[22]',
            'email'=>'required|valid_email',
            'message'=>'permit_empty',
            'project[]'=>'permit_empty'
            
        ]);
        if (!$validation->withRequest($this->request)->run()){
            // dd($this->request->getPost());
            // dd($validation->getErrors());
            // return redirect()->back()->withInput()->with('errors',$validation->getErrors());
            return redirect()->to('templates/contactForm')->withInput()->with('errors',$validation->getErrors());
        } else {
            if(isOnline()){
                // echo 'Connected a internet';
                $to = "erikgonzalez55@gmail.com";
                $name = $this->request->getVar('name');
                $last_name = $this->request->getVar('last_name');
                // $phone_prefix = $this->request->getVar('country_phone_prefix');
                $phone = $this->request->getVar('phone');
                $mail = $this->request->getVar('email');
                $subject = 'Quiero que me contacten';
                $message = '<b>Mi nombre:</b> '.$name. ' '.$last_name.'<br>'.'<b>Mi WhatsApp:</b> '.$phone.'<br>'.'<b>Mi correo:</b> '.$mail;
                $doubts = $this->request->getVar('message');
                if($doubts != ''){
                    $message = $message.'<br><br>'.'<b>Mis dudas e inquietudes son:</b> '.'<br>'.$doubts;
                }

                if (isset($_POST['project']) && is_array($_POST['project'])) {
                    $selected_projects = '';
                    $num_projects = count($_POST['project']);
                    $current = 0;
                    foreach ($_POST['project'] as $key => $value) {
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


                // $email->setTo($to);
                $email->setTo('carmen@kirklandinmobiliaria.com');
                $email->setCC('contact@kirklandinmobiliaria.com');
                // $email->setBCC('carmenphasesorainmobiliaria@gmail.com');
                $email->setBCC('erikgonzalez55@kirklandinmobiliaria.com');
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
}