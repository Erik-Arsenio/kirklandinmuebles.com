<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SettingsModel;
use CodeIgniter\Validation\Validation;
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
        $projects = array('Anthia', 'Lakuun', 'Marela Life', 'Marela Beach','Wayuum');
        $lang_return = array('Spanish', 'English', 'Either');
        // $getSort = 'country_phone_prefix ASC';
        // $builder = $this->settings->getCountries(null, true, 'country_phone_prefix ASC');
        // $phone_prefix = array_column($builder, 'country_phone_prefix');
        // $country_phone_prefix = array_unique($phone_prefix); // Filter unique values for phone_prefix
        // var_dump($builder);

        if ($this->request->getVar('lang')) {
			$lang = $this->request->getVar('lang');
			$this->request->setLocale($lang);
		} else {
			$lang = $this->request->getLocale();
		}
		// var_dump($lang);
		// $languaje = $lang ;
		
		// echo "Leguaje del select- " . $lang;
        $dataContact = [
            'lang_return' => $lang_return,
            'projects' => $projects,
            'lang' => $lang
            // 'country_phone_prefix' => $country_phone_prefix
        ];
		$data = [

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
            'code_promo'=>'permit_empty',
            'message'=>'permit_empty',
            'project[]'=>'permit_empty',
            'lang_return[]'=>'permit_empty',
            
        ]);
        $promo_code = array("YEF2kx492vuM", "MIG3sRMGYZgo");
        $lang = $this->request->getVar('lang');
        if (!$validation->withRequest($this->request)->run()){
            // dd($this->request->getPost());
            // dd($validation->getErrors());
            return redirect()->back()->withInput()->with('errors',$validation->getErrors());
            // return redirect()->to('templates/contactForm')->withInput()->with('errors',$validation->getErrors());
        } else {
            if(isOnline()){
                // echo 'Connected a internet';
                $to = "erikgonzalez55@gmail.com";
                $name = $this->request->getVar('name');
                $last_name = $this->request->getVar('last_name');
                // $phone_prefix = $this->request->getVar('country_phone_prefix');
                $phone = $this->request->getVar('phone');
                $mail = $this->request->getVar('email');
                $code_promo = $this->request->getVar('code_promo');
                $subject = lang('Globals.subject', [], $lang) ; 
                $message = '<b>' . lang('Globals.contactform_4', [], $lang) . ':</b> '.$name. ' '.$last_name.'<br>'.'<b>' . lang('Globals.contactform_6', [], $lang) 
                    . ':</b> '.$phone.'<br>'.'<b>' . lang('Globals.contactform_7', [], $lang) . ':</b> '.$mail. '<br>' . '<b>' . lang('Globals.contactform_16', [], $lang) . ':</b> '.$code_promo;
                $doubts = $this->request->getVar('message');
                if($doubts != ''){
                    $message = $message.'<br><br>'.'<b>' . lang('Globals.doubts', [], $lang) . ':</b> '.'<br>'.$doubts;
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
                        $message = $message.'<br><br>'.'<b>' . lang('Globals.receiving_info', [], $lang) . ':</b> '.$selected_projects;
                    }
                }


                // Las comunicaciones prefiero recibirlas en
                //  I prefer to receive communications in

                if (isset($_POST['lang_return']) && is_array($_POST['lang_return'])) {
                    $selected_lang_return = '';
                    $num_lang_return = count($_POST['lang_return']);
                    
                    if ($num_lang_return == 3) {
                        log_message('debug',  "Error de envio email, por ser de origen desconocido." );
                        return redirect()->to('templates/contactForm?lang=' . $lang)->with('error',lang('Globals.send_canceled', [], $lang))->withInput();
                    }
                    // var_dump($_POST['lang_return']);
                    // dd($num_lang_return);
                    $current = 0;
                    foreach ($_POST['lang_return'] as $key => $value) {
                        if ($current != $num_lang_return-1)
                            $selected_lang_return .= $value.', ';
                        else
                            $selected_lang_return .= $value.'.';
                        $current++;
                    }
                    if($num_lang_return >= 1){
                        $message = $message.'<br><br>'.'<b>' . lang('Globals.language_info', [], $lang) . ':</b> '.$selected_lang_return;
                    }
                }

                // $spanish = $this->request->getVar('spanish');
                // $english = $this->request->getVar('english');
                // $either = $this->request->getVar('either');
  
                // if (isset($_POST['spanish']) || isset($_POST['english']) || isset($_POST['either'])) {
                //     $language = 'Si';
                //     $message = $message.'<br><br>'.'<b>' . lang('Globals.language_info', [], $lang) . ':</b> ';
                //     if (isset($_POST['either'])) {
                //         $message = $message. $either . ' ' . strtolower(lang('Globals.language', [], $lang)) ;
                //     } else if (isset($_POST['spanish']) || isset($_POST['english']) ) {
                //         isset($_POST['spanish']) ? $message = $message. $spanish . ", " : '';
                //         isset($_POST['english']) ? $message = $message. $english : '';
                //     }
                // } 

                // else {
                //     $language = 'No';
                // }

                $email = \Config\Services::email();
                // $view = \Config\Services::renderer();

                // $new_message = $view->setVar('message', $message)->render('email/email_template');


                if ($code_promo == "MIG3sRMGYZgo") {
                    $email->setTo('michel@kirklandinmobiliaria.com');
                    $email->setCC('carmen@kirklandinmobiliaria.com');
                    $email->setBCC('contact@kirklandinmobiliaria.com');
                } else if ($code_promo == "YEF2kx492vuM" || $code_promo == "") {
                    $email->setTo('carmen@kirklandinmobiliaria.com');
                    $email->setCC('contact@kirklandinmobiliaria.com');
                    // $email->setBCC('carmenphasesorainmobiliaria@gmail.com');
                    $email->setBCC('erikgonzalez55@kirklandinmobiliaria.com');
                }

                // $email->setTo($to);
                $email->setFrom($this->request->getVar('email'), $this->request->getVar('name'));
                $email->setSubject($subject);
                $email->setMessage($message);
            
                // var_dump($spanish);
                // dd($promo_code, $lang, $code_promo, $message, $email);
                // die;
                if($email->send()){
                    return redirect()->to('templates/contactForm?lang=' . $lang)->with('success', lang('Globals.send_success', [], $lang));

                }else{
                    return redirect()->to('templates/contactForm?lang=' . $lang)->with('error',lang('Globals.send_failed', [], $lang))->withInput();
                    // return redirect()->back()->with('error','Failed')->withInput();
                }

            }
            else{
                // $lang = $this->request->getVar('lang');
                return redirect()->to('templates/contactForm?lang=' . $lang)->with('error', lang('Globals.not_conection', [], $lang))->withInput();
            }
        }   
    }
}