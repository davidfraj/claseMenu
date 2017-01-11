<?php
/*
//Version del archivo a fecha 2017 - Enero - 11


menu.class.php, adaptado a BOOTSTRAP
Cómo usaré esta clase:
 $p será una variable, que contendrá la página que esta mostrando el index en este momento, de manera que se recogera en el index asi:
    if(isset($_GET['p'])){
        $p=$_GET['p'];
    }else{
        $p='inicio.php';
    }
 Siendo inicio.php, el primer archivo de mi vector $archivos.
    $titulos=array('Inicio', 'Noticias', 'Galeria', 'Contacto', 'Blog', 'Productos');
    $archivos=array('inicio.php', 'noticias.php', 'galeria.php', 'contacto.php', 'blog.php', 'productos.php');

    $menu=new menu($titulos, $archivos);
    $menu->mostrar();
*/
class menu{
        //Propiedades
        public $pactual; //Página actual
        public $titulos; //El vector de titulos
        public $archivos; //El vector de archivos
 
        //Métodos
        function __construct($titulos, $archivos){
                $this->titulos=$titulos; //Relleno los titulos
                $this->archivos=$archivos; //Relleno los archivos
                global $p;
                $this->pactual=$p; //Relleno la página actual
        }
 
        function mostrar(){
            echo '<ul class="nav nav-tabs">';
            for($i=0 ;$i<count($this->titulos) ;$i++){
                if($this->pactual==$this->archivos[$i]){
                        $c='active';
                }else{
                        $c='';
                }
                echo '<li class="'.$c.'">';
                echo '<a href="index.php?p='.$this->archivos[$i].'">';
                        echo $this->titulos[$i];
                echo '</a>';
                echo '</li>';
            }
            echo '</ul>';
        }
 
}
?>