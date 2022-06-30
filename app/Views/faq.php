<?php $this->extend("layout_padrao");?>

<?php $this->section("faq");?>


<div class="faq">
        <h1 class="faq-heading">FAQ King Agendamentos</h1>
        <section class="faq-container">
            <div class="faq-one">
                <!-- faq question -->
                <h1 class="faq-page">Como Fazer um Agendamento?</h1>
                <!-- faq answer -->
                <div class="faq-body">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit saepe sequi, illum facere
                        necessitatibus cum aliquam id illo omnis maxime, totam soluta voluptate amet ut sit ipsum
                        aperiam.
                        Perspiciatis, porro!</p>
                </div>
            </div>
            <hr class="hr-line">
            <div class="faq-two">
                <!-- faq question -->
                <h1 class="faq-page">Como funciona o processo de agendamento?</h1>
                <!-- faq answer -->
                <div class="faq-body">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit saepe sequi, illum facere
                        necessitatibus cum aliquam id illo omnis maxime, totam soluta voluptate amet ut sit ipsum
                        aperiam.
                        Perspiciatis, porro!</p>
                </div>
            </div>
            <hr class="hr-line">
            <div class="faq-three">
                <!-- faq question -->
<h1 class="faq-page">Login?</h1>
                <!-- faq answer -->
                <div class="faq-body">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit saepe sequi, illum facere
                        necessitatibus cum aliquam id illo omnis maxime, totam soluta voluptate amet ut sit ipsum
                        aperiam.
                        Perspiciatis, porro!</p>
                </div>
            </div>
            <hr class="hr-line">
            <div class="faq-three">
                <!-- faq question -->
<h1 class="faq-page">Contato com os profissionais?</h1>
                <!-- faq answer -->
                <div class="faq-body">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit saepe sequi, illum facere
                        necessitatibus cum aliquam id illo omnis maxime, totam soluta voluptate amet ut sit ipsum
                        aperiam.
                        Perspiciatis, porro!</p>
                </div>
            </div>
        </section>
</div>
    <script>
        var faq = document.getElementsByClassName("faq-page");
    var i;
for (i = 0; i < faq.length; i++) {
    faq[i].addEventListener("click", function () {
        /* Toggle between adding and removing the "active" class,
        to highlight the button that controls the panel */
        this.classList.toggle("active");
        /* Toggle between hiding and showing the active panel */
        var body = this.nextElementSibling;
        if (body.style.display === "block") {
            body.style.display = "none";
        } else {
            body.style.display = "block";
        }
    });
}</script>
<?php $this->endSection(); ?>