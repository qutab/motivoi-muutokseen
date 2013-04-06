<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta name="author" content="Ville Hämäläinen & Qutab" />
<title>Terveyspuu - Yksityiskohtainen tarkastelu</title>
<link href="http://necolas.github.com/normalize.css/1.1.0/normalize.css" rel="StyleSheet"/>
<link href="./css/base.css" rel="StyleSheet"/>
<script type="text/javascript" src="http://github.com/DmitryBaranovskiy/raphael/raw/master/raphael-min.js"></script>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
</head>
<body>
   
   
   
   <div id = "nav" >
      <!--Centering the content-->
      <div class = "wrap">
         <div id = "logo"><a href="./index.html"></a></div>
         <ul class = "navlist">
         <li><a href="./index.html">Yleisnäkymä</a></li>
         <li><a href="./compareview.html">Terveyspuiden vertailu</a></li>
         <li id="current">Yksittäiset terveyspuut</li>
         <li><a href="./contactform.html">Ota yhteyttä</a></li>
         </ul>      
      </div>
   </div>

   
   <!--Centering the content-->
   <div class="wrap">
   
      <!--id for visualization drawing script-->
      <div id="main-tree">Draw Tree Here!</div>

      
      <div id = "dropdown">
         <?php include '/php/dropmenu.php'; ?>
         <input type = "submit" value = "Go!" onclick='drawToMainPaper()'/>
      </div>
   
      <!--box for indicator information-->
      <div id="information-box">Information Box!</div>

   </div>


   <div id="footer">
   
      <!--Centering the content-->
      <div class="wrap">
         <div id="comparison-list">Comparison list here</div>
      </div>
      
   </div>
   
   <script type="text/javascript" src="./js/health-tree-visualizations.js"></script>
   <script type="text/javascript" src="./js/indicator-functions.js"></script>   
   <script type="text/javascript">
      
      
      function drawToMainPaper(){
         var municipalityId = $('#select').val();
      console.log(municipalityId);
      var mainPaper = Raphael("main-tree", 600,500);
         mainPaper.clear();
         drawMainTree(municipalityId, mainPaper);
         //mainPaper.setViewBox(0,0,150,125,false);
      }
   </script>
</body>
</html>