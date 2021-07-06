<?php
class Route {
    private $controller = 'Main';
    private $method = 'index';
    private $parameters = [];

    public function __construct() {
        $url = $this->url() ? $this->url() : [0];

        if ( file_exists( 'Controllers/'.ucwords( $url[0] ).'.php' ) ) {
            $this->controller = ucwords( $url[0] );
        }
        require_once 'Controllers/'.$this->controller.'.php';
        $this->controller = new $this->controller;

        if ( isset( $url[1] ) ) {
            if ( method_exists( $this->controller, $url[1] ) ) {
                $this->method = $url[1];
            }
        }
        unset($url[0]);
        unset($url[1]);

        $this->parametros = $url ? array_values( $url ) : [];
        call_user_func_array( [$this->controller, $this->method], $this->parameters );

    }

    public function url() {
        $url = filter_input( INPUT_GET, 'url', FILTER_SANITIZE_URL );
        if ( isset( $url ) ) {
            $url = trim( rtrim( $url, '/' ) );
            $url = explode( '/', $url );
            return $url; 
        }
    }
}