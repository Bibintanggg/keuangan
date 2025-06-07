export function toggleModal(id) {
    const modal = document.getElementById(id);
    const floating = document.getElementById('floatingButton')
    
    
    if(modal.classList.contains ('hidden')) {
        modal.classList.remove('hidden');
        floating.classList.add('hidden')
    } else {
        modal.classList.add('hidden')
        floating.classList.remove('hidden')
    }
}
