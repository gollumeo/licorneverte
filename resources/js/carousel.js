import $ from 'jquery';
import 'owl.carousel/dist/assets/owl.carousel.css';
import 'owl.carousel';

$(document).ready(function() {
    $('.owl-carousel').owlCarousel({
        items: 1, // Le nombre d'articles à afficher
        loop: true, // Faire une boucle continue
        nav: true, // Afficher les flèches de navigation
        dots: false, // Masquer les indicateurs de pagination
        // ... autres options que vous souhaitez configurer
    });
});
