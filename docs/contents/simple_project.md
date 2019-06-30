## Simple PHP Form

The PHP superglobals `$_GET` and `$_POST` are used to collect form-data.

The example below displays a simple HTML form with two input fields and a submit button:

```
<html>
<body>

<form action="welcome.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>

</body>
</html>
```
When the user fills out the form above and clicks the submit button, the form data is sent for processing to a PHP file named "welcome.php". The form data is sent with the HTTP POST method.

To display the submitted data you could simply echo all the variables. The "welcome.php" looks like this:
```
<html>
<body>

Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>

</body>
</html>
```
The output could be something like this:
```
Welcome John
Your email address is john.doe@example.com
```
The same result could also be achieved using the HTTP GET method:
```
<html>
<body>

<form action="welcome_get.php" method="get">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>

</body>
</html>
```
and "welcome_get.php" looks like this:
```
<html>
<body>

Welcome <?php echo $_GET["name"]; ?><br>
Your email address is: <?php echo $_GET["email"]; ?>

</body>
</html>
```
The code above is quite simple. However, the most important thing is missing. You need to validate form data to protect your script from malicious code.

!>Think SECURITY when processing PHP forms! This does not contain any form validation, it just shows how you can send and retrieve form data. However, the next topic will show how to process PHP forms with security in mind! Proper validation of form data is important to protect your form from hackers and spammers!

## PHP Form with Validation
## Create Login and Registration Page   
## Ceate Home Page
## Create Add, Edit, View, & Delete Page
