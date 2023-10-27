window.onload = function()
{
    let formchange = [document.getElementById('registro'), document.getElementById('login')]

    let titulo = document.getElementById('formtitulo');

    let forms = document.getElementsByClassName('oi');

    formchange[0].onclick = function()
    {
        forms[0].style.display = 'none';
        forms[1].style.display = 'block';

        titulo.innerHTML = "Registro";
    }

    formchange[1].onclick = function()
    {
        forms[1].style.display = 'none';
        forms[0].style.display = 'block';

        titulo.innerHTML = "Login";
    }
}