<?php

namespace App\Controllers;

use App\Models\SettingsModel;
use App\Models\ProjectsModel;
use Goutte\Client;
// use Symfony\Component\DomCrawler\Crawler;
use Symfony\Component\HttpClient\HttpClient;
use App\Controllers\BaseController;


class Tasks extends BaseController
{

    protected $settings;
	protected $projects;
    protected $helpers = ['form'];

	public function __construct()
	{
		$this->settings = new SettingsModel();
		$this->projects = new ProjectsModel();
        helper(['url','form']);
        $this->settings = new SettingsModel();
	
	}
    public function scrap($projectName = "lakuun", $projectStage = null )
    {
        function send_mail($message)
        {
            $subject = 'Aviso de actualizacion de disponibilidad en Proyectos';
            // $message = '<b>Cambios en los Desarrollos:</b> ';

            $email = \Config\Services::email();
            // $email->setTo('carmen@kirklandinmobiliaria.com');
            $email->setTo('erikgonzalez55@kirklandinmobiliaria.com');
            $email->setFrom('contact@kirklandinmobiliaria.com');
            $email->setSubject($subject);
            $email->setMessage($message);
            if($email->send()){
                log_message('debug',  "Send email successfully");
            }else {
                log_message('debug',  "Email sending error");
            }
        }

        // Search for multiple key=>value pairs in array
        function search($array, $search_list) {
    
            // Create the result array
            $result = array();

            // Iterate over each array element
            foreach ($array as $key => $value) {

                // Iterate over each search condition
                foreach ($search_list as $k => $v) {

                    // If the array element does not meet
                    // the search condition then continue
                    // to the next element
                    if (!isset($value[$k]) || $value[$k] != $v) {

                        // Skip two loops
                        continue 2;
                    }
                }

                // Append array element's key to the
                //result array
                $result[] = $value;
            }

            // Return result 
            return $result;
        }

        function updateAvailable($dataProject) {
            for ($key=0; $key < count($dataProject['available']); $key++  ) {
                $dataProject['available'][$key] = 0;
            }
    
            for ($key=0; $key < count($dataProject['properties']); $key++  ) {
                if ($dataProject['properties'][$key]['status_id'] == 1) {
                    $dataProject['available'][($dataProject['properties'][$key]['stage']) - 1]	=  $dataProject['available'][($dataProject['properties'][$key]['stage']) - 1] + 1;	
                }
            }
            // dd($dataProject);
            return $dataProject;
        }

        function summaryAvailable($projects, $message) {

            for ($key_proj = 0; $key_proj < count($projects['project']); $key_proj++  ) {

                $url = FCPATH . "assets" . DIRECTORY_SEPARATOR . "json" . DIRECTORY_SEPARATOR .   $projects['project'][$key_proj]['project_name'] . ".json";
                $content = file_get_contents($url);
                $dataProject = json_decode($content, true);
                echo "Desarrollo- " . $projects['project'][$key_proj]['project_name'] . "<br>";
                $message .= "<br> Desarrollo- " . $projects['project'][$key_proj]['project_name'] . "<br>" ;

                for ($stage = 0; $stage < count($dataProject['available']); $stage++  ) {
                    echo "  .- " . "Etapa- " . ($stage + 1) . " => Disponibles- " . $dataProject['available'][$stage] . "<br>";
                    $message .= "  .- " . "Etapa- " . ($stage + 1) . " => Disponibles- " . $dataProject['available'][$stage] . ".<br>" ;
                }
            }
            // dd($projects);
            return $message;
        }

        if(isOnline()){

            $content = file_get_contents(FCPATH . "assets" . DIRECTORY_SEPARATOR . "json" . DIRECTORY_SEPARATOR .  'scrap.json');
            $projects = json_decode($content, true);
            $message = "<b>Cambios en los Desarrollos:</b>" . "<br><br>";

            $change_project = false;
            echo "Cantidad de Proyectos- ". count( $projects['project'])."<br>";
            echo "<br>";
            $key=0;
            $updateProject = array();
            for ($key_proj = 0; $key_proj < count($projects['project']); $key_proj++  ) {
                echo "Nombre proyecto- ".$projects['project'][$key_proj]['project_name']."<br>";
                echo "<br>";
                // $change_project = false;
                $projectName = $projects['project'][$key_proj]['project_name'];
                $updateProject = array();

                for ($stage = 0; $stage < count($projects['project'][$key_proj]['project_id']); $stage++  ) {
                    require '../vendor/autoload.php';
                    $client = new Client();
                    $client = new Client(HttpClient::create(['timeout' => 60]));

                    if (count($projects['project'][$key_proj]['project_id']) > 1) {
                        // if ($projectName == "anthia") {
                        //     $stag = $stage + 2;
                        // } else {
                            $stag = $stage + 1;
                        // }
                        echo "Stage- ".  ($stage+1). "  key_proj- ".  ($key_proj)."<br>";
                    } else {
                        $stag = "";
                        echo "Tiene solo ".  ($stage+1)."<br>";
                    }
                    $uri = $projects['project'][$key_proj]['url_project'][$stage]['url_scrap'] . $stag . '/"' ;

                    echo $uri . "<br>";

                    $crawler = $client->request('GET', $uri);
                    $uri_filter = "#script-mapsvg-" . $projects['project'][$key_proj]['project_id'][$stage]['id'];
                    // $uri_filter = "#script-mapsvg-";

                    try {
                        $line = $crawler->filter($uri_filter)->text();
                    } catch (\InvalidArgumentException $e) {
                        // Handle the current node list is empty..
                        $line = '';
                    }

                    if (empty($line) ) {
                        echo "No se puede acceder a la pagina $projectName Etapa " . ($stage+1)."<br>";
                        log_message( 3, "No se puede acceder a la pagina $projectName Etapa " . ($stage+1));
                    } else {

                        $content = stristr( $line, '"data_regions":' );
                        $dataUpdate = stristr( $content, ',"schema":', true );
                        

                        $url_stage = "";
                        if ($projects['project'][$key_proj]['numbers_stage'] > 1) {
                            $url_stage = "-". ($stage+1);
                        } else {
                            $url_stage = "";
                        }
                        $url_fp = FCPATH . "assets" . DIRECTORY_SEPARATOR . "json" . DIRECTORY_SEPARATOR .   $projectName . $url_stage. "_update.json";
                        $fp = fopen($url_fp, "w+");


                        
                        if ($fp == false) {
                            die("No se ha podido crear el archivo.");
                        } else {
                            fwrite($fp, '{'.$dataUpdate.'}}') or die ("Can not write data to file");
                            echo "Save Update.JSON  de $projectName-". $stage+1 . "<br>";
                        }
                        fclose($fp);


                        $updateProject1 = get_json_file($projectName .$url_stage. '_update');
                        $updateProject2 = $updateProject1->data_regions->regions;
                        if ($projectName == "anthia" && $url_stage == "3") {
                            dd($dataProject, $updateProject2);
                        }
                            $updateProject2 = json_decode(json_encode($updateProject2), true);
                            echo "Cantidad- " . count( $updateProject2) . "<br>";
                            for ($i=0; $i < count($updateProject2); $i++) { 
                                $updateProject2[$i] += ["stage" =>( $stage+1)];

                            }

                        $updateProject = array_merge($updateProject, $updateProject2 );

                        
                    }

                }


					$dataProject = get_json_file ($projectName);
					$dataProject = json_decode(json_encode($dataProject), true);
                    // dd($dataProject);
					$updateProject = json_decode(json_encode($updateProject), true);


					for ($key = 0; $key < count($dataProject['properties']); $key++  ) {

                            // Define search list with multiple key=>value pair
                            $search_items = array('id' => $dataProject['properties'][$key]['name'], 'stage' => $dataProject['properties'][$key]['stage']);
        
                            // Call search and pass the array and
                            // the search list
                            $res = search($updateProject, $search_items);
                            // if ($projectName == "anthia") {
                            //     dd($projectName, $dataProject, $updateProject, $res);
                            // }
                            if ($res) {
                                if ($projectName == "anthia" && $res[0]['status'] == null) {
                                    // var_dump($res[0]);
                                    $res[0]['status'] = 1;
                                    $res[0]['status_text'] = "Disponible";
                                    // var_dump($res[0]);
                                    echo "Error en datos de scrap en " . $projectName. " en Etapa- " . $url_stage . " en estado del lote- " . $res[0]['id']. ' con estatus: Status NULL' . '<br>';
                                    log_message('debug',  "Error en datos de scrap en " . $projectName. " en Etapa- " . $url_stage . " en estado del lote- " . $res[0]['id']. ' con estatus: Status NULL' );
                                    // dd($projectName, $dataProject, $updateProject, $res);
                                }
                                // echo "Status Update de ". $res[0]['status_text'] .  "<br>";
                                // echo "Etapa- " . $dataProject['properties'][$key]['stage'] . " --> " .$dataProject['properties'][$key]['name']. ' : Status '.$dataProject['properties'][$key]['status_name']. ' => '. $res[0]['id'].' : Status '. $res[0]['status_text'].'<br>';
                                if ($dataProject['properties'][$key]['status_id'] !=  $res[0]['status']) {
                                    echo "Cambio de estado de " . $dataProject['properties'][$key]['name']. ' : Status '.$dataProject['properties'][$key]['status_name']. ' => '. $res[0]['id'].' : Status '. $res[0]['status_text'].'<br>';
                                    $dataProject['properties'][$key]['status_id'] = intval($res[0]['status']);
                                    $dataProject['properties'][$key]['status_name'] = ucfirst(strtolower($res[0]['status_text']));
                                    log_message('debug',  "Project Availability Changes ". ucwords(str_replace("_", " ", $projectName)) );
                                    $change_project = true;
                                    $message .= "<b>Desarrollo " . ucwords(str_replace("_", " ", $projectName)) . "</b> ==> <b>Etapa - " . $dataProject['properties'][$key]['stage']  . "</b> ==> Lote - " . $dataProject['properties'][$key]['name'] . " cambia su estado a: " . ucfirst(strtolower($dataProject['properties'][$key]['status_name'])) . ".<br>" ;
                                }

                            } else {
                                // echo "No existe array" .  "<br>";

                            }

					}
                    if ($change_project) {
                        
                        date_default_timezone_set("UTC");
                        $dataProject['date_update'] = time();
                        // dd($dataProject);

                        $dataProject = updateAvailable($dataProject);

                        $dataAvailable = get_json_file ('available_lots');
                        $dataAvailable = json_decode(json_encode($dataAvailable), true);
                        // $dataAvailable = json_encode($dataAvailable);
                        // var_dump($dataAvailable[$projectName]);
                        $dataAvailable[$projectName] = $dataProject['available'];
                        // var_dump($dataAvailable[$projectName]);
                        $dataAvailable = json_encode($dataAvailable);
                        $fAvailable = fopen(FCPATH . "assets" . DIRECTORY_SEPARATOR . "json" . DIRECTORY_SEPARATOR .  'available_lots.json', "w+");
                        fwrite($fAvailable, $dataAvailable);
                        fclose($fAvailable);

                        // dd($dataProject, $dataProject['available'], $projectName, $dataAvailable);


                        $dataProject = json_encode($dataProject);

                        // Save data in Json Data
                        $fp = fopen(FCPATH . "assets" . DIRECTORY_SEPARATOR . "json" . DIRECTORY_SEPARATOR .  $projectName . '.json', "w+");
                        fwrite($fp, $dataProject);
                        fclose($fp);
                        log_message('debug',  "Saved changes to the " . $projectName . " project"  );
                        echo "Actualizado el Proyecto de ".$projectName. " a las ".date(DATE_RFC2822)."<br>";
                        echo "-------------------------------------------------------------  <br>";
                        echo "<br>";
                    } else {
                        log_message('debug',  "No change in availability of the " . $projectName . " project"  );
                        echo "Sin cambios en disponibilidad del Proyecto de ".$projectName. " a las ".date(DATE_RFC2822)."<br>";
                        echo "-------------------------------------------------------------  <br>";
                        echo "<br>";
                    }
                        
                }



                if ($change_project) {
                    $message .= "<br><br>" . "<b>Disponiblidad de desarrollos:</b>" . "<br>";
                    // dd($projects);
                    $message = summaryAvailable($projects, $message);

                    // dd($dataProject, $updateProject, $message );
                    send_mail($message);
                    $change_project = false;
                }
        }
    }

