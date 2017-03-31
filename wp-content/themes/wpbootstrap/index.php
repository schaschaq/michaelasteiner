<?php get_header(); ?>

<!--ABOUT SECTION-->
		<?php $page_slug ='about';
			$page_data = get_page_by_path($page_slug);
			$about_image = get_field('bild', $page_data->ID);
		?>

        <section class="a-about-section scroll-to-block" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-pic1"><img class="pic-1" src="<?php echo $about_image['url']; ?>" alt="image"></div>
                    <!--<div class="col-md-3 col-sm-6 col-pic2"><img class="pic-2" src="<?php echo get_template_directory_uri(); ?>/assets/img/agency/image_2.jpg" alt="image"></div>
                    --><div class="col-md-6 col-sm-6 col-xs-12 about-us">
                        <h2>
                        	<?php echo $page_data->post_title;?>
						</h2>
                        <p>
                        	<?php echo apply_filters('the_content', $page_data->post_content);?> 
                        </p>
                    </div>
                </div>
            </div>
        </section>

 <!--WORK PROCCES-->
        <?php $page_slug ='erstgespraech';
            $page_data = get_page_by_path($page_slug);
        ?>

        <section class="work-process a-work-process scroll-to-block" id="erstgespraech">
            <div class="container">
                <h2 class="block-title a-block-title">
                    <?php echo $page_data->post_title;?>
                </h2>
                <p class="sub-title a-sub-title">In einem unverbindlichen Erstgespräch mache ich mir ein Bild von euren Wünschen. Ihr entscheidet, wie ich euch unterstütze.</p>
                <p>
                 <?php echo apply_filters('the_content', $page_data->post_content);?> 
                </p>
            <div class="row">
                    <div class="process-info active-info">
                        <div class=" col-sm-4 col-xs-12 read">
                           <p class="use">Mein Erstgespräch mit euch.</p>
                    </div>

                        <div class=" col-sm-4 col-xs-12 read">
                             <p> Keine Beziehung ist, wie eine andere. Keine Liebe gleicht einer anderen. 
                                Genauso soll eure Hochzeit ein Hochleben-Lassen eurer einzigartigen Liebe sein, die euch ein Leben lang begleitet. 
                                Und dazu braucht es mehr als standardisierte Checklisten.
                                Die Organisation ist für mich ein Miteinander, ein Begleiten, ein Entwickeln - 
                                auch die Planungsphase soll für euch als Brautpaar ein Genuss und stressfrei sein. Vom ersten Gespräch an. </p>
                        </div>
                        <div class=" col-sm-4 col-xs-12 read">
                            <p>
                                Dieses dauert etwa eine Stunde und ist für euch kostenlos. 
                                Für unseren ersten Termin komme ich gerne zu euch nach Hause oder an einen Ort eurer Wahl. 
                                Ich nehme mir die notwendige Zeit und investiere viel Sorgfalt, denn nur so wird das Fest genau euren individuellen Vorstellungen entsprechen.
                                Ist ein Ansatz der richtige für euch, kommt einfach auf mich zu. 
                                Ich biete euch Packages mit unterschiedlichen Leistungen an. 
                                Über alle Details reden wir am besten in einem persönlichen Erstgespräch. </p>                        
                        </div>
                </div>

            </div>
        </section>

<!--SERVICES-->
			<?php $page_slug ='service';
				$page_data = get_page_by_path($page_slug);
				$service_image = get_field('service_bild', $page_data->ID);
			?>

			<?php $args = array(
				'posts_per_page'   => 20,
				'offset'           => 0,
				'category'         => 5,
				'category_name'    => '',
				'orderby'          => 'date',
				'order'            => 'DESC',
				'include'          => '',
				'exclude'          => '',
				'meta_key'         => '',
				'meta_value'       => '',
				'post_type'        => 'post',
				'post_mime_type'   => '',
				'post_parent'      => '',
				'author'	   	   => '',
				'author_name'	   => '',
				'post_status'      => 'publish',
				'suppress_filters' => true 
			);
			$service_posts = get_posts( $args ); ?>

        <div class="serv a-service scroll-to-block" id="service" >
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-sm-12 bg-serv">
                        <div class="services">
                        	<?php foreach ($service_posts as $key => $post):?>
                            <div class="serv-description <?=($key==0)?'this-service':''?>">
                                <h3 class="topic"><?=$post->post_title?></h3>
                                <p class="describe"><?=$post->post_content?></p>
                            </div>
                        <?php endforeach;?>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="serv-item">
                            <div class="row">

                            <?php foreach ($service_posts as $key => $post):?>
	                            <div class="service col-md-6 col-sm-6 col-xs-6 <?=($key==0)?'active-item':''?>">
                                    <img src="img/agency/item_1.png" alt="item">
                                    <h6><?=$post->post_title?></h6>
                                </div>
                                <?=(($key%2)==1)?'<div class="clear"></div>':''?>
                        	<?php endforeach;?>
