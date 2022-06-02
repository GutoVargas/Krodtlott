var app = document.getElementById('span-text');

var typewriter = new Typewriter(app, {
    loop: true
});

typewriter.typeString('Faça sua ficha online no sistema, é totalmente gratuito :) !')
    .pauseFor(1500)
    .deleteAll()
    .typeString('Monte seu personagem e venha para a aventura!')
    .pauseFor(1500)
    .start();
