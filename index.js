// Afficher/Masquer le popup de commande
function toggleOrderPopup(show) {
    const popup = document.getElementById("order-popup");
    if (show) {
        popup.classList.remove("hidden");
    } else {
        popup.classList.add("hidden");
    }
}

// Vérifier le formulaire de commande
function handleOrderSubmit(event) {
    event.preventDefault();
    const restaurant = document.getElementById('restaurant-select').value;
    const date = document.querySelector('input[type="date"]').value;
    const time = document.querySelector('.time-select').value;
    
    if (restaurant && date && time) {
        window.location.href = 'commande.php';
    } else {
        alert('Veuillez remplir tous les champs');
    }
}

// Faire défiler la galerie
function scrollGallery(direction) {
    const scrollContainer = document.getElementById("scrollContainer");
    if (direction === "left") {
        scrollContainer.scrollLeft -= 300;
    } else {
        scrollContainer.scrollLeft += 300;
    }
}

// Définir la variable globale en dehors de la fonction
let mapVisible = false;

// Gérer l'affichage de la map
function toggleElements() {
    const mapContainer = document.getElementById('mapContainer');
    mapVisible = !mapVisible;
    mapContainer.style.display = mapVisible ? 'block' : 'none';
}

// Gestion des commandes
document.addEventListener('DOMContentLoaded', function() {
    // Variables globales pour les sélections
    const orderData = {
        base: null,
        ingredients: [],
        sauce: null,
        boisson: null,
        caloriesTotal: 0,
        prixTotal: 0
    };

    // Nombre maximum d'ingrédients
    const MAX_INGREDIENTS = 4;

    // Éléments du DOM
    const progressSteps = document.querySelectorAll('.progress-step');
    const orderSteps = document.querySelectorAll('.order-step');
    const nextBtn = document.getElementById('next-btn');
    const cancelBtn = document.querySelector('.cancel-btn');
    const closeBtn = document.querySelector('.close-btn');
    const infoModal = document.getElementById('info-modal');
    const closeModal = document.querySelector('.close-modal');
    const modalTitle = document.getElementById('modal-title');
    const modalContent = document.getElementById('modal-content');

    // Éléments du résumé
    const baseSelection = document.getElementById('base-selection');
    const ingredientsSelection = document.getElementById('ingredients-selection');
    const sauceSelection = document.getElementById('sauce-selection');
    const drinkSelection = document.getElementById('drink-selection');
    const totalCalories = document.getElementById('total-calories');
    const ingredientsPrice = document.getElementById('ingredients-price');
    const extrasPrice = document.getElementById('extras-price');
    const totalPrice = document.getElementById('total-price');

    // Étape actuelle
    let currentStep = 1;

    // Initialiser les écouteurs d'événements
    function initEventListeners() {
        // Bouton Suivant
        nextBtn.addEventListener('click', goToNextStep);

        // Annuler la commande
        cancelBtn.addEventListener('click', resetOrder);

        // Fermer le popup
        closeBtn.addEventListener('click', resetOrder);

        // Informations sur les produits
        document.querySelectorAll('.info-btn').forEach(button => {
            button.addEventListener('click', showInfoModal);
        });

        // Fermer la modal
        closeModal.addEventListener('click', () => {
            infoModal.style.display = 'none';
        });

        // Ajouter un produit
        document.querySelectorAll('.add-btn').forEach(button => {
            button.addEventListener('click', selectItem);
        });

        // Click en dehors de la modal pour la fermer
        window.addEventListener('click', (event) => {
            if (event.target === infoModal) {
                infoModal.style.display = 'none';
            }
        });
    }

    // Passer à l'étape suivante
    function goToNextStep() {
        // Cacher l'étape actuelle
        orderSteps[currentStep - 1].classList.remove('active');
        
        // Marquer l'étape actuelle comme terminée
        progressSteps[currentStep - 1].classList.add('completed');
        
        // Augmenter le compteur d'étapes
        currentStep++;
        
        // Vérifier si nous avons atteint la fin du processus de commande
        if (currentStep > orderSteps.length) {
            // C'est ici que la commande serait soumise
            submitOrder();
            return;
        }
        
        // Afficher l'étape suivante
        orderSteps[currentStep - 1].classList.add('active');
        progressSteps[currentStep - 1].classList.add('active');
        
        // Mettre à jour le texte du bouton Suivant pour la dernière étape
        if (currentStep === orderSteps.length) {
            nextBtn.textContent = 'Ajouter au panier';
        } else {
            nextBtn.textContent = 'Suivant';
        }
        
        // Désactiver le bouton Suivant jusqu'à ce qu'une sélection soit faite
        checkStepCompletion();
    }

    // Réinitialiser la commande
    function resetOrder() {
        // Réinitialiser toutes les données
        orderData.base = null;
        orderData.ingredients = [];
        orderData.sauce = null;
        orderData.drink = null;
        orderData.totalCalories = 0;
        orderData.totalPrice = 0;
        
        // Réinitialiser l'interface utilisateur
        document.querySelectorAll('.option-card.selected').forEach(card => {
            card.classList.remove('selected');
        });
        
        // Réinitialiser la progression
        progressSteps.forEach((step, index) => {
            if (index === 0) {
                step.classList.add('active');
            } else {
                step.classList.remove('active');
                step.classList.remove('completed');
            }
        });
        
        // Réinitialiser les étapes
        orderSteps.forEach((step, index) => {
            if (index === 0) {
                step.classList.add('active');
            } else {
                step.classList.remove('active');
            }
        });
        
        // Réinitialiser l'étape actuelle
        currentStep = 1;
        
        // Réinitialiser le bouton Suivant
        nextBtn.textContent = 'Suivant';
        nextBtn.disabled = true;
        
        // Réinitialiser le résumé
        updateSummary();
    }

    // Afficher les informations d'un produit
    function showInfoModal(event) {
        event.stopPropagation();
        const card = event.target.closest('.option-card');
        const itemName = card.dataset.name;
        const itemCalories = card.dataset.calories;
        
        modalTitle.textContent = itemName + ' Informations';
        
        // Ici, vous pourriez récupérer des informations plus détaillées sur le produit depuis une base de données
        // Pour l'instant, nous allons juste montrer des informations de base
        modalContent.innerHTML = `
            <p><strong>Calories:</strong> ${itemCalories} kcal</p>
            <p>Ceci est une information supplémentaire sur ${itemName}. Dans une vraie application, cela contiendrait des informations nutritionnelles, une liste d'ingrédients, des allergènes, etc.</p>
        `;
        
        infoModal.style.display = 'block';
    }

    // Sélectionner un produit
    function selectItem(event) {
        event.stopPropagation();
        const card = event.target.closest('.option-card');
        const itemId = card.dataset.id;
        const itemName = card.dataset.name;
        const itemPrice = parseFloat(card.dataset.price);
        const itemCalories = parseInt(card.dataset.calories);
        
        // Gérer la sélection en fonction de l'étape actuelle
        switch(currentStep) {
            case 1: // Base
                // Désélectionner toute base précédemment sélectionnée
                document.querySelectorAll('#step-1 .option-card.selected').forEach(selectedCard => {
                    selectedCard.classList.remove('selected');
                    
                    // Soustraire les anciennes calories et prix de la base
                    if (orderData.base) {
                        orderData.totalCalories -= parseInt(orderData.base.calories);
                        orderData.totalPrice -= parseFloat(orderData.base.price);
                    }
                });
                
                // Sélectionner la nouvelle base
                card.classList.add('selected');
                orderData.base = {
                    id: itemId,
                    name: itemName,
                    price: itemPrice,
                    calories: itemCalories
                };
                
                // Ajouter les nouvelles calories et prix de la base
                orderData.totalCalories += itemCalories;
                orderData.totalPrice += itemPrice;
                break;
                
            case 2: // Ingrédients
                if (card.classList.contains('selected')) {
                    // Désélectionner l'ingrédient
                    card.classList.remove('selected');
                    
                    // Retirer du tableau des ingrédients
                    const index = orderData.ingredients.findIndex(item => item.id === itemId);
                    if (index !== -1) {
                        orderData.ingredients.splice(index, 1);
                        orderData.totalCalories -= itemCalories;
                        orderData.totalPrice -= itemPrice;
                    }
                } else {
                    // Vérifier si le nombre maximum d'ingrédients est atteint
                    if (orderData.ingredients.length >= MAX_INGREDIENTS) {
                        alert(`Vous ne pouvez sélectionner que jusqu'à ${MAX_INGREDIENTS} ingrédients.`);
                        return;
                    }
                    
                    // Sélectionner l'ingrédient
                    card.classList.add('selected');
                    
                    // Ajouter au tableau des ingrédients
                    orderData.ingredients.push({
                        id: itemId,
                        name: itemName,
                        price: itemPrice,
                        calories: itemCalories
                    });
                    
                    // Ajouter les calories et le prix
                    orderData.totalCalories += itemCalories;
                    orderData.totalPrice += itemPrice;
                }
                
                // Mettre à jour l'affichage du nombre d'ingrédients
                document.querySelector('.selection-count').textContent = 
                    `${orderData.ingredients.length}/${MAX_INGREDIENTS}`;
                break;
                
            case 3: // Sauce
                // Désélectionner toute sauce précédemment sélectionnée
                document.querySelectorAll('#step-3 .option-card.selected').forEach(selectedCard => {
                    selectedCard.classList.remove('selected');
                    
                    // Soustraire les anciennes calories de la sauce
                    if (orderData.sauce) {
                        orderData.totalCalories -= parseInt(orderData.sauce.calories);
                        // Les sauces sont généralement incluses dans le prix, donc pas de soustraction de prix
                    }
                });
                
                // Sélectionner la nouvelle sauce
                card.classList.add('selected');
                orderData.sauce = {
                    id: itemId,
                    name: itemName,
                    price: itemPrice,
                    calories: itemCalories
                };
                
                // Ajouter les nouvelles calories de la sauce
                orderData.totalCalories += itemCalories;
                // Les sauces sont généralement incluses dans le prix, donc pas d'ajout de prix
                break;
                
            case 4: // Boisson
                // Désélectionner toute boisson précédemment sélectionnée
                document.querySelectorAll('#step-4 .option-card.selected').forEach(selectedCard => {
                    selectedCard.classList.remove('selected');
                    
                    // Soustraire les anciennes calories et prix de la boisson
                    if (orderData.drink) {
                        orderData.totalCalories -= parseInt(orderData.drink.calories);
                        orderData.totalPrice -= parseFloat(orderData.drink.price);
                    }
                });
                
                // Sélectionner la nouvelle boisson
                card.classList.add('selected');
                orderData.drink = {
                    id: itemId,
                    name: itemName,
                    price: itemPrice,
                    calories: itemCalories
                };
                
                // Ajouter les nouvelles calories et prix de la boisson
                orderData.totalCalories += itemCalories;
                orderData.totalPrice += itemPrice;
                break;
        }
        
        // Mettre à jour le résumé
        updateSummary();
        
        // Vérifier si cette étape est complète
        checkStepCompletion();
    }

    // Mettre à jour le résumé
    function updateSummary() {
        // Mettre à jour la sélection de la base
        if (orderData.base) {
            baseSelection.textContent = orderData.base.name;
            document.querySelector('.summary-item:nth-child(1) .item-status').textContent = '1/1';
        } else {
            baseSelection.textContent = 'Non sélectionné';
            document.querySelector('.summary-item:nth-child(1) .item-status').textContent = '0/1';
        }
        
        // Mettre à jour la sélection des ingrédients
        if (orderData.ingredients.length > 0) {
            const ingredientNames = orderData.ingredients.map(item => item.name).join(', ');
            ingredientsSelection.textContent = ingredientNames;
            document.querySelector('.summary-item:nth-child(2) .item-status').textContent = 
                `${orderData.ingredients.length}/${MAX_INGREDIENTS}`;
        } else {
            ingredientsSelection.textContent = 'Non sélectionné';
            document.querySelector('.summary-item:nth-child(2) .item-status').textContent = '0/4';
        }
        
        // Mettre à jour la sélection de la sauce
        if (orderData.sauce) {
            sauceSelection.textContent = orderData.sauce.name;
            document.querySelector('.summary-item:nth-child(3) .item-status').textContent = '1/1';
        } else {
            sauceSelection.textContent = 'Non sélectionné';
            document.querySelector('.summary-item:nth-child(3) .item-status').textContent = '0/1';
        }
        
        // Mettre à jour la sélection de la boisson
        if (orderData.drink) {
            drinkSelection.textContent = orderData.drink.name;
            document.querySelector('.summary-item:nth-child(4) .item-status').textContent = '1/1';
        } else {
            drinkSelection.textContent = 'Non sélectionné';
            document.querySelector('.summary-item:nth-child(4) .item-status').textContent = '0/1';
        }
        
        // Mettre à jour les totaux
        totalCalories.textContent = `${orderData.totalCalories} kcal`;
        
        // Calculer les prix des ingrédients (base + ingrédients)
        let ingredientTotal = 0;
        if (orderData.base) {
            ingredientTotal += orderData.base.price;
        }
        orderData.ingredients.forEach(item => {
            ingredientTotal += item.price;
        });
        ingredientsPrice.textContent = `${ingredientTotal.toFixed(2)} €`;
        
        // Calculer les extras (prix de la boisson)
        let extrasTotal = 0;
        if (orderData.drink) {
            extrasTotal += orderData.drink.price;
        }
        extrasPrice.textContent = `${extrasTotal.toFixed(2)} €`;
        
        // Mettre à jour le prix total
        totalPrice.textContent = `${orderData.totalPrice.toFixed(2)} €`;
    }

    // Vérifier si l'étape est complète
    function checkStepCompletion() {
        let isStepComplete = false;
        
        switch(currentStep) {
            case 1: // Base
                isStepComplete = orderData.base !== null;
                break;
                
            case 2: // Ingrédients
                isStepComplete = orderData.ingredients.length > 0;
                break;
                
            case 3: // Sauce
                isStepComplete = orderData.sauce !== null;
                break;
                
            case 4: // Boisson
                isStepComplete = orderData.drink !== null;
                break;
        }
        
        nextBtn.disabled = !isStepComplete;
    }

    // Envoyer la commande
    function submitOrder() {
        // Préparer les données pour l'envoi
        const orderDataToSend = {
            base: orderData.base.name,
            ingredients: orderData.ingredients.map(ing => ing.name).join(', '),
            sauce: orderData.sauce.name,
            boisson: orderData.drink.name,
            calories_total: orderData.totalCalories,
            prix_total: orderData.totalPrice
        };

        // Envoyer les données via AJAX
        fetch('save_order.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(orderDataToSend)
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert('Votre salade a été ajoutée au panier !');
                resetOrder();
            } else {
                alert('Erreur lors de l\'enregistrement de la commande');
            }
        })
        .catch(error => {
            console.error('Erreur:', error);
            alert('Une erreur est survenue');
        });
    }

    // Démarrer l'application
    function init() {
        initEventListeners();
        resetOrder(); // Commencer frais
    }

    // Lancer l'app
    init();
});






