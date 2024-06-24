$(document).ready(function(){
    console.log('ok, ça fonctionne !');

    //boucle des temoignages
    if (document.getElementById('boucle-temoignages')){
        console.log('boucle temoignage');
        let apiURL = 'http://wp2/wordpress/wp-json/wp/v2/temoignage';

        $.getJSON(apiURL, function(temoins){
            console.log(temoins);
            temoins.forEach(function(element){
                console.log(element);
                $('#boucle-temoignages').append(blocTemoignage(element));
            });
        });
    }

    function blocTemoignage(elem){
        let bloc = `
        <div class="swiper-slide">
                  <div class="testimonial mx-auto">
                    <figure class="img-wrap">
                      <img src="assets/img/testimonials/testimonials-1.jpg" alt="Image" class="img-fluid">
                    </figure>
                    <h3 class="name">Adam Aderson</h3>
                    <blockquote>
                      <p>
                        “There live the blind texts. Separated they live in
                        Bookmarksgrove right at the coast of the Semantics, a large
                        language ocean.”
                      </p>
                    </blockquote>
                  </div>
                </div>
        `;
        return bloc;
    }

});