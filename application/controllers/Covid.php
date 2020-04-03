<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Covid extends CI_Controller {

  var $API ="";
    
    function __construct() {
        parent::__construct();
        $this->load->library("Curl");
        $this->API="https://api.kawalcorona.com/indonesia";
    }
	public function index()
	{
		
		$indo = json_decode(file_get_contents('https://api.kawalcorona.com/indonesia'), TRUE);
		$prov = json_decode(file_get_contents('https://api.kawalcorona.com/indonesia/provinsi'),TRUE);
		$host = json_decode(file_get_contents('https://bokusan.my.id/api/hospital'),TRUE);
		$glob_pos = json_decode(file_get_contents('https://api.kawalcorona.com/positif'), TRUE);
		$data = array(
						'title'	=>	'Perkembangan Corona',
						'main'	=>	'home/index',
						'glob_pos'	=> $glob_pos,
						'host'	=> $host,
						'indo'	=> $indo,
						'prov'	=> $prov,
						
					);
		$this->load->view('mobile/index',$data, FALSE);
	}

		public function about()
	{
		
		$this->load->view('mobile/about');
	}


		public function global()
	{
		$neg = json_decode(file_get_contents('https://api.kawalcorona.com/'),TRUE);
		$glob_pos = json_decode(file_get_contents('https://api.kawalcorona.com/positif'), TRUE);
		$glob_semb = json_decode(file_get_contents('https://api.kawalcorona.com/sembuh'), TRUE);
		$glob_meni = json_decode(file_get_contents('https://api.kawalcorona.com/meninggal'), TRUE);
		$data = array(
						'title'	=>	'Perkembangan Corona',
						'main'	=>	'home/global',
						'glob_pos'	=> $glob_pos,
						'glob_semb'	=> $glob_semb,
						'glob_meni'	=> $glob_meni,
				
						'neg'	=> $neg,
					);
		$this->load->view('template/template',$data, FALSE);
	}

	public function curl()
	{
	        /* API URL */

        $url = 'https://api.kawalcorona.com/indonesia';

             

        /* Init cURL resource */

        $ch = curl_init($url);

            

        /* Array Parameter Data */

        $data = ['name'=>'', 'positif'=>''];

            

        /* pass encoded JSON string to the POST fields */

        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

           

        /* set the content type json */

        curl_setopt($ch, CURLOPT_HTTPHEADER, array(

                    'Content-Type:application/json',

                    'App-Key: 123456',

                    'App-Secret: 1233'

                ));

            

        /* set return type json */

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            

        /* execute request */

        $result = curl_exec($ch);

           print_r($result);
           echo "$result";

        /* close cURL resource */

        curl_close($ch);

	}
}
