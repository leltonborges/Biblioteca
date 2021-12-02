window.addEventListener('load', function (){
    let idLivro = document.querySelector("#livroId").value

    getByLibraryAndType(idLivro);
})

const getByLibraryAndType = function (id_livro = 0, type = "livros") {
    $.ajax({
        url: "./findLivroOrAtendente.php",
        method: "POST",
        data: {id_livro: id_livro, type: type},
        dataType: "json",
        success: function (data) {
            data.forEach(e => setSelected(e.biblioteca));
        }
    });
}

const setSelected = function (id_biblioteca){
    let options = document.querySelector("#biblioteca").options;
    for (let i = 0; i < options.length; i++){
        if(options[i].value == id_biblioteca) document.querySelector("#biblioteca").options[i].selected = true;
    }
}