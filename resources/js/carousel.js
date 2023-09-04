let imgs = document.querySelectorAll('img');
let index = 0;

window.show = function (increase) {
    index = index + increase;
    if (index >= imgs.length) {
        index = 0;
    }

    // Si on est au début, aller à la fin
    if (index < 0) {
        index = imgs.length - 1;
    }
    imgs[index].scrollIntoView({behavior: 'smooth'});
}
