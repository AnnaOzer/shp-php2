<?php
/*
Класс в php тип данных, который вы моете сами создавать
Объект - экземпляр класса

Класс -как чертёж для плотника
Объект - конкретный стол

 * */

/*
КЛАСС
- Класс - тип данных
- Он описывает, какими будут объекты этого класса
- Класс - это "идея" объектов

ОБЪЕКТ
- Объект - это экземпляр класса, реализация идеи, заложеной в классе
- Его структура и поведение определяются классом, которому принадлежит объект
 * */

/*
В классе и объектах могут быть определены свойста и методы

СВОЙСТВА
- Поля или свойства - переменные, определенные в классе
- Каждый объект этого класса получает эти переменные
- Они отвечают за свойства объектов:
    число ножек стола
    материал
    цвет и.т.д.

МЕТОДЫ
- Методы - это функции, определенные в классе
- Они отвечают за поведение объектов класса
- Или за операции, которые можно проводить над объектами
    передвинуть
    накрыть скатертью
    посчитать количество человек за столом


*/
/*
Класс может содержать сколько угодно свойств,
они могут быть любого типа:
- строками
- числами
- массивами
- другими объектами

 * */

/*
 Ключевые слова
new содание объекта данного класса
$this->свойство  доступ к свойствам данного класса изнутри объекта
не обязательно устанавливать у объекта все прописанные в классе свойства
 * */

/*
 Конструктор класса - метод,
который выполнится автоматически при создании объекта класса.

В php к моменту вызова конструктора объект уже создан. память выделена.

Конструктор всегда один, надо тщательно продумывать список аргументов

*** Конструктор класса***
- имеет зарезервированное имя __construct()
- вызывается автоматически при создании объекта данного класса
- может принимать аргументы, как любой другой метод
- применяется для начальной установки свойств объекта

Например класс соединение с базой данных
в конструкторе прописать, что когда создаётся объект, устанавливается соединение с базой данных

Инкапсуляция - когда свойства и методы спрятаны внутрь объектов, их инкапсулировали

Запомнить: не использовать в своих названиях __ в начале имени
Конструктор может возвращать что-то но это значение нигде не используется.
 * */

/*
Наследование
- класс может быть унаследован от другого класса
- дочерний класс автоматически будет иметь те же свойства и методы, что и родительский
- класс может иметь сколько угодно наследников, но только _одного_ предка

Свойства и методы будут унаследованы, свои свойства -уточняющие - добавляются,
родительские могут переопределяться.

extends - наследуется от, или 'расширяет'
parent - родительский класс

Конструктор класса-наследника полностью перекрывает конструктор родительского класса

Предок моего предка - не мой предок. До деда невозможно достучаться.

*/

/*
Полиморфизм - дочерний класс может переопределить методы,
которые получил в наследство от родительского.
 * */

/*
ООП - это инкапсуляция, наследование и полиморфизм.
А как они реализованы в PHP? -отвечать.
 * */

/*
В php вертикального множественного наследования нет,
есть горизонтальный перенос генов: механизм трейтов, то есть инъекций кода в ваши классы
Можно написать трейт, т.е. заготовку каких-то классов, с методами,
и потом в нужные классы вставить.
Трейт - языковая реализация копипаст
 * */

/*
Модификатор доступа:
свойство может иметь один из трех модификаторов доступа
- доступный извне public
- доступный только в этом классе private
- доступным в классе и всех его наследниках protected
Такие же модификаторы доступа могут иметь и методы класса.

Защищенные свойства нужны чтобы спрятать информацию от внешнего пользователя

Защищенные свойства могут вычисляться в конструкторе. Их мы напрямик пользователю не отдаём,
отдаём через специальный метод.
 * */

/*
 Константы класса
- задаются один раз
- не могут изменяться
- принадлежат классу, а не объектам

У классов могуты быть статические свойства и методы
- принадлежат классу, а не объектам
- задаются с помощью ключевого слова static
- внутри класса доступны через self::$prop или self::method()
- вне класса через Class::$prop или Class::method()

 * */

/*
Абстрактные классы
- нельзя создать объект абстрактного класса
(зачем же он нужен?
чтобы писать некий код. который будут наследовать дочерние классы потом
пример абстрактного класса - просто стол)
- служит для наследования от него конкретных классов
- задаётся ключевым словом abstract class

Абстрактные методы
(могут быть в классах
служат чтобы дочерние классы их реализовали)
- не могут содержать тело метода
- обязаны быть реализованы в дочерних классах
- задаются ключевым словом abstract function

 * */