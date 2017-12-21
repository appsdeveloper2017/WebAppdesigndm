function mostraralerta() {
    alert('¡Hizo click!');
}

function hacerclick() {
    document.getElementsByTagName('li')[0].onclick = mostraralerta;
}

window.onload = hacerclick;