    public function scrap2($projectName = "wayuum", $projectStage = null )
    {

            // Search for multiple key=>value pairs in array
            function search($array, $search_list) {

                // Create the result array
                $result = array();

                // Iterate over each array element
                foreach ($array as $key => $value) {

                    // Iterate over each search condition
                    foreach ($search_list as $k => $v) {

                        // If the array element does not meet
                        // the search condition then continue
                        // to the next element
                        if (!isset($value[$k]) || $value[$k] != $v) {

                            // Skip two loops
                            continue 2;
                        }
                    }

                    // Append array element's key to the
                    //result array
                    $result[] = $value;
                }

                // Return result 
                return $result;
            }
        function updateAvailable($dataProject) {
            for ($key=0; $key < count($dataProject['available']); $key++  ) {
                $dataProject['available'][$key] = 0;
            }
    
            for ($key=0; $key < count($dataProject['properties']); $key++  ) {
                if ($dataProject['properties'][$key]['status_id'] == 1) {
                    $dataProject['available'][($dataProject['properties'][$key]['stage']) - 1]	=  $dataProject['available'][($dataProject['properties'][$key]['stage']) - 1] + 1;	
                }
            }
            // dd($dataProject);
            return $dataProject;
        }

            $content = file_get_contents(FCPATH . "assets" . DIRECTORY_SEPARATOR . "json" . DIRECTORY_SEPARATOR .  'scrap2.json');
            $projects = json_decode($content, true);
            $message = "<b>Cambios en los Desarrollos:</b>" . "<br><br>";

            $change_project = false;
            echo "Cantidad de Proyectos- ". count( $projects['project'])."<br>";
            echo "<br>";
            $key=0;
            $updateProject = array();
            for ($key_proj = 0; $key_proj < count($projects['project']); $key_proj++  ) {
                echo "<br> Nombre proyecto- ".$projects['project'][$key_proj]['project_name']."<br>";
                echo "<br>";
                // $change_project = false;
                $projectName = $projects['project'][$key_proj]['project_name'];
                $updateProject = array();

                for ($stage = 0; $stage < count($projects['project'][$key_proj]['url_project']); $stage++  ) {
                    $url_data_text = $projects['project'][$key_proj]['url_project'][$stage]['url_scrap'];
                    echo "<br>" . "Url por etapa -".$stage + 1 ." - " . "<br>";
                    $updateProjectStage = array();
                    // echo "Url por etapa -".$stage ." - ".$url_data_text."<br>";

                    set_time_limit(0);
                    $texto = file_get_contents($url_data_text);
                    $texto = nl2br($texto);


                    $url = FCPATH . "assets" . DIRECTORY_SEPARATOR . "json" . DIRECTORY_SEPARATOR .  $projectName . '_data-'. ($stage+1) .'.txt';
                    // echo "Link= " . $url .  "<br>";
                    $fp = fopen($url, "w+");
                    fwrite($fp, $texto);
                    fclose($fp);
                    $texto = fopen($url, "r+");
        
                    // $wayuum = [];
                    while(! feof($texto)) {
                        $line = fgets($texto);
                        $position = strpos($line, 'data-lot');
                        // echo strpos($line, '<a class="batch"') . "<br>";
                        // print_r($position);
                        // echo $position . "<br>";
                        if ($position != '') {
                            # code...
                            // echo substr($line, $position, 14).  " / ";
                            $dataLot = rtrim(substr($line, $position + 10 , 5));
                            $dataLot = preg_replace('([^A-Za-z0-9 !])', '', $dataLot);
                            // echo "data-lot: " . $dataLot .  " -#- ";
                            // echo "data-lot: " . $dataLot .  "<br> ";
                            $status = substr($line, strpos($line, 'status-') + 7 , 3);
                            switch ($status) {
                                case "ven":
                                    $status = 0;
                                    break;
                                case "dis":
                                    $status = 1;
                                    break;
                                case "res":
                                    $status = 2;
                                    break;
                            }
                            // echo "Status: " . $status .  " / ";
                            $area = substr($line, strpos($line, '<span>') + 6 , 6);
                            // echo "Area: " . $area .  " / ";
                            $lot = substr($line, strpos($line, 'Unidad:') + 9 , 5);
                            
                            if (substr($lot, strpos($lot, 'A') , 1) == "A") {
                                $lot = rtrim(substr_replace($lot, "_",2,1));
                                // $lot = rtrim($lot);
                                // $lot = trim($lot, " ");
                            } else {
                                $lot = trim(substr_replace($lot, "", -1), " ");
                                // $lot = trim($lot, " ");
                                if (strpos($lot, '-') > 0) {
                                    # code...
                                    $lot = substr_replace($lot, "", -2);
                                }
                            }
                            
                            array_push( $updateProjectStage, array("data-lot" => $dataLot, "lot" => $lot ,  "status" => $status, "area" => $area));
                        }
                    }

                    
                    $fp = fopen(FCPATH . "assets" . DIRECTORY_SEPARATOR . "json" . DIRECTORY_SEPARATOR .  $projectName . "-". ($stage+1) . "_update.json", "w+");
                    fwrite($fp, json_encode($updateProjectStage, true));
                    fclose($fp);
                    $updateProject = array_merge($updateProject, $updateProjectStage );
                    // var_dump($updateProjectStage);
                }

                $dataProject = get_json_file ($projectName);
                $dataProject = json_decode(json_encode($dataProject), true);
                $updateProject = json_decode(json_encode($updateProject), true);

                for ($key = 0; $key < count($dataProject['properties']); $key++  ) {
                    $search_items = array('lot' => $dataProject['properties'][$key]['name']);
                    $res = search( $updateProject, $search_items);
                    if ($res == true && $dataProject['properties'][$key]['status_id'] !=  $res[0]['status']) {
                            echo "Cambio de estado de " . $dataProject['properties'][$key]['name']. ' : Status '.$dataProject['properties'][$key]['status_id']. ' => '. $res[0]['data-lot'].' : Status '. $res[0]['status'].'<br>';
                            $dataProject['properties'][$key]['status_id'] = intval($res[0]['status']);
                            log_message('debug',  "Project Availability Changes ". ucwords(str_replace("_", " ", $projectName)) );
                            $change_project = true;
                            // $message .= "<b>Desarrollo " . ucwords(str_replace("_", " ", $projectName)) . "</b> ==> <b>Etapa - " . $dataProject['properties'][$key]['stage']  . "</b> ==> Lote - " . $dataProject['properties'][$key]['name'] . " cambia su estado a: " . ucfirst(strtolower($dataProject['properties'][$key]['status_name'])) . ".<br>" ;
                    } else {
                        // echo "No existe array" .  "<br>";

                    }

                }

                if ($change_project) {
                        
                    date_default_timezone_set("UTC");
                    $dataProject['date_update'] = time();
                    // dd($dataProject);

                    $dataProject = updateAvailable($dataProject);

                    $dataAvailable = get_json_file ('available_lots');
                    $dataAvailable = json_decode(json_encode($dataAvailable), true);
                    // $dataAvailable = json_encode($dataAvailable);
                    // var_dump($dataAvailable[$projectName]);
                    $dataAvailable[$projectName] = $dataProject['available'];
                    // var_dump($dataAvailable[$projectName]);
                    $dataAvailable = json_encode($dataAvailable);
                    $fAvailable = fopen(FCPATH . "assets" . DIRECTORY_SEPARATOR . "json" . DIRECTORY_SEPARATOR .  'available_lots.json', "w+");
                    fwrite($fAvailable, $dataAvailable);
                    fclose($fAvailable);

                    // dd($dataProject, $dataProject['available'], $projectName, $dataAvailable);


                    $dataProject = json_encode($dataProject);

                    // Save data in Json Data
                    $fp = fopen(FCPATH . "assets" . DIRECTORY_SEPARATOR . "json" . DIRECTORY_SEPARATOR .  $projectName . '.json', "w+");
                    fwrite($fp, $dataProject);
                    fclose($fp);
                    log_message('debug',  "Saved changes to the " . $projectName . " project"  );
                    echo "Actualizado el Proyecto de ".$projectName. " a las ".date(DATE_RFC2822)."<br>";
                    echo "-------------------------------------------------------------  <br>";
                    echo "<br>";
                } else {
                    log_message('debug',  "No change in availability of the " . $projectName . " project"  );
                    echo "Sin cambios en disponibilidad del Proyecto de ".$projectName. " a las ".date(DATE_RFC2822)."<br>";
                    echo "-------------------------------------------------------------  <br>";
                    echo "<br>";
                }

            }

            // dd($dataProject, $updateProject);

            // $texto = file_get_contents("https://crmgea.com/sistemas_active/crm/if/indexBase.php?id=iVhvc0NQb3P125&rd=&rg=&clvde=ACNGoAQSZ8D35");
            // var_dump($texto);
            // $texto = nl2br($texto);
            // echo $texto ;



    }
}