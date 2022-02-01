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

























