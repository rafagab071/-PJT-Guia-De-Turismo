document.addEventListener('DOMContentLoaded', function () {
    var paisesLink = document.querySelector('#menu a[href="#"]');
    var subMenu = document.querySelector('#menu .sub-menu');

    // Toggle a visibilidade da sub-lista ao passar o mouse sobre "Países"
    paisesLink.addEventListener('mouseover', function (event) {
        event.preventDefault(); // Impede o comportamento padrão do link
        subMenu.style.display = 'block';
    });

    // Esconde a sub-lista quando o mouse sai do item "Países" ou da sub-lista
    document.addEventListener('mouseout', function (event) {
        if (!paisesLink.contains(event.relatedTarget) && !subMenu.contains(event.relatedTarget)) {
            subMenu.style.display = 'none';
        }
    });

    // Mantém a sub-lista visível quando o mouse está sobre a sub-lista
    subMenu.addEventListener('mouseover', function () {
        subMenu.style.display = 'block';
    });

    // Esconde a sub-lista quando o mouse sai da sub-lista
    subMenu.addEventListener('mouseout', function (event) {
        if (!paisesLink.contains(event.relatedTarget)) {
            subMenu.style.display = 'none';
        }
    });
});
