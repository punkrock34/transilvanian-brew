//import coffee.json  from data folder
import coffee from '../data/coffee.json';

window.addEventListener('load', function(){

    function createModal(itemData){

        if(itemData === null || itemData === undefined) return "Error!";

        // create modal 500px x 500px
        const modal = document.createElement('div');
        modal.style.width = '500px';
        modal.style.height = '500px';
        modal.style.backgroundColor = 'white';
        modal.style.position = 'fixed';
        modal.style.top = '50%';
        modal.style.left = '50%';
        modal.style.transform = 'translate(-50%, -50%)';
        modal.style.zIndex = '1000';

        // create close button
        const closeButton = document.createElement('button');
        closeButton.id = 'modal-close';
        closeButton.innerHTML = 'X';
        closeButton.style.position = 'absolute';
        closeButton.style.top = '0';
        closeButton.style.right = '0';
        closeButton.style.backgroundColor = 'transparent';
        closeButton.style.border = 'none';
        closeButton.style.fontSize = '2rem';
        closeButton.style.cursor = 'pointer';

        //create background behind modal
        const background = document.createElement('div');
        background.style.width = '100%';
        background.style.height = '100%';
        background.style.backgroundColor = 'rgba(0,0,0,0.5)';
        background.style.position = 'fixed';
        background.style.top = '0';
        background.style.left = '0';
        background.style.zIndex = '999';

        // append image to modal width:80% of modal
        const image = document.createElement('img');
        image.src = itemData.image;
        image.style.width = '80%';
        image.style.margin = '0 auto';
        image.style.display = 'block';

        // append title, description recipe price to modal as text width:20% on right
        const title = document.createElement('h2');
        title.innerHTML = itemData.title;
        title.style.width = '20%';
        title.style.margin = '0 auto';
        title.style.display = 'block';
        title.style.textAlign = 'center';

        const description = document.createElement('p');
        description.innerHTML = itemData.description;
        description.style.width = '20%';
        description.style.margin = '0 auto';
        description.style.display = 'block';
        description.style.textAlign = 'center';

        const recipe = document.createElement('p');
        recipe.innerHTML = itemData.recipe;
        recipe.style.width = '20%';
        recipe.style.margin = '0 auto';
        recipe.style.display = 'block';
        recipe.style.textAlign = 'center';

        const price = document.createElement('p');
        price.innerHTML = itemData.price;
        price.style.width = '20%';
        price.style.margin = '0 auto';
        price.style.display = 'block';
        price.style.textAlign = 'center';


        // append modal to body
        modal.appendChild(closeButton);
        modal.appendChild(image);
        modal.appendChild(title);
        modal.appendChild(description);
        modal.appendChild(recipe);
        modal.appendChild(price);
        document.body.appendChild(modal);
        document.body.appendChild(background);
    }

    function deleteModal(){
        const modal = document.querySelector('.modal');
        const background = document.querySelector('.background');
        modal.remove();
        background.remove();
    }

    // event listener for close button
    document.getElementById("modal-close").addEventListener('click', function(e){
        deleteModal();
    });

    // coffee items
    const coffeItemsWrapper  = document.getElementById("coffee-items");

    coffeItemsWrapper.childNodes().forEach(function(item){
        item.addEventListener('click', function(){

            //if element is has class .menu-item.content
            if(!item.classList.contains('menu-item-content')) return;

            // get id of clicked item
            const id = item.id;

            // get data of clicked item
            const itemData = coffee.find(function(item){
                return item.id === id;
            });

            // create modal
            createModal(itemData);
        });
    });


});
