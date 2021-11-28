$(document).ready(function () {
    $("#reset").on('click', function () {
        location.href = "?page=biblioteca-listar"
    })
})

$(document).on('change', '#biblioteca', function () {
    let id_biblioteca = document.querySelector("#biblioteca").value;
    getByLibraryAndType(id_biblioteca, "livros");
    getByLibraryAndType(id_biblioteca, "atendentes");
})

const getByLibraryAndType = function (id_biblioteca = 0, type = "livros") {
    $.ajax({
        url: "../findLivroOrAtendente.php",
        method: "POST",
        data: {id_biblioteca: id_biblioteca, type: type},
        dataType: "json",
        success: function (data) {
            let option = '<option>Selecione</option>';
            if (type == 'livros') {
                data.forEach(e => {
                    option += `<option value="${e.id}">${e.titulo} - ${e.autor}</option>`
                });
                $("#livro").html(option);
            } else if (type == 'atendentes') {
                console.log(data)
                data.forEach(e => {
                    option += `<option value="${e.id}">${e.atendente}</option>`
                });
                $("#atendente").html(option);
            }
        }
    });
}

