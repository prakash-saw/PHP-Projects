<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Php Tutorial</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Geist+Mono:wght@100..900&family=Geist:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar md:navbar-expand bg-1">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Php Tutorial</a>
            <button class="btn-icon navbar-toggler" type="button" data-bs-toggle="drawer" data-bs-target="#navbarDrawer" aria-controls="navbarDrawer" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" aria-hidden="true"></span>
            </button>
            <dialog class="drawer drawer-end" tabindex="-1" id="navbarDrawer" aria-labelledby="navbarDrawerLabel">
            <div class="drawer-header">
                <h5 class="drawer-title" id="navbarDrawerLabel">Menu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="drawer" aria-label="Close"></button>
            </div>
            <div class="drawer-body mb-2 md:mb-0">
                <ul class="nav navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <button class="nav-link" type="button" data-bs-toggle="menu" aria-expanded="false">
                    Menu
                    </button>
                    <div class="menu">
                    <a class="menu-item" href="#">Action</a>
                    <a class="menu-item" href="#">Another action</a>
                    <hr class="menu-divider">
                    <a class="menu-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                </li>
                </ul>
                <form class="hstack gap-2" role="search">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search"/>
                <button class="btn-solid btn-icon theme-secondary" type="submit">
                    <svg class="bi" width="16" height="16"><use href="#search" /></svg>
                </button>
                </form>
            </div>
            </dialog>
        </div>
    </nav>
    <div class="container">
        <div class="sub-container">
            <h2>Php Programming</h2>
            <p>PHP is a popular general-purpose scripting language that is especially suited to web development. Fast, flexible and pragmatic, PHP powers everything from your blog to the most popular websites in the world.</p>
            <p>PHP is a server scripting language, and a powerful tool for making dynamic and interactive Web pages. PHP is a widely-used, free, and efficient alternative to competitors such as Microsoft's ASP.</p>
            <p>PHP is an acronym for "PHP: Hypertext Preprocessor". PHP code is usually processed on a web server by a PHP interpreter implemented as a module, a daemon, or as a Common Gateway Interface (CGI) executable. On a web server, the result of the interpreted and executed PHP code which may be any type of data, such as generated HTML or binary image data would form the whole or part of an HTTP response. Various web template systems, web content management systems, and web frameworks exist which can be employed to orchestrate or facilitate the generation of that response.</p>
            <h4>How to write PHP code</h4>
            <p>PHP code is usually written in files with a ".php" extension and can be embedded into HTML code, or it can be used in combination with various web template systems, web content management systems, and web frameworks. PHP code is enclosed within special PHP tags, which allow you to jump into and out of "PHP mode".</p>
            <p>PHP code can be written in two different ways:</p>
            <ul>
                <li>PHP code can be embedded in HTML using the &lt;?php ?&gt; tags.</li>
                <li>PHP code can also be written in a separate file with a ".php" extension and included in an HTML file using the &lt;?php include 'filename.php'; ?&gt; statement.</li>
            </ul>
            <h5>Example of PHP code:</h5>
            <pre>
&lt;?php
    echo "Hello, World!";
