	function dark() {
	   var element = document.body;
	   element.classList.toggle("dark-mode");

	   var teste = document.querySelector('.titulo-curso');
	   teste.classList.toggle("dark");
	   
	   


	   var tituloSobre = document.querySelector('.titulo-sobre');
	   tituloSobre.classList.toggle("titulo-sobre-dark");

	   var tituloContato = document.querySelector('.titulo-contato');
	   tituloContato.classList.toggle("titulo-contato-dark");

	   var iconeContato = document.querySelector('.icone-contato');
	   iconeContato.classList.toggle("icone-contato-dark")

	   document.querySelectorAll(".accordion-button").forEach((el) => {
		el.classList.toggle('accordion-button-dark');
		})

	    document.querySelectorAll(".titulos").forEach((el) => {
		el.classList.toggle('titulos-dark');
		})

	   var acordion = document.querySelector('.accordion');
	   acordion.classList.toggle("accordion-dark");

	   document.querySelectorAll('.conteudo-contato').forEach((el) => {
		el.classList.toggle("dark-mode");
	   })
	
		document.querySelectorAll(".card").forEach((el) => {
			el.classList.toggle('card-dark');
		})
	};
	

	function verMais() {
		var btnVer = document.querySelector('.secao-ver-mais');
		btnVer.classList.toggle("mostrando-secao");

		var verMenos = document.querySelector('.btn-mais');
		verMenos.innerHTML = "<button> Ver menos </button>";
	};

	var el = document.querySelector(".titulo-sobre");
	var text = "Desenvolvedor Front-end"
	var interval = 200;
	function showtext(el, text, interval) {
	var char = text.split("").reverse();
	
	var typer = setInterval(function() {
  
    if (!char.length) {
        return clearInterval(typer)
    }
    
    var next = char.pop();
    
    el.innerHTML += next;
    
  }, interval);
  
}
showtext(el, text, interval);