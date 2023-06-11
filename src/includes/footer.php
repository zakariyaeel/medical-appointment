<style>
  footer {
        background-image: linear-gradient(to top, #92E3A9, #ffff );
      }
      
  body{
        margin: 0;
      }
  footer {
  /* couleur de fond sombre pour le footer */
  color: black; /* couleur blanche pour le texte */
   /* espacement de 20px en haut et en bas */
   /* marge de 25px en haut */
}
footer .container {
  /* aligner les éléments verticalement au centre */
  justify-content: space-around; /* ajouter de l'espace entre les éléments */
}

footer .row {
  display: inline-flex; /* utiliser flex pour aligner les éléments horizontalement */
}

footer .col-md-3 {
  display: inline;

  /* ajouter de l'espace en haut et en bas pour séparer les éléments */
  margin-left: 150px ;
  margin-right: 50px ; 
  /* ajouter de l'espace à droite pour séparer les colonnes */
  padding-right: 20px; 
  padding-left: 60px;
}

footer h5 {
  /* ajouter de l'espace en haut et en bas pour séparer les éléments */
  margin: 20px 0; 
  /* mettre le titre en gras */
  font-weight: bold;
}

footer ul {
  /* enlever les puces de la liste */
  list-style: none; 
  /* ajouter de l'espace en haut et en bas pour séparer les éléments */
  margin: 20px 0; 
  /* ajouter de l'espace à gauche pour séparer les éléments de la liste */
  padding-left: 20px; 
}

footer li {
  /* ajouter de l'espace en haut et en bas pour séparer les éléments */
  margin: 10px 0; 
}

footer a {
  /* changer la couleur du lien */
  color: black; 
  /* enlever le soulignement du lien */
  text-decoration: none; 
}
footer a:hover{
  color: white;
}

footer .text-center {
  /* aligner le texte au centre */
  text-align: center; 
}
</style>
    
    <footer class="bg-dark text-white py-3 mt-5">
        <div class="container">
          <div class="row">
           
            <div class="col-md-3">
              <h3>Navigation</h3>
              <ul class="list-unstyled">
                <li><a href="index.php" class="text-white">Home</a></li>
                <li><a href="portfolio.php" class="text-white">Portfolio</a></li>
                <li><a href="aboutus.php" class="text-white">about us</a></li>
                
              </ul>
            </div>
            <div class="col-md-3">
              <h3>Suivez-nous</h3>
              <ul class="list-unstyled">
                <li><a href="#" class="text-white">Facebook</a></li>
                <li><a href="#" class="text-white">Twitter</a></li>
                <li><a href="#" class="text-white">Instagram</a></li>
                <li><a href="#" class="text-white">Youtube</a></li>
              </ul>
            </div>
            <div class="col-md-3">
              <h3>Contact</h3>
              <ul class="list-unstyled">
                <li><i class="fas fa-home mr-2"></i>Fes, maroc</li>
                <li><i class="fas fa-envelope mr-2"></i>info@domaine.com</li>
                <li><i class="fas fa-phone mr-2"></i> +212 612 87 67 86</li>
              </ul>
            </div>
          </div><br><br>
          <div class="text-center py-3">
            Copyright &copy; 2023 - Tous droits réservés
          </div><br>
        </div>
      </footer>
</html>