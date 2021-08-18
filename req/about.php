<section class="bloc" id="about">
    <div class="bloc-title">
        <h2>À propos</h2>
    </div>

    <?php
        $dateNaissance = "04-10-1997";
        $dateCreation = "22-03-2021";
        $aujourdhui = date("Y-m-d");

        $age = date_diff(date_create($dateNaissance), date_create($aujourdhui));
        $joursCreation = (strtotime($aujourdhui) - strtotime($dateCreation)) / 86400;
    ?>

    <div class="about-struct">
        <div class="about-text">
            <p>Tout d'abord bienvenue sur mon site codé intégralement à la main from scratch !</p>
            <p>Je m’appelle Arthur LEVEQUE, j'ai <?php echo $age->format('%y'); ?>ans, je vis en région nantaise et je suis actuellement en formation de développement web et mobile à Webstart Nantes.</p>
            <p>Mon parcours dans l'aventure du développement web a commencé en IUT informatique où j'ai découvert le HTML et le CSS. Malheureusement, je ne m'y sentais pas à ma place, trop de théorie, pas assez de pratique et seul le web m'intéressait vraiment.<br />
            J'ai donc décidé de quitter cette école afin de me consacrer pleinement au développement web. J'ai alors rejoint une formation afin de réunir les compétences nécessaires pour me permettre de travailler dans le domaine du web.</p>
            <p>Aujourd'hui, je cherche à constamment affûter mes compétences et à en développer des nouvelles afin de m'améliorer de jours en jours.</p>
        </div>
        <img src="img/arthur.jpg" alt="photo Arthur LEVEQUE">
    </div>

</section>