function getOVA() {
  fetch("https://kitsu.io/api/edge/anime?fields[anime]=slug,canonicalTitle,titles,posterImage,synopsis,averageRating,startDate,popularityRank,ratingRank,youtubeVideoId&filter[subtype]=special,ova&filter[year]=2019..&filter[ageRating]=PG&page[offset]=0&page[limit]=20&sort=-user_count")
  .then(response => response.json())
  .then(json => {
    let div = document.querySelector('#anime-list-ova')
    let animeList = json.data

    let div2 = document.createElement("div")
    div2.setAttribute("class", "ovas-entries")
    div.appendChild(div2)

    let div3 = document.createElement("div")
    div3.setAttribute("class", "uk-scrollable-text")
    div2.appendChild(div3)

    animeList.forEach(animeInfo => {

      let div4 = document.createElement("div")
      div4.setAttribute("class", "ova-entry")
      div3.appendChild(div4)

      let div5 = document.createElement("div")
      div5.setAttribute("class", "uk-grid uk-grid-small")
      div4.appendChild(div5)

      let div6 = document.createElement("div")
      div6.setAttribute("class", "uk-width-3-10")
      div5.appendChild(div6)

      let a = document.createElement("a")
      a.setAttribute("href", `view/anime/${animeInfo.id}`)
      div6.appendChild(a)

      let img = document.createElement("img")
      img.setAttribute("src", `${animeInfo.attributes.posterImage.small}`)
      a.appendChild(img)

      let div7 = document.createElement("div")
      div7.setAttribute("class", "uk-width-7-10")
      div5.appendChild(div7)

      let h3 = document.createElement("h3")
      div7.appendChild(h3)

      let a2 = document.createElement("a")
      a2.appendChild(document.createTextNode(`${animeInfo.attributes.canonicalTitle}`))
      h3.appendChild(a2)

    })
  })
}

getOVA()
