<?php defined('_JEXEC') or die('Restricted access') ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="This is a blog for Joomla">

  	<jdoc:include type="head"/>

    <!-- Bootstrap Core Styles -->
    <link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/custom.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet" type="text/css">

    <!-- Main Bootstrap Javascript -->
    <script src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/js/bootstrap.js">	</script>
  </head>
  <body>
    <div class="container">
      <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-12 text-center">
            <a class="blog-header-logo text-dark" href="#">
              <?php echo ($this->params->get('blog_name') ?: 'Joomla Doc'); ?>
            </a>
          </div>
        </div>
      </header>
        
      <!-- The static content in the nav tag should be replace with Jdoc Nav-->
      <jdoc:include type="modules" name="nav">
        
      <nav class="nav d-flex justify-content-between">
        <a class="p-2 text-muted" href="#">Download</a>
        <a class="p-2 text-muted" href="#">Extend</a>
        <a class="p-2 text-muted" href="#">Discover</a>
        <a class="p-2 text-muted" href="#">Learn</a>
        <a class="p-2 text-muted" href="#">Community</a>
        <a class="p-2 text-muted" href="#">Support</a>
        <a class="p-2 text-muted" href="#">Developer Resources</a>
      </nav>
    </div>
</div>

<main role="main" class="container">
  <div class="row">
    <?php if ($this->countModules('left')) : ?>
      <aside class="col-12 col-md-3 col-xl-2">
        <div class="p-4 mb-3 bg-light rounded">        
          <!-- The static content should be replace with Jdoc Left-->
          <jdoc:include type="modules" name="left" style="none">
            
          <h4 class="font-italic">Author</h4>
          <p class="mb-0">This is a static content. 4th year computer science student at Odessa National Polytechnic University. Spend most of my time documenting and supporting the Joomla community.</p>
        </div>
      </aside><!-- /.blog left sidebar -->
    <?php endif; ?>

    <div class="col-12 col-md-9 col-xl-8 blog-main">
      <div class="blog-post">
        <!-- The static content should be replace with Jdoc component-->
        <jdoc:include type="component">

        <h2 class="blog-post-title">Sample Static blog post</h2>
        <p class="blog-post-meta">April 1, 2019 by <a href="#">Ibitoye</a></p>
        <p>This is a static content. Lorem ipsum dolor sit amet consectetur adipisicing elit. Est mollitia sit atque ipsum? Possimus suscipit rem cumque voluptatem, inventore delectus, voluptatum fugit, enim quam tempore et aspernatur. Quaerat, repudiandae praesentium?</p>
        <hr>
        <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
        <blockquote>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquid expedita, nobis ut quas corporis eius minima facilis autem delectus eveniet. Iusto eum dignissimos veniam corrupti. Unde quas praesentium eius? Voluptatum!</p>
        </blockquote>
        <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
      </div><!-- /.blog-post -->
    </div> <!-- /.blog-main -->

    <aside class="d-none d-xl-block col-xl-2">
      <div class="p-4 mb-3 bg-light rounded">
        <!-- The static content should be replace with Jdoc Right-->
        <jdoc:include type="modules" name="right">
        <h4 class="font-italic">Learn</h4>
        <p class="mb-0">This is a static content. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste rerum perspiciatis suscipit culpa nisi voluptatum deleniti. Molestiae ea dolor, autem esse ipsa animi eaque inventore deserunt a recusandae voluptate quaerat.</p>
      </div>
    </aside><!-- /.blog right sidebar -->

  </div><!-- /.row -->

</main><!-- /.container -->

<footer class="blog-footer">
  <p>&copy; <?php echo ($this->params->get('copyright_year') ?: date('Y')); ?> Joomla</p>
</footer>
</body>
</html>
