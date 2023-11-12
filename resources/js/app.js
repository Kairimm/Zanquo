import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

function setProductType(productType) {
    sessionStorage.setItem('product_type', productType);
    updateButtonStyles(productType);
}

function updateButtonStyles(productType) {
    const buttons = {
        watches: document.querySelector('.watches'),
        straps: document.querySelector('.straps'),
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

document.querySelector('.watches').addEventListener('click', function () {
    setProductType('watches');
    console.log(sessionStorage.getItem('product_type'));
});

document.querySelector('.straps').addEventListener('click', function () {
    setProductType('straps');
    console.log(sessionStorage.getItem('product_type'));
});

document.querySelector('#return').addEventListener('click', function (ev) {
    window.scrollTo({ top: 0, behavior: 'smooth' });
});

const initialProductType = sessionStorage.getItem('product_type');
if (initialProductType) {
    updateButtonStyles(initialProductType);
}


