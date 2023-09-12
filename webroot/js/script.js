document.addEventListener('DOMContentLoaded', function() {
    M.AutoInit(); 
});

 // Função para filtrar os registros da tabela
 function filterTable() {
    let input = document.getElementById('search');
    let filter = input.value.toLowerCase();
    let rows = document.getElementById('table-body').getElementsByTagName('tr');
    let noResultsMessage = document.getElementById('no-results');
    let totalRecords = document.getElementById('total-records');
    let resultsFound = false;
    let count = 0;

    for (let i = 0; i < rows.length; i++) {
        let nome = rows[i].getElementsByTagName('td')[0].innerText.toLowerCase();
        let acao = rows[i].getElementsByTagName('td')[1].innerText.toLowerCase();

        if (nome.indexOf(filter) > -1 || acao.indexOf(filter) > -1) {
        rows[i].style.display = '';
        resultsFound = true;
        count++;
        } else {
        rows[i].style.display = 'none';
        }
    }

    if (resultsFound) {
        noResultsMessage.style.display = 'none';
    } else {
        noResultsMessage.style.display = 'block';
    }

    totalRecords.innerText = "Registros encontrados na pesquisa: " + count;
    }