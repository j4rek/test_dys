<?php
  namespace App\libs\request;

  class curl{
    /**
     * Resource cURL
     * @var [type]
     */
    private $_cURL;

    /**
     * Array asociativo de opciones para CURL
     * @var Array
     */
    private $_opts;

    /**
     * constructor de clase
     * @param string $url  [URL de servicio]
     * @param array  $opts [opciones de CURL]
     */
    function __construct($url, $opts = []){
      $this->_cURL  = curl_init($url);
      $this->setOpts($opts);
    }

    /**
     * Establece las opciones para CURL
     * @param array $opts [opciones curl]
     */
    function setOpts($opts){
      $defaultOpts = ['CURLOPT_TIMEOUT'=>3600, 'CURLOPT_CONNECTTIMEOUT'=>3600, 'CURLOPT_RETURNTRANSFER'=>true];
      $this->_opts = array_merge($defaultOpts, $opts);

      foreach ($this->_opts as $key => $value) {
        curl_setopt($this->_cURL, constant($key), $value);
      }
    }

    /**
     * Establece los campos para crear request en formato json
     * @param array $fields [array asociativo con los campos para ser enviado]
     */
    function setFields($fields){
        curl_setopt($this->_cURL, CURLOPT_POSTFIELDS, json_encode($fields));
    }

    /**
     * Ejecuta la peticion de curl
     * @return data
     */
    function execute(){
      try{
        $data = curl_exec($this->_cURL);
      }catch(\Exception $ex){
        echo $ex->getMessage();
      }
      if(curl_error($this->_cURL)){
        die(curl_error($this->_cURL));
      }
      return $data;
    }

    /**
     * Retorna informacion del objeto curl
     * @return curl_info
     */
    function getinfo(){
        return curl_getinfo($this->_cURL);
    }

    /**
     * Establece la url a consultar
     * @param string $uri
     */
    function setCurlUrl($uri){
        $this->_cURL = $uri;
    }

  }
?>
