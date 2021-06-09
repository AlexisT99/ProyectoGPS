
class  moduloInventario   {
        
    constructor (moe,mom) {
        this.me = moe;
        this.mm = mom;          
    }
  
    Buscar(e){
        if(e){
            me.Buscar(txtCodigo.getText());
        }else{
            mm.Buscar(txtCodigo.getText());
        }
    }
    
    Ayuda(){
        window.open("Inventario/Manual de Usuario.pdf", "_blank");
    }
};
