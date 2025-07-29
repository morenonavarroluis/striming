<?php 

session_start();

//conexion
include "config/conexion.php";
session_start();
if (!isset($_SESSION['id_rol'])) {
    header("Location: login.php");
}

 include "base/header.php";
?>
<body>
    <?php include "base/navbar.php"; ?>
    <div class="co">
        <div class="profile-header">
            <div class="edit-profile" onclick="toggleEditMode()">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                    <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                </svg>
            </div>
            <div class="follow-btn" onclick="toggleFollow()">Seguir</div>
            
            <img src="img/logo.png" alt="Retrato profesional de un hombre con traje gris y corbata azul, fondo de oficina moderna" class="profile-photo">
            
            <h1 class="profile-name"></h1>
            <h2 class="profile-title">Desarrollador Frontend Senior</h2>
            <p class="profile-bio">Desarrollador web con más de 8 años de experiencia en la creación de interfaces de usuario atractivas y funcionales. Especializado en React, Vue.js y diseño responsivo.</p>
            
            <div class="profile-stats">
                <div class="stat-item">
                    <div class="stat-number">1.2K</div>
                    <div class="stat-label">Seguidores</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">340</div>
                    <div class="stat-label">Siguiendo</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">48</div>
                    <div class="stat-label">Proyectos</div>
                </div>
            </div>
            
            <div class="profile-actions">
                <button class="btn btn-primary">Contactar</button>
                <button class="btn btn-outline">Portafolio</button>
            </div>
        </div>
        
       
       
    </div>

   
<?php  
    include "base/scrit.php"; ?>
</body>
</html>

