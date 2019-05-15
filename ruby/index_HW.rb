require_relative "func.rb"
include Methods

#1
text1 = 'Hello'
text2 = 'World'
puts ( "#{text1} #{text2}" )
#2
puts ( text1[0] )
puts ( text1[1] )
puts ( text1[text1.length - 1] )
#3
puts ( Methods.checkNumberValue(-5) )
puts ( Methods.checkNumberValue(0) )
puts ( Methods.checkNumberValue(-3) )
puts ( Methods.checkNumberValue(2) )
#4
puts ( Methods.checkHourQuarter(2) )
puts ( Methods.checkHourQuarter(16) )
puts ( Methods.checkHourQuarter(35) )
puts ( Methods.checkHourQuarter(59) )
#5
puts ( '2014 - ' + Methods.checkLeapYear(2014).to_s )
puts ( '2000 - ' + Methods.checkLeapYear(2000).to_s )
puts ( '1990 - ' + Methods.checkLeapYear(1990).to_s )
#6
puts ( Methods.sumArrayNumers(385934) )
puts ( Methods.sumArrayNumers(385935) )

#7
# Перетворити рядок 'var_test_text' в 'varTestText'
puts (" ")
first_string = CapText.new('var_test_text')
puts (first_string.sumStrArr)
#8
#Є масив $a = [342, 55, 33, 123, 66, 63, 9]; - потрібно вивести на екран тільки ті числа в яких є '3'
puts (" ")
a = [342, 55, 33, 123, 66, 63, 9, 't']
puts (checkNumber3(a))
#9
#Є масив $a = [342, 55, 33, 123, 66, 63, 9]; - треба порахувати – скільки всього трійок зустрічається в масиві
puts (" ")
puts ( checkAllNumber3(a) )
#10
#Треба перетворити на наступний рядок 'АВЫФ ждло'
puts (" ")
second_string = ReversArrOfStrings.new('ФЫВА олдж')
puts (second_string.reversString)

#11
#Знайти три найменших значення, три найбільших і три середніх.
puts (" ")
temperatures = [33, 15, 17, 20, 23, 23, 28, 40, 21, 19, 31, 18, 30, 31, 28, 23, 19, 28, 27, 30, 39, 17, 17, 20, 19, 23, 28, 30, 34, 28]
new_temperatures = temperatures.uniq.sort
#puts (new_temperatures)
puts (new_temperatures[0..2])
puts (new_temperatures[-3..-1])
puts (new_temperatures[(new_temperatures.count/2 - 1)..(new_temperatures.count/2 + 1)])
#12
#Зробіть так, щоб елемент повторився в масиві таку кількість разів яка відповідає його числу. Приклад: [1, 3, 2, 4] перетворюється в [1, 3, 3, 3, 2, 2, 4, 4, 4, 4].
puts (" ")
bus_number = [1, 3, 2, 4]
puts (repeatNumbers(bus_number))