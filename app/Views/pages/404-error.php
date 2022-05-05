<?php 
 $pageMeta['title'] = "Error Page | Tag4Technology Solutions"; 
        $pageMeta['description'] = "404 Error Page| Tag4Technology Solutions"; 
        $pageMeta['keywords'] = "404, Not Found , Tag4Technology Solutions"; 

        $data['page_meta'] = $pageMeta;
        $data['page_name'] = "404"; 

        echo view('layout/header',$data);
        ?>
<div id="content" class="site-content">

    <div class="container">
        <div class="error-404 not-found text-center">
            <h2><img class="error-image" src="https://via.placeholder.com/524x184.png" alt="404"></h2>
            <h1>Sorry! Page Not Found!</h1>
            <div class="content-404">
                <p>Oops! The page you are looking for does not exist. Please return to the site is homepage.</p>
                <form role="search" method="get" id="search-form" class="search-form">
                    <input type="search" class="search-field" placeholder="Search …" value="" name="s">
                    <button type="submit" class="search-submit"><i class="flaticon-search"></i></button>
                </form>
                <a class="octf-btn" href="<?php echo base_url() ?>">Take Me Home</a>
            </div>
        </div>
    </div>

</div>

<?php  echo view('layout/footer',$data); ?>