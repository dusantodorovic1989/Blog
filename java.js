
//  skrivanje komentaraaa
function myFunction(){
    var x = document.getElementById("postComments");// greska u pozivanju, pozivao sam preko klase
    var bt = document.getElementById('btn');
if (x.style.display === "none") {
    x.style.display = "block";
    bt.innerText = 'Hide comments';

} else {
    x.style.display = "none";
    bt.innerText = 'Show comments';
}
};