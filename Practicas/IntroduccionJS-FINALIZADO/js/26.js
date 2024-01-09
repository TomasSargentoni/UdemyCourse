// This
const reservacion = [
    
    {
        nombre: 'Juan',
        apellido: 'De la torre',
        total: 5000,
        pagado: false,
        informacion: function() {
            console.log(`El Cliente ${this.nombre} reservó y su cantidad a pagar es de ${this.total}`);
        }
    } ,
    {
        nombre: 'Pedro',
        apellido: 'De la torre',
        total: 5000,
        pagado: false,
        informacion: function() {
            console.log(`El Cliente ${this.nombre} reservó y su cantidad a pagar es de ${this.total}`);
        }   
    }
]

console.log(reservacion[1].informacion());


