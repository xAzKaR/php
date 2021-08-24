
var hotel = {
    nome: 'Quality',
    quartos: 40,
    reservados: 25,
    academia: true,
    checaDisponibilidade: function (){
        return this.quartos - this.reservados;
    }
};

var nomeHotel = document.getElementById('nomeHotel');
nomeHotel.textContent = 'Nome do Hotel ' + hotel.nome;

var quartosHotel = document.getElementById('quartosHotel');
quartosHotel.textContent = hotel.quartos;

var reservadosHotel = document.getElementById('reservadosHotel');
reservadosHotel.textContent = hotel.reservados;

var disponibilidadeHotel = document.getElementById('disponibilidadeHotel');
disponibilidadeHotel.textContent = hotel.checaDisponibilidade();

var academiaHotel = document.getElementById('academiaHotel');
academiaHotel.textContent = hotel.academia; 
