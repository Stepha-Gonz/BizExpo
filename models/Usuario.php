<?php 

namespace Model;
class Usuario extends ActiveRecord{
    protected static $tabla='usuarios';
    protected static $columnasDB=['id','nombre','apellido','email','password','token','confirmado','admin'];


    public $id;
    public $nombre;
    public $apellido;
    public $email;
    public $password;
    public $token;
    public $confirmado;
    public $admin;

    //verificacion password
    public $password2;
    public $password_actual;
    public $password_nueva;


    public function __construct($args=[]){
        $this->id=$args['id'] ?? null;
        $this->nombre=$args['nombre'] ?? '';
        $this->apellido=$args['apellido'] ?? '';
        $this->email=$args['email'] ?? '';
        $this->password=$args['password'] ?? '';
        $this->token=$args['token'] ?? '';
        $this->confirmado=$args['confirmado'] ?? 0;
        $this->admin=$args['admin'] ?? 0;
        $this->password2=$args['password2'] ?? 0;
        
    }

    public function validarLogin() {
        if(!$this->email) {
            self::$alertas['error'][] = 'El Email del Usuario es Obligatorio';
        }
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            self::$alertas['error'][] = 'Email no válido';
        }
        if(!$this->password) {
            self::$alertas['error'][] = 'El Password no puede ir vacio';
        }
        return self::$alertas;

    }

    public function validar_cuenta(){

        if(!$this->nombre) {
            self::$alertas['error'][] = 'El Nombre es Obligatorio';
        }
        if(!$this->apellido) {
            self::$alertas['error'][] = 'El Apellido es Obligatorio';
        }
        if(!$this->email) {
            self::$alertas['error'][] = 'El Email es Obligatorio';
        }
        
        if(!$this->password){
            self::$alertas['error'][]="La contraseña es obligatoria";
        }
        if(strlen($this->password) < 8) {
        self::$alertas['error'][] = "La contraseña debe tener al menos 8 caracteres";
        }
        if(!preg_match('/[A-Z]/', $this->password) || !preg_match('/[a-z]/', $this->password) || !preg_match('/[!@#$%^&*(),.?":{}|<>]/', $this->password)) {
            self::$alertas['error'][] = "La contraseña debe tener al menos una letra mayúscula, una minúscula y un carácter especial";
        }
        if($this->password!==$this->password2){
            self::$alertas['error'][]="Las contraseñas no coinciden";
        }


        return self::$alertas;
    }

    public function validarEmail() {
        if(!$this->email) {
            self::$alertas['error'][] = 'El Email es Obligatorio';
        }
        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            self::$alertas['error'][] = 'Email no válido';
        }
        return self::$alertas;
    }

    public function validarPassword(){
        if(!$this->password){
            self::$alertas['error'][]="La contraseña es obligatoria";
        }
        if(strlen($this->password) < 8) {
        self::$alertas['error'][] = "La contraseña debe tener al menos 8 caracteres";
        }
        if(!preg_match('/[A-Z]/', $this->password) || !preg_match('/[a-z]/', $this->password) || !preg_match('/[!@#$%^&*(),.?":{}|<>]/', $this->password)) {
            self::$alertas['error'][] = "La contraseña debe tener al menos una letra mayúscula, una letra minúscula y un carácter especial";
        }
         if($this->password!==$this->password2){
             self::$alertas['error'][]="Las contraseñas no coinciden";
         }


        return self::$alertas;
    }

    public function nuevo_password() : array {
        if(!$this->password_actual) {
            self::$alertas['error'][] = 'El Password Actual no puede ir vacio';
        }
        if(!$this->password_nuevo) {
            self::$alertas['error'][] = 'El Password Nuevo no puede ir vacio';
        }
        if(strlen($this->password) < 8) {
        self::$alertas['error'][] = "La contraseña debe tener al menos 8 caracteres";
        }
        if(!preg_match('/[A-Z]/', $this->password) || !preg_match('/[a-z]/', $this->password) || !preg_match('/[!@#$%^&*(),.?":{}|<>]/', $this->password)) {
            self::$alertas['error'][] = "La contraseña debe tener al menos una letra mayúscula, una letra minúscula y un carácter especial";
        }
        return self::$alertas;
    }

    public function comprobar_password() : bool {
        return password_verify($this->password_actual, $this->password );
    }

    public function hashPassword() : void {
        $this->password = password_hash($this->password, PASSWORD_BCRYPT);
    }

    public function crearToken() : void {
        $this->token = uniqid();
    }
}