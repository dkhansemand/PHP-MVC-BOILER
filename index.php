<?php
    require_once __DIR__ . DIRECTORY_SEPARATOR . 'init.php';
    var_dump(Permission::CheckTable());
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Router | Now with MVC structure</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <header id="mainHeader">
        <nav>
            <a href="#">Link #</a>
            <a href="#">Link #</a>
            <a href="#">Link #</a>
            <a href="#">Link #</a>
            <a href="#">Link #</a>
        </nav>
        <form action="" method="post">
            <label for="searchQuery">Søg</label>
            <input type="text" name="searchQuery" id="searchQuery">
            <button>Søg</button>
        </form>
    </header>
    <main>
        <section>
            <h2>Artikler</h2>
            <article>
                <header>
                    <h2>Artikel #1</h2>
                </header>
                <section>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat explicabo sit sequi est, labore, error enim temporibus quasi eligendi, numquam modi dolore harum illum sint! Dignissimos laborum perferendis numquam voluptates enim, nisi odit. Exercitationem placeat illum blanditiis, natus iste totam esse, sint consectetur excepturi culpa voluptas, qui quisquam voluptatem rerum?</p>
                </section>
                <footer>
                    <a href="#">Læs mere</a> 
                </footer>
            </article>
            <article>
                <header>
                    <h2>Artikel #2</h2>
                </header>
                <section>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat explicabo sit sequi est, labore, error enim temporibus quasi eligendi, numquam modi dolore harum illum sint! Dignissimos laborum perferendis numquam voluptates enim, nisi odit. Exercitationem placeat illum blanditiis, natus iste totam esse, sint consectetur excepturi culpa voluptas, qui quisquam voluptatem rerum?</p>
                </section>
                <footer>
                    <a href="#">Læs mere</a> 
                </footer>
            </article>
            <article>
                <header>
                    <h2>Artikel #3</h2>
                </header>
                <section>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat explicabo sit sequi est, labore, error enim temporibus quasi eligendi, numquam modi dolore harum illum sint! Dignissimos laborum perferendis numquam voluptates enim, nisi odit. Exercitationem placeat illum blanditiis, natus iste totam esse, sint consectetur excepturi culpa voluptas, qui quisquam voluptatem rerum?</p>
                </section>
                <footer>
                    <a href="#">Læs mere</a> 
                </footer>
            </article>
            <article>
                <header>
                    <h2>Artikel #4</h2>
                </header>
                <section>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat explicabo sit sequi est, labore, error enim temporibus quasi eligendi, numquam modi dolore harum illum sint! Dignissimos laborum perferendis numquam voluptates enim, nisi odit. Exercitationem placeat illum blanditiis, natus iste totam esse, sint consectetur excepturi culpa voluptas, qui quisquam voluptatem rerum?</p>
                </section>
                <footer>
                    <a href="#">Læs mere</a> 
                </footer>
            </article>
            <article>
                <header>
                    <h2>Artikel #5</h2>
                </header>
                <section>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat explicabo sit sequi est, labore, error enim temporibus quasi eligendi, numquam modi dolore harum illum sint! Dignissimos laborum perferendis numquam voluptates enim, nisi odit. Exercitationem placeat illum blanditiis, natus iste totam esse, sint consectetur excepturi culpa voluptas, qui quisquam voluptatem rerum?</p>
                </section>
                <footer>
                    <a href="#">Læs mere</a> 
                </footer>
            </article>
        </section>
    </main>
    <footer>
        <p> FOOTER Copyright &copy; <?=date('Y')?></p>
    </footer>
</body>
</html>