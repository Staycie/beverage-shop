//Static data
const beverages = [
    { name: 'Orange', img: 'orange.png', price: '₱ 70' },
    { name: 'Grapes', img: 'grapes.png', price: '₱ 90' },
    { name: 'Apple', img: 'apple.png', price: '₱ 80' },
    { name: 'Banana', img: 'banana.png', price: '₱ 70' },
    { name: 'Melon', img: 'melon.png', price: '₱ 90' },
    { name: 'Strawberry', img: 'strawberry.png', price: '₱ 90' },
    { name: 'Blueberry', img: 'blueberry.png', price: '₱ 100' },
    { name: 'Avocado', img: 'avocado.png', price: '₱ 100' },
    { name: 'Papaya', img: 'papaya.png', price: '₱ 90' }
];



// Container element where the beverages will be inserted
const menuRow = document.getElementById('menu-list-row');


// Loop through the beverages and create the HTML structure using template literals
beverages.forEach(beverage => {
    const beverageHTML = `
        <div class="menu-item">
            <p class="price">${beverage.price}</p>
            <div class="menu-content">
                <img class="img" src="assets/img/fruits/${beverage.img}" alt="flavor">
                <p class="name">${beverage.name}</p>
            </div>
            <button>Add</button>
        </div>`;

    
    // Append the generated HTML to the container
    menuRow.innerHTML += beverageHTML;
});