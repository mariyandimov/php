УСЛОВНИ ОПЕРАТОРИ : 


if(){  - всяка стойност в () ще бъде прехвърлена в boolean стойност.Ако стойноста е TRUE принтира нея и следващи else и else if не се четат.

}

else if(){ - добавяне на още стойности , гледа се стойността , ако IF е false.

}


else if (){ -  изнълнява се само когато стойността на else if и if e false.

}

strpos - тази функция показва къде се намира търсената от нас информация , Case sensitive.
stripos - same , case insensitive
str_replace - замества текст в текст
str_replace($needle ,$replace , $haystack)


ПРОМЕНЛИВИ:
   
създаване : 
$x=2;
$y=3;
$x=10; - презаписване на стойостта . Взима се последната стойност.
Типове данни 
$x=null - пример 
echo getType($x) - показва типа на променливата


Integer - цели числа
double / floating point - десетични числа 
string - текст , обграден в кавички.
boolean - 2 възмоности - true or false 

ПРЕХВЪРЛЯНЕ ОТ ЕДИН ТИП КЪМ ДРУГ : 



$x = "1948"
$y= (int)$x;  -  по този начин прехвърляме от string към integer.

var_dump($y);   - var_dump показва стойността и типа на променливата.
Ако прехвърляме integer към boolean получаваме false единствено , ако integer е 0. Всеки друг вариант е true(-1,1,10 и тн.) Съшото важи и за floating point числата.



Ако прехвърляме string  към boolean винаги получаваме true , само когато имаме напълно празен стринг получаваме false  


от boolean към int.
true  = int (1)
false = int (0)
от boolean към string 
true = string "1"
false  = string ""



String 
$a = 'gosho'
echo strlen($a); - показва броя на символите в string-a 
\  пред символ го прави възможен за интерпретация пример :
$a = "ivan\" " ;   - ще изведе ivan" като резултат.



ОПЕРАТОРИ ЗА ПРИСВОЯВАНЕ :


x = y левия операнд се задава със стойността на израза отдясно

x+=y събиране и присвояване / х=x+y / 
x*= y - умножение с присвояване / x=x*y / 
х/=у - делене с присвояване / х=х/у / 

ОПЕРАТОРИ ЗА СРАВНЕНИЕ
= = - равенство / $х==$у - връща true , ако х = у 
= = = - идентичност - по стойност и тип
!= - не е равно
<> - не е равно
>= по-голямо или равно 
<= по-малко или равно

ОПЕРАТОРИ ЗА УВЕЛИЧАВАНЕ И НАМАЛЯНЕ
++$х - предварително увеличение , увеличава х с единица , и след това връща $х.
--$х - предварително намаляне , намаля х с единица , и след това връща $х.

ЛОГИЧЕСКИ ОПЕРАТОРИ
and - и - връша true ако и двете страни са верни : 
$х and $у

or- или - връща true , ако поне една от страните е вярна .

Xor - Х или - връша true , ако една от страните е вярна , но не и двете

§§ - и - връща true , ако и двете страни са верни 
|| или - връша true , ако една от двете страни е вярна 

! - не е - !$x - true , ako $х не е вярно.

НИЗОВИ ОПЕРАТОРИ
. - Конкатенация $txt1 . $txt2 - обединява двата текста
.= - конкатенация и присвояване.



МАСИВИ 
print_R(); - команда , специализирана за визуализация на масиви.
 
$а =[1,2,3,4,5]; - променливата $а е масив.

[1,2,3,4,5] - елементи в масива , стойности.   
всички елементи имат индекси , те се използват , за да се достъпи до информацията , която съдържат:
echo $a[2] - [2] е ключът  , резултатът ще бъде 3 , понеже 3 е с индекс 2.
$а[2]=45 по този начин променяме стойността на елемента с индекс 2 и той става 45.
В масивите можем да имаме различни типове данни.

$а[]= 'gogo' - добавя се като последен елемент от масива.

задаване на ключ при създаване на масив :

$а = [10,13,'key'=69,'gogo'];
елементите се отделят със запетая. ключът е 'key'
премахване на елемент от масива :
unset($a[2])

МНОГОМЕРЕН МАСИВ - Масив , който съдържа други масиви в него.
Многомерен масив : 
достъпване на стойности във вътрешен масив:

$a['$b'][1]; = 70 - по този начин се променя стохността на индекса 

$а - външен масив 
['b'] - вътрешен масив 
[1] - ключ , който трява да се вземе

count($a) ще ни покаже броя на елементите в масива 



