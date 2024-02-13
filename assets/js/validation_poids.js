window.addEventListener("load", function(){
    var input = document.getElementById("poids");
    input.addEventListener("input", function(){
        var xhr = new XMLHttpRequest();
        var idparcelle = document.getElementById("idparcelle").value;
        var date = document.getElementById("date").value;
        var submit = document.getElementById("submit");
        xhr.open("GET","validationpoids.php?poids="+input.value+"&idparcelle="+idparcelle+"&date="+date);
        xhr.onreadystatechange = function(){
            if (xhr.readyState == 4 && xhr.status == 200) {
                var retour = xhr.responseText;
                if (retour === "true") {
                    submit.removeAttribute("disabled");
                }
                if (retour === "false") {
                    submit.setAttribute("disabled","disabled");
                }
            }
        }
        xhr.send(null);
    });
});