var app1 = new Vue({
  el: '#search',
  data: {
    message: "",
  },
  updated: function () {
    app.pagination = 1,
    getLastLink(app.pagination, this.message)
  }
})

var app = new Vue({
  el: '#paginationholder',
  data: {
    pagination: 1
  },
  mounted: function () {
    getLastLink(this.pagination, app1.message)
  },
  updated: function () {
    getLastLink(this.pagination, app1.message)
  }
})

function getLastLink (pagination, search) {
  fetch('https://kitsu.io/api/edge/anime?page[limit]=18&page[offset]=999999')
  .then(response => response.json())
  .then(json => {
    lastlink = json.meta.count
    getNumberOfLastLink(lastlink, pagination, search)
  })
}


function getNumberOfLastLink(id, pagination, search) {
  if(search == '')
  {
    id = (parseInt(id)) - parseInt(pagination+(pagination*18))
    getAnimeLast("https://kitsu.io/api/edge/anime?page[limit]=18&page[offset]=" + id)
  } else {
    id = (id - id + pagination)
    getAnimeLast("https://kitsu.io/api/edge/anime?page[limit]=18&filter[text]=" + search + "&page[offset]=" + id, pagination)
  }
}

function getAnimeLast(lastlink, pagination) {
  fetch(lastlink)
  .then(response => response.json())
  .then(json => {
    let div = document.querySelector('#anime-list')
    div.innerHTML = '';
    let dataList = json.data

    let div2 = document.createElement("div")
    div2.setAttribute("class", "uk-grid uk-grid-small latest-posted")
    div2.setAttribute("id", "page-" + pagination)
    div.appendChild(div2)

    dataList.forEach(animeInfo => {

      let div3 = document.createElement("div")
      div3.setAttribute("class", "uk-width-small-1-2 uk-width-medium-1-2 uk-width-large-1-3")
      div2.appendChild(div3)

      let div4 = document.createElement("div")
      div4.setAttribute("class", "single-posted")
      div3.appendChild(div4)

      let a = document.createElement("a")
      a.setAttribute("href", `view/anime/${animeInfo.id}`)

      let div5 = document.createElement("div")
      div5.setAttribute("class", "posted-thumb")

      let img = document.createElement("img")
      img.setAttribute("src", `${animeInfo.attributes.posterImage.original}`)
      div5.appendChild(img)
      a.appendChild(div5)

      let div6 = document.createElement("div")
      div6.setAttribute("class", "posted-comments")

      let i = document.createElement("i")
      //i.setAttribute("class", "icon-comment")
      i.appendChild(document.createTextNode('#'))
      div6.appendChild(i)
      fetch("https://kitsu.io/api/edge/anime/" + animeInfo.id)
      .then(response => response.json())
      .then(json => {
        let rank
        div6.appendChild(document.createTextNode("Rank - " + json.data.attributes.popularityRank))
      })
      a.appendChild(div6)

      let div7 = document.createElement("div")
      div7.setAttribute("class","posted-meta")
      str = animeInfo.attributes.createdAt
      div7.appendChild(document.createTextNode(str.substring(0, 10)))
      a.appendChild(div7)

      let h3 = document.createElement("h3")
      h3.setAttribute("class", "posted-title")
      h3.appendChild(document.createTextNode(`${animeInfo.attributes.canonicalTitle}`))
      a.appendChild(h3)

      div4.appendChild(a)

      return div
    })
  })
}
