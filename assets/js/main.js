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
const selectCoutries = document.querySelector('.select-countries')

// REST COUNTRIES API functions
const filterCountries = async (selection) => {
    let url = 'https://restcountries.com/v3.1/region/'+ selection
    const response = await fetch(url)
    const data = await response.json()

    data.forEach(element => {
        selectCountries.innerHTML += `<option>${element.name.common}</option>`
    });
}

const selectRegions = document.querySelector('.select-regions option').textContent

filterCountries(selectRegions)