document.addEventListener('DOMContentLoaded', () => {
    const darkModeStorage = localStorage.getItem('dark-mode')
    const root = document.querySelector(':root')
    const inputDarkMode = document.getElementById('modo-escuro')
    const checkbox_dark = document.getElementById("checkbox_dark")

    if(darkModeStorage){
        root.classList.add("dark-mode");
        inputDarkMode.checked = true;
        checkbox_dark.classList.toggle('on')
    }

    checkbox_dark.addEventListener('click', (event) => {
        if (checkbox_dark.classList.contains('on')) {
            checkbox_dark.setAttribute('aria-checked', 'false');
            root.classList.remove("dark-mode");
            localStorage.removeItem('dark-mode');
        } else {
            checkbox_dark.setAttribute('aria-checked', 'true');
            root.classList.add("dark-mode");
            localStorage.setItem('dark-mode', true);
        }
        checkbox_dark.classList.toggle('on');
    });
})