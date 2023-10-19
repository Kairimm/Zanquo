import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

let burger = document.querySelector('#burger');
let cross = document.querySelector('#cross');

burger.addEventListener('click', (ev) => {
    document.querySelector('#main').className = 'hidden';
    burger.classList.add('hidden');
    cross.classList.remove('hidden');
    document.getElementById('menu_hero').classList.remove('hidden');

});

cross.addEventListener('click', (ev) => {
    burger.classList.remove('hidden');
    cross.classList.add('hidden');
    document.querySelector('#main').classList.remove('hidden');
});


// Function to change the product type in the session storage and update the button font-weight
function setProductType(productType) {
    sessionStorage.setItem('product_type', productType);
    updateButtonStyles(productType);
}

function updateButtonStyles(productType) {
    const buttons = {
        watches: document.getElementById('watches'),
        straps: document.getElementById('straps'),
        allProducts: document.getElementById('all_products')
    };

    for (const [key, button] of Object.entries(buttons)) {
        button.style.fontWeight = 'normal';
        if (key !== 'allProducts') {
            button.style.color = '#BABABA';
        }
    }

    buttons[productType].style.fontWeight = 'bold';
    buttons[productType].style.color = 'black';
    buttons.allProducts.href = `/${productType}`;
    buttons.allProducts.innerHTML = `All ${productType}`;
}


if (!sessionStorage.getItem('product_type')) {
    sessionStorage.setItem('product_type', 'watches');
}

document.getElementById('watches').addEventListener('click', function () {
    setProductType('watches');
    console.log(sessionStorage.getItem('product_type'));
});

document.getElementById('straps').addEventListener('click', function () {
    setProductType('straps');
    console.log(sessionStorage.getItem('product_type'));
});

const initialProductType = sessionStorage.getItem('product_type');
if (initialProductType) {
    updateButtonStyles(initialProductType);
}

