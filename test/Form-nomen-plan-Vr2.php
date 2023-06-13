<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Тест:"Формирование номенклатурных планов"</title>
</head>
<body>
    <main>
      <h1 class="zag-main">Итоговая работа по курсу "Формирование номенклатурных планов"</h1>
	  <p style="text-align: center; font-size: 18px;color:red;">*Выберете один или несколько правильных ответов</p>

        <div class="question">
          <p>Вопрос 1: В каком состоянии должна быть позиция изготовления для включения в номенклатурный план производства? </p>
          <label><input form="submitForm" type="checkbox" name="q[1][]" value="1">Закрыт</label><br/>
          <label><input form="submitForm" type="checkbox" name="q[1][]" value="2">Исполняется</label><br/>
          <label><input form="submitForm" type="checkbox" name="q[1][]" value="3">Формируется</label><br/>
          <label><input form="submitForm" type="checkbox" name="q[1][]" value="4">Запланирован</label><br/>
       </div>

        <div class="question">
          <p>Вопрос 2: Где указывается оптимальное по количеству значение партии для запуска?</p>
          <label><input form="submitForm" type="checkbox" name="q[2][]" value="1">В отчете Анализ производственной программы по нажатию на кнопку «Дополнительные операции» выбрав операцию «Установить уровень планирования»</label><br/>
          <label><input form="submitForm" type="checkbox" name="q[2][]" value="2">В карточке КПН в разделе «Партии изготовления» в столбце «Количество в партии/Базовое»</label><br/>
          <label><input form="submitForm" type="checkbox" name="q[2][]" value="3">В карточке КТП в столбце «Выход годного/Коэффициент»</label><br/>
          <label><input form="submitForm" type="checkbox" name="q[2][]" value="4">В карточке КПН в разделе «Партии изготовления» в столбце «Количество в партии/Max»</label><br/>
        </div>

        <div class="question">
          <p>Вопрос 3: Что произойдет на экране при выборе в контекстном меню списка команды Автофильтр?</p>
          <label><input form="submitForm" type="checkbox" name="q[3][]" value="1">Появится вкладка «Автофильтр»</label><br/>
          <label><input form="submitForm" type="checkbox" name="q[3][]" value="2">На экране появится окно фильтрации, в котором будут автоматически частично заполнены значения атрибутов</label><br/>
          <label><input form="submitForm" type="checkbox" name="q[3][]" value="3">В заголовке столбца сбоку появится значок «Треугольник» и будет возможность установить фильтр по колонке</label><br/>
          <label><input form="submitForm" type="checkbox" name="q[3][]" value="4">Все перечисленные ответы </label><br/>
        </div>

        <div class="question">
          <p>Вопрос 4: Расшифруйте аббревиатуру КПН?</p>
          <label><input form="submitForm" type="checkbox" name="q[4][]" value="1">Календарно-производственный норматив</label><br/>
          <label><input form="submitForm" type="checkbox" name="q[4][]" value="2">Карта производственного нормирования</label><br/>
          <label><input form="submitForm" type="checkbox" name="q[4][]" value="3">Календарно-плановый норматив</label><br/>
          <label><input form="submitForm" type="checkbox" name="q[4][]" value="4">Карта производственной номенклатуры</label><br/>
        </div>

        <div class="question">
          <p>Вопрос 5: Что необходимо сделать  для того чтобы приостановить позицию изготовления?</p>
          <label><input form="submitForm" type="checkbox" name="q[5][]" value="1">В производственной программе на панели инструментов сверху нажать кнопку «Дополнительные операции» и  выбрать операцию «Приостановить изготовление»</label><br/>
          <label><input form="submitForm" type="checkbox" name="q[5][]" value="2">В производственной программе в столбце ПЗ/Состояние сменить состояние позиции изготовления на «Аннулирован» </label><br/>
          <label><input form="submitForm" type="checkbox" name="q[5][]" value="3">В производственной программе на панели инструментов сверху нажать кнопку «Дополнительные операции» и  выбрать операцию «Перевести в состояние Формируется»</label><br/>
          <label><input form="submitForm" type="checkbox" name="q[5][]" value="4">В производственной программе выполнить операцию «Рассчитать ПП для выделенных ПИ»</label><br/>
        </div>

        <div class="question">
          <p>Вопрос 6: Как в «Анализе производственной программы» увидеть потребителя данной позиции?</p>
          <label><input form="submitForm" type="checkbox" name="q[6][]" value="1">На панели инструментов нажать на кнопку «Дополнительные операции» и выбрать «Обеспечивающие позиции»</label><br/>
          <label><input form="submitForm" type="checkbox" name="q[6][]" value="2">Снизу на вкладке «Потребляет»</label><br/>
          <label><input form="submitForm" type="checkbox" name="q[6][]" value="3">Снизу на вкладке «Обеспечивает»</label><br/>
          <label><input form="submitForm" type="checkbox" name="q[6][]" value="4">На панели инструментов нажать на кнопку «Дополнительные операции» и выбрать «Потребляющие позиции»</label><br/>
        </div>

        <div class="question">
          <p>Вопрос 7: Какую фильтрацию необходимо настроить в отчете «Производственная программа» для того чтобы отобразить позиции изготовления, у которых плановая дата запуск меньше 01.03.2023?</p>
          <label><input form="submitForm" type="checkbox" name="q[7][]" value="1">На вкладке «Плановые даты» в атрибуте «Выпуск» выбрать оператор «меньше» и указать значение</label><br/>
          <label><input form="submitForm" type="checkbox" name="q[7][]" value="2">На вкладке «Плановые даты» в атрибуте «Директивное исполнение» выбрать оператор «больше» и указать значение</label><br/>
          <label><input form="submitForm" type="checkbox" name="q[7][]" value="3">На вкладке «Плановые даты» в атрибуте «Запуск» выбрать оператор «меньше» и указать значение</label><br/>
          <label><input form="submitForm" type="checkbox" name="q[7][]" value="4">На вкладке «Исполнение» в атрибуте «До готовности» указать значение</label><br/>
        </div>

        <div class="question">
          <p>Вопрос 8: Какую настройку фильтрации в «Производственной программе» нужно сделать, чтобы увидеть отображение позиций по определенному карте запуска?</p>
          <label><input form="submitForm" type="checkbox" name="q[8][]" value="1">В окне фильтрации на вкладке Учетные параметры указать значение в поле УПЕ</label><br/>
          <label><input form="submitForm" type="checkbox" name="q[8][]" value="2">В окне фильтрации на вкладке Учетные параметры указать значение в поле ГПЗ</label><br/>
          <label><input form="submitForm" type="checkbox" name="q[8][]" value="3">При помощи автофильтра в столбец ШПЗ/Код выбрать требуемое значение</label><br/>
          <label><input form="submitForm" type="checkbox" name="q[8][]" value="4">При помощи автофильтра в столбец ГПЗ/Код выбрать требуемое значение</label><br/>
        </div>

        <div class="question">
          <p>Вопрос 9: В отчете «Производственная программа» в столбце Количество/Факт записывается значение если:</p>
          <label><input form="submitForm" type="checkbox" name="q[9][]" value="1">По данной ПИ выполнены все производственные работы</label><br/>
          <label><input form="submitForm" type="checkbox" name="q[9][]" value="2">Позиция изготовления сдана на склад</label><br/>
          <label><input form="submitForm" type="checkbox" name="q[9][]" value="3">Ответственный исполнитель проставил значение в ПК в столбце «Факт»</label><br/>
          <label><input form="submitForm" type="checkbox" name="q[9][]" value="4">На панели инструментов сверху нажать кнопку «Дополнительные операции» и выбрать операцию «Пометить как обязательную позицию плана»</label><br/>
        </div>

        <div class="question">
          <p>Вопрос 10: Как настроить область итогов «Сумма» по столбцу с числовым значением?</p>
          <label><input form="submitForm" type="checkbox" name="q[10][]" value="1">Вызвать контекстное меню и выбрать пункт «Область группировки», далее в контекстном меню выбрать значение «Сумма»</label><br/>
          <label><input form="submitForm" type="checkbox" name="q[10][]" value="2">Вызвать контекстное меню и выбрать пункт Область итогов, далее в появившейся строке снизу под нужным столбцом вызвать повторно контекстное меню и выбрать значение Количество</label><br/>
          <label><input form="submitForm" type="checkbox" name="q[10][]" value="3">Все перечисленные ответы</label><br/>
          <label><input form="submitForm" type="checkbox" name="q[10][]" value="4">Вызвать контекстное меню и выбрать пункт Область итогов, далее в появившейся строке снизу под нужным столбцом вызвать повторно контекстное меню и выбрать значение Сумма</label><br/>
        </div><br/>
<?php
require_once ('form.php');
?>

    </main>
</body>
</html>