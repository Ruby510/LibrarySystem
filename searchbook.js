const userCardTemplate = document.querySelector("[data-user-template]")
const userCardContainer = document.querySelector("[data-user-cards-container]")
const searchInput = document.querySelector("[data-search]")

let users = []

searchInput.addEventListener("input", e => {
    const value = e.target.value.toLowerCase()
    users.forEach(user => {
    const isVisible = user.title.toLowerCase().includes(value) ||
    user.author.toLowerCase().includes(value)
    user.element.classList.toggle("hide", !isVisible)
})
})

fetch("http://localhost:3000/book")
    .then(res => res.json())
    .then(data => {
    users = data.map(user => {
        const card = userCardTemplate.content.cloneNode(true).children[0]
        const header = card.querySelector("[data-header]")
        const body = card.querySelector("[data-body]")
        header.textContent = user.title
        body.textContent = user.author
        userCardContainer.append(card)
        return { title: user.title, author: user.author, element: card }
    })
})