ИНДЕКСИРАН МАСИВ - всяка стойност в него е под определен индекс 
АСОЦИАТИВЕН МАСИВ - променливите се запазвад под формата на ключ Например : 'name'='Petar'
МНОГОМЕРЕН МАСИВ - Масив , който съдържа други масиви в него.




ЦИКЛИ : 
<?php
for ($i = 0; $i < 10; $i++) {
    echo $i . '<br>';
};

i++  - с колко ще нараства брояча на цикъла , може и да намаля
$i=9 - брояч на цикъла започва от 9
$i<10 - до колко ще продължи цикъла 
пространството между къдравите скоби се нарича тяло на цикъла.



<?php
$i = 0;
while ($i < 10) {
    echo $i . '<br>';
    $i++;
}

цикъла се изпълнява докато условието while ($i<10) е true.



<?php
$users = ['ivan', 'vtorikliuch'=>'gosho', 'mariyan', 'petko', 'dragan'];

foreach ($users as $key => $user) {
    echo 'key: ' . $key . ' IS:' . $user . '<br>';
}

$user - взима стойността на всяка итерация
$key - взима всеки ключ
резултата от echo-то е следния:
key: 0 IS:ivan
key: vtorikliuch IS:gosho
key: 2 IS:mariyan
key: 3 IS:petko
key: 4 IS:dragan



функции

<?php
function mysum($ab, $a=10, $b = 5)        - ако искам да имам дефинирана променлива и недефинирана в условието , трябва недефинираната да ми е най-отпред , за да мога при извикване да дефинирам само тази , която стои най-отпред.
{
    return ($a + $b). $ab;
};

echo mysum(gosho);   - 5 ще бъде стойността на $ab

result : 15 gosho


ПРЕДАВАНЕ НА СТОЙНОСТ ПО РЕФЕРЕНЦИЯ:
<?php
$a = 5;

function mysum($b){
   $b++;
}
mysum($a);
echo $a;

$b се променя на $а и взима стойността 5 , която не е зададена в формулата.
но когато се сложи § пред $b стойността на $а приема условията от функцията ,  в този случей $а ще се увеличи с 1.




PHP Web Development Basics - Exercise: Introduction to PHP - септември 2018 - Веселин Малезанов
Sep 28, 2018

CLASS : 
Класовете представляват чертежа или плана на някаква структура , а обектът представлява създаването на тази структура , за да се използеа.
ако нарисувам един чертеж на блок - това е клас. ако е построен - това е обект. ако класа е неизползван , той е само на чертеж.
от един клас мога да направя няколко обекта , 5 независими обекта , с една и съща структура.

Properties - съдържaт вътрешни данни на самия обект.
class Dog {
    public $name = null;
    public $age = 3;
    public $children = [];
    
    function setAge(){         -  Метод в клас - дефинира се с function() {}
    return $this->age;         - достъпваме пропърти age от класа Dog
    }
}

$a = new Dog();
echo $a -> age;   - можем да го достъпим и така , ако propertito е public , а не private.



class Dog {
    public $name = null;
    public $age = 3;
    public $children = [];
    
    function getFullData(){
    return 'Age:' .$this->age . '</br>' . 
        'Name:' . $this->name .  '</br>' . 
        'Children:'. count($this->children);
    }
}

$a = new Dog();
$a -> name = 'Pesho';

echo $a->getFullData();

$b = new Dog();
$b->name = 'Gosho';
$b->children = 'ivan';

echo $b->getFullData();


КОНТРУКТОРИ : 


class Dog {
    public $name = null;
    public $age = 3;
    public $children = [];
    

    function __construct()        -ще се изпълни автоматично тогава, когато се инстанцира класа. в този случей ше се изпълни. неможе да има ретърн.
    {
        $this->children = [];
        $this->name = 'no name';
    }
    function getFullData(){
    return 'Age:' .$this->age . '</br>' . 
        'Name:' . $this->name .  '</br>' . 
        'Children:'. count($this->children);
    }
}

$a = new Dog();
$a -> name = 'Pesho';

echo $a->getFullData();

$b = new Dog();
$b->name = 'Gosho';
$b->children = 'ivan';

echo $b->getFullData();

$a и $b - обекти

Методите имат входящи параметри , дефоултни стойности , тип - може да бъде нул , има ретърн тайп хинтинг(str / int/ bool etc.) 2:10
 














FUNCTIONS
-
-function playground_func($sideA, $sideB)
{
    $sideA = 1;
    $sideB = 3;
    $result = $sideA * $sideB;
    echo $result;
};



function playground_func($a, $b, $c)
{
    return array_sum(func_get_args());
};
echo playground_func(1, 2, 3, 'dada', 4, 5);

