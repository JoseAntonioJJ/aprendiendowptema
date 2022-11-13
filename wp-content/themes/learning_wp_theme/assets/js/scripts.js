// necesario para la inicializacion de slicknav
/* $(function(){
    $('#menu').slicknav();
}); */

/*Documentacion en la web https://github.com/ComputerWolf/SlickNav */


jQuery(($)=>{
    $('.site-header .menu-principal .menu').slicknav({
        'label' : 'Agenda',
        'appendTo' : '.site-header'
    });
});