
/* Index letters die veranderen*/

const text = document.querySelector(".second-text");
const textLoad = () => { /* textload constant */
    setTimeout(()  => {
text.textContent = "Software Engineer";
    }, 0); /* tijd na hoelang hij veranderd in MS*/

    setTimeout(()  => {
        text.textContent = "Game developer";
    }, 4000); /* tijd na hoelang hij veranderd in MS*/
    setTimeout(()  => {
        text.textContent = "Music producer";
    }, 8000); /* tijd na hoelang hij veranderd in MS*/
    setTimeout(()  => {
        text.textContent = "3D artist";
    }, 12000); /* tijd na hoelang hij veranderd in MS*/

}
textLoad();
setInterval(textLoad, 16000); /* tijd hoelang hij blijft na het einde van elke zin*/

/* einde Index letters die veranderen*/


 /* dit is tijdelijk ongebruikt maar dit is voor het wisselen van content in de projecten pagina (originele idee, ben momenteel wat anders aan het probere  dus vandaar)*/
const button = document.getElementById('projectbutton');
const div = document.getElementById('projectcontent');

function changeContent() {
    div.innerHTML = '<p>New HTML content!</p>';
}

