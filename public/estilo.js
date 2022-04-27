function estilo() {
    const link = document.getElementById('estilo');
    var mode = document.getElementById('estilo');


    if (mode.classList=='dia') {
        link.href="/estilo_black.css"
        mode.classList.remove('dia');
        mode.classList.add('noite');
    } else if (mode.classList=='noite'){
        link.href="/estilo.css"
        mode.classList.remove('noite');
        mode.classList.add('dia');
    }

  }