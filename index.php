<?php
    //load main.php
    require "../main.php";
?>
<!doctype html>
<html lang="nl-NL" class="homePage">
    <head>
        <title>Home - Ruben de Ruijter</title>
        <?php require "../head.php"; ?>
        <?php include "../metaTags.php"; ?>
    </head>
    <body>
        <?php require "../navigation.php"; ?>
        <!--landingPage-->
        <header class="landingPage particlesJs" id="home">
            <div class="centeredContainer">
                <h1 class="landingPageTitle" id="landingPageTitle"></h1>
                <h3 class="landingPageSubTitle" id="landingPageSubTitle"></h3>
                <div class="btnGroup">
                    <a class="primaryBtn opacityZero" href="/portfolio"><span class="material-icons">work</span> Portfolio</a>
                    <a class="primaryBtn opacityZero" target="_blank" rel="noopener" href="https://www.linkedin.com/in/ruben-de-ruijter/"><i class="fab fa-linkedin"></i> Linkedin</a>
                    <a class="primaryBtn opacityZero" target="_blank" rel="noopener" href="https://github.com/Rmdru"><span class="fab fa-github"></span> GitHub</a>
                </div>
            </div>
            <a href="#overMij" class="scrollDownBtn" id="scrollDownBtn"><span class="material-icons scrollDownBtnIcon">keyboard_arrow_down<span></a>
        </header>
        <!--about me-->
        <section id="overMij" class="section sectionSecondary">
            <div class="sectionTitleContainer">
                <h2 class="sectionTitle">Over mij</h2>
            </div>
            <div class="row90 animatedContainer">
                <div class="column column70 columnLeft animationSlideLeft">
                    <div class="txtBox">
                        <p class="txt">Hallo, mijn naam is Ruben de Ruijter, een gepassioneerde Full-stack Developer. Ik ben <?php echo $age; ?> jaar, en woon in Hellevoetsluis. Ik doe de opleiding Assiocate Degree Software Development op de Hogeschool Rotterdam. Ik werk full-time als Back-end Developer bij ComfyCoders. Naast mijn werk en school ben ik ook erg geïnteresseerd in de ICT wereld en programmeer ik regelmatig. Ik heb de meeste ervaring met onderstaande technieken:</p>
                        <div class="badges">
                            <p class="txt badge">PHP</p>
                            <p class="txt badge">Laravel</p>
                            <p class="txt badge">Splade</p>
                            <p class="txt badge">Vue.js</p>
                            <p class="txt badge">TailwindCSS</p>
                            <p class="txt badge">JavaScript</p>
                            <p class="txt badge">jQuery</p>
                            <p class="txt badge">(S)CSS</p>
                            <p class="txt badge">Wordpress</p>
                            <p class="txt badge">VMware</p>
                        </div>
                        <a class="primaryBtn" href="/contact"><span class="material-icons">mail</span> Contact</a>
                    </div>
                </div>
                <div class="column column30 columnRight animationSlideRight">
                    <img src="img/rubenDeRuijter200x200.jpg" class="aboutMeImg" alt="Ruben de Ruijter" width="200" height="200" />
                </div>
            </div>
        </section>
        <!--work experience-->
        <section id="werkervaring" class="section sectionPrimary">
            <div class="sectionTitleContainer">
                <h2 class="sectionTitle">Werkervaring</h2>
            </div>
            <div class="timeline animatedContainer">
                <div class="container right animationSlideRight">
                <div class="content">
                        <h2 class="title">ComfyCoders</h2>
                        <p class="txt"><b>Juni 2024 t/m heden<br /><br />Functie:</b> Back-end Developer<br /><br /><b>Dienstverband:</b> Full-time<br /><br />Als Back-end Developer werk ik voor diverse klanten en projecten aan de back-end van applicaties. En af en toe een klein beetje Front-end. Ik werk voornamelijk met PHP, Laravel en Splade.</p>
                        <a class="primaryBtn animated fullWidth" rel="noopener" target="_blank" href="https://comfycoders.nl/">Meer informatie <span class="material-icons">keyboard_arrow_right</span></a>
                    </div>
                </div>
                <div class="container left animationSlideLeft">
                    <div class="content">
                        <h2 class="title">ComfyCoders</h2>
                        <p class="txt"><b>Januari 2024 t/m juni 2024<br /><br />Functie:</b> Back-end Developer<br /><br /><b>Dienstverband:</b> Afstudeerstage<br /><br />Tijdens deze afstudeerstage bouw ik 'from scratch' een voorraadbeheer-applictie. Dit doe ik met Laravel en Splade.</p>
                        <a class="primaryBtn animated fullWidth" rel="noopener" target="_blank" href="https://comfycoders.nl/">Meer informatie <span class="material-icons">keyboard_arrow_right</span></a>
                    </div>
                </div>
                <div class="container right animationSlideRight">
                    <div class="content">
                        <h2 class="title">DHL</h2>
                        <p class="txt"><b>April 2023 t/m juni 2024<br /><br />Functie:</b> Bezorger<br /><br /><b>Dienstverband:</b> Part-time</p>
                        <a class="primaryBtn animated fullWidth" rel="noopener" target="_blank" href="https://www.dhl.nl/">Meer informatie <span class="material-icons">keyboard_arrow_right</span></a>
                    </div>
                </div>
                <div class="container left animationSlideLeft">
                    <div class="content">
                        <h2 class="title">Miniworld Rotterdam</h2>
                        <p class="txt"><b>April 2022 t/m juni 2024<br /><br />Functie:</b> Operator<br /><br /><b>Dienstverband:</b> Part-time<br /><br />Als Operator hou ik de miniatuurwereld in beweging door storingen van treinen en auto's te verhelpen. Ook start ik de attractie op en sluit ik die weer af.</p>
                        <a class="primaryBtn animated fullWidth" rel="noopener" target="_blank" href="https://www.miniworldrotterdam.com/">Meer informatie <span class="material-icons">keyboard_arrow_right</span></a>
                    </div>
                </div>
                <div class="container right animationSlideRight">
                    <div class="content">
                        <h2 class="title">Studentaanhuis</h2>
                        <p class="txt"><b>Oktober 2019 t/m oktober 2023<br /><br />Functie:</b> IT specialist<br /><br /><b>Dienstverband:</b> Part-time<br /><br /><b>Gemiddelde beoordeling:</b> 4,5 ster<br /><br /><b>Aantal tevreden klanten:</b> Meer dan 100<br /><br />Als IT specialist kom ik bij mensen thuis om hun te helpen met hun computers, smartphones, tablets en andere digitale apparaten. Ik los problemen op, beantwoord vragen en geef onafhankelijk en vrijblijvend advies.</p>
                        <a class="primaryBtn animated fullWidth" rel="noopener" target="_blank" href="https://www.studentaanhuis.nl/">Meer informatie <span class="material-icons">keyboard_arrow_right</span></a>
                    </div>
                </div>
                <div class="container left animationSlideLeft">
                    <div class="content">
                        <h2 class="title">PADDAP</h2>
                        <p class="txt"><b>September 2021 t/m April 2022<br /><br />Functie:</b> Front-end Developer<br /><br /><b>Dienstverband:</b> Stage<br /><br />Als stagiair pas ik mijn kennis en kunde toe om het development team van A tot Z te ondersteunen. Hierbij ligt mijn voornaamste bezigheid bij Front-end Development. Het proces waarin een design wordt omgezet naar een goed functionerende applicatie vind ik prachtig om te zien.</p>
                        <a class="primaryBtn animated fullWidth" rel="noopener" target="_blank" href="https://www.paddap.nl/">Meer informatie <span class="material-icons">keyboard_arrow_right</span></a>
                    </div>
                </div>
                <div class="container right animationSlideRight">
                    <div class="content">
                        <h2 class="title">Bouwman Reclameverspreiding</h2>
                        <p class="txt"><b>November 2017 t/m september 2019<br /><br />Functie:</b> Krantenbezorger<br /><br /><b>Dienstverband:</b> Part-time</p>
                        <a class="primaryBtn animated fullWidth" rel="noopener" target="_blank" href="https://www.bouwman-reclame.nl/">Meer informatie <span class="material-icons">keyboard_arrow_right</span></a>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <!--education-->
        <section id="opleiding" class="section sectionSecondary">
            <div class="sectionTitleContainer">
                <h2 class="sectionTitle">Opleiding</h2>
            </div>
            <div class="timeline animatedContainer">
                <div class="container right animationSlideRight">
                    <div class="content">
                        <h2 class="title">Hogeschool Rotterdam</h2>
                        <p class="txt"><b>2022 t/m heden<br /><br />Opleiding:</b> Associate Degree Software Development<br /><br /><b>Niveau:</b> HBO Niveau 5</p>
                        <a class="primaryBtn animated fullWidth" rel="noopener" target="_blank" href="https://www.hogeschoolrotterdam.nl/opleidingen/associate-degree/software-development/voltijd/">Meer informatie <span class="material-icons">keyboard_arrow_right</span></a>
                    </div>
                </div>
                <div class="container left animationSlideLeft">
                    <div class="content">
                        <h2 class="title">Grafisch Lyceum Rotterdam</h2>
                        <p class="txt"><b>2019 t/m 2022<br /><br />Opleiding:</b> Mediatechnologie<br /><br /><b>Niveau:</b> MBO Niveau 4<br /><br /><b>Specialisatie:</b> Applicatie- en mediaontwikkelaar<br /><br /><b>Keuzedeel:</b> Special input/output<br /><br /><b>Gemiddeld cijfer van alle leerlijnen:</b> 7,9<br /><br />Op deze opleiding leer ik vooral websites bouwen en programmeren. Ik leer op mijn opleiding onder andere CRUD applicaties bouwen, dus bijvoorbeeld reserveringsystemen, loginsystemen en webshops.<br /><br /><span class="material-icons">check</span> Diploma behaald</b></p>
                        <a class="primaryBtn animated fullWidth" rel="noopener" target="_blank" href="https://www.glr.nl/mbo/opleidingen/mediatechnologie/software-developer">Meer informatie <span class="material-icons">keyboard_arrow_right</span></a>
                    </div>
                </div>
                <div class="container right animationSlideRight">
                    <div class="content">
                        <h2 class="title">Bahûrim</h2>
                        <p class="txt"><b>2015 t/m 2019<br /><br />Niveau: MAVO<br /><br /><span class="material-icons">check</span> Diploma behaald</b></p>
                        <a class="primaryBtn animated fullWidth" rel="noopener" target="_blank" href="https://bm.penta.nl/">Meer informatie <span class="material-icons">keyboard_arrow_right</span></a>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <?php require "../footer.php"; ?>
    </body>
</html>