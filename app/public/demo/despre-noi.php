<?php require_once("./includes/header.php"); ?>

    <section class="container">
        <h1>Despre noi</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae reiciendis voluptates perspiciatis sed expedita voluptatem, dolorem id veritatis fugiat velit aut magni ipsa ex quos, autem, laborum eligendi excepturi aperiam?</p>
        <p >Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae quasi asperiores quidem voluptatem vitae itaque aliquid? Inventore ab voluptatum, quis omnis suscipit commodi natus nihil itaque architecto ipsum blanditiis voluptatibus?</p>

        <button class="btn btn-outline-primary mb-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseButton" aria-expanded="false" aria-controls="collapseExample">
            Citește mai mult
        </button>
        <div class="collapse" id="collapseButton">
            <p class="card card-body"> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Corporis ipsum velit, accusantium eaque alias quia magni aperiam aspernatur, quidem soluta reiciendis voluptatum libero nam possimus repudiandae in aliquid odit dolorum!</p>
            <p class="card card-body"> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet provident voluptatum consectetur error! Officiis cupiditate dignissimos voluptas error, quod iure cum dolor doloremque nostrum perspiciatis consequatur earum ratione dolore ducimus.</p>
        </section>

    <section class="about-stwo">
        <div class="container py-4">
            <h2>Echipa</h2>
            <div class="row justify-content-center py-3">
                <div class="col-4">
                    <div class="card">
                        <div style="background-image:url(/images/george.jpeg);" class="team rounded-top" alt="Card image cap"></div>
                        <div class="card-body">
                            <h5 class="card-title">Alin George</h5>
                            <p class="card-text">CEO</p>            
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div style="background-image:url(/images/flavia.jpeg);" class="team rounded-top" alt="Card image cap"></div>
                        <div class="card-body">
                            <h5 class="card-title">Flavia Mihai</h5>
                            <p class="card-text">Director adjunct</p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div style="background-image:url(/images/sebastian.jpeg);" class="team rounded-top" alt="Card image cap"></div>
                        <div class="card-body">
                            <h5 class="card-title">Sebastian Florentin</h5>
                            <p class="card-text">Manager de achiziții</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>    

<?php require_once("./includes/footer.php"); ?>