array_sum - пресмята стойността на всички стойности.
func_get_args - връща масив от стойностите в функцията





SQL 
;
;
;
;
;
;


SQL псевдонимите се използват, за да дадат на таблица или колона в таблица някакво име за временно ползване. Псевдонимите често се използват, за да могат имената на колоните да се четат по-лесно.




Клауза JOIN се използва за комбиниране на редове от две или повече таблици въз основа на съответна колона между тях.
Различни видове SQL JOINs

(INNER) JOIN: Връща записи, които имат съответстващи стойности в двете таблици
Ключовата дума INNER JOIN избира записи, които имат съответстващи стойности и в двете таблици.
LEFT (OUTER) JOIN: Върнете всички записи от лявата таблица и съответстващите записи от дясната таблица
Ключовата дума LEFT JOIN връща всички записи от лявата таблица (table1) и съответстващите записи от дясната таблица (table2). Резултатът е NULL от дясната страна, ако няма съвпадение.

RIGHT (OUTER) JOIN: Върнете всички записи от дясната таблица и съответстващите записи от лявата таблица
Ключовата дума RIGHT JOIN връща всички записи от дясната таблица (table2) и съответстващите записи от лявата таблица (table1). Резултатът е NULL от лявата страна, когато няма съвпадение.
FULL (OUTER) JOINЕ: Върнете всички записи, когато има съответствие в лявата или дясната таблица
Ключовата дума FULL OUTER JOIN връща всички записи, когато е налице съвпадение в записите за таблиците вляво (table1) или дясно (table2).








The Document Object Model (DOM) is the data representation of the objects that comprise the structure and content of a document on the web.
This guide will introduce the DOM, look at how the DOM represents an HTML document in memory and how to use APIs to create web content and applications.




REACT:
React has been designed from the start for gradual adoption, and you can use as little or as much React as you need. Perhaps you only want to
add some “sprinkles of interactivity” to an existing page. React components are a great way to do that.

Create a new react app:
npx create-react-app my-app
cd my-app
npm start 


npm start or yarn start
runs the app in development mode.

npm test or yarn test
runs the test watcher in an interactive mode.

npm run build or yarn build
builds the app for production in the build folder.


PROPS VS STATE
STATE is handled in the component and can be updated inside the component
PROPS is handled outside the component and must be updated outside of the component

if u change the STATE inside out application its going to rerender the section of the app.
u cant change the PROPS inside of the applicaiton.

if i need to change something in the application i have to use STATE.PROPS is good if i need to display something without hard codding it.




Add a React component to an existing HTML page: z

<!-- ... existing HTML ... -->

<div id="like_button_container"></div>

<!-- ... existing HTML ... -->

add 3 script tags in the html file right before the closing </body> tag.
<!-- ... other HTML ... -->

  <!-- Load React. -->
  <!-- Note: when deploying, replace "development.js" with "production.min.js". -->
  <script src="https://unpkg.com/react@17/umd/react.development.js" crossorigin></script>
  <script src="https://unpkg.com/react-dom@17/umd/react-dom.development.js" crossorigin></script>

  <!-- Load our React component. -->
  <script src="like_button.js"></script>

</body>

The first two tags load react. The third one will load your component code.

then we create anothe file called like_button.js next to our HTML file.
'use strict';

const e = React.createElement;

class LikeButton extends React.Component {
  constructor(props) {
    super(props);
    this.state = { liked: false };
  }

  render() {
    if (this.state.liked) {
      return 'You liked this.';
    }

    return e(
      'button',
      { onClick: () => this.setState({ liked: true }) },
      'Like'
    );
  }
}

this creates component called Like Button
and then at the bottom of the file we add 

const domContainer = document.querySelector('#like_button_container');
ReactDOM.render(e(LikeButton), domContainer);

this code finds the <div> we added and then display the "Like"button React component inside of it.
Done!


======

Introducing JSX
JAVA SCRIPT XML


const element = <h1>Hello, world!</h1>;
jsx is a syntax extension to JScript.
we use it with react to describe what the UI should look like.

Embedding expressions in JSX : 
const name = 'Josh Perez';
const element = <h1>Hello, {name}</h1>;

ReactDOM.render(
  element,
  document.getElementById('root')
);

first we declared the variable "name" and then we use it in the jsx by wrapping it like that { name } 
we can put any valid JS expression inside the {} in the jsx for example 2+2  , formatName(user) etc.



we embed the result of calling a javascript funtion into a <h1> tag. 
function formatName(user) {
  return user.firstName + ' ' + user.lastName;
}

const user = {
  firstName: 'Harper',
  lastName: 'Perez'
};

const element = (
  <h1>
    Hello, {formatName(user)}!
  </h1>
);

