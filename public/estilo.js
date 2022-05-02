document.addEventListener('DOMContentLoaded', () => {
    const darkModeStorage = localStorage.getItem('dark-mode')
    const root = document.querySelector(':root')
    const inputDarkMode = document.getElementById('modo-escuro')

    if(darkModeStorage){
        root.classList.add("dark-mode");
        inputDarkMode.checked = true;
    }

    inputDarkMode.addEventListener('change', () => {
        if(inputDarkMode.checked){
            root.classList.add("dark-mode");
            localStorage.setItem('dark-mode', true);
        }else{
            root.classList.remove("dark-mode");
            localStorage.removeItem('dark-mode');
        }
   })
})