<!--
                                <div class="service col-md-6 col-sm-6 col-xs-6 ">
                                    <img src="img/agency/item_2.png" alt="item">
                                    <h6>web design</h6>
                                </div>
                                <div class="clear"></div>
                                <div class="service col-md-6 col-sm-6 col-xs-6 ">
                                    <img src="img/agency/item_3.png" alt="item">
                                    <h6>video production</h6>
                                </div>
                                <div class="service col-md-6 col-sm-6 col-xs-6 ">
                                    <img src="img/agency/item_4.png" alt="item">
                                    <h6>marketing</h6>
                                </div>
                                <div class="clear"></div>
                                <div class="service col-md-6 col-sm-6 col-xs-6 ">
                                    <img src="img/agency/item_5.png" alt="item">
                                    <h6>development</h6>
                                </div>
                                <div class="service col-md-6 col-sm-6 col-xs-6 ">
                                    <img src="img/agency/item_6.png" alt="item">
                                    <h6>photography</h6>
                                </div>
                                <div class="clear"></div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

         <!--Feste-->
         <?php $page_slug ='feste';
                $page_data = get_page_by_path($page_slug);
            ?>
       
        <section class="work-process a-work-process scroll-to-block" id="feste">
            <div class="container">
                <h2 class="block-title a-block-title">
                    <?php echo $page_data->post_title;?>
                </h2>
                <p>
                 <?php echo apply_filters('the_content', $page_data->post_content);?> 
                </p>
            </div>
        </section>

        <!--PLANUNG-->
            <?php $page_slug ='planung';
                $page_data = get_page_by_path($page_slug);
                $planung_image = get_field('planung_bild', $page_data->ID);
            ?>

            <?php $args = array(
                'posts_per_page'   => 20,
                'offset'           => 0,
                'category'         => 6,
                'category_name'    => '',
                'orderby'          => 'date',
                'order'            => 'DESC',
                'include'          => '',
                'exclude'          => '',
                'meta_key'         => '',
                'meta_value'       => '',
                'post_type'        => 'post',
                'post_mime_type'   => '',
                'post_parent'      => '',
                'author'           => '',
                'author_name'      => '',
                'post_status'      => 'publish',
                'suppress_filters' => true 
            );
            $planung_posts = get_posts( $args ); ?>

        <div class="serv a-service scroll-to-block" >
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-sm-12 bg-serv">
                        <div class="services">
                            <?php foreach ($planung_posts as $key => $post):?>
                            <div class="serv-description <?=($key==0)?'this-service':''?>">
                                <h3 class="topic"><?=$post->post_title?></h3>
                                <p class="describe"><?=$post->post_content?></p>
                            </div>
                        <?php endforeach;?>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="serv-item">
                            <div class="row">

                            <?php foreach ($planung_posts as $key => $post):?>
                                <div class="service col-md-6 col-sm-6 col-xs-6 <?=($key==0)?'active-item':''?>">
                                    <img src="img/agency/item_1.png" alt="item">
                                    <h6><?=$post->post_title?></h6>
                                </div>
                                <?=(($key%2)==1)?'<div class="clear"></div>':''?>
                            <?php endforeach;?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

 <!--DECORATION SECTION-->
        <?php $page_slug ='love-friendship';
            $page_data = get_page_by_path($page_slug);
        ?>

        <section class="a-about-section scroll-to-block" id="dekoration">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-pic1"><img class="pic-1" src="<?php echo $about_image['url']; ?>" alt="image"></div>
                    <!--<div class="col-md-3 col-sm-6 col-pic2"><img class="pic-2" src="<?php echo get_template_directory_uri(); ?>/assets/img/agency/image_2.jpg" alt="image"></div>
                    --><div class="col-md-6 col-sm-6 col-xs-12 about-us">
                        <h2>
                            <?php echo $page_data->post_title;?>
                        </h2>
                        <p>
                            <?php echo apply_filters('the_content', $page_data->post_content);?> 
                        </p>
                    </div>
                </div>
            </div>
        </section>

 <!--CONTACT SECTION-->
        <section class="a-contact-section scroll-to-block" id="kontakt">
            <div class="container contact-us">
                <h2 class="block-title a-block-title">IT’S ALL ABOUT LOVE or not hahahahaha</h2>
                <p class="sub-title a-sub-title">Ich freue mich, wenn ihr mir schreibt!</p>
                <div class="row">
                    <div class="col-md-4 contact-info s-contact-info">
                        <h5>Addresse</h5>
                        <p>Musterstraße 1</p>
                        <p>1234 Wien</p>
                        <h5>Telefonnummer</h5>
                        <a class="phone" href="tel:xxxx xxx xx">xxxx xxx xx</a>
                        <h5>E-Mail</h5>
                        <p><a class="mail-us" href="mailto: anfrage@michaelasteiner.at">anfrage@michaelasteiner.at</a></p>
                    </div>

                    <div class="col-md-8 ">
                        <form  class="s-form" action="./contact-form.php" method="POST" novalidate>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <input class="input-style" type="text" name="name" placeholder="Name">
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <input class="input-style" type="email" name="email" placeholder="E-Mail">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <input class="input-style" type="tel" name="phone" placeholder="Telefonnummer">
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <input class="input-style" type="text" name="type" placeholder="Art der Veranstaltung">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <input class="input-style" type="text" name="when" placeholder="Wann?">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6">
                                <input class="input-style" type="text" name="where" placeholder="Wo?">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <textarea class="tx-style" name="message" placeholder="Message"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <input class="send" type="submit" value="Senden"/>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

<?php get_footer(); ?>