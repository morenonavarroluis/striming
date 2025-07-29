<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <!-- Logo y nombre -->
        <a class="navbar-brand me-2" href="#">
            <i class="fas fa-user-shield me-2"></i>Administrador
        </a>
        
        <!-- Botón hamburguesa -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <!-- Contenido colapsable -->
        <div class="collapse navbar-collapse" id="navbarContent">
            <!-- Menú principal -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="admin"><i class="fas fa-home me-1"></i> Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="datos_user"><i class="fas fa-users me-1"></i> Usuarios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="personas_admin"><i class="fas fa-users me-1"></i> Personas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="espacio_admin"><i class="fas fa-map-marker-alt me-1"></i> Espacio Libre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cambio_pass_admin"><i class="fas fa-key me-1"></i> Cambiar contraseña</a>
                </li>
            </ul>

            <!-- Menú usuario -->
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="img/perf.png" alt="Imagen de perfil del usuario" class="rounded-circle profile-img me-1">
                        <span class="d-none d-lg-inline">Usuario</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                        <li><a class="dropdown-item" href="perfil_admin"><i class="fas fa-user-circle me-2"></i> Perfil</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-cog me-2"></i> Configuración</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item text-danger" href="config/logout"><i class="fas fa-sign-out-alt me-2"></i> Salir</a></li>
                    </ul>
                </li>
            </ul>

            <!-- Botón de cambio de tema -->
            <button class="btn btn-outline-light ms-2" id="themeToggle" aria-label="Cambiar tema">
                <i class="fas fa-moon" id="themeIcon"></i>
            </button>
        </div>
    </div>
</nav>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const toggleBtn = document.getElementById('themeToggle');
        const themeIcon = document.getElementById('themeIcon');
        const body = document.body;

        // Verificar preferencia guardada
        const savedTheme = localStorage.getItem('theme');
        if (savedTheme === 'dark') {
            body.classList.add('dark-mode');
            themeIcon.className = 'fas fa-sun';
        }

        // Manejar clic del botón
        toggleBtn.addEventListener('click', () => {
            body.classList.toggle('dark-mode');
            
            if (body.classList.contains('dark-mode')) {
                themeIcon.className = 'fas fa-sun';
                localStorage.setItem('theme', 'dark');
            } else {
                themeIcon.className = 'fas fa-moon';
                localStorage.setItem('theme', 'light');
            }
        });
    });
</script>

<style>
    body.dark-mode {
        background-color: #121212;
        color: #f1f1f1;
    }
</style>
