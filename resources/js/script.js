const deleteButton = document.querySelectorAll('.delete-button');

deleteButton.forEach(element => {
    element.addEventListener('click', ($event)=>{
    const answer = confirm('Sicuro?');

       if(!answer){
           $event.preventDefault();
       }

        //const id=$event.target.id;
        //console.log('delete', id);
        //Axios.delete('/comics/'+ id);

    })
});
