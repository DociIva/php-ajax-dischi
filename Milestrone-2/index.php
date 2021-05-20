<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dischi</title>
    <!--Vue-->
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <!--Style-->
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    
   <div id="app">
        
   <!--header-->
        <header>
             <h2>Dischi</h2>
             <ul>
                 <li v-for="album in albums">
                     {{album.title}}
                 </li>
             </ul>
        </header>  
        <!--main--> 
        <main>

        </main>

   </div>

  <!--JS | AXIOS-->
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <script src="./js/script.js"></script>
</body>
</html>