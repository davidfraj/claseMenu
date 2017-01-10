# clasemenu
Clase para crear menus en php

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
