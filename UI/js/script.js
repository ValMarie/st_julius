// tab for Liturgical calendar

   const url_today = "http://calapi.inadiutorium.cz/api/v0/en/calendars/general-en/today";
   const url_tmrrw = "http://calapi.inadiutorium.cz/api/v0/en/calendars/general-en/tomorrow";

    let sn1 =  document.getElementById('liturgical_calendar_today');
    let sn2 =  document.getElementById('liturgical_calendar_tomorrow');
    let dt1 = document.getElementById('liturgical-date-tdy');
    let dt2= document.getElementById('liturgical-date-tmr');
    let c1 = document.getElementById('liturgical-celebration-tdy');
    let c2 = document.getElementById('liturgical-celebration-tmr');
    let lc1 = document.getElementById('liturgical-color-tdy');
    let lc2 = document.getElementById('liturgical-color-tmr');

    fetch(url_today,)
    .then(response => response.json())
    .then(data => {
    
    dt1.innerHTML = data.date;
    c1.innerHTML = data.celebrations[0].title + ', ';
    lc1.innerHTML = data.celebrations[0].colour;

    sn1.style.backgroundColor = data.celebrations[0].colour;
    data.celebrations[0].colour == 'white' ? sn1.style.color = 'black': sn1.style.color = 'white';   

  })
 
  .catch(function(error) {
    console.log(error);
  });

  fetch(url_tmrrw)
  .then(response => response.json())
  .then(data => {
  
  dt2.innerHTML = data.date;
  c2.innerHTML = data.celebrations[0].title + ', ';
  lc2.innerHTML = data.celebrations[0].colour;

  sn2.style.backgroundColor = data.celebrations[0].colour;
  data.celebrations[0].colour == 'white' ? sn2.style.color = 'black': sn2.style.color = 'white'; 
      
  })

  .catch(function(error) {
    console.log(error);

  });
// tab for Liturgical calendar

// Card for News Feeds 
 const newsApiKey = 'd1f07837eb494291bbbb2f973ff0fa76';
 const newsApiUrl = "http://newsapi.org/v2/everything?domains=catholicnewsagency.com&apiKey="+ newsApiKey;

  let nf = document.getElementById('newsFeeds');
  
  fetch(newsApiUrl)
    .then(response => response.json())
    .then(function(data){

      data.articles
        .filter((news, i) => (i < 6))
        .map((news) => {

        let image = document.createElement("img");
        image.setAttribute("src", news.urlToImage); 
        image.style.maxHeight = "50px";
        image.setAttribute("class", "pt-2");

        let anchor = document.createElement("a");
        anchor.setAttribute("href", news.url);
        anchor.setAttribute("target", "_blank");
        anchor.style.display = "flex";
        anchor.setAttribute("class", "m-2");
        nf.appendChild(anchor);

        let nl = document.createElement("li");
        nl.style.listStyleType = "none";
        nl.setAttribute("class", "p-2");
        nl.style.color = "rgb(173, 106, 18)";
          anchor.appendChild(image);
          anchor.appendChild(nl);
  
        nl.innerHTML = news.title;
      })   

      //   moreNews = document.createElement("a");
      // moreNews.setAttribute("href", news.url);
      // moreNews.setAttribute("target", "_blank");
      // nf.appendChild(moreNews);

      // moreNews.innerHTML = "See More >>";
      
    })
    .catch(function(error) {
      console.log(error);
    });   
// Card for News Feeds


const scrollToView = (id) => {
  let selected = document.querySelector(id);
  selected.scrollIntoView({behavior: "smooth", block: "center"});
}
