export function toggleModal(id) {
    const modal = document.getElementById(id);
    if (!modal) return;
    const isHidden = modal.classList.contains("hidden");
    modal.classList.toggle("hidden", !isHidden);
    modal.classList.toggle("flex", isHidden);
}
