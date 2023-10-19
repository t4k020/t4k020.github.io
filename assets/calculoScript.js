

function Calculo(){

    
    var Tickets = Number(document.getElementById("Tickets").value);
    const ticket = 200
    var plan = document.getElementById("Categoria").value;
    var desc = 0
    var pago = 0
switch (plan) {
        case "Estudiante":
            desc = 0.8
            break;
        case "Junior":
            desc = 0.15
            break;
        case "Trainee":
            desc = 0.5
            break;  

    }
     pago = Tickets * ticket * (1-desc)
    document.getElementById('pago').innerHTML = "Total a Pagar: " + parseInt(pago) + "$"
}