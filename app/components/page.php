<section class="hero is-fullheight">
    <div class="hero-body">
        <div class="container">
            <div class="columns is-centered">
                <div class="column is-12 has-text-centered">
                    <div class="title is-1 has-text-weight-normal mb-2">
                    
                        <!-- We use the $_component variable to access parameters -->
                        
                    	<?= $_component->params->title ?>

                	</div>

                    <div class="title is-5 has-text-grey has-font-weight-light">

                        <!-- 
                            
                            These parameters can be declared when we call Component::load(). 
                            
                            For example:
                            
                            >> Our view code
                            // app/views/anythingYouWish.php
                            Component::load('home', [ 'name' => 'Trintus' ]);


                            >> Our component code
                            // app/components/home.php
                            Hello there, < echo $components->params->name; >        
                        
                        -->

                    	<?= $_component->params->subtitle ?>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>