// salvo in una variabile gli elementi che hanno classe delete-form
const deleteForms = document.querySelectorAll('.delete-form');

// per ogni elemento dell'array...
deleteForms.forEach(element => {

    // ...recupero il data-name del singolo record (usato nel form di delete nell'index)
    const name = element.getAttribute('data-name');
    
    // ...rimango in ascolto del click al submit...
    element.addEventListener('submit', (e)=>{

        // ...mi assicuro che in caso di click non si ricarichi la pagina, poi...
        e.preventDefault();
        
        // ...faccio visualizzare all'utente il messaggio di conferma...
        const accept = confirm(`Sei sicuro di voler eliminare il record "${name}"?`);
        // ...se accetta, si attiva il submit e quindi il record viene eliminato
        if (accept) e.target.submit();

    })

});