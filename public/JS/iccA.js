// Code JavaScript pour le bouton "Faire un don"
var donateBtn = document.querySelector('.donate-btn');
donateBtn.addEventListener('click', function() {
    // Insérez ici le code pour rediriger l'utilisateur vers la page de don
});


// const donationButton = document.querySelector('button');

// donationButton.addEventListener('click', function() {
//  alert('Merci pour votre don !');
// });


function previous() {
    const widthSlider = document.querySelector('.slider').offsetWidth;
    document.querySelector('.slider__content').scrollLeft -= widthSlider

}

function next() {
    const widthSlider = document.querySelector('.slider').offsetWidth;
    document.querySelector('.slider__content').scrollLeft += widthSlider
}


$('#myCarousel').carousel({
    interval: 3000,
 })

