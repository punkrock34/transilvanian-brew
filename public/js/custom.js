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
        image.style.width = '60%';
        image.style.display = 'block';
        //float left
        image.style.float = 'left';

        // div for text width 40% of modal
        const textDiv = document.createElement('div');
        textDiv.style.width = '40%';
        textDiv.style.float = 'right';
        textDiv.style.display = 'flex';
        textDiv.style.flexDirection = 'column';


        // append title to textDiv
        const title = document.createElement('h2');
        title.innerHTML = itemData.title;
        title.style.margin = '0';
        title.style.padding = '0';
        title.style.fontSize = '1.5rem';
        title.style.fontWeight = 'bold';
        title.style.color = "#da9f5b";

        // append description to textDiv
        const description = document.createElement('p');
        description.innerHTML = itemData.description;
        description.style.margin = '0';
        description.style.padding = '0';
        description.style.fontSize = '1rem';
        description.style.fontWeight = 'normal';
        description.style.color = "#000";

        // append recipe to textDiv
        const recipe = document.createElement('p');
        recipe.innerHTML = itemData.recipe;
        recipe.style.margin = '0';
        recipe.style.padding = '0';
        recipe.style.fontSize = '1rem';
        recipe.style.fontWeight = 'normal';
        recipe.style.color = "#000";

        // append price to textDiv
        const price = document.createElement('p');
        price.innerHTML = itemData.price;
        price.style.margin = '0';
        price.style.padding = '0';
        price.style.fontSize = '1rem';
        price.style.fontWeight = 'normal';
        price.style.color = "#000";
        //justify self flex-end to align to bottom right of div
        price.style.alignSelf = 'flex-end';
        price.style.justifySelf = 'flex-end';


        //append title, description, recipe, price to textDiv
        textDiv.appendChild(title);
        textDiv.appendChild(description);
        textDiv.appendChild(recipe);
        textDiv.appendChild(price);

        // append image and textDiv to modal
        modal.appendChild(closeButton);
        modal.appendChild(image);
        modal.appendChild(textDiv);

        document.body.appendChild(modal);
        document.body.appendChild(background);

        // add event listener to close button
        closeButton.addEventListener('click', function(){
            deleteModal();
        });
    }

    function deleteModal(){
        const modal = document.querySelector('.modal');
        const background = document.querySelector('.background');
        const closeButton = document.getElementById('modal-close');
        // remove modal and backgroung from body
        document.body.removeChild(modal);
        document.body.removeChild(background);

        // remove event listener from close button
        closeButton.removeEventListener('click', function(){
            deleteModal();
        });
    }

    // coffee items
    const coffeItemsWrapper  = document.getElementById("coffee-items");

    coffeItemsWrapper.querySelectorAll('.menu-item p, .menu-item i').forEach(function(item){
        item.addEventListener('click', function(){
            // get last parent of the item clicked
            const parent = item.parentElement.parentElement;

            //get id from parent
            const id = parent.id;

            fetch("/data/coffees.json").then(function(response){
                return response.json();
            }).then(function(data){

                // get item from json based on id, array of objects
                const itemData = data.find(function(item){
                    return item.id == id;
                });

                // create modal
                createModal(itemData);

            }).catch(function(error){
                console.log(error);
            });

        });
    });


});
