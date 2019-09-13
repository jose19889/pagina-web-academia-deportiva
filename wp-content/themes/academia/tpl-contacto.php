<?php /* Template Name: Contacto */

 get_header(); ?>

<?php get_template_part('loops/breadcrumbs');?>


<!--start render contact form -->


<div class="container py-2 blog-me pt-100 py-2  wow fadeInUp bg-white " data-wow-duration="4s" >
    <div class="row">
        <div class="col">
            <div class="card heading">
                <div class="card-header heading"><i class="fa fa-envelope"></i>
                  CORREO ELECTRÓNICO
                </div>
                <div class="card-body bg-light">
                    <form>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" required>
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" rows="6" required></textarea>
                        </div>
                        <div class="mx-auto">
                        <button type="submit" class="btn btn-primary text-right">Submit</button></div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-4 card-addres">
            <div class="card bg-light mb-3 text-pink">
                <div class="card-header text-dark text-uppercase"><i class="fa fa-home"></i> Dirección</div>
                <div class="card-body  pb-5">
                    <p class=" py-3 pb-3"><i class="fa fa-globe"></i> <span>Carmen Galaxy</span> </p>
                    <hr>
                    <p class=" py-3 pb-3"><i class="fa fa-envelope-o"></i> <span> onnl@example.com</span> </p>
                    <hr>
                     <p class=" py-3 pb-3"><i class="fa fa-envelope-o"></i> <span>onn@example.com</span> </p>
                    <hr>
                   <p class=" py-3 pb-3"><i class="fa fa-phone"></i> <span> +240 222 11 30 53</span> </p>
                   <hr>
                   <p ><i class="fa fa-phone"></i> <span> +240 222 11 30 53</span> </p>

                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
