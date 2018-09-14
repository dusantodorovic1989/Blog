
function addComm(){
    var authorInput = document.forms['commForm']['author'];
    var textInput = document.forms['commForm']['text'];
    var author = document.forms['commForm']['author'].value;
    var text = document.forms['commForm']['text'].value;
    if(!author || !text){
        if(!author){
            authorInput.classList.add('alert');
            authorInput.classList.add('alert-danger');
            authorInput.addEventListener('input', function(){
                authorInput.classList.remove('alert');
                authorInput.classList.remove('alert-danger');
            })
        } 
        if(!text) {
            textInput.classList.add('alert');
            textInput.classList.add('alert-danger');
            textInput.addEventListener('input', function(){
                textInput.classList.remove('alert');
                textInput.classList.remove('alert-danger');
            })
        }
        alert('Both fields are required!');
        return false;
    }
}



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