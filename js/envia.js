function confirma(){
    if(confirm('¿Deseas Enviar?')){
        document.location='./';
        }else{
        alert('Operación Cancelada!')
        $("form").submit(function(e){

            e.preventDefault();
       
            document.location='./';
       
        });
        
         }
}
