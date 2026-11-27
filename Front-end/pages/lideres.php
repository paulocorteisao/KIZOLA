<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main class="dashboard-content">


    <!-- Página em desenvolvimento -->
    <div class="kizola-coming-soon">
        <!-- Código da animação -->

<!-- COMPONENTE: PÁGINA EM CONSTRUÇÃO KIZOLA -->

<div class="kizola-coming-soon">

    <div class="ks-illustration">

        <div class="ks-circle ks-circle-outer"></div>
        <div class="ks-circle ks-circle-inner"></div>

        <div class="ks-block ks-block-red"></div>
        <div class="ks-block ks-block-green"></div>

        <div class="ks-heart">
            <svg viewBox="0 0 24 24" fill="none">
                <path
                    d="M20.8 4.6a5.5 5.5 0 0 0-7.8 0L12 5.7
                    11 4.6a5.5 5.5 0 0 0-7.8 7.8l1 1L12
                    21l7.8-7.6 1-1a5.5 5.5 0 0 0 0-7.8Z"
                    fill="currentColor"
                />
            </svg>
        </div>

        <div class="ks-particle ks-particle-1"></div>
        <div class="ks-particle ks-particle-2"></div>
        <div class="ks-particle ks-particle-3"></div>
        <div class="ks-particle ks-particle-4"></div>

    </div>

    <div class="ks-content">

        <div class="ks-label">
            <span class="ks-status-dot"></span>
            EM DESENVOLVIMENTO
        </div>

        <h2>
            Estamos a construir
            <span>algo especial.</span>
        </h2>

        <p>
            Esta página está a ser desenvolvida.
            Em breve, estará disponível para fazer parte
            da transformação que a Kizola está a criar.
        </p>

        <div class="ks-loader">
            <div class="ks-loader-track">
                <div class="ks-loader-fill"></div>
            </div>
        </div>

        <span class="ks-footer">
            KIZOLA <span>·</span> GIVE · TRANSFORM
        </span>

    </div>

</div>

<style>

/* =====================================
   KIZOLA - CONSTRUCTION COMPONENT
===================================== */

.kizola-coming-soon {

    --kizola-red: #E3443D;
    --kizola-green: #65B84D;

    --kizola-bg: #0B0B0B;
    --kizola-surface: #151515;

    --kizola-white: #F5F5F5;
    --kizola-gray: #8B8B8B;

    width: 100%;
    min-height: 420px;

    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;

    padding: 40px 24px;

    background: var(--kizola-bg);

    color: var(--kizola-white);

    font-family: Inter, Arial, sans-serif;

    text-align: center;

    overflow: hidden;

    box-sizing: border-box;
}

.kizola-coming-soon * {
    box-sizing: border-box;
}

/* =====================================
   ILLUSTRATION
===================================== */

.ks-illustration {

    width: 190px;
    height: 190px;

    position: relative;

    display: flex;
    justify-content: center;
    align-items: center;

    margin-bottom: 30px;
}

/* Circles */

.ks-circle {

    position: absolute;

    border-radius: 50%;

    border: 1px solid #262626;

}

.ks-circle-outer {

    width: 180px;
    height: 180px;

    animation: ks-rotate 18s linear infinite;

}

.ks-circle-inner {

    width: 135px;
    height: 135px;

    border-style: dashed;
    border-color: #333333;

    animation: ks-rotate 25s linear infinite reverse;

}

/* Blocks */

.ks-block {

    position: absolute;

    width: 45px;
    height: 45px;

    border-radius: 10px;

}

.ks-block-red {

    background: var(--kizola-red);

    top: 35px;
    left: 30px;

    animation: ks-float 3.5s ease-in-out infinite;

}

.ks-block-green {

    background: var(--kizola-green);

    bottom: 30px;
    right: 30px;

    animation: ks-float 3.5s ease-in-out infinite reverse;

}

/* Heart */

.ks-heart {

    position: relative;

    width: 65px;
    height: 65px;

    display: flex;
    align-items: center;
    justify-content: center;

    color: var(--kizola-green);

    animation: ks-heartbeat 2.5s ease-in-out infinite;

}

.ks-heart svg {

    width: 60px;
    height: 60px;

}

/* Particles */