ReactDOM.render(
  element,
  document.getElementById('root')
);




we  can use JSX inside of IF statements and FOR loops, assign it to variables, accept it as arguments, and return it from functions:

function getGreeting(user) {
  if (user) {
    return <h1>Hello, {formatName(user)}!</h1>;
  }
  return <h1>Hello, Stranger.</h1>;
}




Rendering Elements
an element describes what u want to see on the screen : 
const element = <h1>Hello, world</h1>;


Function and Class Components
Components let you split the UI into independent pieces and think about each piece in isolation.
the simplest way to define a component is to write a JavaScript function:

function Welcome(props) {
  return <h1>Hello, {props.name}</h1>;
}




ES6 and Typescripts : 
ES6 stands for ECMAScript 6.

ECMAScript was created to standardize JavaScript, and ES6 is the 6th version of ECMAScript, it was published in 2015, and is also known as ECMAScript 2015.

VAR LET DECLARATION : 
var is function scoped  , can be redeclared. 
let is block scoped : 
if { let b =3 
};   
else {let b=3 
};
thats block declared - between { }
let cannot be redeclared in the same block.


const and let 
if we are going to reassign we use LET

if we arent going to reassing we use CONST 


arrows : 

const Arrowthing = (m,bonus) => (10*m+bonus);

console.log(Arrowthing(5,50));
result : 100

console.log(typeof Arrowthing);
result : Function



lexical THIS :
function scope
example : 



var example {
id: 5
greet: function (){console.log(this.id);
  }
};
employee.greet();
result : 5  this works just fine BUT : 

var example = {
id: 5
greet: function (){
setTimeout (function() {console.log(this.id)} , 1000);
  }
};
employee.greet();

result undefined.

thats because we use this in different function , in order to work we have to define this like so : 
var example = {
id: 5
greet: function (){
var that = this;
setTimeout (function() {console.log(that.id)} , 1000);
  }
};
employee.greet();

result : 5 
and its working perfectly fine like that 

BUT BETTER WITH ARROWS : 
var example = {
id: 5
greet: function (){
setTimeout (() =>  {console.log(this.id)} , 1000);
  }
};
employee.greet();
result 5
less code less mistakes!!



destructuring arrays
let employee = ["Mark" , "Georgiev" , "male"] ; 
let [fname , lname , gender ] = employee ;
console.log(fname);
console.log(lname);
console.log(gender);

results : 
Mark
Georgiev
Male
if we dont need all elements : 
let employee = ["Mark" , "Georgiev" , "male"] ; 
let [, , gender ] = employee ;
console.log(gender);
result
Male

or 

let employee = ["Mark" , "Georgiev" , "male"] ; 
let [fname , ...elements ] = employee ;
console.log(fname);
console.log(elements);

results : 
Mark
["Georgiev" , "male"]


ако нямаме въведена стойност за някой от ключовете можем да сложим default : 
let employee = ["Mark" , "Georgiev"] ; 
let [fname , lname , gender = "male"] = employee ;
console.log(fname);
console.log(lname);
console.log(gender);

results : 
Mark
Georgiev
Male


Destructing objects:

let employee = {
fname : "Mark",
lname : "Georgiev",
gender: "male"
}

let {fname: f, lname: l , gender: g} = employee
// fname:f = allias , po tozi nachin veche izpolzvame F vmesto imeto na promenlivata , за по-кратко.

console.log(f);
console.log(l);
console.log(g);



FOR OF LOOP
let colors = ["green","yellow","red"];

for(let color of colors){
console.log(color);
};
console.log(color);
result : 
Green
yellow
red

let letters = "ABC";
for(let letter for letters){
console.log(letter);
}
result : 
A
B
C


defining a class : 

class Person{  - class
greet{}()    - method
}
let p = new Person();   - constructor


class Person {
constructor(name){
 this.name=name;
 console.log(this.name + " Constructor");
 }
 static staticMethod(){
 console.log("Static Method");
 }
 greetPerson(){
 console.log("Hello " + this.name);
 }
}

Person.staticmethod();     =     Static Method
let p = new Person ("Chandler");     =     Chandler Constructor
p.greetPerson();    =    Hello Chandler







props vs state 

props;
gets passed to component
function parameters
cannot be changed by the children
functional components - we acces with "props"
class components we access with "this.props"

state:
managed within the component
variables declared in the function body
state can be changed 
function components we access with useState hook
class components we access with this.state



functional components : 
a java script function that accepts input of properties and returns HTML that describes the UI.


setState
always use setState , never modify state directly
when u have to update state based on the previous state value pass in a function as a argument instead of the regular object

























