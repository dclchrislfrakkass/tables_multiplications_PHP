/*document.getElementById("multiplication").addEventListener("submit", function(e){
    e.preventDefault();

    var data = new FormData(this);

    var xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200){
            console.log(this.response);
        } else if (this.readyState == 4) {
            alert("Erreur !!!");
        }
        
        };

    xhr.open("POST", "script.php", true);
    xhr.send(data);



    return false;
});*/