.ks-particle {

    position: absolute;

    width: 7px;
    height: 7px;

    border-radius: 50%;

}

.ks-particle-1 {

    background: var(--kizola-red);

    top: 15px;
    right: 45px;

    animation: ks-particle 4s infinite;

}

.ks-particle-2 {

    background: var(--kizola-green);

    bottom: 15px;
    left: 45px;

    animation: ks-particle 3.5s infinite reverse;

}

.ks-particle-3 {

    background: var(--kizola-red);

    top: 90px;
    left: 5px;

    animation: ks-particle 5s infinite;

}

.ks-particle-4 {

    background: var(--kizola-green);

    top: 90px;
    right: 5px;

    animation: ks-particle 4s infinite reverse;

}

/* =====================================
   CONTENT
===================================== */

.ks-content {

    width: 100%;
    max-width: 450px;

    animation: ks-fade-in .8s ease forwards;

}

.ks-label {

    display: inline-flex;

    align-items: center;

    gap: 8px;

    font-size: 10px;

    font-weight: 600;

    letter-spacing: 1.5px;

    color: var(--kizola-gray);

    margin-bottom: 18px;

}

.ks-status-dot {

    width: 7px;
    height: 7px;

    border-radius: 50%;

    background: var(--kizola-green);

    animation: ks-blink 1.8s infinite;

}

.ks-content h2 {

    font-size: clamp(24px, 4vw, 36px);

    line-height: 1.25;

    letter-spacing: -1px;

    font-weight: 700;

    margin: 0 0 15px;

    color: var(--kizola-white);

}

.ks-content h2 span {

    display: block;

    color: var(--kizola-green);

}

.ks-content p {

    font-size: 13px;

    line-height: 1.8;

    color: var(--kizola-gray);

    max-width: 370px;

    margin: 0 auto;

}

/* =====================================
   LOADER
===================================== */

.ks-loader {

    max-width: 160px;

    margin: 28px auto 20px;

}

.ks-loader-track {

    width: 100%;
    height: 3px;

    background: #262626;

    border-radius: 10px;

    overflow: hidden;

}

.ks-loader-fill {

    width: 35%;
    height: 100%;

    background: var(--kizola-green);

    border-radius: inherit;

    animation: ks-loading 2.2s ease-in-out infinite alternate;

}

/* Footer */

.ks-footer {

    display: block;

    color: #555555;

    font-size: 9px;

    font-weight: 600;

    letter-spacing: 2px;

}

.ks-footer span {

    color: var(--kizola-red);

}

/* =====================================
   ANIMATIONS
===================================== */

@keyframes ks-float {

    0%, 100% {
        transform: translateY(0);
    }

    50% {
        transform: translateY(-12px);
    }

}

@keyframes ks-heartbeat {

    0%, 100% {
        transform: scale(1);
    }

    50% {
        transform: scale(1.08);
    }

}

@keyframes ks-rotate {

    to {
        transform: rotate(360deg);
    }

}

@keyframes ks-particle {

    0%, 100% {
        transform: translateY(0) scale(1);
        opacity: .4;
    }

    50% {
        transform: translateY(-12px) scale(1.3);
        opacity: 1;
    }

}

@keyframes ks-blink {

    0%, 100% {
        opacity: 1;
    }

    50% {
        opacity: .35;
    }

}

@keyframes ks-fade-in {

    from {
        opacity: 0;
        transform: translateY(12px);
    }

    to {
        opacity: 1;
        transform: translateY(0);
    }

}

@keyframes ks-loading {

    from {
        width: 25%;
    }

    to {
        width: 70%;
    }

}

/* =====================================
   RESPONSIVE
===================================== */

@media (max-width: 480px) {

    .kizola-coming-soon {
        min-height: 360px;
        padding: 30px 18px;
    }

    .ks-illustration {
        transform: scale(.85);
        margin-bottom: 15px;
    }

    .ks-content h2 {
        font-size: 27px;
    }

    .ks-content p {
        font-size: 12px;
    }

}

/* Acessibilidade */

@media (prefers-reduced-motion: reduce) {

    .kizola-coming-soon *,
    .kizola-coming-soon *::before,
    .kizola-coming-soon *::after {

        animation: none !important;

    }

}

</style>

    </div>

</main>
</body>
</html>