?&gt;
            </pre>
            <?php
                echo "Hello, World!";
            ?>
        </div>

        <div class="sub-container">
            <h2>Variable in PHP</h2>
            <h4>Rules for creating variables in PHP</h4>
            <ul>
                <li>Variable is a containers for sorting information.</li>
                <li>Start with a $.</li>
                <li>Variable name can only start with a letter or an underscore.</li>
                <li>Variable are case sensitive.</li>
                <li>$name, $namE,$income, and $inCome are different variables.</li>
            </ul>
            
            <?php
                echo "<h4>Example of Variable in PHP</h4>";
                echo "\$name = \"Prakash\";<br>";
                echo "\$namE = \"Shubham\";<br>";
                echo "\$income = 200000;<br>";
                echo "\$inCome = 100000;<br>";
                $name = "Prakash";
                $namE = "Shubham";
                $income = 200000;
                $inCome = 100000;

                echo "<p> echo \"This Guy name is \${name} and his income is \${income}<br> This Guy name is \${namE} and his income is \${inCome}\";</p>";
                echo "This Guy name is ${name} and his income is ${income}<br>";
                echo "This Guy name is ${namE} and his income is ${inCome}"; 
            ?>
        </div>
        
        <div class="sub-container">
            <h2>Datatypes in PHP</h2>
            <h4>Primitive Datatypes</h4>
            <ul>
                <li>String</li>
                <li>Integer</li>
                <li>Float</li>
                <li>Boolean</li>
                <li>Array</li>
                <li>Object</li>
                <li>NULL</li>
            </ul>
            
            <?php
                // string datatype
                echo "<h4>String Datatype</h4>
                <br> A string is a sequence of characters, like 'Hello, World!'. Strings are used to represent text in PHP. You can create a string by enclosing characters in single quotes (' ') or double quotes (\" \").<br> For example, you can create a string variable like this: <br> \$name = 'Prakash'; or <br>\$friend = \"Shubham\";<br> ";
                $name = "Prakash";
                $friend = 'Shubham';
                echo "<p> echo \" \${name}'s friend is \${friend}\";</p>";
                echo "<p> ${name}'s friend is ${friend}</p>";
                
                // integer datatype
                echo "<h4>Integer Datatype</h4>
                <br> An integer is a whole number, like 42. Integers are used to represent numeric values in PHP. You can create an integer variable like this: <br> \$income = 200000 or <br>\$inCome = 100000;<br>";
                $income = 200000;
                $inCome = 100000;
                echo "<p> echo \" \${name}'s income is \${income} and his friend \${friend}'s income is \${inCome}\";</p>";
                echo "<p> ${name}'s income is ${income} and his friend ${friend}'s income is ${inCome}</p>";

                // float datatype
                echo "<h4>Float Datatype</h4>
                <br> A float is a decimal number, like 42.5. Floats are used to represent numeric values with decimal points in PHP. You can create a float variable like this: <br> \$price = 100.50;<br>";
                $price = 100.50;
            echo "<p>  echo \"<> \${name}'s product price is \${price}\";</p>";
                echo "<p> ${name}'s product price is ${price}</p>";

                // boolean datatype
                echo "<h4>Boolean Datatype</h4>
                <br> A boolean is a binary value that can be either true or false. Booleans are used to represent logical values in PHP. You can create a boolean variable like this: <br> \$isAvailable = true;<br>";
                $isAvailable = true;
                echo "<p> echo \" \${name}'s product is available: \${isAvailable}\";</p>";
                echo "<p> ${name}'s product is available: ${isAvailable}</p>";
                echo "<p> var_dump(\$isAvailable): </p>";

                // array datatype
                echo "<h4>Array Datatype</h4>
                <br> An array is a special variable that can hold multiple values. Arrays are used to store multiple values in a single variable. You can create an array like this: <br> \$fruits = array('Apple', 'Banana', 'Cherry');<br>";
                $fruits = array("Apple", "Banana", "Cherry");
                echo "<p> echo \" \${name}'s favorite fruits are: \${fruits[0]}, \${fruits[1]}, \${fruits[2]}\";</p>";
                echo "<p> ${name}'s favorite fruits are: ${fruits[0]}, ${fruits[1]}, ${fruits[2]}</p>";

                //Null datatype
                echo "<h4>Null Datatype</h4>
                <br> A null value represents the absence of a value or a variable that has no value. In PHP, you can assign a variable to null like this: <br> \$myVariable = null;<br>";
                $myVariable = null;
                echo "<p> echo var_dump(\$myVariable): </p>";
                echo var_dump($myVariable);
                echo "<br>";

                // object datatype
                echo "<h4>Object Datatype</h4>
                <br> An object is an instance of a class. Objects are used to represent real-world entities in PHP. You can create a class and then create an object of that class like this: <br> class Person {<br> public \$name;<br> public \$age;<br> public function __construct(\$name, \$age) {  <br> \$this->name = \$name;<br> \$this->age = \$age;<br> }<br>}<br> \$person1 = new Person(\"Prakash\", 25);<br> \$person2 = new Person(\"Shubham\", 30);<br> \$person3 = new Person(\"Amit\", 28);<br> echo \" \${person1->name} is \${person1->age} years old, \${person2->name} is \${person2->age} years old, and \${person3->name} is \${person3->age} years old\";<br>";
                // class Person {
                //     public $name;
                //     public $age;
                //     public function __construct($name, $age) {  
                //         $this->name = $name;
                //         $this->age = $age;
                //     }
                // }
                // $person1 = new Person("Prakash", 25);   
                // $person2 = new Person("Shubham", 30);
                // $person3 = new Person("Amit", 28);
                // echo "<p> ${person1->name} is ${person1->age} years old, ${person2->name} is ${person2->age} years old, and ${person3->name} is ${person3->age} years old</p>";
            ?>
        </div>
    </div>

    <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous"></script>
  </body>
</html>
