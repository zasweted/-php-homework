/*Lightbox start*/

const box = document.querySelector('#lightBox');

const play = document.querySelector('#playBtn');

const btnClose = document.querySelector('#closeBtn');

const playStop = document.querySelector('#playStop');


const closeLightbox = () => {
    box.style.display = 'none'
};

const showLightbox = () => {
    box.style.display = 'flex'
};

btnClose.addEventListener('click', () => {
    closeLightbox()
});

play.addEventListener('click', () => {
    showLightbox();
});

// box.addEventListener('click', () => {
//     closeLightbox()
// });

addEventListener('keydown', ({code}) => {
    if (code === 'Escape') {
        closeLightbox();
    }
});




/*Lightbox end*/