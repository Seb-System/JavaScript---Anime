var id = document.getElementById("animeInfoId").value;

var app = new Vue({
  el: '#animeInfo',
  mounted: function () {
    getAnimeGenre(id),
    getAnimeSyno(id),
    getAnimeBanner(id),
    getAnimeGenres(id),
    getAnimeTitle(id),
    getAnimeEpisode(id, 0)
  },
  updated: function () {
    getAnimeGenre(id),
    getAnimeSyno(id),
    getAnimeBanner(id),
    getAnimeGenres(id),
    getAnimeTitle(id),
    getAnimeEpisode(id, 0)
  }
})

function getAnimeGenre(id) {
  fetch('https://kitsu.io/api/edge/anime/' + id)
  .then(response => response.json())
  .then(json => {
    let dd = document.querySelector('#typeSeries')

    let a = document.createElement("a")
    a.appendChild(document.createTextNode(json.data.type))
    dd.appendChild(a)
  })
}

function getAnimeGenres(id) {
  fetch('https://kitsu.io/api/edge/anime/' + id + '/genres')
  .then(response => response.json())
  .then(json => {
    let dd = document.querySelector('#animeGenre')
    let dataList = json.data

    dataList.forEach(animeInfo => {
      let a = document.createElement("a")
      a.appendChild(document.createTextNode(animeInfo.attributes.name))
      a.setAttribute("href", "#")
      dd.appendChild(a)
    })
  })
}

function getAnimeSyno(id) {
  fetch('https://kitsu.io/api/edge/anime/' + id)
  .then(response => response.json())
  .then(json => {
    let dd = document.querySelector('#synoSeries')
    var syno = json.data.attributes.synopsis
    if(syno == '')
    {
      dd.appendChild(document.createTextNode("Bientot disponible"))
    } else {
      dd.appendChild(document.createTextNode(json.data.attributes.synopsis))
    }
  })
}

function getAnimeBanner(id) {
  fetch('https://kitsu.io/api/edge/anime/' + id)
  .then(response => response.json())
  .then(json => {
    let div = document.querySelector('#animeBanner')

    let img = document.createElement("img")
    img.setAttribute("src", `${json.data.attributes.posterImage.medium}`)
    div.appendChild(img)
  })
}

function getAnimeEpisode(id, i) {
  fetch('https://kitsu.io/api/edge/anime/' + id + '/episodes')
  .then(response => response.json())
  .then(json => {
    let dataList = json.data
    let div = document.querySelector('#animeEpisode')
    i = i+1
    dataList.forEach(animeInfo => {
      let a = document.createElement("a")
      let i = document.createElement("i")
      let span = document.createElement("span")
      i.setAttribute("class", "icon-angle-right")
      span.setAttribute("class", "uk-text-bold")
      span.appendChild(document.createTextNode(animeInfo.attributes.canonicalTitle))
      a.setAttribute("href", "#")
      a.appendChild(i)
      a.appendChild(span)
      a.appendChild(document.createTextNode("  - Episode " + animeInfo.attributes.number))
      div.appendChild(a)
    })
  })
}

function getAnimeTitle(id) {
  fetch('https://kitsu.io/api/edge/anime/' + id)
  .then(response => response.json())
  .then(json => {
    let div = document.querySelector('#animeTitle')

    let h2 = document.createElement("h2")
    h2.setAttribute("class", "entry-title")
    h2.appendChild(document.createTextNode(json.data.attributes.canonicalTitle))
    div.appendChild(h2)
  })
}
