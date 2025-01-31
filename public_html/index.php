<?php
$pageTitle = "hiGUI";
include '../include/header.php';
?>

<main>
    <section id="hi" class="hero">
        <h2>You have finally found a powerful library for your GUIs in OpenGL metauniverse.</h2>

        <p>hiGUI provides a lightweight GUI implementation into your C++ code.
        </br>This library uses third-party libraries as <a href="https://www.opengl.org/">Opengl</a> 
        and <a href="https://www.glfw.org/">GLFW</a> to draw GUI and handle events.</p>

        <a href="doc.php" class="cta-button">Learn More</a>
    </section>

    <div class="carousel">
        <div class="carousel__item"><img src="image/gui-examples/screenshot-1.jpg"></div>
        <div class="carousel__item"><img src="image/gui-examples/screenshot-2.jpg"></div>
        <div class="carousel__item"><img src="image/gui-examples/screenshot-3.jpg"></div>
        <div class="carousel__item"><img src="image/gui-examples/screenshot-4.jpg"></div>
        <div class="carousel__item"><img src="image/gui-examples/screenshot-5.jpg"></div>
    </div>

    </br>
    <section id="doc" class="content">
        <h2>Documentation</h2>
        <p>We tried to make the documentation as if you are reading a children's book.
        </br>Our documentation provides in-depth information about using hiGUI in your projects.
        </p>

        <p>We have added as many visual concepts as possible to the documentation, but with code examples
        </br>so that anyone can freely, after reading it once, write it in their code a lot.</p>
    </section>

    <script src="script/script.js"></script>
</main>

<?php
include '../include/footer.php';
?>
