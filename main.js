const loader = document.querySelector('.loader');
const main = document.querySelector('.main');
const thirdsection = document.querySelector('.thirdsection');


function init() {
    setTimeout(() =>  {
        loader.style.opacity = 0;
        loader.style.display = 'none';

        main.style.display = 'block';
        setTimeout(() => main.style.opacity = 1, 50)
    }, 2500);
}


init();
lit();