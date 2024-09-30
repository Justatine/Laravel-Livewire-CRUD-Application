document.addEventListener('DOMContentLoaded', function() {
    setTimeout(() => {
        const element = document.querySelectorAll('.alertPrompt');
        element.forEach((element) => {
            element.style.transition = 'opacity 0.5s';
            element.style.opacity = '0';
            setTimeout(() => {
                element.style.display = 'none';
            }, 500);         
        });
    }, 3000);

    document.getElementById('closeAlertPrompt').addEventListener('click', function () {
        this.style.transition = 'opacity 0.5s';
        this.style.opacity = '0';
    
        setTimeout(() => {
            this.parentElement.style.display = 'none'; 
        }, 500);
    });

    function toggleModal(modalId) {
        const modal = document.getElementById(modalId);
        modal.classList.toggle('hidden');  
    }

    const modalToggleButton = document.querySelector('[data-modal-toggle="default-modal"]');

    modalToggleButton.addEventListener('click', () => {
        toggleModal('default-modal'); 
    });

    // Close buttons inside the modal
    const closeButtons = document.querySelectorAll('[data-modal-hide="default-modal"]');
    closeButtons.forEach(button => {
        button.addEventListener('click', () => {
            toggleModal('default-modal');  
        });
    });
});