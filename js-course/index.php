<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('include/head.php') ?>
</head>

<body id="page-top" data-spy="scroll" data-target="#sidebar-wrapper">

    <!-- Navigation -->
    <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
    <nav id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
            <li class="sidebar-brand">
                <a href="#top" onclick='$("#menu-close").click();'>JavaScript</a>
            </li>
            <li>
                <a href="#top" onclick='$("#menu-close").click();'>Home</a>
            </li>
            <li>
                <a href="#level1" onclick='$("#menu-close").click();'>About</a>
            </li>
            <li>
                <a href="#level2" onclick='$("#menu-close").click();'>Services</a>
            </li>
            <li>
                <a href="#portfolio" onclick='$("#menu-close").click();'>Portfolio</a>
            </li>
            <li>
                <a href="#contact" onclick='$("#menu-close").click();'>Contact</a>
            </li>
        </ul>
    </nav>

    <!-- Header -->
    <header id="top" class="container header">
       
       <h1>JavaScript Roadtrip course</h1>
       <h3>Codeschool</h3> 
        
    </header>


    <!--************************************************************************************************-->
    
                                            <!-- INTRODUCTION -->
    
    <!--************************************************************************************************-->
    
    <section id="intro" class="container">
        
        <h2>Introduction</h2>

        <div class="row">
            <p>Lightweight, interpreted programming language.</p>
            <p>JavaScript supports the following data types:</p>
            <ul>
                <li>Numbers</li>
                <li>Strings</li>
                <li>Boolean</li>
                <li>Null</li>
                <li>Undefined</li>
                <li>Object</li>
            </ul>
        </div>

    </section>

    <!--************************************************************************************************-->
    
                                                <!-- LEVEL 1 -->
    
    <!--************************************************************************************************-->
    
    <section id="level1" class="container">
        
        <h2>Level 1</h2>

        <!-- *** BOOLEANS *** -->

        <div id="booleans" class="block">

            <h3>Booleans</h3>

            <div class="row video-row">
                <video controls width="100%" poster="http://placehold.it/1200x675/A92222/FFFFFF?text=Video1 - booleans">
                    <source src="http://pete85.com/courses/javascript/videos/part1/v1_booleans.mp4" type="video/mp4" />
                </video>
            </div>
        </div>

    </section>


    <!--************************************************************************************************-->
    
                                                <!-- LEVEL 2 -->
    
    <!--************************************************************************************************-->

    <section id="level2" class="container">
        

        <!-- *** BOOLEANS *** -->

        <div id="" class="block">
            
        </div>

    </section>

 
    <!-- Footer -->
    <footer>
        <?php include('include/footer.php') ?>
    </footer>

    <?php include('include/scripts.php') ?>


</body>

</html>
