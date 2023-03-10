window.addEventListener('load', function(){

    function createModal(itemData){

        if(itemData === null || itemData === undefined) return "Error!";

        // create modal 500px x 500px
        const modal = document.createElement('div');
        modal.classList.add('modal');

        const closeButtonMobile = document.createElement('i');
        closeButtonMobile.classList.add('fas', 'fa-times', 'close-button-mobile');
        closeButtonMobile.zIndex = 1000;

        //create background behind modal
        const background = document.createElement('div');
        background.classList.add('background');

        // append image to modal width:80% of modal
        const image = document.createElement('img');
        image.src = itemData.image;

        // div for text width 40% of modal
        const textDiv = document.createElement('div');

        // append title to textDiv
        const title = document.createElement('h2');
        title.innerHTML = itemData.title;

        // append description to textDiv
        const description = document.createElement('p');
        description.innerHTML = `Descriere:<br>${itemData.description}`;

        // append recipe to textDiv
        const recipe = document.createElement('p');
        recipe.innerHTML = `Reteta:<br>${itemData.recipe}`;

        const ingredients = document.createElement('p');
        ingredients.innerHTML = `Ingrediente:<br>${itemData.ingredients}`;

        // append price to textDiv
        const price = document.createElement('p');
        price.innerHTML = itemData.price;

        //add  ron text to price
        price.appendChild(document.createTextNode(' RON'));

        //append title, description, recipe, price to textDiv
        textDiv.appendChild(title);
        textDiv.appendChild(description);
        textDiv.appendChild(recipe);
        textDiv.appendChild(ingredients);
        textDiv.appendChild(price);

        //append image and textDiv to modal
        modal.appendChild(image);
        modal.appendChild(textDiv);
        modal.appendChild(closeButtonMobile);

        document.body.appendChild(modal);
        document.body.appendChild(background);


        //click outside modal to close listener
        background.addEventListener('click', function(){
            deleteModal();
        });

        //close button listener
        closeButtonMobile.addEventListener('click', function(){
            deleteModal();
        });
    }

    function deleteModal(){
        const modal = document.querySelector('.modal');
        const background = document.querySelector('.background');
        const closeButtonMobile = document.querySelector('.close-button-mobile');

        background.removeEventListener('click', function(){
            deleteModal();
        });

        closeButtonMobile.removeEventListener('click', function(){
            deleteModal();
        });

        // remove modal and background from body
        modal.remove();
        background.remove();
    }

    // coffee items
    const coffeItemsWrapper  = document.getElementById("coffee-items");

    coffeItemsWrapper.querySelectorAll('.menu-item p, .menu-item i').forEach(function(item){
        item.addEventListener('click', function(){
            // get last parent of the item clicked
            const parent = item.parentElement.parentElement;

            //get id from parent
            const id = parent.id;

            //add cors to fetch
            fetch("/data/coffees.json", {
                headers : {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json'
                }
            }).then(function(response){
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
