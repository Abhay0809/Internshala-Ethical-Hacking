<!-- Q4. Make 2 HTML forms with sample fields and values. Set one action to GET and another to POST. Download “Live HTTP Headers” addon for firefox and capture the request in both the cases after submitting the form. Analyse where the data from your input fields goes in the request. -->

<html>
    <head>
        <title>
            PHP ANSWER 4
        </title>
    </head>
    <body>
        
        <form action="test1.php" method="get">
            <h3>GET FORM</h3>

            <label for="name">Enter your Name: </label><br>
            <input type="text" name="name" placeholder="NAME" id="name"><br>

            <label for="password">Enter your Password: </label><br>
            <input type="text" name="pass" id="pass" placeholder="PASSWORD"><br>

            <br>

            <button type="submit">SUBMIT</button>
        </form>

        <form action="test2.php" method="post">
            <h3>POST FORM</h3>

            <label for="name">Enter your Name: </label><br>
            <input type="text" name="name" placeholder="NAME" id="name"><br>

            <label for="password">Enter your Password: </label><br>
            <input type="text" name="pass" id="pass" placeholder="PASSWORD"><br>

            <br>

            <button type="submit">SUBMIT</button>
        </form>


    
    </body>
</html>