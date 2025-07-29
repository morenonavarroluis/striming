  function toggleEditMode() {
            alert('Modo edición activado');
            // Aquí iría la lógica para habilitar la edición del perfil
        }
        
        function toggleFollow() {
            const btn = document.querySelector('.follow-btn');
            if(btn.textContent === 'Seguir') {
                btn.textContent = 'Siguiendo';
                btn.style.backgroundColor = '#ccc';
            } else {
                btn.textContent = 'Seguir';
                btn.style.backgroundColor = 'var(--secondary-color)';
            }
        }