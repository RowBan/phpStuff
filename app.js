const rightEntryElement = document.querySelectorAll('.rightEntry');
const leftEntryElement = document.querySelectorAll('.leftEntry');
const cardEntry = document.querySelectorAll('.card');

const observer = new IntersectionObserver(entries => {
    console.log(entries);
    entries.forEach(entry => {
        entry.target.classList.toggle("show", entry.isIntersecting)
    })
},{
    threshold: 1,
})

const lastCardObserver = new IntersectionObserver(entries => {
    const lastCard = entries[0]
    if(!lastCard.isIntersecting) return loadNewCards()
    lastCardObserver.unobserve(lastCard.target)
    lastCardObserver.observe(document.querySelector(".card:last-child"))
}, {})

const cardContainer = document.querySelector(".card-container")

function loadNewCards() {
    for (let i = 0; i < 10; i++) {
        const card = document.createElement("div")
        card.textContent = "New Card"
        card.classList.add("card")
        observer.observe(card)
        cardContainer.append(card)
    }
}

lastCardObserver.observe(document.querySelector(".card:last-child"))


cardEntry.forEach(card => {
    observer.observe(card)
})

rightEntryElement.forEach(entry => {
    observer.observe(entry)
})

leftEntryElement.forEach(entry => {
    observer.observe(entry)
})