<!DOCTYPE html>
<html>
<head >
    <meta charset="utf-8">
    <title>Quetzal C.C</title>

  <meta name="description" content="simple CV example created with HTML and CSS">
  <meta name="author" >
  <link rel="icon" href="./img/qlog.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 

    <link rel="stylesheet" type="text/css" href="css/estilo.css">

  <script>
    /**
    * Array con las imagenes que se iran mostrando en la web
    */
    var imagenes=new Array(
        
        'img/pb.jpg',
        'img/pbb.jpg',
        'img/pj.jpg',
    );
 
    /**
    * Funcion para cambiar la imagen
    */
    function rotarImagenes()
    {
        // obtenemos un numero aleatorio entre 0 y la cantidad de imagenes que hay
        var index=Math.floor((Math.random()*imagenes.length));
 
        // cambiamos la imagen
        document.getElementById("imagen").src=imagenes[index];
    }
 
    /**
    * Función que se ejecuta una vez cargada la página
    */
    onload=function()
    {
        // Cargamos una imagen aleatoria
        rotarImagenes();
 
        // Indicamos que cada 5 segundos cambie la imagen
        setInterval(rotarImagenes,5000);
    }
</script>

</head>
<body >
     
   <header>
    <div>
      <img src="./img/fotoQ.jpg" / id="imagen">
    </div>
    <h1>Quezal Chavez Castañeda</h1>
    
    <section>
      <p>Hola. Soy Quetzal,Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
      
    </section>
  </header>
       
<div class="slider">
  <ul>
    <li>
    <a href="#cuerpo"><img src="img/ja.jpg" hr alt=""></a>
   </li>
    <li>
    <a href="#cuerpo"><img src="img/py.png" alt=""></a>
  </li>
  <li>
    <a href="#cuerpo"><img src="img/ht.jpg" alt=""></a>
   </li>
   <li>
   <a href="#cuerpo"><img src="img/cs.png" alt=""></a>
   </li>
   <li>
    <a href="#tra"><img src="img/alianzaq.png" alt=""></a>
   </li>
   <li>
    <a href="#tra"><img src="img/iron.jpg" alt=""></a>
   </li>
   <li>
    <img src="img/sco.jpg" alt="">
   </li>
  </ul>
</div>  
    <section id="tra">
      <h3>Trabajos Importantes</h3>
      <article class='course'>
        <div class='title'>
          <h4>Vencer a Thanos</h4>
        </div>
        <div class="descrition">
          <p>Me sacrifique chasqueando los dedos con el guantelete del infinito</p>
        </div>
      </article>
      <article class='course'>
        <div class='title'>
          <h4>Vencer a Lord Voldemort</h4>
        </div>
        <div class="descrition">
          <p>Tome la varita de sauco e hice polvo a el señor oscuro</p>
        </div>
      </article>
      <article class='course'>
        <div class='title'>
          <h4>Use y destrui el anillo unico</h4>
        </div>
        <div class="descrition">
          <p>En mi travesia para salvar a la Tierra Media desafie y destrui a Sauron</p>
        </div>
      </article>
      <article class='course'>
        <div class='title'>
          <h4>Destrui la estrella de la muerte</h4>
        </div>
        <div class="descrition">
          <p>Junto con la alianza rebelde pude destruir la primer estrella de la muerte</p>
        </div>
      </article>
    </section>
    <main>
      <hr width="75%" color="#5F1258">
     <section id="cuerpo">
       <h3>Habilidades</h3>
       <div class='skills'>
         <div class='column'>
           <h4>Dominado</h4>
           <ul>
             <li>HTML5</li>
             <li>CSS</li>
             <li>Java</li>
             <li>Python</li>
             <li>Sentir la fuerza</li>

           </ul>
         </div>
         <div class='column'>
        <h4>Basico</h4>
           <ul>
             <li>Viajar en el tiempo</li>
             <li>Convertir el agua en vino</li>
             <li>Volar</li>
             <li>Salto doble</li>
           </ul>
         </div>    
     </div>
  </section>

         
    </section>

    <section>
      <h3>Educacion</h3>
      <article>
        <div class='school'>
          <span>2005-2020</span> <strong>Consejo Jedi</strong>
        </div>
        <div class="descrition">
          Diplomacia 
        </div>
      </article>
      <article>
        <div class='school'>
          <span>2007-2015</span> <strong>Liga de la Justicia </strong>
        </div>
        <div>
          Compañerismo
        </div>
      </article>
      <article>
        <div class='school'>
          <span>2007-2015</span> <strong>Vengadores</strong>
        </div>
        <div>
          Justicia
        </div>
      </article>
    </section>
</main>
  <img id="imf" style="width: 100%;" id="footer" src="img/footer.jpg" alt>

   <footer>
    <p>Creado por: <a href="https://www.cecyt9.com/">@quetzal</a>/ <a href="https://www.cecyt9.com/">Quetzal C.C</a>/<a href="https://www.cecyt9.com/" target="_blank">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="https://twitter.com/" target="_blank">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="https://github.com/" target="_blank">
        <i class="fab fa-github-alt"></i>
      </a>
      <a href="https://www.instagram.com/?hl=es-la" target="_blank">
        <i class="fab fa-instagram"></i>
      </a>/ 2020 </p>
  </footer> 

</body>
</html>