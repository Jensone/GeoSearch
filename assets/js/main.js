const countries = document.querySelectorAll(".countries") // On stock les ul.countrie dans une variable 

// On applique le listener au scroll pour le défilement horizontal
countries.forEach(country => {
    country.addEventListener("wheel", (e) => {
        e.preventDefault()
        country.scrollLeft += e.deltaY
    })
})

// Population number
const populationCount = document.querySelector(".population-count").textContent
populationCount.toLocaleString()

// Variables du formulaire
const selectCountries = document.querySelector('.select-countries')

// REST COUNTRIES API functions
const filterCountries = async () => { // Fonction asynchrone pour récupérer les données de l'API
    const response = await fetch('https://restcountries.com/v3.1/all') // On stock la réponse de l'API dans une variable
    const data = await response.json() // On stock les données de la réponse dans une variable

    data.forEach(element => { // Initier une boucle pour récupérer les données de chaque pays
        selectCountries.innerHTML += '<option data-cca2="' + element.cca2 + '">' + element.translations.fra.common + '</option>' // On injecte le nom dans le select ainsi que le code cca2 dans un data-attribute personnalisé
    });
}

filterCountries()