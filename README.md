# php learning

## use only php or php cli
`docker run -v ./src:/var/www/html --name php-test -it php bash`
then connect in vs code

## actual server
use docker compose

# extensions
php intelliphense
live server
php server

# math functions
pi()
rand($min,$max)
round($num,2) // rounds to 2nd digit

# conditional
if,elseif,else

# array
array_push, array_pop, array_shift

# html elements
## radio buttons
if there are radio buttons with the same name , only 1 of them can be selected.
if checkeboxes have same name, multiple can be selected. but the formdata will be in the format
`food=Burger&food=chowmin&submit=Submit`
so at phpside it will show only chowmin
to handle this case use `food[]` in the name attribute of the element . But it is a php-only solution

https://stackoverflow.com/questions/18745456/how-to-process-multiple-checkboxes-with-a-single-server-side-variable-html-for

# functions
parameters : temporary variable inside the functions $first_name,$last_name
arguments: the actual values "Abinash","Dash"

## variable length arguments list
function add(...$test){ // declaration}
add(3,3,4,5)

## type declaration
function add(int $a,int $b) {//declaration}
type declaration can be helpful in **error handling**

## useful string function
strtolower
strtoupper
trim
str_pad
str_replace
strrev
str_shuffle
strcmp
strlen
strpos
substr
implode
explode

# sanitize

filter_input(INPUT_POST,"username",FILTER_SANITIZE_SPECIAL_CHARS)
FILTER_SANITIZE_NUMBER_INT,FILTER_SANITIZE_EMAIL

# validate

filter_input(INPUT_POST,"age",FILTER_VALIDATE_INT)
FILTER_VALIDATE_EMAIL

# include
reusability

`include('header.php')`

# cookie
set cookie -> setcookie('fav_food','chowmin',time() + 86400,'/')
delete cookie -> setcookie('fav_food','chowmin',time() - 0 ,'/')
access cookie -> $_COOKIE

# session
$_SESSION
session_start()
session_destroy()

# server SGB

$_SERVER['PHP_SELF'] - vulnerable to XSS
htmlspecialchars($_SERVER['PHP_SELF']) to avoid xss

# password handling

password_hash($password,PASSWORD_DEFAULT)
password_verify($password,$hashed_password)

# variable

# useful functions
isset - true if declared and not null
empty - true if not declared,false,null


# ref
https://www.youtube.com/watch?v=zZ6vybT1HQs&t=7152s
https://elisegev.medium.com/running-php-fpm-in-cli-e1f0f4b4f59a

