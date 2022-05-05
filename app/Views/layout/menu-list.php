<?php $menu_search = true;  ?>

<li class="<?php echo $page_name== "home" ? "current-menu-item current-menu-ancestor" : "" ?> ">
    <a rel="follow" href="<?php echo base_url() ?>/">Home</a>
    <?php /* ?><ul class="sub-menu">
        <li><a href="index.html">Home 1</a></li>
        <li><a href="index-2.html">Home 2</a></li>
        <li><a href="index-3.html">Home 3</a></li>
        <li><a href="index-4.html">Home 4</a></li>
        <li class="current-menu-item"><a href="index-5.html">Home 5</a></li>
    </ul><?php */ ?>
</li>
<li
    class="menu-item-has-children <?php if($menu_search && in_array($page_name,array("about","ourteam"))) {echo "current-menu-item current-menu-ancestor";$menu_search=false;} ?> ">
    <a href="#">Company</a>
    <ul class="sub-menu">
        <li><a rel="follow" href="<?php echo base_url() ?>/company/about-us">About us</a></li>
        <?php /* ?><li><a rel="follow" href="<?php echo base_url() ?>/company/our-team">Our Team</a></li>
        <li><a href="why-choose-us.html">Why Choose Us</a></li>
        <li><a href="our-team.html">Our team</a></li>
        <li><a href="single-team.html">Single team</a></li>
        <li class="menu-item-has-children"><a href="shop.html">Shop</a>
            <ul class="sub-menu">
                <li><a href="single-product.html">Single Product</a></li>
                <li><a href="checkout-page.html">Checkout Page</a></li>
                <li><a href="cart-page.html">Cart Page</a></li>
            </ul>
        </li>
        <li><a href="typography.html">Typography</a></li>
        <li><a href="elements.html">Elements</a></li>
        <li><a href="faq.html">FAQS</a></li>
        <li><a href="404-error.html">404 Error</a></li>
        <li><a href="cooming-soon.html">Coming Soon</a></li><?php */ ?>
    </ul>
</li>
<li
    class="menu-item-has-children <?php if($menu_search && in_array($page_name,array("services","it-outsourcing","software-development","web-development","mobile-development"))) {echo "current-menu-item current-menu-ancestor";$menu_search=false;} ?>">
    <a href="<?php echo base_url() ?>/services">Services</a>
    <ul class="sub-menu">
        <li><a rel="follow" href="<?php echo base_url() ?>/services/software-development">Software Development</a></li>
        <li><a rel="follow" href="<?php echo base_url() ?>/services/web-development">Web Development</a></li>
        <li><a rel="follow" href="<?php echo base_url() ?>/services/mobile-development">Mobile Development</a></li>
        <li><a rel="follow" href="<?php echo base_url() ?>/services/it-outsourcing">It Outsourcing</a></li>
    </ul>
</li>
<li class="menu-item-has-children <?php if($menu_search && in_array($page_name,array("projects","qms"))) {echo "current-menu-item current-menu-ancestor";$menu_search=false;} ?>">
    <a href="#">Projects</a>
    <ul class="sub-menu">
        <li><a href="<?php echo base_url() ?>/projects/queue-management-system">Queue System</a></li>
        <?php /* ?> <li class="menu-item-has-children"><a href="portfolio-grid.html">Portfolio Grid</a>
            <ul class="sub-menu">
                <li><a href="portfolio-grid.html">Portfolio 3 Columns</a></li>
                <li><a href="portfolio-4-column.html">Portfolio 4 Columns</a></li>
                <li><a href="portfolio-no-gap.html">Portfolio No Gap</a></li>
            </ul>
        </li>
        <li class="menu-item-has-children"><a href="portfolio-details-1.html">Portfolio Details</a>
            <ul class="sub-menu">
                <li><a href="portfolio-details-1.html">Single Layout 1</a></li>
                <li><a href="portfolio-details-2.html">Single Layout 2</a></li>
                <li><a href="portfolio-details-3.html">Single Layout 3</a></li>
            </ul>
        </li>
        <?php */ ?>
    </ul>
</li>
<?php /* ?><li class="menu-item-has-children"><a href="blog.html">Blog</a>
    <ul class="sub-menu">
        <li><a href="blog.html">Blog Listing</a></li>
        <li><a href="blog-grid.html">Blog Grid</a></li>
        <li><a href="post.html">Blog Single</a></li>
    </ul>
</li><?php */ ?>
<li <?php echo $page_name== "contact" ? "class='current-menu-item current-menu-ancestor'" : "" ?>> <a rel="follow"
        href="<?php echo base_url() ?>/contact">Contact Us</a></li>