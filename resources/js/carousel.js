let items = document.querySelectorAll('.carousel-item');
let index = 0;

window.show = function (increase) {
    index = index + increase;
    if (index >= items.length) {
        index = 0;
    }

    // Si on est au début, aller à la fin
    if (index < 0) {
        index = items.length - 1;
    }
    items[index].scrollIntoView({ behavior: 'smooth' });
}
